@extends('admin.layout')

@section('title', $article->exists ? 'Modifier – '.$article->title : 'Nouvel article')
@section('header', $article->exists ? 'Modifier l\'article' : 'Nouvel article')

@push('styles')
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<style>
.ql-container { font-size: 15px; font-family: inherit; }
.ql-editor    { min-height: 380px; line-height: 1.75; }
.ql-toolbar   { border-radius: 0.5rem 0.5rem 0 0; background:#f9fafb; border-color:#d1d5db !important; }
.ql-container { border-radius: 0 0 0.5rem 0.5rem; border-color:#d1d5db !important; }
.ql-editor.ql-blank::before { color:#9ca3af; font-style:normal; }
</style>
@endpush

@section('content')
<form
    action="{{ $article->exists ? route('admin.articles.update', $article) : route('admin.articles.store') }}"
    method="POST"
    enctype="multipart/form-data"
    x-data="articleForm()"
    x-init="init()"
>
    @csrf
    @if($article->exists) @method('PUT') @endif

    {{-- Breadcrumb --}}
    <div class="flex items-center gap-2 text-sm text-gray-500 mb-5">
        <a href="{{ route('admin.articles.index') }}" class="hover:text-green-700 transition-colors">Actualités</a>
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-800 font-medium">
            {{ $article->exists ? Str::limit($article->title, 50) : 'Nouvel article' }}
        </span>
    </div>

    {{-- Validation errors --}}
    @if($errors->any())
    <div class="mb-5 p-4 bg-red-50 border border-red-200 rounded-xl">
        <div class="flex items-center gap-2 text-red-800 font-medium text-sm mb-2">
            <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
            </svg>
            {{ $errors->count() }} erreur(s) à corriger
        </div>
        <ul class="space-y-0.5 text-sm text-red-700 list-disc list-inside">
            @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
        </ul>
    </div>
    @endif

    {{-- Titre + Slug --}}
    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-5 mb-5">
        <input
            type="text"
            name="title"
            x-model="title"
            placeholder="Titre de l'article…"
            required
            class="w-full text-xl sm:text-2xl font-bold bg-transparent border-0 border-b-2 border-gray-200 focus:border-green-600 focus:ring-0 pb-2 placeholder-gray-300 transition-colors"
        >
        <div class="mt-2 flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-gray-500">
            <span class="text-gray-400">Slug :</span>
            <span x-text="slug || 'titre-de-l-article'" class="font-mono text-green-700 bg-green-50 px-2 py-0.5 rounded"></span>
            @if($article->exists && $article->status === 'published')
            <span class="text-gray-300">·</span>
            <a href="{{ route('news.show', $article->slug) }}" target="_blank" class="text-blue-500 hover:underline">Voir en ligne ↗</a>
            @endif
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

        {{-- ══ COLONNE GAUCHE (2/3) ══ --}}
        <div class="lg:col-span-2 space-y-5">

            {{-- Éditeur de contenu --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-4 py-3 border-b border-gray-100 flex items-center justify-between">
                    <h3 class="font-semibold text-gray-700 text-sm">Contenu <span class="text-red-500">*</span></h3>
                    <span x-show="readingTime" x-text="readingTime" class="text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full"></span>
                </div>
                <div id="quill-editor"></div>
                <input type="hidden" name="content" x-model="content">
            </div>

            {{-- Extrait --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <div class="flex items-center justify-between mb-2">
                    <label class="font-semibold text-gray-700 text-sm">Extrait <span class="text-red-500">*</span></label>
                    <span class="text-xs font-mono" :class="excerptLen > 450 ? 'text-orange-500 font-semibold' : 'text-gray-400'">
                        <span x-text="excerptLen"></span>/500
                    </span>
                </div>
                <textarea
                    name="excerpt"
                    rows="3"
                    maxlength="500"
                    required
                    placeholder="Résumé court affiché dans les listes, partages sociaux et résultats de recherche…"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent resize-none transition"
                    @input="excerptLen = $event.target.value.length"
                >{{ old('excerpt', $article->excerpt) }}</textarea>
                <p class="mt-1.5 text-xs text-gray-400">Idéalement entre 120 et 160 caractères pour un bon aperçu.</p>
            </div>

            {{-- Médias --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <h3 class="font-semibold text-gray-700 text-sm mb-4">Médias</h3>

                {{-- Image principale --}}
                <div class="mb-6">
                    <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Image de couverture</label>
                    <div
                        class="border-2 border-dashed rounded-xl p-4 text-center transition-colors"
                        :class="coverDrag ? 'border-green-500 bg-green-50 cursor-copy' : 'border-gray-200 hover:border-gray-300 cursor-pointer'"
                        @dragover.prevent="coverDrag = true"
                        @dragleave.prevent="coverDrag = false"
                        @drop.prevent="dropCover($event)"
                        @click="$refs.coverInput.click()"
                    >
                        <div x-show="coverSrc" class="relative mb-2" @click.stop>
                            <img :src="coverSrc" class="max-h-56 mx-auto rounded-lg object-cover shadow-sm" alt="Aperçu couverture">
                            <button type="button" @click="clearCover"
                                class="absolute top-2 right-2 w-7 h-7 bg-red-500 hover:bg-red-600 text-white rounded-full flex items-center justify-center font-bold text-sm transition">
                                ×
                            </button>
                        </div>
                        <div x-show="!coverSrc">
                            <svg class="mx-auto h-10 w-10 text-gray-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-sm text-gray-500">Glissez une image ici ou <span class="text-green-600 font-medium">cliquez pour parcourir</span></p>
                            <p class="text-xs text-gray-400 mt-1">JPG, PNG, WEBP — max 4 Mo</p>
                        </div>
                        <input type="file" name="cover_image" accept="image/*" class="sr-only" x-ref="coverInput" @change="previewCover($event)">
                    </div>
                    <input
                        type="text"
                        name="cover_image_alt"
                        maxlength="125"
                        placeholder="Texte alternatif (accessibilité & SEO) — ex: Forêt dense de Maniema au lever du jour"
                        class="mt-2 w-full border border-gray-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                        value="{{ old('cover_image_alt', $article->cover_image_alt) }}"
                    >
                </div>

                {{-- Galerie --}}
                <div>
                    <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Galerie d'images</label>

                    @if($article->exists && !empty($article->gallery))
                    <div class="grid grid-cols-3 sm:grid-cols-4 gap-2 mb-2">
                        @foreach($article->gallery as $img)
                        <div class="relative group" x-data="{ rm: false }">
                            <img src="{{ Storage::url($img) }}" class="w-full h-24 object-cover rounded-lg shadow-sm" alt="">
                            <label class="absolute inset-0 rounded-lg cursor-pointer">
                                <input type="checkbox" name="remove_gallery[]" value="{{ $img }}" class="sr-only" x-model="rm">
                                <div class="absolute inset-0 rounded-lg transition-all"
                                    :class="rm ? 'bg-red-500/50 ring-2 ring-red-500' : 'bg-transparent group-hover:bg-black/15'">
                                </div>
                                <div class="absolute top-1.5 right-1.5 w-5 h-5 rounded-full border-2 border-white flex items-center justify-center transition-colors"
                                    :class="rm ? 'bg-red-500' : 'bg-white/70'">
                                    <svg x-show="rm" class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </div>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <p class="text-xs text-gray-400 mb-3">Cliquez sur une image pour la marquer à supprimer lors de la mise à jour.</p>
                    @endif

                    <div
                        class="border-2 border-dashed border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-green-400 transition-colors"
                        @click="$refs.galleryInput.click()"
                    >
                        <svg class="mx-auto h-8 w-8 text-gray-300 mb-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"/>
                        </svg>
                        <p class="text-sm text-gray-500">Ajouter des images à la galerie</p>
                        <p class="text-xs text-gray-400">Sélection multiple possible</p>
                        <input type="file" name="gallery_new[]" multiple accept="image/*" class="sr-only"
                            x-ref="galleryInput" @change="previewGallery($event)">
                    </div>

                    <div x-show="galleryPreviews.length > 0" class="grid grid-cols-3 sm:grid-cols-4 gap-2 mt-3">
                        <template x-for="(src, i) in galleryPreviews" :key="i">
                            <div class="relative">
                                <img :src="src" class="w-full h-24 object-cover rounded-lg shadow-sm" alt="">
                                <button type="button" @click="galleryPreviews.splice(i, 1)"
                                    class="absolute top-1 right-1 w-5 h-5 bg-red-500 text-white rounded-full text-xs flex items-center justify-center font-bold">×</button>
                                <span class="absolute bottom-1 left-1 bg-green-500 text-white text-[10px] px-1 py-0.5 rounded font-medium">nouveau</span>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            {{-- SEO --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <div class="flex items-center gap-2 mb-4">
                    <h3 class="font-semibold text-gray-700 text-sm">Référencement (SEO)</h3>
                    <span class="text-xs bg-blue-50 text-blue-600 px-2 py-0.5 rounded-full font-medium">Optionnel</span>
                </div>
                <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 mb-4">
                    <p class="text-[10px] text-gray-400 uppercase tracking-wider mb-2">Aperçu dans Google</p>
                    <p class="text-blue-600 text-sm font-medium truncate" x-text="metaTitle || title || 'Titre de l\'article'"></p>
                    <p class="text-xs text-green-700 mt-0.5 truncate">
                        consforestmaniema.com › actualites › <span x-text="slug || 'titre-article'"></span>
                    </p>
                    <p class="text-xs text-gray-600 mt-1 line-clamp-2 leading-relaxed"
                        x-text="metaDesc || (document.querySelector('[name=excerpt]') ? document.querySelector('[name=excerpt]').value : '') || 'Description affichée dans les résultats de recherche…'">
                    </p>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between items-center mb-1.5">
                            <label class="text-sm font-medium text-gray-600">Méta-titre</label>
                            <span class="text-xs font-mono" :class="metaTitle.length > 60 ? 'text-orange-500 font-semibold' : metaTitle.length > 0 ? 'text-green-600' : 'text-gray-400'">
                                <span x-text="metaTitle.length"></span>/70
                            </span>
                        </div>
                        <input
                            type="text"
                            name="meta_title"
                            maxlength="70"
                            x-model="metaTitle"
                            placeholder="Vide = titre de l'article"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                            value="{{ old('meta_title', $article->meta_title) }}"
                        >
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1.5">
                            <label class="text-sm font-medium text-gray-600">Méta-description</label>
                            <span class="text-xs font-mono" :class="metaDesc.length > 145 ? 'text-orange-500 font-semibold' : metaDesc.length > 0 ? 'text-green-600' : 'text-gray-400'">
                                <span x-text="metaDesc.length"></span>/160
                            </span>
                        </div>
                        <textarea
                            name="meta_description"
                            maxlength="160"
                            rows="2"
                            x-model="metaDesc"
                            placeholder="Vide = extrait de l'article"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent transition resize-none"
                        >{{ old('meta_description', $article->meta_description) }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        {{-- ══ COLONNE DROITE (1/3) ══ --}}
        <div class="space-y-4">

            {{-- Publication --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-4 py-3 border-b border-gray-100">
                    <h3 class="font-semibold text-gray-700 text-sm">Publication</h3>
                </div>
                <div class="p-4 space-y-4">
                    {{-- Statut --}}
                    <div>
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">Statut</label>
                        <div class="space-y-1.5">
                            @foreach($statuses as $val => $label)
                            @php $dotColor = match($val) { 'published' => 'bg-green-500', 'scheduled' => 'bg-blue-500', 'archived' => 'bg-gray-400', default => 'bg-yellow-400' }; @endphp
                            @php $activeBg = match($val) { 'published' => 'bg-green-50 border-green-200', 'scheduled' => 'bg-blue-50 border-blue-200', 'archived' => 'bg-gray-50 border-gray-200', default => 'bg-yellow-50 border-yellow-200' }; @endphp
                            <label class="flex items-center gap-3 p-2.5 rounded-lg cursor-pointer transition-all border"
                                :class="status === '{{ $val }}' ? '{{ $activeBg }}' : 'border-transparent hover:bg-gray-50'"
                            >
                                <input type="radio" name="status" value="{{ $val }}"
                                    x-model="status"
                                    {{ old('status', $article->status ?? 'draft') === $val ? 'checked' : '' }}
                                    class="text-green-600 focus:ring-green-500">
                                <span class="text-sm flex-1" :class="status === '{{ $val }}' ? 'font-semibold text-gray-800' : 'text-gray-600'">{{ $label }}</span>
                                <span class="w-2 h-2 rounded-full shrink-0 {{ $dotColor }}"></span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Date programmée --}}
                    <div x-show="status === 'scheduled'" x-transition.opacity class="border-t border-gray-100 pt-3">
                        <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5 block">
                            Date de publication <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="datetime-local"
                            name="scheduled_at"
                            class="w-full border border-blue-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                            value="{{ old('scheduled_at', $article->scheduled_at?->format('Y-m-d\TH:i')) }}"
                        >
                    </div>

                    {{-- Info publié --}}
                    @if($article->published_at)
                    <div x-show="status === 'published'"
                        class="text-xs text-gray-600 bg-green-50 border border-green-100 p-2.5 rounded-lg leading-relaxed">
                        Publié le {{ $article->published_at->translatedFormat('d F Y \à H\hi') }}
                    </div>
                    @endif

                    {{-- Mis en avant --}}
                    <div class="flex items-center justify-between py-3 border-t border-gray-100">
                        <div>
                            <p class="text-sm font-medium text-gray-700">Mis en avant</p>
                            <p class="text-xs text-gray-400 mt-0.5">Affiché prioritairement sur le site</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="hidden" name="featured" value="0">
                            <input type="checkbox" name="featured" value="1" class="sr-only peer"
                                {{ old('featured', $article->featured) ? 'checked' : '' }}>
                            <div class="w-10 h-5 bg-gray-200 rounded-full peer
                                peer-checked:bg-green-600
                                after:content-[''] after:absolute after:top-0.5 after:left-0.5
                                after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all
                                peer-checked:after:translate-x-5">
                            </div>
                        </label>
                    </div>

                    {{-- Bouton submit --}}
                    <div class="border-t border-gray-100 pt-3 space-y-2">
                        <button type="submit"
                            class="w-full bg-green-700 hover:bg-green-800 active:bg-green-900 text-white rounded-lg py-2.5 text-sm font-semibold transition-colors flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $article->exists ? 'Mettre à jour' : 'Créer l\'article' }}
                        </button>
                        <a href="{{ route('admin.articles.index') }}"
                            class="block text-center text-sm text-gray-400 hover:text-gray-600 py-1 transition-colors">
                            Annuler
                        </a>
                    </div>
                </div>
            </div>

            {{-- Catégorie --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 block">
                    Catégorie <span class="text-red-500">*</span>
                </label>
                <div class="space-y-1">
                    @foreach($categories as $val => $label)
                    <label class="flex items-center gap-2.5 p-2 rounded-lg cursor-pointer transition-colors text-sm"
                        :class="category === '{{ $val }}' ? 'bg-green-50 text-green-800 font-semibold' : 'text-gray-600 hover:bg-gray-50'">
                        <input type="radio" name="category" value="{{ $val }}" x-model="category"
                            {{ old('category', $article->category ?? 'actualite') === $val ? 'checked' : '' }}
                            class="text-green-600 focus:ring-green-500">
                        {{ $label }}
                    </label>
                    @endforeach
                </div>
            </div>

            {{-- Tags --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 block">Tags</label>
                <div class="flex flex-wrap gap-1.5 mb-2" x-show="tags.length > 0">
                    <template x-for="(tag, i) in tags" :key="i">
                        <span class="inline-flex items-center gap-1 bg-green-100 text-green-800 text-xs px-2.5 py-1 rounded-full font-medium">
                            <span x-text="tag"></span>
                            <button type="button" @click="tags.splice(i, 1)"
                                class="text-green-500 hover:text-green-900 ml-0.5 leading-none text-sm">×</button>
                        </span>
                    </template>
                </div>
                <input
                    type="text"
                    placeholder="Saisir un tag puis Entrée ou ,"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                    @keydown.enter.prevent="addTag($event.target)"
                    @keydown[','].prevent="addTag($event.target)"
                >
                <input type="hidden" name="tags_raw" :value="tags.join(',')">
                <p class="text-xs text-gray-400 mt-1.5">Appuyez sur Entrée ou virgule pour valider chaque tag.</p>
            </div>

            {{-- Auteur --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 block">
                    Auteur <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    name="author"
                    required
                    maxlength="255"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent transition"
                    value="{{ old('author', $article->author ?? 'Équipe ConsForest Maniema') }}"
                >
            </div>

            {{-- Statistiques (édition uniquement) --}}
            @if($article->exists)
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                <label class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-3 block">Statistiques</label>
                <div class="space-y-2.5 text-sm divide-y divide-gray-50">
                    <div class="flex justify-between items-center py-1">
                        <span class="text-gray-500">Vues</span>
                        <span class="font-semibold text-gray-800">{{ number_format($article->views_count) }}</span>
                    </div>
                    <div class="flex justify-between items-center py-1">
                        <span class="text-gray-500">Lecture estimée</span>
                        <span class="font-semibold text-gray-800">{{ $article->reading_time_text }}</span>
                    </div>
                    <div class="flex justify-between items-center py-1">
                        <span class="text-gray-500">Créé le</span>
                        <span class="font-semibold text-gray-800">{{ $article->created_at->format('d/m/Y') }}</span>
                    </div>
                    @if($article->published_at)
                    <div class="flex justify-between items-center py-1">
                        <span class="text-gray-500">Publié le</span>
                        <span class="font-semibold text-gray-800">{{ $article->published_at->format('d/m/Y') }}</span>
                    </div>
                    @endif
                </div>
            </div>
            @endif

        </div>{{-- /colonne droite --}}
    </div>
</form>
@endsection

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script>
function articleForm() {
    return {
        title:       @json(old('title', $article->title ?? '')),
        slug:        @json($article->slug ?? ''),
        status:      @json(old('status', $article->status ?? 'draft')),
        category:    @json(old('category', $article->category ?? 'actualite')),
        tags:        @json(old('tags_raw') ? array_values(array_filter(array_map('trim', explode(',', old('tags_raw'))))) : ($article->tags ?? [])),
        content:     '',
        excerptLen:  {{ strlen(old('excerpt', $article->excerpt ?? '')) }},
        metaTitle:   @json(old('meta_title',       $article->meta_title       ?? '')),
        metaDesc:    @json(old('meta_description',  $article->meta_description ?? '')),
        coverSrc:    @json($article->cover_image ? Storage::url($article->cover_image) : null),
        coverDrag:   false,
        galleryPreviews: [],
        readingTime: '',

        init() {
            this.$watch('title', (val) => {
                this.slug = val
                    .toLowerCase()
                    .normalize('NFD').replace(/[̀-ͯ]/g, '')
                    .replace(/[^a-z0-9\s-]/g, '')
                    .trim()
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
            });

            const quill = new Quill('#quill-editor', {
                theme: 'snow',
                placeholder: 'Rédigez votre article ici…',
                modules: {
                    toolbar: [
                        [{ header: [2, 3, 4, false] }],
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote'],
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        [{ indent: '-1' }, { indent: '+1' }],
                        ['link'],
                        [{ align: [] }],
                        ['clean'],
                    ],
                },
            });

            const existing = {!! json_encode(old('content', $article->content ?? '')) !!};
            if (existing) {
                quill.root.innerHTML = existing;
                this.content = existing;
                this.calcReading(existing);
            }

            quill.on('text-change', () => {
                this.content = quill.root.innerHTML;
                this.calcReading(this.content);
            });
        },

        calcReading(html) {
            const words = html.replace(/<[^>]+>/g, '').trim().split(/\s+/).filter(w => w.length > 0).length;
            if (words < 5) { this.readingTime = ''; return; }
            const min = Math.max(1, Math.ceil(words / 200));
            this.readingTime = `~${min} min de lecture`;
        },

        previewCover(e) {
            const file = e.target.files[0];
            if (file) this.fileToUrl(file, url => this.coverSrc = url);
        },

        dropCover(e) {
            this.coverDrag = false;
            const file = e.dataTransfer.files[0];
            if (!file || !file.type.startsWith('image/')) return;
            const dt = new DataTransfer();
            dt.items.add(file);
            this.$refs.coverInput.files = dt.files;
            this.fileToUrl(file, url => this.coverSrc = url);
        },

        clearCover() {
            this.coverSrc = null;
            this.$refs.coverInput.value = '';
        },

        previewGallery(e) {
            Array.from(e.target.files).forEach(f => this.fileToUrl(f, url => this.galleryPreviews.push(url)));
        },

        addTag(input) {
            const val = input.value.replace(/,/g, '').trim();
            if (val && !this.tags.includes(val)) this.tags.push(val);
            input.value = '';
        },

        fileToUrl(file, cb) {
            const r = new FileReader();
            r.onload = e => cb(e.target.result);
            r.readAsDataURL(file);
        },
    };
}
</script>
@endpush
