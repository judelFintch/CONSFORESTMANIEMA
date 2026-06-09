@extends('layouts.app')

@section('title', 'Galerie – Photos du Terrain ConsForest Maniema')
@section('description', 'Galerie photos du projet ConsForest Maniema : forêts du Maniema, activités de terrain, reboisement, sensibilisation communautaire et événements officiels en RDC.')
@section('keywords', 'galerie photos ConsForest, forêt Maniema, reboisement Congo, conservation terrain RDC, photos forêt tropicale')

@section('content')

{{-- Page Header --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4">
            <a href="{{ route('home') }}">Accueil</a><span>/</span>
            <span class="text-white font-medium">Galerie</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Galerie Photos</h1>
        <p class="text-white/80 text-xl max-w-2xl">
            Immergez-vous dans les forêts du Maniema et découvrez les activités du programme ConsForest.
        </p>
    </div>
</div>


{{-- Gallery --}}
<section class="py-20 bg-white" x-data="gallery()">

    {{-- Filter Tabs --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
        <div class="flex flex-wrap gap-3 justify-center">
            @foreach(['Tous', 'Forêts', 'Reboisement', 'Terrain', 'Communautés', 'Événements'] as $cat)
            <button class="px-5 py-2 rounded-full text-sm font-medium border border-gray-200 text-gray-600 hover:bg-green-50 hover:border-green-300 hover:text-green-700 transition-all duration-200
                {{ $loop->first ? 'bg-green-700 text-white border-green-700 hover:bg-green-800 hover:text-white' : '' }}">
                {{ $cat }}
            </button>
            @endforeach
        </div>
    </div>

    {{-- Grid --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
        $photos = [
            ['src' => 'https://images.unsplash.com/photo-1448375240586-882707db888b?w=600&q=80', 'caption' => 'Forêt dense du Bassin du Congo', 'cat' => 'Forêts', 'span' => 'col-span-2 row-span-2'],
            ['src' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=400&q=80', 'caption' => 'Canopée tropicale vue de dessous', 'cat' => 'Forêts', 'span' => ''],
            ['src' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=400&q=80', 'caption' => 'Chemin en forêt équatoriale', 'cat' => 'Forêts', 'span' => ''],
            ['src' => 'https://images.unsplash.com/photo-1567706438869-66d2b5e7b9e3?w=400&q=80', 'caption' => 'Activité de reboisement communautaire', 'cat' => 'Reboisement', 'span' => ''],
            ['src' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=400&q=80', 'caption' => 'Pépinière d\'espèces indigènes', 'cat' => 'Reboisement', 'span' => ''],
            ['src' => 'https://images.unsplash.com/photo-1497491704085-44fe2a91b5e0?w=600&q=80', 'caption' => 'Surveillance de terrain par l\'équipe', 'cat' => 'Terrain', 'span' => 'col-span-2'],
            ['src' => 'https://images.unsplash.com/photo-1489493512598-d08130f49bea?w=400&q=80', 'caption' => 'Rencontre avec les communautés locales', 'cat' => 'Communautés', 'span' => ''],
            ['src' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=400&q=80', 'caption' => 'Session de sensibilisation', 'cat' => 'Communautés', 'span' => ''],
            ['src' => 'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=400&q=80', 'caption' => 'Faune forestière du Maniema', 'cat' => 'Forêts', 'span' => ''],
            ['src' => 'https://images.unsplash.com/photo-1504701954957-2010ec3bcec1?w=600&q=80', 'caption' => 'Vue aérienne de la forêt', 'cat' => 'Forêts', 'span' => 'col-span-2'],
            ['src' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&q=80', 'caption' => 'Réunion avec les autorités locales', 'cat' => 'Événements', 'span' => ''],
            ['src' => 'https://images.unsplash.com/photo-1530685932526-48ec92998eaa?w=400&q=80', 'caption' => 'Enfants sensibilisés à l\'environnement', 'cat' => 'Communautés', 'span' => ''],
        ];
        @endphp

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 auto-rows-48 gap-4">
            @foreach($photos as $photo)
            <div class="gallery-item relative rounded-2xl overflow-hidden cursor-pointer {{ $photo['span'] }}"
                 @click="openLightbox('{{ $photo['src'] }}', '{{ $photo['caption'] }}')">
                <img src="{{ $photo['src'] }}"
                     alt="{{ $photo['caption'] }}"
                     class="w-full h-full object-cover"
                     loading="lazy">
                <div class="gallery-overlay">
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <p class="text-white text-sm font-medium">{{ $photo['caption'] }}</p>
                        <span class="text-white/70 text-xs">{{ $photo['cat'] }}</span>
                    </div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    {{-- Lightbox --}}
    <div x-show="lightboxOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 bg-black/95 flex items-center justify-center p-4"
         @click.self="closeLightbox()"
         @keydown.escape.window="closeLightbox()">

        <div class="relative max-w-5xl max-h-[90vh] w-full">
            <button @click="closeLightbox()"
                    class="absolute -top-10 right-0 text-white/70 hover:text-white transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <img :src="currentImage" :alt="currentCaption" class="max-h-[80vh] mx-auto rounded-xl object-contain">
            <p x-text="currentCaption" class="text-center text-white/80 mt-4 text-sm"></p>
        </div>
    </div>
</section>


{{-- CTA --}}
<section class="py-14 bg-gray-50 border-t border-gray-100">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-3">Vous avez des photos à partager ?</h2>
        <p class="text-gray-600 mb-6">Partenaires et collaborateurs du projet peuvent soumettre leurs photos pour enrichir la galerie.</p>
        <a href="{{ route('contact') }}" class="btn-forest">Nous contacter</a>
    </div>
</section>

@endsection
