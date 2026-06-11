@extends('layouts.app')

@section('title', 'Galerie – Photos du Terrain ConsForest Maniema')
@section('description', 'Galerie photos du projet ConsForest Maniema : forêts du Maniema, activités de terrain, reboisement, sensibilisation communautaire et événements officiels en RDC.')
@section('keywords', 'galerie photos ConsForest, forêt Maniema, reboisement Congo, conservation terrain RDC, photos forêt tropicale')

@section('content')

{{-- ══════════════════════════════════════════
     PAGE HEADER
══════════════════════════════════════════ --}}
<div class="page-header pt-32 pb-24" style="min-height: 380px;">

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
            <span class="text-white font-medium">Galerie</span>
        </nav>

        <span class="section-badge white mb-5">Terrain & nature</span>

        <h1 style="font-family: var(--font-display);"
            class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight">
            Galerie <span style="color: #f0b429;">Photos</span>
        </h1>
        <p class="text-white/65 text-lg max-w-xl leading-relaxed">
            Immergez-vous dans les forêts du Maniema et découvrez les activités
            de terrain du programme ConsForest.
        </p>
    </div>
</div>


{{-- ══════════════════════════════════════════
     GALERIE
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg" x-data="gallery()">

    {{-- Filtres --}}
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-10 reveal">
        <div class="flex flex-wrap gap-2 justify-center">
            @foreach(['Tous', 'Forêts', 'Terrain', 'Communautés', 'Reboisement', 'Événements'] as $cat)
            <button class="px-4 py-1.5 rounded-full text-xs font-semibold border transition-all duration-200
                {{ $loop->first
                    ? 'bg-forest-700 text-white border-forest-700'
                    : 'bg-white text-gray-500 border-gray-200 hover:border-forest-400 hover:text-forest-600 hover:bg-green-50' }}">
                {{ $cat }}
            </button>
            @endforeach
        </div>
    </div>

    {{-- Photos du projet (locales) --}}
    @php
    $localPhotos = [];
    foreach(range(1,5) as $n) {
        if(file_exists(public_path("images/{$n}.jpeg"))) {
            $cats = ['Terrain','Communautés','Terrain','Forêts','Reboisement'];
            $caps = ['Équipe terrain Maniema','Session communautaire','Activités de conservation','Forêt du Maniema','Reboisement en cours'];
            $localPhotos[] = ['src' => asset("images/{$n}.jpeg"), 'caption' => $caps[$n-1], 'cat' => $cats[$n-1]];
        }
    }
    if(file_exists(public_path('images/hero-foret.jpg'))) {
        array_unshift($localPhotos, ['src' => asset('images/hero-foret.jpg'), 'caption' => 'Canopée forestière – Maniema', 'cat' => 'Forêts']);
    }
    @endphp

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        @if(count($localPhotos) > 0)
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 reveal">
            @foreach($localPhotos as $i => $photo)
            <div class="gallery-item relative rounded-2xl overflow-hidden cursor-pointer
                        {{ $i === 0 ? 'col-span-2 row-span-2' : '' }}"
                 style="height: {{ $i === 0 ? '420px' : '200px' }};"
                 @click="show('{{ $photo['src'] }}', '{{ $photo['caption'] }}')">
                <img src="{{ $photo['src'] }}"
                     alt="{{ $photo['caption'] }}"
                     class="w-full h-full object-cover transition-transform duration-700 hover:scale-105"
                     loading="lazy">
                <div class="gallery-overlay">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <p class="text-white text-sm font-medium">{{ $photo['caption'] }}</p>
                        <span class="text-xs font-medium px-2 py-0.5 rounded-full mt-1 inline-block"
                              style="background: rgba(240,180,41,0.25); color: #f0b429;">
                            {{ $photo['cat'] }}
                        </span>
                    </div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-11 h-11 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-16 reveal">
            <div class="w-20 h-20 rounded-2xl bg-gray-100 flex items-center justify-center mx-auto mb-5">
                <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                </svg>
            </div>
            <h3 class="font-bold text-gray-900 text-lg mb-2">Galerie en cours de constitution</h3>
            <p class="text-gray-400 text-sm max-w-sm mx-auto mb-6">
                Les photos du programme ConsForest Maniema seront ajoutées prochainement.
            </p>
            <a href="{{ route('contact') }}" class="btn-gold text-sm">
                Partager des photos
            </a>
        </div>
        @endif

    </div>


    {{-- Lightbox --}}
    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 bg-black/95 flex items-center justify-center p-4"
         @click.self="close()"
         @keydown.escape.window="close()">

        <div class="relative max-w-4xl max-h-[90vh] w-full">
            <button @click="close()"
                    class="absolute -top-10 right-0 text-white/60 hover:text-white transition-colors">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <img :src="src" :alt="caption"
                 class="max-h-[80vh] mx-auto rounded-xl object-contain w-full">
            <p x-text="caption" class="text-center text-white/70 mt-4 text-sm"></p>
        </div>
    </div>

</section>


{{-- ══════════════════════════════════════════
     CTA
══════════════════════════════════════════ --}}
<section class="py-14 bg-gray-50 border-t border-gray-100 cf-net-bg">
    <div class="max-w-2xl mx-auto px-4 text-center reveal">
        <h2 class="section-title mb-3">
            Des photos à <span class="gold">partager</span> ?
        </h2>
        <p class="text-gray-400 text-sm mb-6 leading-relaxed">
            Partenaires et collaborateurs peuvent soumettre leurs photos pour enrichir la galerie ConsForest Maniema.
        </p>
        <a href="{{ route('contact') }}" class="btn-gold">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Nous contacter
        </a>
    </div>
</section>

@endsection
