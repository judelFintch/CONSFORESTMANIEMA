@extends('layouts.app')

@section('title', 'Page introuvable – ConsForest Maniema')
@section('description', 'La page que vous recherchez n\'existe pas ou a été déplacée.')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-950 via-green-950 to-blue-950 flex items-center justify-center px-4 pt-20">
    <div class="text-center max-w-lg">

        {{-- Decorative Tree --}}
        <div class="text-9xl mb-6 opacity-80">🌳</div>

        {{-- Error Code --}}
        <div class="text-8xl font-bold text-white/20 mb-2 leading-none">404</div>

        <h1 class="text-3xl font-bold text-white mb-4">
            Page Introuvable
        </h1>
        <p class="text-white/70 text-lg leading-relaxed mb-10">
            La page que vous recherchez n'existe pas, a été déplacée
            ou l'URL est incorrecte. Comme une forêt — il faut parfois emprunter un autre sentier.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" class="btn-forest px-8 py-3.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Retour à l'accueil
            </a>
            <a href="{{ route('contact') }}" class="btn-outline px-8 py-3.5">
                Nous contacter
            </a>
        </div>

        {{-- Quick Links --}}
        <div class="mt-12 grid grid-cols-2 sm:grid-cols-4 gap-3">
            @foreach([
                ['route' => 'about', 'label' => 'À propos'],
                ['route' => 'conservation', 'label' => 'Conservation'],
                ['route' => 'carbon', 'label' => 'Crédit Carbone'],
                ['route' => 'news.index', 'label' => 'Actualités'],
            ] as $link)
            <a href="{{ route($link['route']) }}"
               class="bg-white/10 hover:bg-white/20 border border-white/20 text-white/80 hover:text-white text-sm font-medium px-3 py-2.5 rounded-xl transition-all duration-200 text-center">
                {{ $link['label'] }}
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
