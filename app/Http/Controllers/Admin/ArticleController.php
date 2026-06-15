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
        'conservation' => 'Conservation',
        'carbone'      => 'Crédit Carbone',
        'communaute'   => 'Communautés',
        'partenariat'  => 'Partenariat',
        'evenement'    => 'Événement',
        'actualite'    => 'Actualité',
    ];

    public function index(Request $request)
    {
        $query = Article::latest();

        if ($request->filled('search')) {
            $query->where('title', 'like', '%'.$request->search.'%');
        }
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        if ($request->filled('status')) {
            $query->where('published', $request->status === 'published');
        }

        $articles = $query->paginate(15)->withQueryString();

        return view('admin.articles.index', [
            'articles'   => $articles,
            'categories' => $this->categories,
        ]);
    }

    public function create()
    {
        return view('admin.articles.form', [
            'article'    => new Article,
            'categories' => $this->categories,
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        $data['cover_image'] = $this->handleImage($request);
        $data['slug'] = $this->uniqueSlug($data['title']);
        $data['published_at'] = $data['published'] ? now() : null;

        Article::create($data);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article créé avec succès.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.form', [
            'article'    => $article,
            'categories' => $this->categories,
        ]);
    }

    public function update(Request $request, Article $article)
    {
        $data = $this->validated($request, $article);

        if ($request->hasFile('cover_image')) {
            if ($article->cover_image) {
                Storage::disk('public')->delete($article->cover_image);
            }
            $data['cover_image'] = $this->handleImage($request);
        }

        if ($data['published'] && ! $article->published_at) {
            $data['published_at'] = now();
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
        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article supprimé.');
    }

    public function togglePublish(Article $article)
    {
        $article->update([
            'published'    => ! $article->published,
            'published_at' => ! $article->published ? now() : $article->published_at,
        ]);

        return back()->with('success', $article->published ? 'Article publié.' : 'Article dépublié.');
    }

    // ── Private helpers ────────────────────────────────────────

    private function validated(Request $request, ?Article $article = null): array
    {
        return $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'category'    => ['required', 'in:'.implode(',', array_keys($this->categories))],
            'excerpt'     => ['required', 'string', 'max:500'],
            'content'     => ['required', 'string'],
            'author'      => ['required', 'string', 'max:255'],
            'published'   => ['boolean'],
            'cover_image' => $article ? ['nullable', 'image', 'max:4096'] : ['nullable', 'image', 'max:4096'],
        ], [
            'title.required'   => 'Le titre est obligatoire.',
            'content.required' => 'Le contenu est obligatoire.',
            'excerpt.required' => 'Le résumé est obligatoire.',
            'cover_image.image' => 'Le fichier doit être une image.',
            'cover_image.max'   => 'L\'image ne doit pas dépasser 4 Mo.',
        ]);
    }

    private function handleImage(Request $request): ?string
    {
        if (! $request->hasFile('cover_image')) {
            return null;
        }
        return $request->file('cover_image')->store('articles', 'public');
    }

    private function uniqueSlug(string $title): string
    {
        $slug = Str::slug($title);
        $count = Article::where('slug', 'like', $slug.'%')->count();
        return $count ? $slug.'-'.$count : $slug;
    }
}
