@extends('layouts.app')

@section('title', 'Actualités – Dernières Nouvelles ConsForest Maniema')
@section('description', 'Suivez toutes les actualités du projet ConsForest Maniema : avancement du programme, publications scientifiques, événements, partenariats et nouvelles de la forêt du Maniema en RDC.')
@section('keywords', 'actualités ConsForest, news conservation forêt RDC, actualité Maniema, programme carbone Congo nouvelles')

@section('content')

{{-- ══════════════════════════════════════════
     PAGE HEADER
══════════════════════════════════════════ --}}
<div class="page-header pt-32 pb-24" style="min-height: 360px;">

    @if(file_exists(public_path('images/hero-foret.jpg')))
    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="hero-forest-anim w-full h-full">
            <img src="{{ asset('images/hero-foret.jpg') }}" alt="Forêt Maniema"
                 class="w-full h-full object-cover opacity-20" loading="eager">
        </div>
    </div>
    @endif

    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-5">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <span class="text-white font-medium">Actualités</span>
        </nav>

        <span class="section-badge white mb-5">Programme & terrain</span>

        <h1 style="font-family: var(--font-display);"
            class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight">
            <span style="color: #f0b429;">Actualités</span>
        </h1>
        <p class="text-white/65 text-lg max-w-xl leading-relaxed">
            Restez informés des avancées du programme ConsForest Maniema —
            terrain, partenariats, certifications et impact communautaire.
        </p>
    </div>
</div>


{{-- ══════════════════════════════════════════
     ARTICLES
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        @if($articles->count() > 0)

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 reveal">
            @foreach($articles as $i => $article)
            <article class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition-shadow duration-300 flex flex-col">

                <a href="{{ route('news.show', $article->slug) }}" class="block">
                    <div class="h-48 overflow-hidden bg-gray-100 relative">
                        @if($article->cover_image)
                        <img src="{{ asset('storage/' . $article->cover_image) }}"
                             alt="{{ $article->title }}"
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-105"
                             loading="lazy">
                        @else
                        <div class="w-full h-full flex items-center justify-center"
                             style="background: linear-gradient(135deg, #030f21 0%, #061a0c 100%);">
                            <svg class="w-12 h-12 text-forest-700/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                      d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>
                            </svg>
                        </div>
                        @endif
                        {{-- Category badge --}}
                        <div class="absolute top-3 left-3">
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-lg text-white"
                                  style="background: rgba(22,163,74,0.85); backdrop-filter: blur(4px);">
                                {{ $article->category_label }}
                            </span>
                        </div>
                    </div>
                </a>

                <div class="p-5 flex flex-col flex-1">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs text-gray-400">{{ $article->formatted_date }}</span>
                    </div>
                    <h2 class="font-bold text-gray-900 text-sm leading-snug mb-2 line-clamp-2 flex-shrink-0">
                        <a href="{{ route('news.show', $article->slug) }}"
                           class="hover:text-forest-700 transition-colors">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="text-gray-400 text-xs leading-relaxed line-clamp-3 flex-1 mb-4">
                        {{ $article->excerpt }}
                    </p>
                    <div class="flex items-center justify-between pt-3 border-t border-gray-100">
                        <span class="text-xs text-gray-400 flex items-center gap-1.5">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                            {{ $article->author }}
                        </span>
                        <a href="{{ route('news.show', $article->slug) }}"
                           class="text-xs font-semibold text-forest-700 hover:text-forest-800 flex items-center gap-1 transition-colors">
                            Lire
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

        {{-- État vide --}}
        <div class="text-center py-20 reveal">
            <div class="w-20 h-20 rounded-2xl bg-gray-50 border border-gray-100 flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                </svg>
            </div>
            <h3 class="font-bold text-gray-900 text-xl mb-3">Aucun article pour le moment</h3>
            <p class="text-gray-400 text-sm max-w-sm mx-auto mb-8 leading-relaxed">
                Les actualités du programme ConsForest Maniema seront publiées prochainement.
                Inscrivez-vous à la newsletter pour être notifié.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="{{ route('home') }}" class="btn-gold text-sm">
                    Retour à l'accueil
                </a>
                <a href="{{ route('contact') }}"
                   class="btn-ghost-white text-sm"
                   style="color: #374151; border-color: #e5e7eb; background: transparent;">
                    Nous contacter
                </a>
            </div>
        </div>

        @endif

    </div>
</section>

@endsection
