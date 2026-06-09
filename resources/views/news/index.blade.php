@extends('layouts.app')

@section('title', 'Actualités – Dernières Nouvelles ConsForest Maniema')
@section('description', 'Suivez toutes les actualités du projet ConsForest Maniema : avancement du programme, publications scientifiques, événements, partenariats et nouvelles de la forêt du Maniema en RDC.')
@section('keywords', 'actualités ConsForest, news conservation forêt RDC, actualité Maniema, programme carbone Congo nouvelles')

@section('content')

{{-- Page Header --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4">
            <a href="{{ route('home') }}">Accueil</a><span>/</span>
            <span class="text-white font-medium">Actualités</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Actualités</h1>
        <p class="text-white/80 text-xl max-w-2xl">
            Restez informés des avancées du programme ConsForest Maniema.
        </p>
    </div>
</div>


{{-- Articles --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if($articles->count() > 0)
            {{-- Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($articles as $article)
                <article class="news-card card-hover bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm animate-fade-up">
                    <a href="{{ route('news.show', $article->slug) }}" class="block">
                        <div class="h-52 overflow-hidden bg-gray-100">
                            @if($article->cover_image)
                                <img src="{{ asset('storage/' . $article->cover_image) }}"
                                     alt="{{ $article->title }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-green-800 to-blue-900 flex items-center justify-center">
                                    <span class="text-6xl">🌳</span>
                                </div>
                            @endif
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs bg-green-50 text-green-700 font-medium px-3 py-1 rounded-full">
                                {{ $article->category_label }}
                            </span>
                            <span class="text-xs text-gray-400">{{ $article->formatted_date }}</span>
                        </div>
                        <h2 class="font-bold text-gray-900 text-lg mb-2 line-clamp-2">
                            <a href="{{ route('news.show', $article->slug) }}" class="hover:text-green-700 transition-colors">
                                {{ $article->title }}
                            </a>
                        </h2>
                        <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 mb-4">{{ $article->excerpt }}</p>
                        <div class="flex items-center justify-between pt-3 border-t border-gray-100">
                            <span class="text-xs text-gray-400 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                                {{ $article->author }}
                            </span>
                            <a href="{{ route('news.show', $article->slug) }}"
                               class="text-green-700 font-semibold text-sm hover:text-green-800 flex items-center gap-1 transition-colors">
                                Lire
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-12 flex justify-center">
                {{ $articles->links() }}
            </div>

        @else
            {{-- Empty State --}}
            <div class="text-center py-20">
                <div class="text-8xl mb-6">📰</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Aucun article pour le moment</h3>
                <p class="text-gray-500 mb-8 max-w-md mx-auto">
                    Les actualités du programme ConsForest Maniema seront publiées très prochainement.
                    Revenez bientôt !
                </p>
                <a href="{{ route('home') }}" class="btn-forest">Retour à l'accueil</a>
            </div>
        @endif
    </div>
</section>

@endsection
