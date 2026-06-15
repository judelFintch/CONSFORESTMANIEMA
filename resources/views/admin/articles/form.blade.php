@extends('admin.layout')

@section('title', $article->exists ? 'Modifier l\'article' : 'Nouvel article')
@section('header', $article->exists ? 'Modifier l\'article' : 'Nouvel article')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Breadcrumb --}}
    <nav class="flex items-center gap-2 text-sm text-gray-500 mb-6">
        <a href="{{ route('admin.articles.index') }}" class="hover:text-green-700 transition-colors">Actualités</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-900 font-medium">
            {{ $article->exists ? 'Modifier' : 'Nouveau' }}
        </span>
    </nav>

    <form method="POST"
          action="{{ $article->exists ? route('admin.articles.update', $article) : route('admin.articles.store') }}"
          enctype="multipart/form-data"
          class="space-y-6">
        @csrf
        @if($article->exists) @method('PUT') @endif

        {{-- Validation errors --}}
        @if($errors->any())
            <div class="px-4 py-3 bg-red-50 border border-red-200 rounded-xl text-sm text-red-700">
                <p class="font-semibold mb-1">Veuillez corriger les erreurs suivantes :</p>
                <ul class="list-disc list-inside space-y-0.5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Titre & Catégorie --}}
        <div class="bg-white rounded-xl border border-gray-200 p-5 space-y-4">
            <h2 class="text-sm font-semibold text-gray-900 pb-2 border-b border-gray-100">Informations générales</h2>

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1.5">
                    Titre <span class="text-red-500">*</span>
                </label>
                <input type="text" id="title" name="title"
                       value="{{ old('title', $article->title) }}"
                       placeholder="Titre de l'article"
                       class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg
                              focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                              @error('title') border-red-400 @enderror">
            </div>

            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Catégorie <span class="text-red-500">*</span>
                    </label>
                    <select id="category" name="category"
                            class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg bg-white
                                   focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                                   @error('category') border-red-400 @enderror">
                        @foreach($categories as $key => $label)
                            <option value="{{ $key }}" @selected(old('category', $article->category) === $key)>
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="author" class="block text-sm font-medium text-gray-700 mb-1.5">Auteur</label>
                    <input type="text" id="author" name="author"
                           value="{{ old('author', $article->author ?? 'Équipe ConsForest Maniema') }}"
                           class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg
                                  focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                </div>
            </div>

            <div>
                <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-1.5">
                    Résumé <span class="text-red-500">*</span>
                    <span class="text-gray-400 font-normal ml-1">(max 500 caractères)</span>
                </label>
                <textarea id="excerpt" name="excerpt" rows="3"
                          placeholder="Courte description affichée dans la liste…"
                          class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg resize-y
                                 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                                 @error('excerpt') border-red-400 @enderror">{{ old('excerpt', $article->excerpt) }}</textarea>
            </div>
        </div>

        {{-- Contenu --}}
        <div class="bg-white rounded-xl border border-gray-200 p-5 space-y-4">
            <h2 class="text-sm font-semibold text-gray-900 pb-2 border-b border-gray-100">Contenu</h2>
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1.5">
                    Corps de l'article <span class="text-red-500">*</span>
                </label>
                <textarea id="content" name="content" rows="16"
                          placeholder="Rédigez le contenu de l'article…"
                          class="w-full px-3.5 py-2.5 text-sm border border-gray-300 rounded-lg resize-y font-mono
                                 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                                 @error('content') border-red-400 @enderror">{{ old('content', $article->content) }}</textarea>
                <p class="text-xs text-gray-400 mt-1.5">HTML basique accepté (&lt;p&gt;, &lt;strong&gt;, &lt;em&gt;, &lt;ul&gt;, &lt;li&gt;, &lt;h2&gt;…)</p>
            </div>
        </div>

        {{-- Image de couverture --}}
        <div class="bg-white rounded-xl border border-gray-200 p-5 space-y-4">
            <h2 class="text-sm font-semibold text-gray-900 pb-2 border-b border-gray-100">Image de couverture</h2>

            @if($article->cover_image)
                <div class="flex items-center gap-4">
                    <img src="{{ Storage::url($article->cover_image) }}"
                         alt="Couverture actuelle"
                         class="w-24 h-24 object-cover rounded-lg border border-gray-200">
                    <p class="text-xs text-gray-500">Image actuelle — sélectionnez-en une nouvelle pour la remplacer.</p>
                </div>
            @endif

            <div x-data="imagePreview()" class="space-y-3">
                <label class="block">
                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer
                                hover:border-green-400 hover:bg-green-50/30 transition-colors"
                         @dragover.prevent @drop.prevent="handleDrop($event)">
                        <svg class="w-8 h-8 text-gray-300 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <p class="text-sm text-gray-500">Glissez une image ou <span class="text-green-600 font-medium">parcourez</span></p>
                        <p class="text-xs text-gray-400 mt-1">JPG, PNG, WebP — max 4 Mo</p>
                        <input type="file" name="cover_image" accept="image/*" class="hidden"
                               @change="previewImage($event)">
                    </div>
                </label>
                <template x-if="preview">
                    <div class="flex items-center gap-3">
                        <img :src="preview" class="w-20 h-20 object-cover rounded-lg border border-gray-200">
                        <p class="text-xs text-gray-500" x-text="fileName"></p>
                    </div>
                </template>
            </div>
        </div>

        {{-- Publication --}}
        <div class="bg-white rounded-xl border border-gray-200 p-5">
            <h2 class="text-sm font-semibold text-gray-900 pb-2 border-b border-gray-100 mb-4">Publication</h2>
            <label class="flex items-center gap-3 cursor-pointer">
                <div class="relative" x-data="{ checked: {{ old('published', $article->published ?? true) ? 'true' : 'false' }} }">
                    <input type="hidden" name="published" value="0">
                    <input type="checkbox" name="published" value="1"
                           x-model="checked"
                           {{ old('published', $article->published ?? true) ? 'checked' : '' }}
                           class="sr-only">
                    <div class="w-10 h-5 rounded-full transition-colors"
                         :class="checked ? 'bg-green-500' : 'bg-gray-200'"
                         @click="checked = !checked; $el.previousElementSibling.previousElementSibling.checked = checked"></div>
                    <div class="absolute top-0.5 left-0.5 w-4 h-4 bg-white rounded-full shadow transition-transform"
                         :class="checked ? 'translate-x-5' : 'translate-x-0'"></div>
                </div>
                <span class="text-sm text-gray-700">Publier immédiatement</span>
            </label>
            <p class="text-xs text-gray-400 mt-2 ml-[3.25rem]">Si désactivé, l'article sera sauvegardé comme brouillon.</p>
        </div>

        {{-- Submit --}}
        <div class="flex items-center justify-between gap-3 pb-4">
            <a href="{{ route('admin.articles.index') }}"
               class="px-5 py-2.5 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                Annuler
            </a>
            <button type="submit"
                    class="px-6 py-2.5 bg-[#1a2e1a] hover:bg-green-800 text-white text-sm font-semibold
                           rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                {{ $article->exists ? 'Enregistrer les modifications' : 'Créer l\'article' }}
            </button>
        </div>

    </form>
</div>

@push('head')
<script>
function imagePreview() {
    return {
        preview: null,
        fileName: '',
        previewImage(e) {
            const file = e.target.files[0];
            if (!file) return;
            this.fileName = file.name;
            const reader = new FileReader();
            reader.onload = (ev) => this.preview = ev.target.result;
            reader.readAsDataURL(file);
        },
        handleDrop(e) {
            const file = e.dataTransfer.files[0];
            if (!file || !file.type.startsWith('image/')) return;
            // inject into file input
            const input = this.$el.querySelector('input[type=file]');
            const dt = new DataTransfer();
            dt.items.add(file);
            input.files = dt.files;
            this.fileName = file.name;
            const reader = new FileReader();
            reader.onload = (ev) => this.preview = ev.target.result;
            reader.readAsDataURL(file);
        }
    }
}
</script>
@endpush
@endsection
