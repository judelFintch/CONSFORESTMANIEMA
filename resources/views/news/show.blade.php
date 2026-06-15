@extends('layouts.app')

@section('title', $article->title . ' – Actualités ConsForest Maniema')
@section('description', $article->excerpt)

@section('content')

{{-- ══ HERO ══ --}}
<div class="page-header pt-32 pb-20"
     @if($article->cover_image)
     style="background-image: linear-gradient(to bottom, rgba(3,15,33,0.82) 0%, rgba(6,26,12,0.78) 100%), url('{{ Storage::url($article->cover_image) }}'); background-size: cover; background-position: center;"
     @endif
>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-6 flex-wrap">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <a href="{{ route('news.index') }}">Actualités</a>
            <span>/</span>
            <span class="text-white/70 line-clamp-1">{{ Str::limit($article->title, 45) }}</span>
        </nav>

        {{-- Catégorie + date --}}
        <div class="flex flex-wrap items-center gap-3 mb-5">
            <span class="text-xs font-semibold bg-green-500/25 text-green-300 border border-green-500/30 px-3 py-1 rounded-full uppercase tracking-wider">
                {{ $article->category_label }}
            </span>
            <span class="text-white/50 text-sm">{{ $article->formatted_date }}</span>
            @if($article->reading_time)
            <span class="text-white/40 text-xs flex items-center gap-1">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{ $article->reading_time_text }} de lecture
            </span>
            @endif
        </div>

        {{-- Titre --}}
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-5 leading-tight tracking-tight">
            {{ $article->title }}
        </h1>

        {{-- Extrait --}}
        <p class="text-white/75 text-lg max-w-3xl leading-relaxed mb-6">{{ $article->excerpt }}</p>

        {{-- Auteur --}}
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-green-600 flex items-center justify-center text-white text-sm font-bold shrink-0">
                {{ strtoupper(mb_substr($article->author, 0, 1)) }}
            </div>
            <div>
                <p class="text-white font-medium text-sm">{{ $article->author }}</p>
                @if($article->published_at)
                <p class="text-white/50 text-xs">Publié le {{ $article->published_at->translatedFormat('d F Y') }}</p>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- ══ CORPS DE L'ARTICLE ══ --}}
