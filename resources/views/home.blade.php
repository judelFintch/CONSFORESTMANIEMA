@extends('layouts.app')

@section('title', 'ConsForest Maniema – Conservation Forestière & Crédit Carbone en RDC')
@section('description', 'BFD SARL et New Motion protègent les forêts du Maniema et génèrent des crédits carbone certifiés REDD+ en République Démocratique du Congo.')
@section('keywords', 'ConsForest Maniema, conservation forêt RDC, crédit carbone Congo, BFD SARL, New Motion, REDD+, Maniema, Kindu')

@section('content')

{{-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ --}}
<section class="hero-section">

    {{-- ═══ Scène forêt animée – CSS/SVG pur ═══ --}}
    <div class="absolute inset-0 z-0 overflow-hidden cf-scene">

        {{-- Ciel nuit forêt --}}
        <div class="absolute inset-0 cf-sky"></div>

        {{-- Halo lumineux (lune sur canopée) --}}
        <div class="absolute inset-0 cf-glow"></div>

        {{-- ── Couche 1 : cimes lointaines ── --}}
        <svg class="cf-l1 absolute bottom-0 left-0 w-full" viewBox="0 0 1440 260" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,260 L0,180 C40,165 80,155 120,150 C160,145 200,148 240,140
                     C280,132 320,122 360,118 C400,114 440,118 480,112
                     C520,106 560,98  600,102 C640,106 680,112 720,105
                     C760,98  800,90  840,95  C880,100 920,105 960,98
                     C1000,91 1040,83 1080,88 C1120,93 1160,98 1200,92
                     C1240,86 1280,78 1320,83 C1360,88 1400,95 1440,90
                     L1440,260 Z" fill="#12422a"/>
        </svg>

        {{-- ── Couche 2 : arbres intermédiaires ── --}}
        <svg class="cf-l2 absolute bottom-0 left-0 w-full" viewBox="0 0 1440 340" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,340 L0,260 C30,245 60,238 90,228 C120,218 145,210 175,205
                     C205,200 230,205 258,195 C286,185 308,172 338,165
                     C368,158 395,162 422,152 C449,142 472,128 500,122
                     C528,116 555,122 582,112 C609,102 632,88  660,95
                     C688,102 712,115 740,105 C768,95  790,80  818,88
                     C846,96  868,110 896,100 C924,90  946,74  974,80
                     C1002,86 1026,98 1054,90 C1082,82 1104,68 1132,75
                     C1160,82 1184,96 1212,88 C1240,80 1262,66 1290,72
                     C1318,78 1342,92 1370,85 C1398,78 1425,70 1440,68
                     L1440,340 Z" fill="#092e1a"/>
        </svg>

        {{-- ── Nappes de brume ── --}}
        <div class="cf-mist cf-mist1"></div>
        <div class="cf-mist cf-mist2"></div>

        {{-- ── Couche 3 : avant-plan sombre ── --}}
        <svg class="cf-l3 absolute bottom-0 left-0 w-full" viewBox="0 0 1440 420" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,420 L0,340 C25,325 55,318 85,305 C115,292 138,282 165,290
                     C192,298 215,310 242,295 C269,280 285,260 312,248
                     C339,236 365,235 390,248 C415,261 435,275 462,260
                     C489,245 505,222 532,212 C559,202 585,208 610,195
                     C635,182 652,165 678,158 C704,151 730,158 756,145
                     C782,132 798,115 824,122 C850,129 872,145 898,132
                     C924,119 940,100 966,108 C992,116 1014,132 1040,120
                     C1066,108 1082,88  1108,96  C1134,104 1156,120 1182,108
                     C1208,96  1224,76  1250,84  C1276,92  1298,110 1324,98
                     C1350,86  1366,66  1392,72  C1412,77  1432,88  1440,85
                     L1440,420 Z" fill="#030b05"/>
        </svg>

        {{-- ── Lucioles ── --}}
        <div class="cf-ff cf-ff1"></div>
        <div class="cf-ff cf-ff2"></div>
        <div class="cf-ff cf-ff3"></div>
        <div class="cf-ff cf-ff4"></div>
        <div class="cf-ff cf-ff5"></div>
        <div class="cf-ff cf-ff6"></div>
        <div class="cf-ff cf-ff7"></div>
        <div class="cf-ff cf-ff8"></div>
        <div class="cf-ff cf-ff9"></div>
        <div class="cf-ff cf-ff10"></div>

        {{-- Sol forêt --}}
        <div class="absolute bottom-0 left-0 right-0 h-28 cf-floor"></div>
    </div>

    <div class="hero-overlay absolute inset-0 z-[2]"></div>
    <div class="hero-grain absolute inset-0 z-[3]"></div>

    <div aria-hidden="true" class="absolute inset-0 z-[5] pointer-events-none overflow-hidden">
        <span class="leaf leaf-2"></span>
        <span class="leaf leaf-4"></span>
        <span class="leaf leaf-6"></span>
        <span class="leaf leaf-8"></span>
    </div>

    <div class="relative z-[10] w-full max-w-4xl mx-auto px-6 sm:px-8 flex flex-col items-center text-center pt-28 pb-20">

        {{-- Logo + Province --}}
        <div class="flex flex-col items-center gap-2 mb-6 hero-a1">
            <div class="relative">
                <div class="absolute inset-0 rounded-full bg-gold-400/18 blur-xl scale-125"></div>
                <img src="{{ asset('images/logo-maniema.png') }}"
                     alt="Province du Maniema"
                     class="logo-glow relative w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border border-gold-400/50 shadow-2xl"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                <div style="display:none"
                     class="logo-glow relative w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-gradient-to-br from-blue-maniema-700 to-forest-800 flex items-center justify-center border border-gold-400/50 shadow-2xl">
                    <span class="text-white font-bold text-sm">CF</span>
                </div>
            </div>
            <p class="text-gold-300 text-[11px] font-light tracking-[0.38em] uppercase hero-a2">Province du Maniema · RDC</p>
        </div>

        <div class="w-20 h-px mb-6 hero-line" style="background: linear-gradient(90deg, transparent, rgba(240,180,41,0.5), transparent)"></div>

        <h1 class="hero-display mb-5 hero-a3">
            <span class="line-natural">Préserver</span>
            <em class="line-forest">la Forêt</em>
            <span class="line-natural">du Congo</span>
        </h1>

        <p class="hero-subtitle hero-a4">
            <strong class="text-white/80 font-semibold not-italic">BFD SARL</strong> &amp;
            <strong class="text-white/80 font-semibold not-italic">New Motion</strong> —
            conservation forestière et crédits carbone certifiés REDD+
            au cœur du Maniema.
        </p>

        <div class="flex items-center gap-2.5 mb-7 hero-a5">
            <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse flex-shrink-0"></span>
            <span class="text-green-400/75 text-xs font-light tracking-widest">Programme actif</span>
            <span class="text-white/18 text-xs">·</span>
            <span class="text-white/35 text-xs tracking-wider font-light">Kindu, Maniema</span>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 items-center hero-a6">
            <a href="{{ route('about') }}" class="btn-gold">Découvrir le projet</a>
            <a href="{{ route('carbon') }}" class="btn-ghost-white">
                Crédit Carbone
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>

    {{-- Métriques flottantes desktop --}}
    <div class="hidden xl:block absolute bottom-20 left-8 z-[10]">
        <div class="glass-card px-5 py-3.5">
            <p class="text-gold-300 font-display text-2xl font-light leading-none">2<sup class="text-sm">e</sup></p>
            <p class="text-white/40 text-[11px] mt-1 font-light">Forêt tropicale mondiale</p>
        </div>
    </div>
    <div class="hidden xl:block absolute bottom-20 right-8 z-[10]">
        <div class="glass-card px-5 py-3.5 text-right">
            <p class="text-green-300 font-display text-xl font-light leading-none">REDD+</p>
            <p class="text-white/40 text-[11px] mt-1 font-light">Crédits certifiés</p>
        </div>
    </div>

    {{-- Bouton son de forêt --}}
    <div x-data="forestSound()"
         class="absolute bottom-8 left-6 sm:left-8 z-[10]"
         x-init="init()">
        <button
            @click="toggle()"
            :class="playing ? 'sound-btn active' : 'sound-btn'"
            :title="playing ? 'Couper le son' : 'Écouter la forêt'"
            aria-label="Son ambiant forêt">

            {{-- Icône haut-parleur (muet) --}}
            <svg x-show="!playing" class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"/>
            </svg>

            {{-- Barres animées (en lecture) --}}
            <span x-show="playing" class="flex items-end gap-[2px] h-3.5">
                <span class="sound-bar"></span>
                <span class="sound-bar"></span>
                <span class="sound-bar"></span>
                <span class="sound-bar"></span>
            </span>

            <span x-text="playing ? 'Forêt' : 'Son forêt'" class="tracking-wider uppercase"></span>
        </button>
    </div>

    {{-- Indicateur scroll --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-[10] flex flex-col items-center gap-1.5 scroll-indicator">
        <svg class="w-4 h-4 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>

    <div class="hero-wave">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C320,0 640,80 960,40 C1120,20 1300,70 1440,80 L1440,80 L0,80 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>


{{-- ══════════════════════════════════════════
     STATS — Chiffres clés (compact)
══════════════════════════════════════════ --}}
<section class="py-10 bg-white border-b border-gray-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center stagger">

            @foreach([
                ['num' => '336', 'unit' => 'Mha', 'label' => 'Forêts Bassin Congo', 'color' => '#16a34a'],
                ['num' => '2', 'unit' => 'e', 'label' => 'Forêt tropicale mondiale', 'color' => '#f0b429'],
                ['num' => '2', 'unit' => '', 'label' => 'Territoires au Maniema', 'color' => '#0d4ea8'],
                ['num' => '100', 'unit' => '%', 'label' => 'Crédits certifiés REDD+', 'color' => '#16a34a'],
            ] as $s)
            <div class="reveal">
                <p class="font-display font-black text-4xl leading-none mb-1" style="font-family: var(--font-display); color: {{ $s['color'] }};">
                    <span class="count-num" data-count="{{ $s['num'] }}">{{ $s['num'] }}</span><span class="text-xl">{{ $s['unit'] }}</span>
                </p>
                <p class="text-gray-400 text-xs font-medium">{{ $s['label'] }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     LES ACTEURS — BFD + New Motion
══════════════════════════════════════════ --}}
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="mb-10 reveal">
            <span class="section-badge">Les acteurs du projet</span>
            <h2 class="section-title mt-3">
                Deux sociétés, <span class="accent">une forêt à protéger</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-6 stagger">

            {{-- BFD SARL --}}
            <div class="reveal rounded-2xl border border-gray-100 p-6 hover:border-green-200 hover:shadow-sm transition-all duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-forest-600">Porteur de projet</p>
                        <h3 class="font-bold text-gray-900 text-lg leading-tight">BFD SARL</h3>
                    </div>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed mb-4">
                    Bâtir sur des Fondements Durables. Société congolaise qui coordonne le programme, assure l'ancrage institutionnel et l'engagement des communautés locales du Maniema.
                </p>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Coordination', 'Institutions', 'Communautés', 'Foncier'] as $tag)
                    <span class="text-xs px-2.5 py-1 rounded-full bg-green-50 text-green-700 font-medium">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            {{-- New Motion --}}
            <div class="reveal rounded-2xl border border-gray-100 p-6 hover:border-blue-200 hover:shadow-sm transition-all duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl bg-blue-maniema-50 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-maniema-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-blue-maniema-600">Partenaire carbone</p>
                        <h3 class="font-bold text-gray-900 text-lg leading-tight">New Motion</h3>
                    </div>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed mb-4">
                    Expertise Carbone &amp; Marchés Durables. Spécialiste de la certification REDD+ et de la valorisation des crédits carbone sur les marchés internationaux.
                </p>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Certification', 'Marchés carbone', 'REDD+', 'Valorisation'] as $tag)
                    <span class="text-xs px-2.5 py-1 rounded-full bg-blue-maniema-50 text-blue-maniema-700 font-medium">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Zone d'intervention (compact) --}}
        <div class="reveal rounded-2xl bg-gray-50 border border-gray-100 px-6 py-4 flex flex-col sm:flex-row items-center gap-4">
            <div class="flex items-center gap-3 flex-1 min-w-0">
                <img src="{{ asset('images/logo-maniema.png') }}"
                     alt="Maniema" class="w-8 h-8 rounded-full object-cover flex-shrink-0"
                     onerror="this.style.display='none'">
                <div>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-gray-400">Zone d'intervention</p>
                    <p class="font-semibold text-gray-900 text-sm">Province du Maniema · Kindu — 2 territoires forestiers</p>
                </div>
            </div>
            <a href="{{ route('about') }}" class="flex-shrink-0 text-xs font-semibold text-forest-600 hover:text-forest-800 transition-colors inline-flex items-center gap-1">
                En savoir plus
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     NOS ACTIONS — 4 piliers
══════════════════════════════════════════ --}}
<section class="py-14 bg-gray-50 border-y border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8 reveal">
            <div>
                <span class="section-badge">Nos objectifs</span>
                <h2 class="section-title mt-3">Ce que nous faisons</h2>
            </div>
            <a href="{{ route('conservation') }}" class="text-xs font-semibold text-forest-600 hover:text-forest-800 transition-colors inline-flex items-center gap-1 flex-shrink-0">
                Voir tout
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 stagger">

            @foreach([
                ['route' => 'conservation', 'icon_color' => '#16a34a', 'bg' => '#f0fdf4', 'num' => '01', 'title' => 'Protection des forêts', 'desc' => 'Protéger les massifs forestiers contre la déforestation et l\'exploitation illégale.', 'svg' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
                ['route' => 'conservation', 'icon_color' => '#16a34a', 'bg' => '#f0fdf4', 'num' => '02', 'title' => 'Reboisement', 'desc' => 'Restaurer les zones dégradées par la plantation d\'espèces forestières natives.', 'svg' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                ['route' => 'carbon', 'icon_color' => '#0d4ea8', 'bg' => '#eff6ff', 'num' => '03', 'title' => 'Crédit carbone', 'desc' => 'Certifier et valoriser les crédits carbone REDD+ sur les marchés internationaux.', 'svg' => 'M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z'],
                ['route' => 'community', 'icon_color' => '#d97706', 'bg' => '#fffbeb', 'num' => '04', 'title' => 'Communautés locales', 'desc' => 'Créer des retombées économiques durables pour les populations du Maniema.', 'svg' => 'M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z'],
            ] as $card)
            <a href="{{ route($card['route']) }}"
               class="reveal bg-white rounded-2xl border border-gray-100 p-5 hover:border-gray-200 hover:shadow-md transition-all duration-300 group block">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background: {{ $card['bg'] }};">
                        <svg class="w-4.5 h-4.5" style="color: {{ $card['icon_color'] }}; width:18px; height:18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $card['svg'] }}"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-gray-100 font-display">{{ $card['num'] }}</span>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2 group-hover:text-forest-700 transition-colors">{{ $card['title'] }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $card['desc'] }}</p>
            </a>
            @endforeach

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     PHOTOS TERRAIN
══════════════════════════════════════════ --}}
<section class="py-14 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3 mb-7 reveal">
            <div>
                <span class="section-badge">Sur le terrain</span>
                <h2 class="section-title mt-3">La forêt du Maniema</h2>
            </div>
            <a href="{{ route('gallery') }}" class="text-xs font-semibold text-forest-600 hover:text-forest-800 transition-colors inline-flex items-center gap-1 flex-shrink-0">
                Voir la galerie
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 reveal">
            @foreach(['1.jpeg','2.jpeg','3.jpeg','4.jpeg'] as $img)
            <div class="overflow-hidden rounded-xl aspect-square group">
                <img src="{{ asset('images/' . $img) }}"
                     alt="Forêt du Maniema – terrain ConsForest"
                     loading="lazy"
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     MENACE + RÉPONSE — 2 colonnes
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 border-y border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

            {{-- Colonne gauche : La menace --}}
            <div class="reveal-left">
                <span class="section-badge mb-4">La problématique</span>
                <h2 class="section-title mb-5">Une forêt <span class="text-red-500">menacée</span></h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    Le Bassin du Congo — deuxième poumon vert de la planète — subit des pressions croissantes qui mettent en danger des millions d'espèces et des dizaines de millions de personnes.
                </p>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Déforestation', 'detail' => 'Abattage massif non contrôlé', 'color' => '#ef4444'],
                        ['label' => 'Mines illégales', 'detail' => 'Extraction destructrice des sols', 'color' => '#f97316'],
                        ['label' => 'Agriculture extensive', 'detail' => 'Expansion des terres au détriment des forêts', 'color' => '#eab308'],
                        ['label' => 'Feux de brousse', 'detail' => 'Brûlis non maîtrisés, irréversibles', 'color' => '#f59e0b'],
                    ] as $m)
                    <li class="flex items-start gap-3 text-sm">
                        <span class="w-2 h-2 rounded-full flex-shrink-0 mt-1.5" style="background: {{ $m['color'] }};"></span>
                        <div>
                            <span class="font-semibold text-gray-800">{{ $m['label'] }}</span>
                            <span class="text-gray-400"> — {{ $m['detail'] }}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Colonne droite : Notre réponse --}}
            <div class="reveal-right">
                <span class="section-badge mb-4">Notre réponse</span>
                <h2 class="section-title mb-5">Une vision <span class="accent">durable</span></h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    ConsForest Maniema propose une alternative concrète : protéger la forêt, impliquer les communautés, et financer la conservation grâce aux crédits carbone certifiés.
                </p>
                <ul class="space-y-3">
                    @foreach([
                        ['label' => 'Conservation active', 'detail' => 'Patrouilles, surveillance et protection directe'],
                        ['label' => 'Crédits carbone REDD+', 'detail' => 'Revenus pérennes issus de la certification'],
                        ['label' => 'Emplois locaux', 'detail' => 'Gardes forestiers, techniciens, gestionnaires'],
                        ['label' => 'Gouvernance inclusive', 'detail' => 'Les communautés décident et bénéficient'],
                    ] as $r)
                    <li class="flex items-start gap-3 text-sm">
                        <span class="w-2 h-2 rounded-full flex-shrink-0 mt-1.5" style="background: #16a34a;"></span>
                        <div>
                            <span class="font-semibold text-gray-800">{{ $r['label'] }}</span>
                            <span class="text-gray-400"> — {{ $r['detail'] }}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('conservation') }}" class="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-forest-600 hover:text-forest-800 transition-colors">
                    Notre programme de conservation
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     ACTUALITÉS (si existantes)
══════════════════════════════════════════ --}}
@if($latestNews && $latestNews->count() > 0)
<section class="py-14 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4 mb-8 reveal">
            <div>
                <span class="section-badge">Dernières nouvelles</span>
                <h2 class="section-title mt-3">Actualités du programme</h2>
            </div>
            <a href="{{ route('news.index') }}" class="btn-forest text-sm flex-shrink-0">
                Toutes les actualités
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 stagger">
            @foreach($latestNews as $article)
            <article class="news-card reveal bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow group">
                <a href="{{ route('news.show', $article->slug) }}" class="block overflow-hidden h-44">
                    @if($article->cover_image)
                        <img src="{{ asset('storage/' . $article->cover_image) }}"
                             alt="{{ $article->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-forest-900 to-blue-maniema-900 flex items-center justify-center">
                            <svg class="w-12 h-12 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
                            </svg>
                        </div>
                    @endif
                </a>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="text-xs bg-forest-50 text-forest-700 font-semibold px-2.5 py-0.5 rounded-full">{{ $article->category_label }}</span>
                        <span class="text-xs text-gray-400">{{ $article->formatted_date }}</span>
                    </div>
                    <h3 class="font-bold text-gray-900 text-sm mb-2 line-clamp-2 group-hover:text-forest-700 transition-colors">
                        <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                    </h3>
                    <p class="text-gray-400 text-xs leading-relaxed line-clamp-2">{{ $article->excerpt }}</p>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</section>
