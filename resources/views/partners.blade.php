@extends('layouts.app')

@section('title', 'Partenaires – Institutions et Organisations ConsForest Maniema')
@section('description', 'Découvrez les partenaires du projet ConsForest Maniema : BFD SARL, New Goshen, Gouvernement de la RDC, Ministère de l\'Environnement, Province du Maniema et partenaires techniques internationaux.')
@section('keywords', 'partenaires ConsForest, BFD SARL, New Goshen, gouvernement RDC, ministère environnement Congo, partenaires conservation forêt')

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
            <span class="text-white font-medium">Partenaires</span>
        </nav>

        <span class="section-badge white mb-5">Réseau & coopération</span>

        <h1 style="font-family: var(--font-display);"
            class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight">
            Nos <span style="color: #f0b429;">Partenaires</span>
        </h1>
        <p class="text-white/65 text-lg max-w-xl leading-relaxed">
            Un réseau solide d'institutions, d'entreprises et d'organisations
            engagées pour la conservation forestière et le développement durable en RDC.
        </p>

        <div class="flex flex-wrap gap-5 mt-10">
            @foreach([
                ['val' => '2',  'unit' => '',  'label' => 'Partenaires privés'],
                ['val' => '3',  'unit' => '',  'label' => 'Institutions publiques'],
                ['val' => '6',  'unit' => '+', 'label' => 'Catégories de partenaires'],
                ['val' => 'RDC','unit' => '',  'label' => 'Ancrage national'],
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
     INTRO
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center reveal">
            <span class="section-badge mb-5">Alliance multi-acteurs</span>
            <h2 class="section-title mb-5">
                Une alliance pour la <span class="forest">forêt</span> et le développement
            </h2>
            <p class="text-gray-500 text-sm leading-relaxed">
                ConsForest Maniema est le fruit d'un partenariat solide entre le secteur privé,
                les institutions publiques, les autorités locales et la coopération internationale.
                Cette approche multi-acteurs garantit la légitimité, l'efficacité et la durabilité du programme.
            </p>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     PARTENAIRES PRINCIPAUX — BFD + New Goshen
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Porteurs du projet</span>
            <h2 class="section-title mb-3">Partenaires <span class="forest">principaux</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 reveal">

            {{-- BFD SARL --}}
            <div class="bg-white rounded-2xl border border-green-100 overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="h-2" style="background: linear-gradient(90deg, #16a34a, #4ade80);"></div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center font-black text-sm"
                             style="background: rgba(22,163,74,0.10); color: #16a34a;">BFD</div>
                        <div>
                            <p class="font-bold text-gray-900 leading-tight">BFD SARL</p>
                            <span class="text-xs font-semibold px-2.5 py-0.5 rounded-lg inline-block mt-0.5"
                                  style="background: rgba(22,163,74,0.10); color: #16a34a;">Porteur de projet</span>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs mb-1 font-medium">Bâtir sur des Fondements Durables</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        Société privée congolaise qui porte et coordonne le programme ConsForest Maniema.
                        Fondée sur l'excellence, la responsabilité sociale et l'innovation, BFD SARL mobilise
                        les ressources humaines, techniques et financières nécessaires.
                    </p>
                    <div class="rounded-xl p-4" style="background: rgba(22,163,74,0.06); border: 1px solid rgba(22,163,74,0.12);">
                        <p class="text-xs font-bold text-forest-700 mb-2">Rôle dans le programme</p>
                        <p class="text-forest-600 text-xs leading-relaxed">
                            Coordination globale, mobilisation des ressources, gestion opérationnelle,
                            relations avec les partenaires techniques et financiers.
                        </p>
                    </div>
                </div>
            </div>

            {{-- New Goshen --}}
            <div class="bg-white rounded-2xl border border-blue-100 overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="h-2" style="background: linear-gradient(90deg, #1d6fa8, #93c5fd);"></div>
                <div class="p-7">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center font-black text-sm"
                             style="background: rgba(29,111,168,0.10); color: #1d6fa8;">NG</div>
                        <div>
                            <p class="font-bold text-gray-900 leading-tight">New Goshen</p>
                            <span class="text-xs font-semibold px-2.5 py-0.5 rounded-lg inline-block mt-0.5"
                                  style="background: rgba(29,111,168,0.10); color: #1d6fa8;">Partenaire carbone</span>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs mb-1 font-medium">Partenaire technique REDD+</p>
                    <p class="text-gray-600 text-sm leading-relaxed mb-5">
                        Partenaire spécialisé dans la certification REDD+ et la commercialisation des crédits
                        carbone sur les marchés volontaires internationaux, apportant expertise technique
                        et accès aux acheteurs institutionnels.
                    </p>
                    <div class="rounded-xl p-4" style="background: rgba(29,111,168,0.06); border: 1px solid rgba(29,111,168,0.12);">
                        <p class="text-xs font-bold text-blue-700 mb-2">Rôle dans le programme</p>
                        <p class="text-blue-600 text-xs leading-relaxed">
                            Certification REDD+, accès aux marchés carbone, systèmes MRV,
                            négociation avec les acheteurs institutionnels internationaux.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     PARTENAIRES INSTITUTIONNELS
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Cadre institutionnel</span>
            <h2 class="section-title mb-3">Partenaires <span class="gold">institutionnels</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                L'ancrage politique et réglementaire qui donne au programme sa légitimité nationale.
            </p>
        </div>

        <div class="space-y-5 reveal">
            @foreach([
                [
                    'init'  => 'RDC',
                    'name'  => 'Gouvernement de la RDC',
                    'full'  => 'République Démocratique du Congo',
                    'type'  => 'Partenaire institutionnel',
                    'desc'  => 'Le Gouvernement de la RDC apporte son soutien politique et institutionnel au programme, garantissant l\'ancrage du projet dans les politiques nationales de développement durable et les engagements climatiques.',
                    'role'  => 'Cadre légal et réglementaire, validation politique, coordination inter-ministérielle, engagement CCNUCC et ONU-REDD.',
                    'color' => '#1d4ed8', 'bg' => 'rgba(29,78,216,0.08)',
                ],
                [
                    'init'  => 'ME',
                    'name'  => "Ministère de l'Environnement",
                    'full'  => 'Ministère de l\'Environnement et Développement Durable',
                    'type'  => 'Autorité de tutelle',
                    'desc'  => 'Le Ministère de l\'Environnement assure la supervision technique et réglementaire du programme, garantissant la conformité avec les lois forestières nationales et les standards internationaux de conservation.',
                    'role'  => 'Supervision réglementaire, validation des méthodologies, coordination REDD+, certification et reporting climatique national.',
                    'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.08)',
                ],
                [
                    'init'  => 'MAN',
                    'name'  => 'Province du Maniema',
                    'full'  => 'Gouvernorat Provincial – Province du Maniema',
                    'type'  => 'Partenaire territorial',
                    'desc'  => 'Le Gouvernorat du Maniema apporte l\'ancrage territorial indispensable au programme. Sa connaissance du terrain et son autorité locale sont des atouts essentiels pour la mise en œuvre des activités dans les territoires de Kailo et Pangi.',
                    'role'  => 'Coordination locale, relations communautaires, appui logistique, résolution des conflits fonciers, facilitation des accès terrain.',
                    'color' => '#d97706', 'bg' => 'rgba(217,119,6,0.08)',
                ],
            ] as $p)
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex flex-col sm:flex-row gap-5">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center font-bold text-sm"
                             style="background: {{ $p['bg'] }}; color: {{ $p['color'] }};">
                            {{ $p['init'] }}
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-2.5 mb-1">
                            <h3 class="font-bold text-gray-900 text-base">{{ $p['name'] }}</h3>
                            <span class="text-xs font-semibold px-2.5 py-0.5 rounded-lg"
                                  style="background: {{ $p['bg'] }}; color: {{ $p['color'] }};">
                                {{ $p['type'] }}
                            </span>
                        </div>
                        <p class="text-gray-400 text-xs mb-3">{{ $p['full'] }}</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $p['desc'] }}</p>
                        <div class="rounded-xl p-3" style="background: {{ $p['bg'] }}; border: 1px solid {{ $p['color'] }}20;">
                            <p class="text-xs font-bold mb-1" style="color: {{ $p['color'] }};">Rôle dans le programme</p>
                            <p class="text-xs leading-relaxed" style="color: {{ $p['color'] }}cc;">{{ $p['role'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     PARTENAIRES TECHNIQUES & FINANCIERS
══════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge mb-5">Recherche active</span>
            <h2 class="section-title mb-3">Partenaires techniques <span class="forest">&amp; financiers</span></h2>
            <p class="text-gray-400 text-sm max-w-md mx-auto">
                Le programme ConsForest recherche activement des partenaires engagés
                dans la conservation de la biodiversité et le développement durable.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 reveal">
            @foreach([
                ['icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918', 'type' => 'Organismes internationaux', 'desc' => 'ONU-REDD, PNUE, FAO et autres agences onusiennes spécialisées en foresterie et développement durable.', 'c' => '#1d6fa8'],
                ['icon' => 'M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18', 'type' => 'Bailleurs de fonds',       'desc' => 'Institutions financières, fonds verts, mécanismes bilatéraux et philanthropies environnementales.', 'c' => '#d97706'],
                ['icon' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5', 'type' => 'Partenaires scientifiques',  'desc' => 'Universités, centres de recherche et instituts en écologie forestière, carbone et biodiversité.', 'c' => '#7c3aed'],
                ['icon' => 'M2.25 21h19.5m-18-18v18m2.25-18v18m9-18v18m2.25-18v18M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21', 'type' => 'Secteur privé ESG',         'desc' => "Entreprises engagées Net Zéro cherchant à investir dans des projets de compensation carbone de qualité.", 'c' => '#16a34a'],
                ['icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z', 'type' => 'Certificateurs',             'desc' => 'Organismes accrédités pour les standards VCS, Gold Standard et autres protocoles carbone.', 'c' => '#d97706'],
                ['icon' => 'M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z', 'type' => 'ONG environnementales',      'desc' => "Organisations actives en conservation, développement communautaire et gouvernance forestière.",  'c' => '#1d6fa8'],
            ] as $tech)
            <div class="bg-white rounded-2xl p-5 border-2 border-dashed border-gray-200 hover:border-forest-300 hover:bg-green-50/30 transition-all duration-200 text-center">
                <div class="w-11 h-11 rounded-xl flex items-center justify-center mx-auto mb-4"
                     style="background: {{ $tech['c'] }}10;">
                    <svg class="w-5 h-5" style="color: {{ $tech['c'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $tech['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="font-bold text-gray-700 text-sm mb-2">{{ $tech['type'] }}</h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $tech['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     CTA — DEVENIR PARTENAIRE
══════════════════════════════════════════ --}}
<section class="py-16 bg-institutional cf-net-bg text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center reveal">

            <div>
                <span class="section-badge white mb-5">Rejoindre le réseau</span>
                <h2 class="section-title text-white mb-5">
                    Devenez partenaire de <span style="color: #f0b429;">ConsForest</span>
                </h2>
                <p class="text-white/60 text-sm leading-relaxed mb-8">
                    Institution, organisation ou entreprise engagée dans le développement durable ?
                    Rejoignez notre réseau et contribuez à préserver l'une des forêts les plus
                    importantes de la planète.
                </p>
                <a href="{{ route('contact') }}" class="btn-gold inline-flex">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Proposer un partenariat
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                @foreach([
                    ['icon' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5', 'title' => 'Financement', 'desc' => 'Appui financier', 'c' => '#f0b429'],
                    ['icon' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0', 'title' => 'Technique', 'desc' => 'Expertise terrain', 'c' => '#4ade80'],
                    ['icon' => 'M12 21a9.004 9.004 0 008.716-6.747M12 3a8.997 8.997 0 017.843 4.582', 'title' => 'Institutionnel', 'desc' => 'Soutien politique', 'c' => '#93c5fd'],
                ] as $type)
                <div class="rounded-2xl p-5 text-center" style="background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.10);">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mx-auto mb-3"
                         style="background: {{ $type['c'] }}20;">
                        <svg class="w-5 h-5" style="color: {{ $type['c'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $type['icon'] }}"/>
                        </svg>
                    </div>
                    <p class="text-white font-semibold text-sm">{{ $type['title'] }}</p>
                    <p class="text-white/50 text-xs mt-1">{{ $type['desc'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

@endsection
