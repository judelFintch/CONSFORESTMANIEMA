@extends('layouts.app')

@section('title', 'Conservation Forestière – Protection des Forêts du Maniema')
@section('description', 'ConsForest Maniema protège les forêts du Bassin du Congo : lutte contre la déforestation, restauration des espaces dégradés, préservation de la biodiversité en province du Maniema, RDC.')
@section('keywords', 'conservation forestière Maniema, protection forêt Congo, déforestation RDC, restauration forêt, biodiversité bassin Congo, reboisement')

@section('content')

{{-- ══════════════════════════════════════════
     PAGE HEADER — forêt + Ken Burns
══════════════════════════════════════════ --}}
<div class="page-header pt-32 pb-24" style="min-height: 420px;">

    @if(file_exists(public_path('images/hero-foret.jpg')))
    <div class="absolute inset-0 z-0 overflow-hidden">
        <div class="hero-forest-anim w-full h-full">
            <img src="{{ asset('images/hero-foret.jpg') }}" alt="Forêt du Maniema"
                 class="w-full h-full object-cover opacity-20" loading="eager">
        </div>
    </div>
    @endif

    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-5">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <span class="text-white font-medium">Conservation Forestière</span>
        </nav>

        <span class="section-badge white mb-5">Programme de conservation</span>

        <h1 style="font-family: var(--font-display);"
            class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight">
            Conservation <span style="color: #f0b429;">Forestière</span>
        </h1>
        <p class="text-white/65 text-lg max-w-xl leading-relaxed">
            Protéger, restaurer et préserver le patrimoine forestier de la province du Maniema —
            au cœur du deuxième plus grand massif tropical de la planète.
        </p>

        <div class="flex flex-wrap gap-5 mt-10">
            @foreach([
                ['val' => '336M', 'unit' => 'ha',  'label' => 'Bassin du Congo'],
                ['val' => '~70%', 'unit' => '',     'label' => 'Couverture Maniema'],
                ['val' => '2',    'unit' => '',      'label' => 'Territoires actifs'],
                ['val' => '6',    'unit' => '',      'label' => 'Menaces identifiées'],
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
     BASSIN DU CONGO — introduction
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
            <div class="reveal-left">
                <span class="section-badge mb-5">Le Bassin du Congo</span>
                <h2 class="section-title mb-5">
                    Le poumon <span class="forest">vert</span> de la planète
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    S'étendant sur plus de <strong class="text-forest-700">336 millions d'hectares</strong>,
                    la forêt du Bassin du Congo est le deuxième plus grand massif forestier tropical au monde.
                    Elle absorbe des milliards de tonnes de CO₂ chaque année et régule le climat de toute l'Afrique centrale.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    La province du Maniema, avec près de <strong class="text-forest-700">70 % de couverture forestière</strong>,
                    constitue l'un des bastions les plus précieux de cet écosystème mondial. Sa protection
                    est une priorité absolue pour l'avenir climatique de la planète.
                </p>
                <div class="flex flex-col gap-2.5">
                    @foreach([
                        ['ico' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',           'txt' => 'Deuxième forêt tropicale mondiale'],
                        ['ico' => 'M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582',   'txt' => 'Régulation climatique continentale'],
                        ['ico' => 'M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a1.125 1.125 0 001.364-.372l.905-1.812a1.125 1.125 0 00.12-.724l-.29-1.74',
                                                                                                            'txt' => 'Biodiversité exceptionnelle endémique'],
                        ['ico' => 'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z',
                                                                                                            'txt' => '80 millions de personnes dépendent de ces forêts'],
                    ] as $pt)
                    <div class="flex items-center gap-3 text-gray-600 text-sm">
                        <div class="w-7 h-7 bg-green-50 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $pt['ico'] }}"/>
                            </svg>
                        </div>
                        {{ $pt['txt'] }}
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Stats cards --}}
            <div class="reveal-right">
                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['val' => '336M',  'unit' => 'ha',     'label' => 'Surface forestière',     'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.06)'],
                        ['val' => '600+',  'unit' => '',       'label' => "Espèces d'arbres",         'color' => '#d97706', 'bg' => 'rgba(217,119,6,0.06)'],
                        ['val' => '400+',  'unit' => '',       'label' => 'Espèces mammifères',       'color' => '#1d6fa8', 'bg' => 'rgba(29,111,168,0.06)'],
                        ['val' => '1 000+','unit' => '',       'label' => "Espèces d'oiseaux",        'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.06)'],
                    ] as $st)
                    <div class="rounded-2xl p-5 border border-gray-100" style="background: {{ $st['bg'] }};">
                        <p class="font-black text-2xl mb-0.5" style="color: {{ $st['color'] }};">
                            {{ $st['val'] }}<span class="text-sm">{{ $st['unit'] }}</span>
                        </p>
                        <p class="text-gray-500 text-xs">{{ $st['label'] }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="mt-4 bg-forest-50 rounded-2xl p-5 border border-forest-100">
                    <p class="text-forest-800 text-xs font-semibold mb-1.5">Province du Maniema</p>
                    <div class="flex items-center gap-3">
                        <div class="flex-1 bg-white rounded-full h-2 overflow-hidden">
                            <div class="h-full rounded-full bg-forest-500" style="width: 70%;"></div>
                        </div>
                        <span class="text-forest-700 font-bold text-sm">~70%</span>
                    </div>
                    <p class="text-forest-600/70 text-xs mt-1.5">Taux de couverture forestière</p>
                </div>
            </div>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     LES MENACES
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Analyse terrain</span>
            <h2 class="section-title mb-3">Les menaces <span class="gold">identifiées</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Une analyse rigoureuse des causes de dégradation forestière en province du Maniema.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                [
                    'icon' => 'M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z M12 18a3.75 3.75 0 00.495-7.468 5.99 5.99 0 00-1.925 3.547 5.975 5.975 0 01-2.133-1.001A3.75 3.75 0 0012 18z',
                    'title' => 'Déforestation illégale',
                    'desc'  => "L'abattage non contrôlé pour le bois de chauffage et le charbon constitue la principale menace directe sur les massifs forestiers.",
                    'level' => 'Critique',
                    'lc'    => '#ef4444', 'lb' => 'rgba(239,68,68,0.10)',
                ],
                [
                    'icon' => 'M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z',
                    'title' => 'Exploitation minière',
                    'desc'  => "Les activités minières artisanales et industrielles dégradent les sols forestiers et contaminent les cours d'eau de la région.",
                    'level' => 'Élevée',
                    'lc'    => '#f97316', 'lb' => 'rgba(249,115,22,0.10)',
                ],
                [
                    'icon' => 'M9 9V4.5M9 9H4.5M9 9 3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5 5.25 5.25',
                    'title' => 'Agriculture sur brûlis',
                    'desc'  => "L'expansion des terres agricoles par la technique de déforestation et brûlis détruit plusieurs hectares chaque saison.",
                    'level' => 'Élevée',
                    'lc'    => '#f97316', 'lb' => 'rgba(249,115,22,0.10)',
                ],
                [
                    'icon' => 'M2.25 21 12 2.25 21.75 21M12 10.5v6M12 18h.01',
                    'title' => 'Expansion urbaine',
                    'desc'  => "La croissance démographique rapide génère une pression croissante sur les zones forestières périurbaines de Kindu et des chefs-lieux.",
                    'level' => 'Modérée',
                    'lc'    => '#eab308', 'lb' => 'rgba(234,179,8,0.10)',
                ],
                [
                    'icon' => 'M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z',
                    'title' => 'Feux incontrôlés',
                    'desc'  => "Les incendies de forêt, souvent d'origine humaine, ravagent des zones entières de végétation — particulièrement en saison sèche.",
                    'level' => 'Élevée',
                    'lc'    => '#f97316', 'lb' => 'rgba(249,115,22,0.10)',
                ],
                [
                    'icon' => 'M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z',
                    'title' => 'Changement climatique',
                    'desc'  => "Les perturbations climatiques amplifient la vulnérabilité des écosystèmes forestiers face à l'ensemble des autres menaces.",
                    'level' => 'Croissante',
                    'lc'    => '#8b5cf6', 'lb' => 'rgba(139,92,246,0.10)',
                ],
            ] as $t)
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                         style="background: {{ $t['lb'] }};">
                        <svg class="w-5 h-5" style="color: {{ $t['lc'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $t['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold px-2.5 py-1 rounded-lg"
                          style="background: {{ $t['lb'] }}; color: {{ $t['lc'] }};">
                        {{ $t['level'] }}
                    </span>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2">{{ $t['title'] }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $t['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     NOTRE APPROCHE — 4 étapes
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Méthodologie</span>
            <h2 class="section-title mb-3">Une stratégie <span class="forest">intégrée</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Quatre axes complémentaires pour une conservation durable et efficace sur le terrain.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal">
            @foreach([
                [
                    'num'   => '01',
                    'icon'  => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
                    'title' => 'Protection active des forêts',
                    'desc'  => 'Patrouilles forestières, postes de surveillance, formation de gardes communautaires et coordination avec les autorités locales.',
                    'tags'  => ['Zones protégées', 'Anti-braconnage', 'Alerte précoce'],
                    'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.07)',
                ],
                [
                    'num'   => '02',
                    'icon'  => 'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18',
                    'title' => 'Restauration & reboisement',
                    'desc'  => "Plantation d'espèces indigènes dans les zones dégradées, pépinières communautaires et régénération naturelle assistée.",
                    'tags'  => ['Espèces natives', 'Pépinières', 'Suivi terrain'],
                    'color' => '#d97706', 'bg' => 'rgba(217,119,6,0.07)',
                ],
                [
                    'num'   => '03',
                    'icon'  => 'M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a1.125 1.125 0 001.364-.372l.905-1.812a1.125 1.125 0 00.12-.724l-.29-1.74m3.522 1.724a6.002 6.002 0 01-5.743 7.25A6 6 0 016.115 5.19',
                    'title' => 'Protection de la biodiversité',
                    'desc'  => "Inventaires faunistiques, corridors biologiques, protection des espèces endémiques et préservation des habitats critiques.",
                    'tags'  => ['Inventaires', 'Corridors bio', 'Espèces clés'],
                    'color' => '#1d6fa8', 'bg' => 'rgba(29,111,168,0.07)',
                ],
                [
                    'num'   => '04',
                    'icon'  => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z',
                    'title' => 'Monitoring & évaluation MRV',
                    'desc'  => "Télédétection satellite, cartographie drone, rapports périodiques et évaluation d'impact pour le standard REDD+.",
                    'tags'  => ['Télédétection', 'Drone', 'Rapports REDD+'],
                    'color' => '#6b21a8', 'bg' => 'rgba(107,33,168,0.07)',
                ],
            ] as $step)
            <div class="rounded-2xl p-6 border border-gray-100 bg-white hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0"
                         style="background: {{ $step['bg'] }};">
                        <svg class="w-5 h-5" style="color: {{ $step['color'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $step['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="font-black text-sm" style="color: {{ $step['color'] }};">{{ $step['num'] }}</span>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2">{{ $step['title'] }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed mb-4">{{ $step['desc'] }}</p>
                <div class="flex flex-wrap gap-1.5">
                    @foreach($step['tags'] as $tag)
                    <span class="text-[11px] font-medium px-2.5 py-1 rounded-lg"
                          style="background: {{ $step['bg'] }}; color: {{ $step['color'] }};">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     TERRITOIRES D'INTERVENTION
══════════════════════════════════════════ --}}
<section class="py-16 bg-institutional cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-white">

        <div class="text-center mb-12 reveal">
            <span class="section-badge white mb-5">Zone d'action</span>
            <h2 class="section-title text-white mb-3">
                Deux territoires, <span style="color: #f0b429;">une forêt</span>
            </h2>
            <p class="text-white/50 text-sm max-w-md mx-auto">
                Les interventions ConsForest Maniema se concentrent sur les territoires de
                Kailo et Pangi, au cœur de la province du Maniema.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal mb-12">

            {{-- Kailo --}}
            <div class="rounded-2xl p-7" style="background: rgba(22,163,74,0.12); border: 1px solid rgba(22,163,74,0.22);">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center font-bold text-sm"
                         style="background: rgba(22,163,74,0.20); color: #4ade80;">K</div>
                    <div>
                        <p class="font-bold text-white">Territoire de Kailo</p>
                        <p class="text-xs" style="color: #4ade80;">Nord du Maniema</p>
                    </div>
                </div>
                <p class="text-white/60 text-sm leading-relaxed mb-5">
                    Territoire forestier dense avec une biodiversité remarquable.
                    Kailo concentre certains des massifs les mieux préservés de la province,
                    offrant un potentiel de séquestration carbone très élevé.
                </p>
                <div class="grid grid-cols-2 gap-2">
                    @foreach(['Forêt dense primaire', 'Faune endémique', 'Communautés riveraines', 'Bassins versants'] as $z)
                    <div class="rounded-lg px-3 py-2 text-xs flex items-center gap-1.5"
                         style="background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.55);">
                        <span class="w-1 h-1 rounded-full flex-shrink-0" style="background: #4ade80;"></span>
                        {{ $z }}
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Pangi --}}
            <div class="rounded-2xl p-7" style="background: rgba(29,111,168,0.12); border: 1px solid rgba(29,111,168,0.22);">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center font-bold text-sm"
                         style="background: rgba(29,111,168,0.20); color: #93c5fd;">P</div>
                    <div>
                        <p class="font-bold text-white">Territoire de Pangi</p>
                        <p class="text-xs" style="color: #93c5fd;">Sud du Maniema</p>
                    </div>
                </div>
                <p class="text-white/60 text-sm leading-relaxed mb-5">
                    Territoire à cheval entre forêt et savane, Pangi présente des défis spécifiques
                    liés à la pression agricole et à l'extraction minière artisanale. Un enjeu
                    de restauration majeur.
                </p>
                <div class="grid grid-cols-2 gap-2">
                    @foreach(['Zones dégradées', 'Reboisement actif', 'Agriculture durable', 'Mines artisanales'] as $z)
                    <div class="rounded-lg px-3 py-2 text-xs flex items-center gap-1.5"
                         style="background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.55);">
                        <span class="w-1 h-1 rounded-full flex-shrink-0" style="background: #93c5fd;"></span>
                        {{ $z }}
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- Chiffres province --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 reveal">
            @foreach([
                ['val' => '132 250', 'unit' => 'km²', 'label' => 'Superficie totale de la province'],
                ['val' => '~70%',    'unit' => '',      'label' => 'Territoire couvert par la forêt'],
                ['val' => '3M+',     'unit' => '',      'label' => "Habitants de la province du Maniema"],
            ] as $info)
            <div class="rounded-2xl p-5 text-center" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.10);">
                <p class="font-black text-white text-2xl mb-0.5">
                    {{ $info['val'] }}<span class="text-sm ml-0.5" style="color: #f0b429;">{{ $info['unit'] }}</span>
                </p>
                <p class="text-white/40 text-xs">{{ $info['label'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     BIODIVERSITÉ
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <div class="reveal-left">
                @if(file_exists(public_path('images/4.jpeg')))
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('images/4.jpeg') }}" alt="Biodiversité terrain" class="w-full h-72 object-cover">
                </div>
                @endif
                <div class="grid grid-cols-2 gap-3 mt-3">
                    @if(file_exists(public_path('images/2.jpeg')))
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('images/2.jpeg') }}" alt="Forêt Maniema" class="w-full h-36 object-cover">
                    </div>
                    @endif
                    @if(file_exists(public_path('images/3.jpeg')))
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('images/3.jpeg') }}" alt="Équipe terrain" class="w-full h-36 object-cover">
                    </div>
                    @endif
                </div>
            </div>

            <div class="reveal-right">
                <span class="section-badge mb-5">Biodiversité</span>
                <h2 class="section-title mb-5">
                    Un écosystème <span class="forest">irremplaçable</span>
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-5">
                    La forêt du Maniema abrite des centaines d'espèces endémiques — certaines encore
                    inconnues de la science. Sa protection est non seulement une urgence climatique,
                    mais également un impératif de préservation du vivant.
                </p>

                <div class="space-y-3">
                    @foreach([
                        ['label' => 'Flore vasculaire',   'val' => '1 400+', 'pct' => 85, 'c' => '#16a34a'],
                        ['label' => 'Mammifères',          'val' => '400+',   'pct' => 75, 'c' => '#d97706'],
                        ['label' => 'Oiseaux',             'val' => '1 000+', 'pct' => 90, 'c' => '#1d6fa8'],
                        ['label' => 'Espèces endémiques',  'val' => '~30%',   'pct' => 60, 'c' => '#7c3aed'],
                    ] as $bio)
                    <div>
                        <div class="flex justify-between text-xs mb-1.5">
                            <span class="text-gray-600 font-medium">{{ $bio['label'] }}</span>
                            <span class="font-bold" style="color: {{ $bio['c'] }};">{{ $bio['val'] }}</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-1.5">
                            <div class="h-1.5 rounded-full transition-all duration-1000"
                                 style="width: {{ $bio['pct'] }}%; background: {{ $bio['c'] }};"></div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-6 rounded-xl p-4" style="background: rgba(22,163,74,0.06); border: 1px solid rgba(22,163,74,0.12);">
                    <p class="text-forest-700 text-xs font-semibold mb-1">Espèce emblématique</p>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        L'okapi, le bonobo et l'éléphant de forêt font partie des espèces
                        menacées dont la survie dépend directement de la préservation des forêts du Maniema.
                    </p>
                </div>
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
            Soutenir la <span class="gold">conservation</span>
        </h2>
        <p class="text-gray-400 text-sm leading-relaxed mb-8 max-w-xl mx-auto">
            Investisseur, partenaire ou institution — votre engagement contribue directement à la
            protection des forêts du Maniema et à la lutte contre le changement climatique.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ route('contact') }}" class="btn-gold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>
            <a href="{{ route('carbon') }}"
               class="btn-ghost-white"
               style="color: #374151; border-color: #e5e7eb; background: transparent;">
                Crédit Carbone →
            </a>
        </div>
    </div>
</section>

@endsection
