<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    private array $categories = [
        'actualite'    => 'Actualité',
        'conservation' => 'Conservation',
        'carbone'      => 'Crédit Carbone',
        'communaute'   => 'Communautés',
        'partenariat'  => 'Partenariat',
        'evenement'    => 'Événement',
    ];

    private array $statuses = [
        'draft'     => 'Brouillon',
        'published' => 'Publié',
        'scheduled' => 'Programmé',
        'archived'  => 'Archivé',
    ];

    public function index(Request $request)
    {
        $query = Article::latest();

        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(fn ($q) => $q
                ->where('title', 'like', "%{$s}%")
                ->orWhere('author', 'like', "%{$s}%")
                ->orWhere('excerpt', 'like', "%{$s}%")
            );
        }
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->boolean('featured')) {
            $query->where('featured', true);
        }

        $articles = $query->paginate(15)->withQueryString();

        $stats = [
            'total'     => Article::count(),
            'published' => Article::where('status', 'published')->count(),
            'draft'     => Article::where('status', 'draft')->count(),
            'scheduled' => Article::where('status', 'scheduled')->count(),
            'featured'  => Article::where('featured', true)->count(),
        ];

        return view('admin.articles.index', [
            'articles'   => $articles,
            'categories' => $this->categories,
            'statuses'   => $this->statuses,
            'stats'      => $stats,
        ]);
    }

    public function create()
    {
        return view('admin.articles.form', [
            'article'    => new Article,
            'categories' => $this->categories,
            'statuses'   => $this->statuses,
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['slug']         = $this->uniqueSlug($data['title']);
        $data['tags']         = $this->parseTags($request->input('tags_raw', ''));
        $data['published_at'] = $this->resolvePublishedAt(null, $data['status'], $request);
        $data['scheduled_at'] = $data['status'] === 'scheduled'
            ? $request->input('scheduled_at')
            : null;

        $cover = $this->storeCoverImage($request);
        if ($cover) {
            $data['cover_image'] = $cover;
        }
        $data['gallery'] = $this->storeGallery($request);

        $video = $this->storeVideoFile($request);
        if ($video) {
            $data['video_file'] = $video;
        }

        Article::create($data);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article créé avec succès.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.form', [
            'article'    => $article,
            'categories' => $this->categories,
            'statuses'   => $this->statuses,
        ]);
    }

    public function update(Request $request, Article $article)
    {
        $data = $this->validated($request);
        $data['tags']         = $this->parseTags($request->input('tags_raw', ''));
        $data['published_at'] = $this->resolvePublishedAt($article->published_at, $data['status'], $request);
        $data['scheduled_at'] = $data['status'] === 'scheduled'
            ? $request->input('scheduled_at')
            : null;

        // Image principale
        if ($request->hasFile('cover_image')) {
            if ($article->cover_image) {
                Storage::disk('public')->delete($article->cover_image);
            }
            $data['cover_image'] = $this->storeCoverImage($request);
        }

        // Galerie : retrait des images cochées
        $gallery = $article->gallery ?? [];
        if ($request->filled('remove_gallery')) {
            foreach ($request->input('remove_gallery', []) as $path) {
                Storage::disk('public')->delete($path);
                $gallery = array_values(array_filter($gallery, fn ($p) => $p !== $path));
            }
        }
        // Galerie : ajout de nouvelles images
        if ($request->hasFile('gallery_new')) {
            $gallery = array_merge($gallery, $this->storeGallery($request));
        }
        $data['gallery'] = $gallery ?: null;

        // Vidéo uploadée
        if ($request->hasFile('video_file')) {
            if ($article->video_file) {
                Storage::disk('public')->delete($article->video_file);
            }
            $data['video_file'] = $this->storeVideoFile($request);
        }
        // Suppression manuelle de la vidéo uploadée
        if ($request->boolean('remove_video_file') && $article->video_file) {
            Storage::disk('public')->delete($article->video_file);
            $data['video_file'] = null;
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article mis à jour.');
    }

    public function destroy(Article $article)
    {
        if ($article->cover_image) {
            Storage::disk('public')->delete($article->cover_image);
        }
        if ($article->video_file) {
            Storage::disk('public')->delete($article->video_file);
        }
        foreach ($article->gallery ?? [] as $path) {
            Storage::disk('public')->delete($path);
        }
        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article supprimé.');
    }

    public function togglePublish(Article $article)
    {
        $newStatus = $article->status === 'published' ? 'draft' : 'published';
        $article->update([
            'status'       => $newStatus,
            'published_at' => $newStatus === 'published'
                ? ($article->published_at ?? now())
                : $article->published_at,
        ]);

        $msg = $newStatus === 'published' ? 'Article publié.' : 'Article repassé en brouillon.';
        return back()->with('success', $msg);
    }

    // ── Helpers ───────────────────────────────────────────────

    private function validated(Request $request): array
    {
        $validated = $request->validate([
            'title'            => ['required', 'string', 'max:255'],
            'category'         => ['required', 'in:' . implode(',', array_keys($this->categories))],
            'excerpt'          => ['required', 'string', 'max:500'],
            'content'          => ['required', 'string'],
            'author'           => ['required', 'string', 'max:255'],
            'cover_image'      => ['nullable', 'image', 'max:4096'],
            'cover_image_alt'  => ['nullable', 'string', 'max:125'],
            'gallery_new.*'    => ['nullable', 'image', 'max:4096'],
            'status'           => ['required', 'in:' . implode(',', array_keys($this->statuses))],
            'featured'         => ['boolean'],
            'scheduled_at'     => ['nullable', 'date', 'after:now', 'required_if:status,scheduled'],
            'meta_title'       => ['nullable', 'string', 'max:70'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'video_url'        => ['nullable', 'url', 'max:500'],
            'video_file'       => ['nullable', 'file', 'mimetypes:video/mp4,video/webm,video/quicktime,video/x-msvideo', 'max:204800'],
            'video_position'   => ['nullable', 'in:top,bottom'],
        ], [
            'title.required'       => 'Le titre est obligatoire.',
            'category.required'    => 'Choisissez une catégorie.',
            'excerpt.required'     => "L'extrait est obligatoire.",
            'content.required'     => 'Le contenu est obligatoire.',
            'author.required'      => "L'auteur est obligatoire.",
            'cover_image.image'    => 'Le fichier doit être une image (JPG, PNG, WEBP).',
            'cover_image.max'      => "L'image ne doit pas dépasser 4 Mo.",
            'gallery_new.*.image'  => 'Chaque fichier de galerie doit être une image.',
            'gallery_new.*.max'    => 'Chaque image de galerie ne doit pas dépasser 4 Mo.',
            'video_file.mimetypes' => 'Le fichier vidéo doit être au format MP4, WebM, MOV ou AVI.',
            'video_file.max'       => 'La vidéo ne doit pas dépasser 200 Mo.',
            'scheduled_at.required_if' => 'Indiquez une date de publication programmée.',
            'scheduled_at.after'   => 'La date programmée doit être dans le futur.',
            'meta_title.max'       => 'Le méta-titre ne doit pas dépasser 70 caractères.',
            'meta_description.max' => 'La méta-description ne doit pas dépasser 160 caractères.',
        ]);

        // Les fichiers sont gérés séparément
        unset($validated['cover_image'], $validated['gallery_new'], $validated['video_file']);

        return $validated;
    }

    private function storeVideoFile(Request $request): ?string
    {
        if (! $request->hasFile('video_file')) {
            return null;
        }
        return $request->file('video_file')->store('articles/videos', 'public');
    }

    private function storeCoverImage(Request $request): ?string
    {
        if (! $request->hasFile('cover_image')) {
            return null;
        }
        return $request->file('cover_image')->store('articles', 'public');
    }

    private function storeGallery(Request $request): array
    {
        $paths = [];
        if ($request->hasFile('gallery_new')) {
            foreach ($request->file('gallery_new') as $file) {
                $paths[] = $file->store('articles/gallery', 'public');
            }
        }
        return $paths;
    }

    private function parseTags(string $raw): array
    {
        return array_values(array_filter(
            array_map('trim', explode(',', $raw))
        ));
    }

    private function uniqueSlug(string $title): string
    {
        $slug  = Str::slug($title);
        $count = Article::where('slug', 'like', "{$slug}%")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

    private function resolvePublishedAt(mixed $existing, string $status, Request $request): mixed
    {
        if ($status === 'published') {
            return $existing ?? now();
        }
        if ($status === 'scheduled' && $request->filled('scheduled_at')) {
            return $request->input('scheduled_at');
        }
        return $existing;
    }
}
