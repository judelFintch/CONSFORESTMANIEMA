@extends('layouts.app')

@section('title', 'Impact Communautaire – Développement Social ConsForest Maniema')
@section('description', 'ConsForest Maniema génère un impact social positif en province du Maniema : emplois locaux, sensibilisation environnementale, alternatives économiques durables et gouvernance forestière participative.')
@section('keywords', 'impact communautaire Maniema, développement social RDC, emplois verts Congo, sensibilisation forêt, communautés locales conservation')

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
            <span class="text-white font-medium">Impact Communautaire</span>
        </nav>

        <span class="section-badge white mb-5">Développement social</span>

        <h1 style="font-family: var(--font-display);"
            class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight">
            Impact <span style="color: #f0b429;">Communautaire</span>
        </h1>
        <p class="text-white/65 text-lg max-w-xl leading-relaxed">
            Les communautés locales au cœur du programme — acteurs, bénéficiaires
            et gardiens de la forêt du Maniema.
        </p>

        <div class="flex flex-wrap gap-5 mt-10">
            @foreach([
                ['val' => '50 K+', 'unit' => '',      'label' => 'Bénéficiaires directs'],
                ['val' => '6',     'unit' => '',      'label' => 'Axes sociaux'],
                ['val' => '4',     'unit' => '',      'label' => 'Alternatives économiques'],
                ['val' => '100%',  'unit' => '',      'label' => 'Inclusif & participatif'],
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
     PHILOSOPHIE
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <div class="reveal-left">
                <span class="section-badge mb-5">Notre philosophie</span>
                <h2 class="section-title mb-5">
                    La conservation au <span class="forest">service des personnes</span>
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    ConsForest Maniema part d'un constat fondamental :
                    <strong class="text-forest-700">la protection durable des forêts n'est possible qu'avec
                    et pour les communautés qui en dépendent</strong>.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Les populations riveraines sont les premières gardiennes de ces écosystèmes —
                    elles doivent aussi en être les premiers bénéficiaires. Notre approche intègre
                    systématiquement les communautés dans la conception, la mise en œuvre et le suivi des activités.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    Cette co-construction garantit l'appropriation locale du projet et la durabilité
                    des résultats bien au-delà de la durée du programme.
                </p>

                <div class="grid grid-cols-2 gap-3">
                    @foreach([
                        ['ico' => 'M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z', 'txt' => 'Participation active'],
                        ['ico' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',           'txt' => 'Partage équitable'],
                        ['ico' => 'M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5', 'txt' => 'Formation locale'],
                        ['ico' => 'M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582',   'txt' => 'Droits fonciers'],
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
                @if(file_exists(public_path('images/2.jpeg')))
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('images/2.jpeg') }}" alt="Équipe terrain" class="w-full h-72 object-cover">
                </div>
                @endif
                <div class="grid grid-cols-2 gap-3 mt-3">
                    @if(file_exists(public_path('images/3.jpeg')))
                    <div class="rounded-xl overflow-hidden"><img src="{{ asset('images/3.jpeg') }}" alt="Communauté" class="w-full h-32 object-cover"></div>
                    @endif
                    @if(file_exists(public_path('images/4.jpeg')))
                    <div class="rounded-xl overflow-hidden"><img src="{{ asset('images/4.jpeg') }}" alt="Terrain" class="w-full h-32 object-cover"></div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     RETOMBÉES SOCIALES — 6 axes
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Impact direct</span>
            <h2 class="section-title mb-3">Retombées sociales <span class="forest">directes</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Des bénéfices concrets et mesurables pour les populations des territoires de Kailo et Pangi.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                [
                    'icon' => 'M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z',
                    'title' => 'Emplois locaux verts',
                    'desc'  => 'Gardes forestiers, agents terrain, pépiniéristes, techniciens environnementaux et gestionnaires communautaires.',
                    'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.08)',
                ],
                [
                    'icon' => 'M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5',
                    'title' => 'Formation & éducation',
                    'desc'  => 'Gestion forestière, agroforesterie, conservation de la nature et entrepreneuriat vert pour les jeunes.',
                    'color' => '#1d6fa8', 'bg' => 'rgba(29,111,168,0.08)',
                ],
                [
                    'icon' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3 1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6',
                    'title' => 'Partage des revenus',
                    'desc'  => 'Mécanisme équitable de redistribution directe des revenus des crédits carbone aux communautés participantes.',
                    'color' => '#d97706', 'bg' => 'rgba(217,119,6,0.08)',
                ],
                [
                    'icon' => 'M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z',
                    'title' => 'Services sociaux',
                    'desc'  => 'Financement de services de base — eau potable, santé, éducation — grâce aux revenus générés par le programme.',
                    'color' => '#7c3aed', 'bg' => 'rgba(124,58,222,0.08)',
                ],
                [
                    'icon' => 'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18',
                    'title' => 'Agroforesterie',
                    'desc'  => 'Systèmes permettant de concilier production alimentaire locale et conservation forestière à long terme.',
                    'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.08)',
                ],
                [
                    'icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918',
                    'title' => 'Droits fonciers',
                    'desc'  => 'Appui à la sécurisation des droits fonciers coutumiers sur les terres et ressources forestières des communautés.',
                    'color' => '#1d6fa8', 'bg' => 'rgba(29,111,168,0.08)',
                ],
            ] as $item)
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4"
                     style="background: {{ $item['bg'] }};">
                    <svg class="w-5 h-5" style="color: {{ $item['color'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $item['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2">{{ $item['title'] }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     SENSIBILISATION
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <div class="reveal-left">
                <span class="section-badge mb-5">Éducation</span>
                <h2 class="section-title mb-5">
                    Programme de <span class="forest">sensibilisation</span>
                </h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-6">
                    La sensibilisation est un pilier fondamental du programme. Elle vise à transformer
                    les comportements et à bâtir une culture environnementale durable
                    au sein des communautés du Maniema.
                </p>
                <div class="space-y-3">
                    @foreach([
                        ['icon' => 'M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5', 'title' => 'Éducation scolaire', 'desc' => "Intégration de modules environnementaux dans les cursus scolaires locaux."],
                        ['icon' => 'M3.75 19.5l16.5-15M3.75 4.5l16.5 15', 'title' => 'Radios communautaires', 'desc' => "Émissions régulières sur la conservation et les bonnes pratiques forestières."],
                        ['icon' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25m9.75-13.5v13.5m-9.75 0h9.75M9 3.75v11.25m0 0h6', 'title' => 'Théâtre communautaire', 'desc' => "Représentations culturelles sur les enjeux de la forêt et du changement climatique."],
                        ['icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582', 'title' => 'Sorties terrain', 'desc' => "Visites de forêts et d'écosystèmes pour les jeunes et les communautés."],
                    ] as $prog)
                    <div class="flex items-start gap-4 p-4 rounded-xl border border-green-100 bg-green-50 hover:bg-green-100/50 transition-colors">
                        <div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center flex-shrink-0 shadow-sm">
                            <svg class="w-4 h-4 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $prog['icon'] }}"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 text-sm">{{ $prog['title'] }}</p>
                            <p class="text-gray-500 text-xs mt-0.5 leading-relaxed">{{ $prog['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="reveal-right space-y-4">
                <div class="rounded-2xl overflow-hidden shadow-xl bg-gray-100 h-56 flex items-center justify-center">
                    <div class="text-center">
                        <div class="w-16 h-16 rounded-2xl bg-forest-100 flex items-center justify-center mx-auto mb-3">
                            <svg class="w-8 h-8 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                      d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07"/>
                            </svg>
                        </div>
                        <p class="text-forest-600 text-sm font-medium">Photos terrain à venir</p>
                        <p class="text-gray-400 text-xs mt-1">Sessions de sensibilisation communautaire</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="rounded-xl overflow-hidden shadow-sm bg-gray-100 h-32 flex items-center justify-center">
                        <div class="text-center px-3">
                            <p class="text-gray-400 text-xs">Ateliers formation</p>
                        </div>
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-sm bg-gray-100 h-32 flex items-center justify-center">
                        <div class="text-center px-3">
                            <p class="text-gray-400 text-xs">Activités jeunesse</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     ALTERNATIVES ÉCONOMIQUES
══════════════════════════════════════════ --}}
<section class="py-16 bg-institutional cf-net-bg text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge white mb-5">Économie durable</span>
            <h2 class="section-title text-white mb-3">
                Alternatives <span style="color: #f0b429;">économiques durables</span>
            </h2>
            <p class="text-white/50 text-sm max-w-md mx-auto">
                Réduire la pression sur les forêts en proposant des sources de revenus
                qui respectent les écosystèmes.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 reveal">
            @foreach([
                [
                    'icon' => 'M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18',
                    'title' => 'Agroforesterie',
                    'desc'  => 'Cultures sous couvert arboré — production alimentaire compatible avec la conservation.',
                    'color' => '#4ade80',
                ],
                [
                    'icon' => 'M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.562.562 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z',
                    'title' => 'Apiculture',
                    'desc'  => 'Miel et pollinisation — activité rentable et bénéfique pour la régénération forestière.',
                    'color' => '#f0b429',
                ],
                [
                    'icon' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1 1 .03 2.688-1.379 2.688H4.178c-1.408 0-2.38-1.688-1.379-2.688L5 14.5',
                    'title' => 'Plantes médicinales',
                    'desc'  => 'Valorisation des ressources forestières non ligneuses (PFNL) à haute valeur commerciale.',
                    'color' => '#a78bfa',
                ],
                [
                    'icon' => 'M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z',
                    'title' => 'Écotourisme',
                    'desc'  => 'Tourisme naturel et culturel en forêt — source de revenus durables et vitrine du programme.',
                    'color' => '#93c5fd',
                ],
            ] as $alt)
            <div class="rounded-2xl p-5" style="background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12);">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4"
                     style="background: {{ $alt['color'] }}20;">
                    <svg class="w-5 h-5" style="color: {{ $alt['color'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $alt['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="font-bold text-white text-sm mb-2">{{ $alt['title'] }}</h3>
                <p class="text-white/55 text-xs leading-relaxed">{{ $alt['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     GOUVERNANCE FORESTIÈRE
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Gouvernance</span>
            <h2 class="section-title mb-3">Gouvernance forestière <span class="gold">locale</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Renforcer les structures communautaires pour une gestion durable et autonome des ressources naturelles.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 reveal">
            @foreach([
                ['icon' => 'M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z', 'title' => 'Comités Locaux de Conservation', 'desc' => 'Mise en place de comités villageois chargés de surveiller et gérer les ressources forestières locales.',       'c' => '#16a34a', 'b' => 'rgba(22,163,74,0.08)'],
                ['icon' => 'M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z', 'title' => 'Plans de Gestion Communautaire', 'desc' => "Élaboration participative de plans de gestion forestière adaptés aux réalités et usages locaux.",            'c' => '#1d6fa8', 'b' => 'rgba(29,111,168,0.08)'],
                ['icon' => 'M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75', 'title' => 'Accords de Conservation',      'desc' => "Signature d'accords formels entre les communautés, BFD SARL et les autorités locales des territoires.",    'c' => '#d97706', 'b' => 'rgba(217,119,6,0.08)'],
                ['icon' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z', 'title' => 'Suivi Participatif',            'desc' => "Formation aux techniques de monitoring et de reporting environnemental pour l'auto-évaluation.",          'c' => '#7c3aed', 'b' => 'rgba(124,58,222,0.08)'],
            ] as $gov)
            <div class="flex items-start gap-4 bg-white rounded-2xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                     style="background: {{ $gov['b'] }};">
                    <svg class="w-5 h-5" style="color: {{ $gov['c'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $gov['icon'] }}"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-sm mb-1.5">{{ $gov['title'] }}</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">{{ $gov['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     CTA
══════════════════════════════════════════ --}}
<section class="py-16 border-t border-gray-100 bg-white cf-net-bg">
    <div class="max-w-2xl mx-auto px-4 text-center reveal">
        <h2 class="section-title mb-4">
            Amplifier l'<span class="gold">impact social</span>
        </h2>
        <p class="text-gray-400 text-sm leading-relaxed mb-8 max-w-xl mx-auto">
            Rejoignez le programme ou devenez partenaire pour amplifier l'impact
            sur les communautés locales du Maniema.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ route('contact') }}" class="btn-gold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>
            <a href="{{ route('partners') }}"
               class="btn-ghost-white"
               style="color: #374151; border-color: #e5e7eb; background: transparent;">
                Nos partenaires →
            </a>
        </div>
    </div>
</section>

@endsection