@endif


{{-- ══════════════════════════════════════════
     PARTENAIRES
══════════════════════════════════════════ --}}
<section class="py-10 bg-white border-t border-gray-100">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <p class="text-center text-[10px] text-gray-300 uppercase tracking-[0.3em] font-semibold mb-8">
            Partenaires institutionnels
        </p>

        <div class="grid grid-cols-3 md:grid-cols-6 gap-2 items-center">
            @foreach([
                ['name' => 'BFD SARL', 'role' => 'Porteur de projet', 'color' => '#16a34a'],
                ['name' => 'New Motion', 'role' => 'Partenaire carbone', 'color' => '#0d4ea8'],
                ['name' => 'Gouvernement RDC', 'role' => 'Autorité nationale', 'color' => '#374151'],
                ['name' => 'Min. Environnement', 'role' => 'Tutelle', 'color' => '#374151'],
                ['name' => 'Maniema', 'role' => 'Province', 'color' => '#d97706', 'logo' => true],
                ['name' => 'Partenaires Intl.', 'role' => 'Organisations techniques', 'color' => '#374151'],
            ] as $p)
            <div class="text-center py-3 px-2 rounded-xl hover:bg-gray-50 transition-colors">
                @if(isset($p['logo']))
                <div class="h-7 flex items-center justify-center mb-1">
                    <img src="{{ asset('images/logo-maniema.png') }}"
                         alt="Maniema" class="h-6 w-6 rounded-full object-cover mx-auto"
                         onerror="this.outerHTML='<span class=\'font-bold text-xs\' style=\'color: {{ $p['color'] }}\'>{{ $p['name'] }}</span>'">
                </div>
                @else
                <div class="h-7 flex items-center justify-center mb-1">
                    <span class="font-bold text-xs" style="color: {{ $p['color'] }};">{{ $p['name'] }}</span>
                </div>
                @endif
                <p class="text-gray-300 text-[10px] leading-tight">{{ $p['role'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     CTA FINAL
══════════════════════════════════════════ --}}
<section class="py-16 border-t border-gray-100 bg-white">
    <div class="max-w-2xl mx-auto px-4 text-center reveal">

        <h2 class="section-title mb-4">
            Rejoignez le <span class="gold">mouvement carbone</span>
        </h2>
        <p class="text-gray-400 text-sm leading-relaxed mb-8 max-w-xl mx-auto">
            Investisseur, partenaire institutionnel ou simplement curieux — notre équipe est à votre disposition pour parler conservation forestière et crédits carbone en RDC.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ route('contact') }}" class="btn-gold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Contactez-nous
            </a>
            <a href="{{ route('partners') }}" class="btn-ghost-white" style="color: #374151; border-color: #e5e7eb; background: transparent;">
                Nos partenaires
            </a>
        </div>

    </div>
</section>

@endsection
