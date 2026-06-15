@extends('layouts.app')

@section('title', $article->title . ' – Actualités ConsForest Maniema')
@section('description', $article->excerpt)

@section('content')

{{-- Page Header with Article Meta --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4 flex-wrap">
            <a href="{{ route('home') }}">Accueil</a><span>/</span>
            <a href="{{ route('news.index') }}">Actualités</a><span>/</span>
            <span class="text-white font-medium line-clamp-1">{{ Str::limit($article->title, 40) }}</span>
        </nav>

        <div class="flex items-center gap-3 mb-4">
            <span class="text-xs bg-white/20 text-white font-medium px-3 py-1 rounded-full">
                {{ $article->category_label }}
            </span>
            <span class="text-white/60 text-sm">{{ $article->formatted_date }}</span>
        </div>

        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
            {{ $article->title }}
        </h1>

        <p class="text-white/80 text-lg max-w-2xl">{{ $article->excerpt }}</p>

        <div class="mt-5 flex items-center gap-2 text-white/60 text-sm">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
            </svg>
            <span>{{ $article->author }}</span>
        </div>
    </div>
</div>


{{-- Article Body --}}
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Image de couverture --}}
        @if($article->cover_image)
        <div class="rounded-3xl overflow-hidden mb-10 shadow-xl">
            <img src="{{ Storage::url($article->cover_image) }}"
                 alt="{{ $article->cover_image_alt ?: $article->title }}"
                 class="w-full h-72 md:h-96 object-cover">
        </div>
        @endif

        @php
            $videoHtml = null;
            if ($article->embed_url) {
                $videoHtml = '<div class="rounded-2xl overflow-hidden shadow-xl mb-10 aspect-video bg-black">
                    <iframe src="' . e($article->embed_url) . '" class="w-full h-full" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>';
            } elseif ($article->video_file) {
                $videoHtml = '<div class="rounded-2xl overflow-hidden shadow-xl mb-10 bg-black">
                    <video controls class="w-full max-h-[520px]" preload="metadata">
                        <source src="' . e(Storage::url($article->video_file)) . '">
                        Votre navigateur ne supporte pas la lecture vidéo.
                    </video>
                </div>';
            }
        @endphp

        {{-- Vidéo position TOP --}}
        @if($videoHtml && ($article->video_position ?? 'top') === 'top')
            {!! $videoHtml !!}
        @endif

        {{-- Contenu --}}
        <div class="prose prose-lg prose-gray max-w-none
                    prose-headings:font-bold prose-headings:text-gray-900
                    prose-p:text-gray-600 prose-p:leading-relaxed
                    prose-a:text-green-700 prose-a:no-underline hover:prose-a:underline
                    prose-strong:text-gray-900
                    prose-ul:text-gray-600 prose-ol:text-gray-600
                    prose-blockquote:border-green-500 prose-blockquote:text-gray-700 prose-blockquote:italic">
            {!! $article->content !!}
        </div>

        {{-- Vidéo position BOTTOM --}}
        @if($videoHtml && ($article->video_position ?? 'top') === 'bottom')
            <div class="mt-10">{!! $videoHtml !!}</div>
        @endif

        {{-- Tags --}}
        @if($article->tags)
        <div class="flex flex-wrap gap-2 mt-8">
            @foreach($article->tags as $tag)
            <span class="text-xs bg-green-50 text-green-700 border border-green-100 px-3 py-1 rounded-full font-medium">
                {{ $tag }}
            </span>
            @endforeach
        </div>
        @endif

        {{-- Galerie --}}
        @if($article->gallery && count($article->gallery) > 0)
        <div class="mt-10">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Galerie</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                @foreach($article->gallery as $img)
                <a href="{{ Storage::url($img) }}" target="_blank"
                    class="block rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group">
                    <img src="{{ Storage::url($img) }}" alt="Photo galerie"
                        class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">
                </a>
                @endforeach
            </div>
        </div>
        @endif

        {{-- Share --}}
        <div class="mt-12 pt-8 border-t border-gray-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div>
                <p class="font-semibold text-gray-900 text-sm mb-1">Partager cet article</p>
                <div class="flex gap-2">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                       target="_blank" rel="noopener"
                       class="w-9 h-9 bg-blue-600 text-white rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                    </a>
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(url()->current()) }}"
                       target="_blank" rel="noopener"
                       class="w-9 h-9 bg-sky-500 text-white rounded-lg flex items-center justify-center hover:bg-sky-600 transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . url()->current()) }}"
                       target="_blank" rel="noopener"
                       class="w-9 h-9 bg-green-500 text-white rounded-lg flex items-center justify-center hover:bg-green-600 transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                </div>
            </div>
            <a href="{{ route('news.index') }}" class="text-gray-500 hover:text-green-700 text-sm font-medium flex items-center gap-2 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Retour aux actualités
            </a>
        </div>
    </div>
</section>


{{-- Articles liés --}}
@if($related->count() > 0)
<section class="py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Articles Similaires</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($related as $rel)
            <article class="news-card card-hover bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm">
                <a href="{{ route('news.show', $rel->slug) }}" class="block">
                    <div class="h-40 overflow-hidden bg-gray-100">
                        @if($rel->cover_image)
                            <img src="{{ asset('storage/' . $rel->cover_image) }}" alt="{{ $rel->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-green-800 to-blue-900 flex items-center justify-center">
                                <span class="text-4xl">🌳</span>
                            </div>
                        @endif
                    </div>
                </a>
                <div class="p-4">
                    <p class="text-xs text-gray-400 mb-1">{{ $rel->formatted_date }}</p>
                    <h3 class="font-bold text-gray-900 text-sm line-clamp-2 mb-2">{{ $rel->title }}</h3>
                    <a href="{{ route('news.show', $rel->slug) }}" class="text-green-700 text-xs font-medium hover:text-green-800">Lire →</a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
