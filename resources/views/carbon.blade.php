@extends('layouts.app')

@section('title', 'Crédit Carbone – Séquestration CO₂ et Certification ConsForest Maniema')
@section('description', 'Découvrez comment le projet ConsForest Maniema génère des crédits carbone certifiés grâce à la conservation des forêts du Maniema, RDC. Mécanisme REDD+, séquestration CO₂, bénéfices économiques.')
@section('keywords', 'crédit carbone RDC, REDD+ Congo, séquestration CO2, conservation carbone Maniema, marché carbone, forêt carbone certifié')

@section('content')

{{-- ══════════════════════════════════════════
     PAGE HEADER
══════════════════════════════════════════ --}}
<div class="page-header pt-32 pb-24" style="min-height: 420px;">

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
            <span class="text-white font-medium">Crédit Carbone</span>
        </nav>

        <span class="section-badge white mb-5">Valorisation carbone</span>

        <h1 style="font-family: var(--font-display);"
            class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight">
            Crédit <span style="color: #f0b429;">Carbone</span>
        </h1>
        <p class="text-white/65 text-lg max-w-xl leading-relaxed">
            Valoriser la conservation forestière du Maniema par des mécanismes REDD+
            certifiés et reconnus sur les marchés internationaux du carbone.
        </p>

        <div class="flex flex-wrap gap-5 mt-10">
            @foreach([
                ['val' => '1M',    'unit' => '',        'label' => 'Crédits objectif 2027'],
                ['val' => '$15–30','unit' => '/t CO₂',  'label' => 'Prix marché volontaire'],
                ['val' => 'REDD+', 'unit' => '',        'label' => 'Standard certifié'],
                ['val' => '45%',   'unit' => '',        'label' => 'Carbone terrestre en forêt'],
            ] as $s)
            <div class="flex flex-col" style="border-left: 2px solid rgba(240,180,41,0.40); padding-left: 14px;">
                <span class="text-white font-black text-xl leading-none">
                    {{ $s['val'] }}<span class="text-sm ml-0.5" style="color:#f0b429;">{{ $s['unit'] }}</span>
                </span>
                <span class="text-white/45 text-xs mt-1 leading-tight">{{ $s['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>


{{-- ══════════════════════════════════════════
     QU'EST-CE QU'UN CRÉDIT CARBONE
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <div class="reveal-left">
                <span class="section-badge mb-5">Le mécanisme</span>
                <h2 class="section-title mb-5">
                    Qu'est-ce qu'un <span class="forest">crédit carbone</span> ?
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Un <strong class="text-forest-700">crédit carbone</strong> est une unité certifiée représentant
                    la réduction ou la séquestration d'une <strong>tonne de CO₂ équivalent</strong>.
                    Il constitue l'instrument financier central dans la lutte mondiale contre le changement climatique.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Les forêts tropicales absorbent le CO₂ par photosynthèse et le stockent dans leur biomasse
                    pendant des siècles. En protégeant les forêts du Maniema, ConsForest génère et certifie
                    ce service écosystémique irremplaçable.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Les crédits sont achetés par des entreprises et États voulant compenser leurs émissions résiduelles —
                    créant un <strong>flux de revenus durable</strong> qui finance directement la conservation et les communautés locales.
                </p>

                <div class="flex flex-col gap-2.5">
                    @foreach([
                        ['ico' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',           'txt' => '1 crédit = 1 tonne de CO₂ évitée ou séquestrée'],
                        ['ico' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3 1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6', 'txt' => 'Marché volontaire international en pleine croissance'],
                        ['ico' => 'M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253', 'txt' => 'Reconnu dans le cadre de l\'Accord de Paris (COP21)'],
                        ['ico' => 'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z', 'txt' => 'Bénéfices directs aux communautés forestières'],
                    ] as $pt)
                    <div class="flex items-center gap-3 text-gray-600 text-sm">
                        <div class="w-7 h-7 bg-blue-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $pt['ico'] }}"/>
                            </svg>
                        </div>
                        {{ $pt['txt'] }}
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="reveal-right space-y-4">
                {{-- 1 tonne card --}}
                <div class="rounded-2xl p-6" style="background: linear-gradient(135deg, rgba(29,111,168,0.08) 0%, rgba(22,163,74,0.08) 100%); border: 1px solid rgba(29,111,168,0.18);">
                    <p class="font-black text-5xl mb-1" style="color: #1d6fa8;">1 t CO₂</p>
                    <p class="text-gray-700 font-semibold text-sm mb-1">= 1 Crédit Carbone</p>
                    <p class="text-gray-400 text-xs">Unité de mesure certifiée sur les marchés internationaux</p>
                </div>
                {{-- 2 mini cards --}}
                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-xl p-4 border border-green-100 bg-green-50">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-4 h-4 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>
                            </svg>
                        </div>
                        <p class="font-semibold text-green-800 text-xs">Forêts & carbone</p>
                        <p class="text-green-600 text-xs mt-1 leading-relaxed">Les forêts stockent 45 % du carbone terrestre</p>
                    </div>
                    <div class="rounded-xl p-4 border border-amber-100 bg-amber-50">
                        <div class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center mb-3">
                            <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                            </svg>
                        </div>
                        <p class="font-semibold text-amber-800 text-xs">Certification</p>
                        <p class="text-amber-600 text-xs mt-1 leading-relaxed">Standards VCS, Gold Standard, REDD+</p>
                    </div>
                </div>
                {{-- Prix card --}}
                <div class="rounded-xl p-4 border border-gray-100 bg-gray-50">
                    <div class="flex justify-between items-start mb-2">
                        <p class="text-gray-500 text-xs font-medium">Prix marché volontaire (2024)</p>
                        <span class="text-xs text-green-600 font-semibold px-2 py-0.5 bg-green-50 rounded-lg">En hausse</span>
                    </div>
                    <div class="flex items-end gap-4">
                        <div>
                            <p class="font-black text-2xl text-gray-900">$15 – $30</p>
                            <p class="text-gray-400 text-xs">par tonne CO₂ (VCM)</p>
                        </div>
                        <div class="flex-1">
                            <div class="flex gap-0.5 items-end h-8">
                                @foreach([30, 45, 40, 55, 60, 58, 72, 80] as $h)
                                <div class="flex-1 rounded-sm" style="height: {{ $h }}%; background: rgba(22,163,74,0.3);"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     SÉQUESTRATION — 3 étapes
══════════════════════════════════════════ --}}
<section class="py-16 bg-forest-pattern">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Science</span>
            <h2 class="section-title mb-3">Comment les forêts <span class="forest">séquestrent</span> le carbone</h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Un processus naturel continu, amplifié par les pratiques de conservation du programme.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 reveal">
            @foreach([
                [
                    'step' => '01',
                    'icon' => 'M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z',
                    'title' => 'Photosynthèse',
                    'desc'  => "Les feuilles captent l'énergie solaire et absorbent le CO₂ atmosphérique pour produire de la matière organique dans la biomasse végétale.",
                    'color' => '#d97706',
                ],
                [
                    'step' => '02',
                    'icon' => 'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18',
                    'title' => 'Stockage biomasse',
                    'desc'  => "Le carbone est incorporé dans le bois, les racines et le sol forestier — où il reste stocké des décennies, voire des siècles.",
                    'color' => '#16a34a',
                ],
                [
                    'step' => '03',
                    'icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253',
                    'title' => 'Service climatique',
                    'desc'  => "La forêt agit comme un puits naturel de carbone mondial, contrebalançant les émissions humaines de gaz à effet de serre.",
                    'color' => '#1d6fa8',
                ],
            ] as $s)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-5">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center"
                         style="background: {{ $s['color'] }}18;">
                        <svg class="w-5 h-5" style="color: {{ $s['color'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $s['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="font-black text-4xl" style="color: {{ $s['color'] }}18;">{{ $s['step'] }}</span>
                </div>
                <p class="text-xs font-bold mb-2" style="color: {{ $s['color'] }};">ÉTAPE {{ $s['step'] }}</p>
                <h3 class="font-bold text-gray-900 text-sm mb-2">{{ $s['title'] }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $s['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     MÉCANISME REDD+ — processus de certification
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Certification</span>
            <h2 class="section-title mb-3">Le mécanisme <span class="gold">REDD+</span></h2>
            <p class="text-gray-400 text-sm max-w-lg mx-auto">
                Réduction des Émissions liées à la Déforestation et à la Dégradation des forêts —
                cadre reconnu par la CCNUCC et l'Accord de Paris.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start reveal">

            {{-- Processus étapes --}}
            <div class="space-y-4">
                @foreach([
                    ['n'=>'01', 'title'=>'Scénario de référence',       'desc'=>"Établissement d'une ligne de base représentant le taux de déforestation sans le projet.",                           'c'=>'#16a34a'],
                    ['n'=>'02', 'title'=>'Mesure des réductions',        'desc'=>'Quantification rigoureuse des émissions évitées grâce aux activités de conservation sur le terrain.',               'c'=>'#1d6fa8'],
                    ['n'=>'03', 'title'=>'Vérification indépendante',    'desc'=>"Audit réalisé par des organismes tiers accrédités (Verra, Gold Standard) pour valider les données.",               'c'=>'#d97706'],
                    ['n'=>'04', 'title'=>'Émission des crédits',         'desc'=>"Génération et enregistrement officiel des crédits dans les registres internationaux reconnus.",                     'c'=>'#16a34a'],
                    ['n'=>'05', 'title'=>'Distribution des bénéfices',   'desc'=>"Partage équitable des revenus entre le projet, les communautés locales et la conservation.",                        'c'=>'#7c3aed'],
                ] as $i => $step)
                <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors">
                    <div class="w-9 h-9 rounded-xl flex items-center justify-center font-black text-xs flex-shrink-0 mt-0.5"
                         style="background: {{ $step['c'] }}15; color: {{ $step['c'] }};">
                        {{ $step['n'] }}
                    </div>
                    <div>
                        <p class="font-bold text-gray-900 text-sm mb-1">{{ $step['title'] }}</p>
                        <p class="text-gray-400 text-xs leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Bénéfices --}}
            <div class="space-y-5">
                <div class="bg-institutional rounded-2xl p-6 text-white">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0"
                             style="background: rgba(74,222,128,0.15);">
                            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-sm text-white">Bénéfices environnementaux</h3>
                    </div>
                    <ul class="space-y-2.5">
                        @foreach(['Réduction directe des émissions de GES', 'Séquestration durable du CO₂', 'Protection de la biodiversité', "Préservation des cycles de l'eau", 'Stabilisation du microclimat local'] as $b)
                        <li class="flex items-center gap-2.5 text-white/70 text-xs">
                            <svg class="w-3.5 h-3.5 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $b }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="rounded-2xl p-6 border border-amber-100" style="background: rgba(251,191,36,0.05);">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 bg-amber-50">
                            <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                      d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3 1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-gray-900 text-sm">Bénéfices économiques</h3>
                    </div>
                    <ul class="space-y-2.5">
                        @foreach(['Revenus certifiés et durables pour le projet', 'Financement de la conservation terrain', 'Création d\'emplois locaux verts', 'Alternatives économiques aux communautés', 'Attractivité pour les investisseurs ESG'] as $b)
                        <li class="flex items-center gap-2.5 text-gray-500 text-xs">
                            <svg class="w-3.5 h-3.5 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                            </svg>
                            {{ $b }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     ACHETEURS — qui achète ?
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Marché carbone</span>
            <h2 class="section-title mb-3">Qui achète les <span class="forest">crédits carbone</span> ?</h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Un marché mondial en forte croissance, porté par les engagements climatiques et les objectifs Net Zéro.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                [
                    'icon' => 'M2.25 21h19.5m-18-18v18m2.25-18v18m9-18v18m2.25-18v18M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z',
                    'title' => 'Industries',
                    'desc'  => 'Entreprises voulant compenser leurs émissions résiduelles et atteindre la neutralité carbone (Net Zéro).',
                    'color' => '#1d6fa8', 'bg' => 'rgba(29,111,168,0.08)',
                ],
                [
                    'icon' => 'M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5',
                    'title' => 'Transport & aviation',
                    'desc'  => 'Compagnies aériennes et maritimes engagées dans des programmes de compensation CO₂ obligatoires.',
                    'color' => '#7c3aed', 'bg' => 'rgba(124,58,222,0.08)',
                ],
                [
                    'icon' => 'M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z',
                    'title' => 'Finance & ESG',
                    'desc'  => "Banques et fonds d'investissement développant des portefeuilles alignés sur les critères ESG.",
                    'color' => '#d97706', 'bg' => 'rgba(217,119,6,0.08)',
                ],
                [
                    'icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918',
                    'title' => 'Gouvernements',
                    'desc'  => "États souhaitant honorer leurs engagements NDC dans le cadre de l'Accord de Paris.",
                    'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.08)',
                ],
            ] as $buyer)
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4"
                     style="background: {{ $buyer['bg'] }};">
                    <svg class="w-5 h-5" style="color: {{ $buyer['color'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $buyer['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2">{{ $buyer['title'] }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $buyer['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     OBJECTIF 2027
══════════════════════════════════════════ --}}
<section class="py-16 bg-institutional cf-net-bg text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center reveal">

            <div>
                <span class="section-badge white mb-5">Objectif 2027</span>
                <h2 class="section-title text-white mb-5">
                    1 million de crédits <span style="color: #f0b429;">certifiés</span>
                </h2>
                <p class="text-white/60 text-sm leading-relaxed mb-6">
                    ConsForest Maniema vise la certification d'<strong class="text-white/90">1 million de crédits carbone REDD+</strong>
                    sur les marchés volontaires internationaux à l'horizon 2027 — représentant
                    1 million de tonnes de CO₂ évitées ou séquestrées.
                </p>
                <p class="text-white/60 text-sm leading-relaxed mb-8">
                    Ces revenus financeront directement les opérations de terrain, les salaires des
                    gardes forestiers communautaires et les programmes de développement local dans les
                    territoires de Kailo et Pangi.
                </p>
                <a href="{{ route('contact') }}" class="btn-gold inline-flex">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Discuter d'un partenariat
                </a>
            </div>

            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['val' => '1M',    'unit' => 'crédits', 'label' => 'Objectif certification 2027',      'c' => '#4ade80'],
                    ['val' => '$15M+', 'unit' => '',         'label' => 'Potentiel de revenus estimé',      'c' => '#f0b429'],
                    ['val' => '2',     'unit' => 'territoires','label' => 'Zones de conservation actives',  'c' => '#93c5fd'],
                    ['val' => '100%',  'unit' => '',          'label' => 'Bénéfices reversés localement',   'c' => '#a78bfa'],
                ] as $obj)
                <div class="rounded-2xl p-5" style="background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.10);">
                    <p class="font-black text-2xl mb-0.5" style="color: {{ $obj['c'] }};">
                        {{ $obj['val'] }}<span class="text-sm ml-0.5 font-semibold">{{ $obj['unit'] }}</span>
                    </p>
                    <p class="text-white/40 text-xs leading-tight">{{ $obj['label'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     CTA
══════════════════════════════════════════ --}}
<section class="py-16 border-t border-gray-100 bg-white cf-net-bg">
    <div class="max-w-2xl mx-auto px-4 text-center reveal">
        <h2 class="section-title mb-4">
            Intéressé par nos <span class="gold">crédits carbone</span> ?
        </h2>
        <p class="text-gray-400 text-sm leading-relaxed mb-8 max-w-xl mx-auto">
            Acheteur institutionnel, investisseur ESG ou entreprise engagée Net Zéro —
            contactez l'équipe ConsForest pour discuter des opportunités de partenariat carbone certifié.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ route('contact') }}" class="btn-gold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Prendre contact
            </a>
            <a href="{{ route('certification') }}"
               class="btn-ghost-white"
               style="color: #374151; border-color: #e5e7eb; background: transparent;">
                Processus de certification →
            </a>
        </div>
    </div>
</section>

@endsection
