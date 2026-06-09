@extends('layouts.app')

@section('title', 'Crédit Carbone – Séquestration CO₂ et Certification ConsForest Maniema')
@section('description', 'Découvrez comment le projet ConsForest Maniema génère des crédits carbone certifiés grâce à la conservation des forêts du Maniema, RDC. Mécanisme REDD+, séquestration CO₂, bénéfices économiques.')
@section('keywords', 'crédit carbone RDC, REDD+ Congo, séquestration CO2, conservation carbone Maniema, marché carbone, forêt carbone certifié')

@section('content')

{{-- Page Header --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4">
            <a href="{{ route('home') }}">Accueil</a><span>/</span>
            <span class="text-white font-medium">Crédit Carbone</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Crédit Carbone</h1>
        <p class="text-white/80 text-xl max-w-2xl">
            Valoriser la conservation forestière par des mécanismes de certification carbone reconnus internationalement.
        </p>
    </div>
</div>


{{-- Qu'est-ce qu'un crédit carbone --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="animate-fade-up">
                <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 rounded-full px-4 py-1.5 text-sm font-medium mb-6">
                    💨 Comprendre le mécanisme
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    Qu'est-ce qu'un Crédit Carbone ?
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-5">
                    Un <strong class="text-blue-700">crédit carbone</strong> est une unité de mesure représentant
                    la réduction ou la séquestration d'une <strong>tonne de CO₂ équivalent</strong> dans
                    l'atmosphère. Il constitue un outil financier central dans la lutte contre le changement climatique.
                </p>
                <p class="text-gray-600 leading-relaxed mb-5">
                    Les forêts jouent un rôle fondamental : elles absorbent le CO₂ atmosphérique par
                    photosynthèse et le stockent dans leur biomasse et dans le sol. En protégeant les forêts
                    du Maniema, le projet ConsForest génère et valorise ce service écosystémique.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Ces crédits sont achetés par des entreprises et des États souhaitant compenser leurs
                    émissions résiduelles, créant ainsi un <strong>flux de revenus durable</strong> pour
                    financer la conservation et le développement local.
                </p>
            </div>

            <div class="space-y-4 animate-fade-up">
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 border border-blue-200">
                    <div class="text-5xl font-bold text-blue-700 mb-2">1 t</div>
                    <p class="text-blue-800 font-semibold">1 Crédit Carbone</p>
                    <p class="text-blue-600 text-sm">= 1 tonne de CO₂ évitée ou séquestrée</p>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-green-50 rounded-xl p-4 border border-green-200">
                        <div class="text-2xl mb-2">🌳</div>
                        <p class="font-semibold text-green-800 text-sm">Forêts & Carbone</p>
                        <p class="text-green-600 text-xs mt-1">Les forêts stockent 45% du carbone terrestre</p>
                    </div>
                    <div class="bg-amber-50 rounded-xl p-4 border border-amber-200">
                        <div class="text-2xl mb-2">📜</div>
                        <p class="font-semibold text-amber-800 text-sm">Certification</p>
                        <p class="text-amber-600 text-xs mt-1">Standards VCS, Gold Standard, REDD+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Séquestration CO2 --}}
<section class="py-20 bg-forest-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Comment les Forêts Séquestrent le Carbone</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @foreach([
                ['step' => '1', 'icon' => '☀️', 'title' => 'Photosynthèse', 'desc' => 'Les feuilles captent l\'énergie solaire et absorbent le CO₂ atmosphérique pour produire de la matière organique.'],
                ['step' => '2', 'icon' => '🌲', 'title' => 'Stockage biomasse', 'desc' => 'Le carbone est incorporé dans le bois, les racines, la litière et le sol forestier, où il reste stocké des siècles.'],
                ['step' => '3', 'icon' => '🌍', 'title' => 'Service climatique', 'desc' => 'La forêt agit comme un puits naturel de carbone, contrebalançant les émissions humaines de gaz à effet de serre.'],
            ] as $s)
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-green-100 animate-fade-up">
                <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center text-2xl mx-auto mb-4">
                    {{ $s['icon'] }}
                </div>
                <div class="text-xs text-green-500 font-bold mb-2">ÉTAPE {{ $s['step'] }}</div>
                <h3 class="font-bold text-gray-900 mb-2">{{ $s['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $s['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Mécanisme REDD+ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <div>
                <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 rounded-full px-4 py-1.5 text-sm font-medium mb-6">
                    Mécanisme REDD+
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    Réduction des Émissions Issues de la Déforestation
                </h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Le programme ConsForest Maniema s'appuie sur le mécanisme <strong class="text-green-700">REDD+</strong>
                    (Réduction des Émissions liées à la Déforestation et à la Dégradation des forêts), cadre
                    international reconnu par la CCNUCC pour valoriser la conservation forestière.
                </p>
                <div class="space-y-4">
                    @foreach([
                        ['title' => 'Référence de base', 'desc' => 'Établissement d\'un scénario de référence (déforestation sans le projet)'],
                        ['title' => 'Mesure des réductions', 'desc' => 'Quantification rigoureuse des émissions évitées grâce aux activités de conservation'],
                        ['title' => 'Vérification indépendante', 'desc' => 'Audit par des organismes tiers accrédités internationalement'],
                        ['title' => 'Émission des crédits', 'desc' => 'Génération et enregistrement des crédits dans des registres reconnus'],
                        ['title' => 'Distribution des bénéfices', 'desc' => 'Partage équitable des revenus avec les communautés locales'],
                    ] as $step)
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-green-600 text-white rounded-full flex items-center justify-center text-xs flex-shrink-0 mt-0.5">✓</div>
                        <div>
                            <p class="font-semibold text-gray-900 text-sm">{{ $step['title'] }}</p>
                            <p class="text-gray-500 text-sm">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-5">
                <div class="bg-gradient-to-br from-blue-950 to-green-950 rounded-3xl p-8 text-white">
                    <h3 class="font-bold text-xl text-white mb-5">Bénéfices pour l'Environnement</h3>
                    <ul class="space-y-3">
                        @foreach([
                            'Réduction directe des émissions de GES',
                            'Séquestration durable du CO₂',
                            'Protection de la biodiversité',
                            'Préservation des cycles de l\'eau',
                            'Stabilisation du microclimat local',
                        ] as $b)
                        <li class="flex items-center gap-2 text-white/80 text-sm">
                            <svg class="w-4 h-4 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            {{ $b }}
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-amber-50 rounded-3xl p-8 border border-amber-200">
                    <h3 class="font-bold text-xl text-gray-900 mb-5">🏦 Bénéfices Économiques</h3>
                    <ul class="space-y-3">
                        @foreach([
                            'Revenus certifiés pour le projet',
                            'Financement de la conservation',
                            'Emplois locaux verts',
                            'Alternatives économiques durables',
                            'Attractivité investissements ESG',
                        ] as $b)
                        <li class="flex items-center gap-2 text-gray-600 text-sm">
                            <svg class="w-4 h-4 text-amber-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
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


{{-- Acheteurs potentiels --}}
<section class="py-20 bg-institutional-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Qui Achète les Crédits Carbone ?</h2>
            <p class="text-gray-600 max-w-xl mx-auto">Un marché mondial en pleine croissance, porté par les engagements climatiques mondiaux.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['icon' => '🏭', 'title' => 'Industries', 'desc' => 'Entreprises cherchant à compenser leurs émissions résiduelle et atteindre la neutralité carbone.'],
                ['icon' => '✈️', 'title' => 'Transport', 'desc' => 'Compagnies aériennes, maritimes et de transport engagées dans des programmes de compensation.'],
                ['icon' => '🏦', 'title' => 'Finance & ESG', 'desc' => 'Banques et fonds d\'investissement développant des portefeuilles alignés sur les critères ESG.'],
                ['icon' => '🏛️', 'title' => 'Gouvernements', 'desc' => 'États souhaitant atteindre leurs engagements NDC dans le cadre de l\'Accord de Paris.'],
            ] as $buyer)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 card-hover">
                <span class="text-3xl mb-3 block">{{ $buyer['icon'] }}</span>
                <h3 class="font-bold text-gray-900 mb-2">{{ $buyer['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $buyer['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- CTA Investisseurs --}}
<section class="py-16 bg-gradient-to-r from-green-900 to-blue-900">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">
            Intéressé par nos Crédits Carbone ?
        </h2>
        <p class="text-white/80 text-lg mb-8">
            Contactez l'équipe ConsForest Maniema pour discuter des opportunités de partenariat
            carbone et d'acquisition de crédits certifiés.
        </p>
        <a href="{{ route('contact') }}" class="btn-outline px-8 py-4">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Prendre contact
        </a>
    </div>
</section>

@endsection
