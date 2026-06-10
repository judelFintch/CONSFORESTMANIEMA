@extends('layouts.app')

@section('title', 'À propos – BFD SARL & ConsForest Maniema')
@section('description', 'Découvrez la vision, la mission et les valeurs du projet ConsForest Maniema porté par BFD SARL en partenariat avec New Goshen, le Gouvernement RDC et le Ministère de l\'Environnement.')
@section('keywords', 'BFD SARL, à propos ConsForest Maniema, vision mission, New Goshen, gouvernement RDC, conservation forêt Congo')

@section('content')

{{-- ══════════════════════════════════════════
     PAGE HEADER
══════════════════════════════════════════ --}}
<div class="page-header pt-32 pb-20">
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-5" aria-label="Fil d'Ariane">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <span class="text-white font-medium">À propos</span>
        </nav>
        <span class="section-badge white mb-5">Qui sommes-nous</span>
        <h1 class="font-display text-4xl sm:text-5xl font-bold text-white mb-4 leading-tight" style="font-family: var(--font-display);">
            BFD SARL &amp;<br class="hidden sm:block"> ConsForest Maniema
        </h1>
        <p class="text-white/70 text-lg max-w-xl leading-relaxed">
            Conservation forestière, crédits carbone certifiés REDD+ et développement durable
            au cœur de la province du Maniema, RDC.
        </p>
    </div>
</div>


{{-- ══════════════════════════════════════════
     CONTEXTE
══════════════════════════════════════════ --}}
<section class="py-16 bg-white">
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
                </p>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    Face aux menaces croissantes — déforestation, exploitation illégale, expansion agricole —
                    <strong class="text-forest-700">BFD SARL</strong> a lancé ConsForest Maniema,
                    un programme structuré de conservation forestière, de reboisement et de développement durable.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Développé en collaboration avec le <strong>Gouvernement de la RDC</strong> et le
                    <strong>Ministère de l'Environnement</strong>, le programme garantit un ancrage
                    institutionnel solide et une légitimité nationale.
                </p>
            </div>

            <div class="reveal-right">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('images/2.jpeg') }}"
                         alt="Équipe terrain Maniema"
                         class="w-full h-64 object-cover">
                </div>
                <div class="grid grid-cols-2 gap-3 mt-3">
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('images/3.jpeg') }}" alt="Terrain forêt" class="w-full h-28 object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden">
                        <img src="{{ asset('images/4.jpeg') }}" alt="Communauté" class="w-full h-28 object-cover">
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
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-green-100 reveal">
                <div class="w-11 h-11 bg-green-50 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-5 h-5 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base mb-3">Notre Vision</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Faire de la RDC un acteur majeur de la <strong class="text-forest-700">séquestration
                    du carbone</strong> en protégeant et restaurant ses forêts tropicales pour lutter
                    contre le changement climatique mondial.
                </p>
            </div>

            {{-- Mission --}}
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-blue-100 reveal">
                <div class="w-11 h-11 bg-blue-50 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base mb-3">Notre Mission</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Protéger, restaurer et valoriser les forêts du Maniema à travers un programme de
                    <strong class="text-blue-700">conservation REDD+</strong>, de reboisement, de crédits
                    carbone certifiés et d'accompagnement des communautés locales.
                </p>
            </div>

            {{-- Valeurs --}}
            <div class="bg-white rounded-2xl p-7 shadow-sm border border-amber-100 reveal">
                <div class="w-11 h-11 bg-amber-50 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-900 text-base mb-3">Nos Valeurs</h3>
                <ul class="space-y-2">
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
<section class="py-16 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Les acteurs</span>
            <h2 class="section-title mb-3">BFD SARL <span class="forest">&amp; New Goshen</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Deux partenaires complémentaires pour un projet intégré de conservation et de valorisation carbone.
            </p>
        </div>

        <div class="bg-institutional rounded-2xl p-8 sm:p-10 text-white reveal">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                {{-- BFD SARL --}}
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center font-bold text-xs"
                             style="background: rgba(52,201,97,0.15); color: #4ade80;">BFD</div>
                        <div>
                            <p class="font-bold text-white text-sm leading-tight">BFD SARL</p>
                            <p class="text-xs" style="color: #4ade80;">Porteur de projet</p>
                        </div>
                    </div>
                    <p class="text-white/70 text-sm leading-relaxed mb-5">
                        <em class="not-italic font-semibold text-white/90">Bâtir sur des Fondements Durables</em> —
                        société congolaise engagée dans le développement durable, la protection de l'environnement
                        et l'accompagnement des communautés locales.
                    </p>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach(['Territoire Kailo', 'Territoire Pangi', 'Province Maniema', 'RDC'] as $z)
                        <div class="rounded-lg px-3 py-2 text-xs text-white/60"
                             style="background: rgba(255,255,255,0.07);">{{ $z }}</div>
                        @endforeach
                    </div>
                </div>

                {{-- New Goshen --}}
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl flex items-center justify-center font-bold text-xs"
                             style="background: rgba(96,165,250,0.15); color: #93c5fd;">NG</div>
                        <div>
                            <p class="font-bold text-white text-sm leading-tight">New Goshen</p>
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
                        <div class="rounded-lg px-3 py-2 text-xs text-white/60"
                             style="background: rgba(255,255,255,0.07);">{{ $z }}</div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     CADRE INSTITUTIONNEL
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50">
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
                ['init' => 'RDC', 'name' => 'Gouvernement RDC',   'desc' => 'Partenaire institutionnel principal. Cadre légal et soutien politique au plus haut niveau.',      'color' => '#1d4ed8', 'bg' => 'rgba(29,78,216,0.08)'],
                ['init' => 'ME',  'name' => 'Min. Environnement', 'desc' => 'Autorité de tutelle. Délivrance des autorisations et suivi réglementaire REDD+.',                'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.08)'],
                ['init' => 'MAN', 'name' => 'Province Maniema',   'desc' => 'Ancrage territorial. Gouvernorat provincial et coordination avec les territoires de Kailo & Pangi.', 'color' => '#d97706', 'bg' => 'rgba(217,119,6,0.08)'],
                ['init' => 'ONG', 'name' => 'Partenaires Intl.',  'desc' => 'Organisations techniques et bailleurs de fonds engagés dans la conservation forestière mondiale.',  'color' => '#6b7280', 'bg' => 'rgba(107,114,128,0.08)'],
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
     CTA
══════════════════════════════════════════ --}}
<section class="py-16 border-t border-gray-100 bg-white">
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
