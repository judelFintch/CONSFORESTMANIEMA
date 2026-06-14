@extends('layouts.app')

@section('title', 'À propos – BFD SARL & ConsForest Maniema')
@section('description', 'Découvrez la vision, la mission et les valeurs du projet ConsForest Maniema porté par BFD SARL en partenariat avec New Goshen, le Gouvernement RDC et le Ministère de l\'Environnement.')
@section('keywords', 'BFD SARL, à propos ConsForest Maniema, vision mission, New Goshen, gouvernement RDC, conservation forêt Congo')

@section('content')

{{-- ══════════════════════════════════════════
     PAGE HEADER — photo forêt + Ken Burns
══════════════════════════════════════════ --}}
<div class="page-header pt-32 pb-24" style="min-height: 420px;">

    {{-- Photo forêt en fond (si disponible) --}}
    @if(file_exists(public_path('images/hero-foret.jpg')))
    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="hero-forest-anim w-full h-full">
            <img src="{{ asset('images/hero-foret.jpg') }}"
                 alt="Forêt du Maniema"
                 class="w-full h-full object-cover opacity-20"
                 loading="eager">
        </div>
    </div>
    @endif

    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-5" aria-label="Fil d'Ariane">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <span class="text-white font-medium">À propos</span>
        </nav>

        <span class="section-badge white mb-5">Qui sommes-nous</span>

        <h1 style="font-family: var(--font-display);" class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight">
            BFD SARL &amp;<br class="hidden sm:block">
            <span style="color: #f0b429;">ConsForest Maniema</span>
        </h1>
        <p class="text-white/65 text-lg max-w-xl leading-relaxed">
            Conservation forestière, crédits carbone certifiés REDD+ et développement durable
            au cœur de la province du Maniema, RDC.
        </p>

        {{-- Mini stats dans le header --}}
        <div class="flex flex-wrap gap-5 mt-10">
            @foreach([
                ['val' => '2',       'unit' => 'territoires', 'label' => 'Kailo & Pangi'],
                ['val' => '500 K',   'unit' => 'hectares',    'label' => 'Surface couverte'],
                ['val' => '5+',      'unit' => 'ans',         'label' => "D'engagement terrain"],
                ['val' => 'REDD+',   'unit' => '',            'label' => 'Certification en cours'],
            ] as $s)
            <div class="flex flex-col" style="border-left: 2px solid rgba(240,180,41,0.40); padding-left: 14px;">
                <span class="text-white font-black text-xl leading-none">
                    {{ $s['val'] }}<span class="text-gold-400 text-sm ml-0.5">{{ $s['unit'] }}</span>
                </span>
                <span class="text-white/45 text-xs mt-1 leading-tight">{{ $s['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>


{{-- ══════════════════════════════════════════
     CONTEXTE
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <div class="reveal-left">
                <span class="section-badge mb-5">Contexte</span>
                <h2 class="section-title mb-5">
                    Une urgence <span class="forest">planétaire</span>
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Le Bassin du Congo — deuxième plus grande forêt tropicale du monde — joue un rôle
                    irremplaçable dans la régulation du climat mondial et abrite une biodiversité extraordinaire.
                    Il séquestre des milliards de tonnes de CO₂ chaque année.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Face aux menaces croissantes — déforestation, exploitation illégale, expansion agricole —
                    <strong class="text-forest-700">BFD SARL</strong> a lancé ConsForest Maniema,
                    un programme structuré de conservation forestière, de reboisement et de développement durable.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Développé avec le <strong>Gouvernement de la RDC</strong> et le
                    <strong>Ministère de l'Environnement</strong>, le programme garantit un ancrage
                    institutionnel solide et une légitimité nationale complète.
                </p>

                {{-- Points clés --}}
                <div class="grid grid-cols-2 gap-3">
                    @foreach([
                        ['ico' => 'M5 3v4M3 5h4M6.5 17.5l-1.5 1.5M17.5 6.5l1.5-1.5M13 13l4 4M3 21l9-9', 'txt' => 'Bassin Congo'],
                        ['ico' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',           'txt' => 'Certifié REDD+'],
                        ['ico' => 'M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z', 'txt' => 'Maniema, RDC'],
                        ['ico' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0', 'txt' => 'Communautés locales'],
                    ] as $pt)
                    <div class="flex items-center gap-2.5 bg-gray-50 rounded-xl px-3 py-2.5">
                        <svg class="w-4 h-4 text-forest-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $pt['ico'] }}"/>
                        </svg>
                        <span class="text-gray-700 text-xs font-medium">{{ $pt['txt'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="reveal-right">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('images/2.jpeg') }}"
                         alt="Équipe terrain Maniema"
                         class="w-full h-72 object-cover">
                </div>
                <div class="grid grid-cols-2 gap-3 mt-3">
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('images/3.jpeg') }}" alt="Terrain forêt" class="w-full h-32 object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('images/4.jpeg') }}" alt="Communauté" class="w-full h-32 object-cover">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     VISION · MISSION · VALEURS
══════════════════════════════════════════ --}}
<section class="py-16 bg-forest-pattern">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Fondements</span>
            <h2 class="section-title mb-3">Vision, Mission <span class="forest">&amp; Valeurs</span></h2>
            <p class="text-gray-500 text-sm max-w-md mx-auto">
                Les principes qui guident chaque action du programme ConsForest Maniema.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Vision --}}
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-green-100 reveal hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-5">
                    <div class="w-11 h-11 bg-green-50 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <span class="text-forest-100 font-black text-5xl leading-none select-none">01</span>
                </div>
                <h3 class="font-bold text-gray-900 text-base mb-3">Notre Vision</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Faire de la RDC un acteur majeur de la <strong class="text-forest-700">séquestration
                    du carbone</strong> en protégeant et restaurant ses forêts tropicales pour lutter
                    contre le changement climatique mondial.
                </p>
            </div>

            {{-- Mission --}}
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-blue-100 reveal hover:shadow-md transition-shadow" style="animation-delay: 0.1s;">
                <div class="flex items-center justify-between mb-5">
                    <div class="w-11 h-11 bg-blue-50 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="text-blue-50 font-black text-5xl leading-none select-none">02</span>
                </div>
                <h3 class="font-bold text-gray-900 text-base mb-3">Notre Mission</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Protéger, restaurer et valoriser les forêts du Maniema à travers un programme de
                    <strong class="text-blue-700">conservation REDD+</strong>, de reboisement, de crédits
                    carbone certifiés et d'accompagnement des communautés locales.
                </p>
            </div>

            {{-- Valeurs --}}
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-amber-100 reveal hover:shadow-md transition-shadow" style="animation-delay: 0.2s;">
                <div class="flex items-center justify-between mb-5">
                    <div class="w-11 h-11 bg-amber-50 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                        </svg>
                    </div>
                    <span class="text-amber-50 font-black text-5xl leading-none select-none">03</span>
                </div>
                <h3 class="font-bold text-gray-900 text-base mb-3">Nos Valeurs</h3>
                <ul class="space-y-2.5">
                    @foreach([
                        'Durabilité environnementale',
                        'Équité et inclusion sociale',
                        'Transparence et redevabilité',
                        'Partenariat et coopération',
                        'Innovation scientifique',
                    ] as $val)
                    <li class="flex items-center gap-2.5 text-gray-500 text-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 flex-shrink-0"></span>
                        {{ $val }}
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     BFD SARL + NEW GOSHEN
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Les acteurs</span>
            <h2 class="section-title mb-3">BFD SARL <span class="forest">&amp; New Goshen</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Deux partenaires complémentaires pour un projet intégré de conservation et de valorisation carbone.
            </p>
        </div>

        <div class="bg-institutional rounded-2xl p-8 sm:p-10 text-white reveal relative">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                {{-- BFD SARL --}}
                <div>
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center font-black text-sm"
                             style="background: rgba(52,201,97,0.15); color: #4ade80;">BFD</div>
                        <div>
                            <p class="font-bold text-white leading-tight">BFD SARL</p>
                            <p class="text-xs" style="color: #4ade80;">Porteur de projet</p>
                        </div>
                    </div>
                    <p class="text-white/70 text-sm leading-relaxed mb-5">
                        <em class="not-italic font-semibold text-white/90">Bâtir sur des Fondements Durables</em> —
                        société congolaise engagée dans le développement durable, la protection de l'environnement
                        et l'accompagnement des communautés locales du Maniema.
                    </p>
                    <div class="grid grid-cols-2 gap-2 mb-4">
                        @foreach(['Territoire Kailo', 'Territoire Pangi', 'Province Maniema', 'RDC'] as $z)
                        <div class="rounded-lg px-3 py-2 text-xs text-white/60 flex items-center gap-1.5"
                             style="background: rgba(255,255,255,0.07);">
                            <span class="w-1 h-1 rounded-full bg-forest-400 flex-shrink-0"></span>
                            {{ $z }}
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Séparateur vertical --}}
                <div class="hidden md:block absolute left-1/2 top-10 bottom-10 w-px"
                     style="background: rgba(255,255,255,0.08);"></div>

                {{-- New Goshen --}}
                <div>
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center font-black text-sm"
                             style="background: rgba(96,165,250,0.15); color: #93c5fd;">NG</div>
                        <div>
                            <p class="font-bold text-white leading-tight">New Goshen</p>
                            <p class="text-xs" style="color: #93c5fd;">Partenaire carbone</p>
                        </div>
                    </div>
                    <p class="text-white/70 text-sm leading-relaxed mb-5">
                        Partenaire technique spécialisé dans la certification REDD+ et la commercialisation
                        des crédits carbone sur les marchés volontaires internationaux,
                        apportant expertise technique et accès aux acheteurs institutionnels.
                    </p>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach(['Certification REDD+', 'Marchés carbone', 'MRV scientifique', 'Partenariats Intl.'] as $z)
                        <div class="rounded-lg px-3 py-2 text-xs text-white/60 flex items-center gap-1.5"
                             style="background: rgba(255,255,255,0.07);">
                            <span class="w-1 h-1 rounded-full bg-blue-400 flex-shrink-0"></span>
                            {{ $z }}
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     CHRONOLOGIE — jalons du programme
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Chronologie</span>
            <h2 class="section-title mb-3">Jalons du <span class="forest">programme</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                De la fondation à la certification — les étapes clés de ConsForest Maniema.
            </p>
        </div>

        <div class="relative reveal">
            {{-- Ligne verticale --}}
            <div class="absolute left-5 sm:left-1/2 top-0 bottom-0 w-px -translate-x-1/2"
                 style="background: linear-gradient(180deg, #16a34a 0%, #d97706 100%); opacity: 0.25;"></div>

            <div class="space-y-8">
                @foreach([
                    ['year' => '2020', 'title' => 'Fondation de BFD SARL',           'desc' => 'Création de la société Bâtir sur des Fondements Durables, avec une vision centrée sur la conservation forestière en RDC.',                     'side' => 'left',  'color' => '#16a34a'],
                    ['year' => '2022', 'title' => 'Lancement ConsForest Maniema',     'desc' => 'Démarrage officiel du programme de conservation dans les territoires de Kailo et Pangi, en partenariat avec les autorités provinciales.',      'side' => 'right', 'color' => '#1d6fa8'],
                    ['year' => '2023', 'title' => 'Partenariat New Goshen & REDD+',   'desc' => 'Signature du partenariat avec New Goshen pour la certification REDD+ et l\'accès aux marchés carbone volontaires internationaux.',             'side' => 'left',  'color' => '#d97706'],
                    ['year' => '2024', 'title' => 'Déploiement terrain & MRV',        'desc' => 'Installation des systèmes de Mesure, Rapport et Vérification (MRV) sur les deux territoires. Engagement actif des communautés locales.',        'side' => 'right', 'color' => '#16a34a'],
                    ['year' => '2027', 'title' => 'Objectif : 1M crédits carbone',   'desc' => 'Objectif de certification d\'1 million de crédits carbone REDD+ sur les marchés internationaux, avec impact direct sur les communautés.',       'side' => 'left',  'color' => '#d97706', 'future' => true],
                ] as $m)
                <div class="relative flex items-start gap-6 sm:gap-0 @if($m['side']==='right') sm:flex-row-reverse @endif">

                    {{-- Nœud central --}}
                    <div class="absolute left-5 sm:left-1/2 -translate-x-1/2 w-3 h-3 rounded-full ring-4 ring-white z-10 @if(isset($m['future'])) opacity-50 @endif"
                         style="background: {{ $m['color'] }}; top: 10px;"></div>

                    {{-- Carte --}}
                    <div class="ml-12 sm:ml-0 sm:w-[calc(50%-2rem)] @if($m['side']==='left') sm:pr-8 @else sm:pl-8 @endif">
                        <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow @if(isset($m['future'])) opacity-70 @endif">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-xs font-black px-2.5 py-1 rounded-lg"
                                      style="background: {{ $m['color'] }}18; color: {{ $m['color'] }};">
                                    {{ $m['year'] }}
                                </span>
                                @if(isset($m['future']))
                                <span class="text-xs text-gray-400 font-medium">Objectif</span>
                                @endif
                            </div>
                            <h3 class="font-bold text-gray-900 text-sm mb-1.5">{{ $m['title'] }}</h3>
                            <p class="text-gray-500 text-xs leading-relaxed">{{ $m['desc'] }}</p>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     CADRE INSTITUTIONNEL
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Institutionnel</span>
            <h2 class="section-title mb-3">Cadre <span class="forest">institutionnel</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                ConsForest Maniema s'inscrit dans les politiques nationales de développement durable de la RDC.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                ['init' => 'RDC', 'name' => 'Gouvernement RDC',   'desc' => 'Partenaire institutionnel principal. Cadre légal et soutien politique au plus haut niveau.',           'color' => '#1d4ed8', 'bg' => 'rgba(29,78,216,0.08)'],
                ['init' => 'ME',  'name' => 'Min. Environnement', 'desc' => 'Autorité de tutelle. Délivrance des autorisations et suivi réglementaire REDD+.',                     'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.08)'],
                ['init' => 'MAN', 'name' => 'Province Maniema',   'desc' => 'Ancrage territorial. Gouvernorat provincial et coordination avec les territoires de Kailo & Pangi.',   'color' => '#d97706', 'bg' => 'rgba(217,119,6,0.08)'],
                ['init' => 'ONG', 'name' => 'Partenaires Intl.',  'desc' => 'Organisations techniques et bailleurs de fonds engagés dans la conservation forestière mondiale.',     'color' => '#6b7280', 'bg' => 'rgba(107,114,128,0.08)'],
            ] as $p)
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="w-11 h-11 rounded-xl flex items-center justify-center font-bold text-xs mb-4"
                     style="background: {{ $p['bg'] }}; color: {{ $p['color'] }};">
                    {{ $p['init'] }}
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2">{{ $p['name'] }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $p['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     NOTRE ÉQUIPE
══════════════════════════════════════════ --}}
<section id="equipe" class="py-20 bg-gray-50 cf-net-bg">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- En-tête --}}
        <div class="text-center mb-14 reveal">
            <span class="section-badge mb-5">Les personnes</span>
            <h2 class="section-title mb-4">Notre <span class="forest">Équipe</span></h2>
            <p class="text-gray-500 text-sm leading-relaxed max-w-xl mx-auto mb-8">
                Une équipe pluridisciplinaire réunissant experts en gestion de projet, environnement,
                finances, logistique et administration au service de la conservation forestière.
            </p>
            {{-- Mini stats équipe --}}
            <div class="inline-flex items-center gap-6 bg-white rounded-2xl px-6 py-3 shadow-sm border border-gray-100">
                @foreach([
                    ['val' => '7',   'label' => 'Membres'],
                    ['val' => '3',   'label' => 'Domaines'],
                    ['val' => 'RDC', 'label' => 'Terrain'],
                ] as $s)
                <div class="flex flex-col items-center @if(!$loop->last) border-r border-gray-100 pr-6 @endif">
                    <span class="text-forest-700 font-black text-lg leading-none">{{ $s['val'] }}</span>
                    <span class="text-gray-400 text-[11px] mt-0.5">{{ $s['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Grille des cartes : 3 cols desktop, 2 tablette, 1 mobile --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 reveal">

            <x-team-card
                name="Conti Vincenzo"
                role="Projet Portfolio Manager & Co-Fondateur"
                subtitle="Gérant BFD – Bâtir sur des Fondements Durables"
                description="Expert en gestion de portefeuille de projets environnementaux et co-fondateur du programme ConsForest Maniema, coordonnant l'ensemble des opérations terrain et institutionnelles."
                photo="Conti Vincenzo.png"
                email="proj.eco.kinma@gmail.com"
                color="green"
            />

            <x-team-card
                name="BASADILA Bienvenue-David"
                role="Gérant New Goshen"
                subtitle="Partenaire carbone REDD+"
                description="Responsable du partenariat New Goshen pour la certification REDD+ et la commercialisation des crédits carbone sur les marchés volontaires internationaux."
                photo="BASADILA Bienvenue-David .png"
                email="proj.eco.kinma@gmail.com"
                color="blue"
            />

            <x-team-card
                name="Kabila Ngoie Lise"
                role="Responsable Finances"
                description="Gestion financière et comptable du programme ConsForest Maniema — budgétisation, suivi des flux et reporting financier aux partenaires institutionnels."
                photo="Kabila Ngoie Lise.png"
                email="proj.eco.kinma@gmail.com"
                color="gold"
            />

            <x-team-card
                name="Gisele Kasongo"
                role="Project Portfolio Office"
                description="Coordinatrice PPO : suivi des livrables, reporting des indicateurs de performance et interface entre les équipes terrain et la direction du programme."
                photo="Gisele Kasongo .png"
                email="proj.eco.kinma@gmail.com"
                color="green"
            />

            <x-team-card
                name="Ir KIMBU KAHOHO Charles"
                role="Technicien du Projet"
                :description="[
                    'Chef de Travaux à l\'Université Pédagogique Nationale (UPN).',
                    'Directeur Général de l\'Institut Supérieur d\'Études Agronomiques de Kasangulu.',
                    'Consultant au Ministère de l\'Environnement — expertise MRV et écosystèmes forestiers.',
                ]"
                photo="Ir KIMBU KAHOHO Charles.png"
                email="proj.eco.kinma@gmail.com"
                color="blue"
            />

            <x-team-card
                name="Dr. Patrique Sabwe"
                role="Directeur des Ressources Humaines"
                description="Pilotage du capital humain du programme : recrutement, développement des équipes terrain et gestion des relations sociales avec les communautés locales."
                email="proj.eco.kinma@gmail.com"
                color="gold"
            />

            <x-team-card
                name="FERUZI BIKUGI Baudouin"
                role="Responsable Logistique Kindu"
                description="Coordination logistique sur le terrain dans la province du Maniema — approvisionnement, mobilisation des équipes et gestion des opérations à Kindu."
                email="proj.eco.kinma@gmail.com"
                color="green"
            />

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     CTA
══════════════════════════════════════════ --}}
<section class="py-16 border-t border-gray-100 bg-white cf-net-bg">
    <div class="max-w-2xl mx-auto px-4 text-center reveal">

        <h2 class="section-title mb-4">
            Rejoignez le <span class="gold">mouvement</span>
        </h2>
        <p class="text-gray-400 text-sm leading-relaxed mb-8 max-w-xl mx-auto">
            Investisseur, partenaire institutionnel ou chercheur — notre équipe est à votre disposition
            pour parler conservation forestière et crédits carbone en RDC.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ route('contact') }}" class="btn-gold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Contactez-nous
            </a>
            <a href="{{ route('certification') }}"
               class="btn-ghost-white"
               style="color: #374151; border-color: #e5e7eb; background: transparent;">
                Certification REDD+
            </a>
        </div>

    </div>
</section>

@endsection