<section class="bg-white py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 xl:gap-16">

            {{-- ── Contenu principal ── --}}
            <article class="lg:col-span-8 min-w-0">

                @php
                    $videoBlock = null;
                    if ($article->embed_url) {
                        $videoBlock = 'embed';
                    } elseif ($article->video_file) {
                        $videoBlock = 'file';
                    }
                    $videoPos = $article->video_position ?? 'top';
                @endphp

                {{-- Vidéo TOP --}}
                @if($videoBlock && $videoPos === 'top')
                <div class="mb-10">
                    @include('news._video', ['article' => $article, 'type' => $videoBlock])
                </div>
                @endif

                {{-- Contenu riche --}}
                @php
                    $isHtml = $article->content && $article->content !== strip_tags($article->content);
                @endphp
                <div class="prose prose-lg prose-gray max-w-none
                            prose-headings:font-bold prose-headings:text-gray-900 prose-headings:leading-tight
                            prose-h2:text-2xl prose-h2:mt-10 prose-h2:mb-4 prose-h2:border-b prose-h2:border-gray-100 prose-h2:pb-3
                            prose-h3:text-xl prose-h3:mt-8 prose-h3:mb-3
                            prose-p:text-gray-600 prose-p:leading-[1.85] prose-p:mb-5
                            prose-a:text-green-700 prose-a:font-medium prose-a:no-underline hover:prose-a:underline
                            prose-strong:text-gray-900 prose-strong:font-semibold
                            prose-ul:text-gray-600 prose-ol:text-gray-600
                            prose-li:leading-relaxed prose-li:mb-1
                            prose-blockquote:border-l-4 prose-blockquote:border-green-500 prose-blockquote:bg-green-50
                            prose-blockquote:py-3 prose-blockquote:px-5 prose-blockquote:rounded-r-lg
                            prose-blockquote:text-gray-700 prose-blockquote:not-italic prose-blockquote:font-medium">
                    @if($isHtml)
                        {!! $article->content !!}
                    @else
                        @foreach(array_filter(array_map('trim', preg_split('/\n{2,}/', $article->content))) as $para)
                            <p>{{ $para }}</p>
                        @endforeach
                    @endif
                </div>

                {{-- Vidéo BOTTOM --}}
                @if($videoBlock && $videoPos === 'bottom')
                <div class="mt-10">
                    @include('news._video', ['article' => $article, 'type' => $videoBlock])
                </div>
                @endif

                {{-- Tags --}}
                @if($article->tags && count($article->tags) > 0)
                <div class="mt-10 pt-8 border-t border-gray-100">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Tags</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($article->tags as $tag)
                        <span class="text-sm bg-gray-50 text-gray-600 border border-gray-200 px-3 py-1 rounded-full hover:bg-green-50 hover:text-green-700 hover:border-green-200 transition-colors cursor-default">
                            #{{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Galerie --}}
                @if($article->gallery && count($article->gallery) > 0)
                <div class="mt-10" x-data="{ open: false, src: '' }">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">Galerie photos</p>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 sm:gap-3">
                        @foreach($article->gallery as $img)
                        <button type="button"
                            @click="src = '{{ Storage::url($img) }}'; open = true"
                            class="block rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow group aspect-[4/3]">
                            <img src="{{ Storage::url($img) }}" alt="Photo"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </button>
                        @endforeach
                    </div>

                    {{-- Lightbox --}}
                    <div x-show="open" x-cloak
                        class="fixed inset-0 z-50 bg-black/95 flex items-center justify-center p-4"
                        @click.self="open = false"
                        @keydown.escape.window="open = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <img :src="src" class="max-h-[90vh] max-w-[90vw] object-contain rounded-lg shadow-2xl">
                        <button @click="open = false"
                            class="absolute top-4 right-4 w-10 h-10 bg-white/10 hover:bg-white/20 text-white rounded-full flex items-center justify-center text-xl transition-colors">
                            ×
                        </button>
                    </div>
                </div>
                @endif

                {{-- Partage mobile --}}
                <div class="mt-10 pt-8 border-t border-gray-100 lg:hidden">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Partager</p>
                    <div class="flex gap-2">
                        @include('news._share', ['url' => url()->current(), 'title' => $article->title])
                    </div>
                </div>

                {{-- Retour --}}
                <div class="mt-8">
                    <a href="{{ route('news.index') }}"
                        class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-green-700 transition-colors group">
                        <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Retour aux actualités
                    </a>
                </div>
            </article>

            {{-- ── Sidebar ── --}}
            <aside class="hidden lg:block lg:col-span-4">
                <div class="sticky top-24 space-y-6">

                    {{-- Auteur --}}
                    <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="w-12 h-12 rounded-full bg-green-700 flex items-center justify-center text-white font-bold text-lg shrink-0">
                                {{ strtoupper(mb_substr($article->author, 0, 1)) }}
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900 text-sm">{{ $article->author }}</p>
                                <p class="text-gray-500 text-xs mt-0.5">ConsForest Maniema</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 text-xs text-center mt-4">
                            <div class="bg-white rounded-lg p-2.5 border border-gray-100">
                                <p class="font-bold text-gray-800 text-base">{{ $article->reading_time_text }}</p>
                                <p class="text-gray-400 mt-0.5">de lecture</p>
                            </div>
                            <div class="bg-white rounded-lg p-2.5 border border-gray-100">
                                <p class="font-bold text-gray-800 text-base">{{ number_format($article->views_count) }}</p>
                                <p class="text-gray-400 mt-0.5">vues</p>
                            </div>
                        </div>
                    </div>

                    {{-- Partage --}}
                    <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Partager</p>
                        <div class="flex flex-col gap-2">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                               target="_blank" rel="noopener"
                               class="flex items-center gap-3 px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-xl transition-colors">
                                <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                                Facebook
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(url()->current()) }}"
                               target="_blank" rel="noopener"
                               class="flex items-center gap-3 px-4 py-2.5 bg-sky-500 hover:bg-sky-600 text-white text-sm font-medium rounded-xl transition-colors">
                                <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                                Twitter / X
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($article->title . ' – ' . url()->current()) }}"
                               target="_blank" rel="noopener"
                               class="flex items-center gap-3 px-4 py-2.5 bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-xl transition-colors">
                                <svg class="w-4 h-4 fill-current shrink-0" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                WhatsApp
                            </a>
                            <button onclick="navigator.clipboard.writeText('{{ url()->current() }}').then(() => this.textContent = 'Lien copié ✓')"
                                class="flex items-center gap-3 px-4 py-2.5 bg-white hover:bg-gray-100 text-gray-700 text-sm font-medium rounded-xl border border-gray-200 transition-colors">
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                                Copier le lien
                            </button>
                        </div>
                    </div>

                    {{-- Tags sidebar --}}
                    @if($article->tags && count($article->tags) > 0)
                    <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100">
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Tags</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach($article->tags as $tag)
                            <span class="text-xs bg-white text-gray-600 border border-gray-200 px-2.5 py-1 rounded-full">
                                #{{ $tag }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                </div>
            </aside>
        </div>
    </div>
</section>


{{-- ══ ARTICLES SIMILAIRES ══ --}}
@if($related->count() > 0)
<section class="py-14 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Articles similaires</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($related as $rel)
            <article class="news-card bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                <a href="{{ route('news.show', $rel->slug) }}" class="block">
                    <div class="h-48 overflow-hidden bg-gray-100 relative">
                        @if($rel->cover_image)
                            <img src="{{ Storage::url($rel->cover_image) }}" alt="{{ $rel->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-green-800 to-blue-900 flex items-center justify-center">
                                <svg class="w-12 h-12 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM9 12h6M9 16h4"/>
                                </svg>
                            </div>
                        @endif
                        <div class="absolute top-3 left-3">
                            <span class="text-[10px] font-semibold bg-white/90 text-green-800 px-2 py-0.5 rounded-full">
                                {{ $rel->category_label }}
                            </span>
                        </div>
                    </div>
                </a>
                <div class="p-5">
                    <p class="text-xs text-gray-400 mb-2 flex items-center gap-1.5">
                        {{ $rel->formatted_date }}
                        @if($rel->reading_time)
                        <span class="text-gray-300">·</span>
                        <span>{{ $rel->reading_time_text }}</span>
                        @endif
                    </p>
                    <h3 class="font-bold text-gray-900 leading-snug mb-3 line-clamp-2 group-hover:text-green-700 transition-colors">
                        <a href="{{ route('news.show', $rel->slug) }}">{{ $rel->title }}</a>
                    </h3>
                    <p class="text-gray-500 text-sm line-clamp-2 mb-4">{{ $rel->excerpt }}</p>
                    <a href="{{ route('news.show', $rel->slug) }}"
                        class="inline-flex items-center gap-1.5 text-green-700 text-sm font-semibold hover:gap-2.5 transition-all">
                        Lire l'article
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
