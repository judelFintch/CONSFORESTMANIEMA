@extends('layouts.app')

@section('title', 'ConsForest Maniema – Conservation Forestière & Crédit Carbone en RDC')
@section('description', 'BFD SARL et le Gouvernorat du Maniema protègent la deuxième plus grande forêt tropicale du monde. Conservation forestière, reboisement et crédits carbone certifiés en RDC.')
@section('keywords', 'ConsForest Maniema, conservation forêt RDC, crédit carbone Congo, BFD SARL, reboisement Maniema, bassin Congo')

@section('content')

{{-- ════════════════════════════════════════════════════
     HERO — Nature, espace, sobriété
════════════════════════════════════════════════════ --}}
<section class="hero-section">

    {{-- Photo de la forêt du Congo — image plein cadre --}}
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?w=1920&q=90"
             alt="Forêt tropicale du Bassin du Congo, province du Maniema"
             class="hero-bg-img w-full h-full object-cover scale-[1.04]"
             loading="eager"
             fetchpriority="high">
    </div>

    {{-- Overlay fenêtre : centre clair pour montrer la forêt --}}
    <div class="hero-overlay absolute inset-0 z-[2]"></div>

    {{-- Grain subtil —  texture organique, papier/lin --}}
    <div class="hero-grain absolute inset-0 z-[3]"></div>

    {{-- Feuilles portées par le vent (4 seulement, discrètes) --}}
    <div aria-hidden="true" class="absolute inset-0 z-[5] pointer-events-none overflow-hidden">
        <span class="leaf leaf-2">🍃</span>
        <span class="leaf leaf-4">🌿</span>
        <span class="leaf leaf-6">🍃</span>
        <span class="leaf leaf-8">🌿</span>
    </div>

    {{-- Contenu — centré, aéré, minimaliste --}}
    <div class="relative z-[10] w-full max-w-4xl mx-auto px-6 sm:px-8 flex flex-col items-center text-center pt-36 pb-28">

        {{-- Logo + Province --}}
        <div class="flex flex-col items-center gap-3 mb-10 hero-a1">
            <div class="relative">
                <div class="absolute inset-0 rounded-full bg-gold-400/18 blur-xl scale-125"></div>
                <img src="{{ asset('images/logo-maniema.png') }}"
                     alt="Province du Maniema"
                     class="logo-glow relative w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border border-gold-400/50 shadow-2xl"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                <div style="display:none"
                     class="logo-glow relative w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-gradient-to-br from-blue-maniema-700 to-forest-800 flex items-center justify-center border border-gold-400/50 shadow-2xl">
                    <span class="text-white font-bold tracking-wider text-sm">M</span>
                </div>
            </div>
            <div>
                <p class="text-gold-300 text-[11px] font-light tracking-[0.38em] uppercase">Province du Maniema</p>
                <p class="text-white/32 text-[10px] tracking-widest mt-0.5 font-light">Justice · Paix · Travail · RDC</p>
            </div>
        </div>

        {{-- Séparateur fin, or naturel --}}
        <div class="w-20 h-px mb-10 hero-line"
             style="background: linear-gradient(90deg, transparent, rgba(240,180,41,0.5), transparent)"></div>

        {{-- Titre principal — Cormorant Garamond, mêlant léger et italique doré --}}
        <h1 class="hero-display mb-7 hero-a3">
            <span class="line-natural">Préserver</span>
            <em class="line-forest">la Forêt</em>
            <span class="line-natural">du Congo</span>
        </h1>

        {{-- Sous-titre — Lora italique, léger comme une brise --}}
        <p class="hero-subtitle hero-a4">
            BFD SARL en partenariat avec le Gouvernement de la RDC et la Province du Maniema —
            conservation forestière, reboisement et crédits carbone certifiés REDD+.
        </p>

        {{-- Indicateur programme actif --}}
        <div class="flex items-center gap-2.5 mb-10 hero-a5">
            <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse flex-shrink-0"></span>
            <span class="text-green-400/75 text-xs font-light tracking-widest">Programme actif</span>
            <span class="text-white/18 text-xs">·</span>
            <span class="text-white/35 text-xs tracking-wider font-light">Kindu, Maniema</span>
        </div>

        {{-- CTA --}}
        <div class="flex flex-col sm:flex-row gap-4 items-center hero-a6">
            <a href="{{ route('about') }}" class="btn-gold">
                Découvrir le projet
            </a>
            <a href="{{ route('carbon') }}" class="btn-ghost-white">
                Crédit Carbone →
            </a>
        </div>

        {{-- Scroll indicator minimal --}}
        <div class="mt-20 flex flex-col items-center gap-2.5 hero-a7">
            <span class="text-white/22 text-[9px] tracking-[0.45em] uppercase font-light">Explorer</span>
            <div class="w-5 h-8 border border-white/15 rounded-full flex items-start justify-center pt-1.5">
                <div class="w-px h-2 bg-white/35 rounded-full" style="animation: scroll-dot 2.2s ease-in-out infinite"></div>
            </div>
        </div>
    </div>

    {{-- Métrique flottante gauche — discrète, fond vitré léger --}}
    <div class="hidden xl:block absolute bottom-20 left-8 z-[10]">
        <div class="glass-card px-5 py-3.5">
            <p class="text-gold-300 font-display text-2xl font-light leading-none">2<sup class="text-sm">e</sup></p>
            <p class="text-white/40 text-[11px] mt-1 font-light tracking-wide">Forêt tropicale mondiale</p>
        </div>
    </div>

    {{-- Métrique flottante droite --}}
    <div class="hidden xl:block absolute bottom-20 right-8 z-[10]">
        <div class="glass-card px-5 py-3.5 text-right">
            <p class="text-green-300 font-display text-xl font-light leading-none">REDD+</p>
            <p class="text-white/40 text-[11px] mt-1 font-light tracking-wide">Crédits certifiés</p>
        </div>
    </div>

    {{-- Vague organique bas --}}
    <div class="hero-wave">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,40 C320,0 640,80 960,40 C1120,20 1300,70 1440,80 L1440,80 L0,80 Z" fill="#ffffff"/>
        </svg>
    </div>
</section>

<style>
@keyframes scroll-dot {
    0%,100% { transform: translateY(0); opacity: 0.4; }
    50%      { transform: translateY(10px); opacity: 0.9; }
}
</style>


{{-- ════════════════════════════════════════════════════
     GALERIE 3 PHOTOS — Regard sur le Terrain
════════════════════════════════════════════════════ --}}
<section class="py-14 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-10 reveal">
            <p class="text-xs font-semibold tracking-[0.25em] uppercase text-gold-500 mb-2">Regard sur le terrain</p>
            <h2 class="text-2xl sm:text-3xl font-display font-black text-gray-900 leading-tight">
                La Forêt du Maniema <span class="gradient-text-forest">en Images</span>
            </h2>
        </div>

        {{-- Mosaïque 3 photos : une grande + deux portraits --}}
        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">

            {{-- Photo 1 — Grande, panoramique (7/12) --}}
            <div class="md:col-span-7 reveal-left relative group overflow-hidden rounded-2xl shadow-xl">
                <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=900&q=80"
                     alt="Canopée dense de la forêt tropicale du Maniema"
                     loading="lazy"
                     class="w-full h-64 md:h-[480px] object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="inline-block text-xs font-semibold text-gold-300 bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full mb-2 border border-white/15">
                        🌳 Conservation active
                    </span>
                    <p class="text-white font-bold text-lg leading-tight drop-shadow-lg">
                        Canopée forestière<br>du Bassin du Congo
                    </p>
                    <p class="text-white/60 text-xs mt-1">Province du Maniema, RDC</p>
                </div>
            </div>

            {{-- Colonne droite — 2 photos empilées (5/12) --}}
            <div class="md:col-span-5 flex flex-col gap-4">

                {{-- Photo 2 — Rivière / écosystème --}}
                <div class="reveal relative group overflow-hidden rounded-2xl shadow-xl flex-1">
                    <img src="https://images.unsplash.com/photo-1565118531796-763e5082d113?w=700&q=80"
                         alt="Rivière traversant la forêt tropicale – zone de conservation"
                         loading="lazy"
                         class="w-full h-52 md:h-[230px] object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-black/5 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <span class="inline-block text-xs font-semibold text-blue-300 bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full mb-1.5 border border-white/15">
                            💧 Ressources hydriques
                        </span>
                        <p class="text-white font-semibold text-sm leading-snug drop-shadow">
                            Cours d'eau et biodiversité aquatique
                        </p>
                    </div>
                </div>

                {{-- Photo 3 — Communauté / reboisement --}}
                <div class="reveal relative group overflow-hidden rounded-2xl shadow-xl flex-1" style="animation-delay: 0.15s">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=700&q=80"
                         alt="Reboisement communautaire – programme ConsForest Maniema"
                         loading="lazy"
                         class="w-full h-52 md:h-[230px] object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/5 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <span class="inline-block text-xs font-semibold text-green-300 bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full mb-1.5 border border-white/15">
                            🌱 Reboisement
                        </span>
                        <p class="text-white font-semibold text-sm leading-snug drop-shadow">
                            Programme de reboisement communautaire
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Lien vers galerie complète --}}
        <div class="text-center mt-8 reveal">
            <a href="{{ route('gallery') }}"
               class="inline-flex items-center gap-2 text-forest-600 hover:text-forest-800 font-semibold text-sm transition-colors group">
                Voir toute la galerie
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     STRIP STATS — Chiffres en mouvement
════════════════════════════════════════════════════ --}}
<section class="py-16 bg-white relative overflow-hidden">
    {{-- Décor fond --}}
    <div class="absolute inset-0 bg-gradient-to-b from-forest-50/40 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 stagger">
            @foreach([
                ['num' => '336', 'unit' => 'Mha', 'label' => 'Forêts du Bassin Congo', 'icon' => '🌳', 'col' => 'text-forest-600'],
                ['num' => '10000', 'unit' => '+', 'label' => 'Espèces animales', 'icon' => '🦁', 'col' => 'text-gold-500'],
                ['num' => '80', 'unit' => 'M', 'label' => 'Personnes dépendantes', 'icon' => '👥', 'col' => 'text-blue-maniema-500'],
                ['num' => '100', 'unit' => '%', 'label' => 'Crédits certifiés REDD+', 'icon' => '📜', 'col' => 'text-red-maniema-500'],
            ] as $s)
            <div class="stat-card reveal text-center p-6 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <span class="text-4xl mb-3 block">{{ $s['icon'] }}</span>
                <div class="{{ $s['col'] }} font-black text-4xl sm:text-5xl font-display leading-none mb-1">
                    {{ $s['num'] }}<span class="text-xl">{{ $s['unit'] }}</span>
                </div>
                <p class="text-gray-500 text-xs sm:text-sm font-medium mt-1">{{ $s['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     PRÉSENTATION — Deux colonnes artistiques
════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-24 items-center">

            {{-- Visual côté gauche --}}
            <div class="relative reveal-left order-2 lg:order-1">
                {{-- Image principale --}}
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=700&q=80"
                         alt="Canopée du Bassin du Congo"
                         class="w-full h-80 lg:h-[480px] object-cover hover:scale-105 transition-transform duration-700">
                </div>

                {{-- Card flottante 1 --}}
                <div class="absolute -bottom-5 -right-5 glass-card p-5 shadow-2xl max-w-[200px]"
                     style="background: rgba(2,13,6,0.9); border-color: rgba(240,180,41,0.2)">
                    <p class="text-gold-400 font-black text-3xl leading-none font-display">2e</p>
                    <p class="text-white/80 text-xs mt-1 leading-tight">Forêt tropicale<br>la plus grande</p>
                </div>

                {{-- Card flottante 2 --}}
                <div class="absolute -top-5 -left-5 bg-white rounded-2xl p-4 shadow-xl border border-gray-100 max-w-[160px]">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-xs font-semibold text-gray-600">Province</span>
                    </div>
                    <img src="{{ asset('images/logo-maniema.png') }}"
                         alt="Maniema" class="w-10 h-10 rounded-full object-cover mx-auto"
                         onerror="this.style.display='none'">
                    <p class="text-center text-xs text-gray-500 mt-1.5 font-medium">Maniema, RDC</p>
                </div>

                {{-- Décoration cercle --}}
                <div class="absolute -z-10 top-10 left-10 w-64 h-64 rounded-full border-2 border-dashed border-green-200/60"></div>
            </div>

            {{-- Texte côté droit --}}
            <div class="reveal-right order-1 lg:order-2">
                <div class="section-badge mb-6">🌿 À propos du programme</div>

                <h2 class="section-title mb-6">
                    <span class="gold">BFD SARL</span> —<br>
                    Bâtir sur des<br>Fondements Durables
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    BFD SARL porte un programme ambitieux de <strong class="text-forest-700">conservation forestière</strong>,
                    de reboisement et de développement durable au cœur de la province du Maniema, République Démocratique du Congo.
                </p>

                <p class="text-gray-500 leading-relaxed mb-8">
                    En partenariat avec le <strong class="text-gray-700">Gouvernement de la RDC</strong>,
                    le <strong class="text-gray-700">Ministère de l'Environnement</strong> et le
                    <strong class="text-gray-700">Gouvernorat du Maniema</strong>, ce programme vise à
                    protéger les écosystèmes forestiers, générer des
                    <strong class="text-green-700">crédits carbone certifiés</strong> et créer
                    des retombées économiques concrètes pour les communautés locales.
                </p>

                {{-- Points forts --}}
                <div class="grid grid-cols-2 gap-3 mb-8">
                    @foreach([
                        ['icon' => '🛡️', 'label' => 'Protection active'],
                        ['icon' => '🌱', 'label' => 'Reboisement'],
                        ['icon' => '💨', 'label' => 'Crédits carbone'],
                        ['icon' => '🤝', 'label' => 'Communautés'],
                    ] as $pt)
                    <div class="flex items-center gap-2.5 p-3 bg-forest-50 rounded-xl border border-forest-100">
                        <span class="text-xl">{{ $pt['icon'] }}</span>
                        <span class="text-sm font-semibold text-gray-700">{{ $pt['label'] }}</span>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('about') }}" class="btn-forest">
                    En savoir plus
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     PROBLÉMATIQUE — Section sombre dramatique
════════════════════════════════════════════════════ --}}
<section class="relative py-24 overflow-hidden bg-forest-dark">

    {{-- Background forêt --}}
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1504701954957-2010ec3bcec1?w=1600&q=70"
             alt="" class="w-full h-full object-cover opacity-15">
    </div>
    <div class="absolute inset-0 z-[1]"
         style="background: linear-gradient(to bottom, #020d06 0%, rgba(2,13,6,0.7) 50%, #020d06 100%)"></div>

    <div class="relative z-[2] max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-14 reveal">
            <div class="section-badge white mb-6">⚠️ La problématique</div>
            <h2 class="section-title white mb-5">
                Une Forêt Menacée,<br>
                <span class="gradient-text-gold">une Planète en Danger</span>
            </h2>
            <p class="text-white/60 text-lg leading-relaxed">
                Le Bassin du Congo — deuxième poumon vert de la planète — est aujourd'hui menacé
                par des pressions humaines croissantes et irréversibles.
            </p>
        </div>

        {{-- Citation --}}
        <div class="max-w-4xl mx-auto mb-14 reveal">
            <blockquote class="glass-card p-8 sm:p-10 text-center relative">
                <div class="absolute top-4 left-6 text-gold-400/30 font-display text-8xl leading-none select-none">"</div>
                <p class="text-white/85 text-lg sm:text-xl leading-relaxed italic relative z-10">
                    Le Bassin du Congo abrite la deuxième plus grande forêt tropicale de la planète.
                    Véritable réservoir de biodiversité et puits naturel de carbone, cette forêt est aujourd'hui
                    menacée par la déforestation, l'exploitation illégale des ressources naturelles,
                    l'expansion agricole et les activités minières.
                </p>
            </blockquote>
        </div>

        {{-- Menaces grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 stagger">
            @foreach([
                ['icon' => '🪓', 'title' => 'Déforestation', 'desc' => 'Abattage massif non contrôlé'],
                ['icon' => '⛏️', 'title' => 'Mines illégales', 'desc' => 'Extraction destructrice des sols'],
                ['icon' => '🌾', 'title' => 'Agriculture', 'desc' => 'Expansion des terres agricoles'],
                ['icon' => '🔥', 'title' => 'Feux de brousse', 'desc' => 'Brûlis non maîtrisés'],
            ] as $t)
            <div class="reveal glass-card p-5 text-center">
                <span class="text-4xl mb-3 block">{{ $t['icon'] }}</span>
                <h4 class="text-white font-bold text-sm mb-1">{{ $t['title'] }}</h4>
                <p class="text-white/45 text-xs">{{ $t['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     OBJECTIFS — Grille de cartes
════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <div class="section-badge mb-5">🎯 Nos objectifs stratégiques</div>
            <h2 class="section-title mb-4">Une Vision Claire pour<br>un Avenir Durable</h2>
            <p class="text-gray-500 max-w-xl mx-auto">
                Le programme ConsForest Maniema articule ses actions autour de huit objectifs complémentaires.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 stagger">
            @foreach([
                ['icon' => '🛡️', 'num' => '01', 'title' => 'Protection des forêts', 'desc' => 'Protéger les espaces forestiers des activités destructrices.', 'link' => route('conservation'), 'col' => 'forest'],
                ['icon' => '🌱', 'num' => '02', 'title' => 'Reboisement', 'desc' => 'Restaurer les zones dégradées par plantation d\'espèces natives.', 'link' => route('conservation'), 'col' => 'forest'],
                ['icon' => '💨', 'num' => '03', 'title' => 'Crédit carbone', 'desc' => 'Certifier et valoriser les crédits carbone du programme.', 'link' => route('carbon'), 'col' => 'blue'],
                ['icon' => '🦋', 'num' => '04', 'title' => 'Biodiversité', 'desc' => 'Préserver la richesse biologique unique du Bassin du Congo.', 'link' => route('conservation'), 'col' => 'green'],
                ['icon' => '👥', 'num' => '05', 'title' => 'Communautés', 'desc' => 'Créer des opportunités économiques durables localement.', 'link' => route('community'), 'col' => 'amber'],
                ['icon' => '🎓', 'num' => '06', 'title' => 'Sensibilisation', 'desc' => 'Former les populations à la protection de l\'environnement.', 'link' => route('community'), 'col' => 'amber'],
                ['icon' => '⚖️', 'num' => '07', 'title' => 'Gouvernance', 'desc' => 'Renforcer les institutions de gestion durable des forêts.', 'link' => route('about'), 'col' => 'purple'],
                ['icon' => '🌡️', 'num' => '08', 'title' => 'Engagements RDC', 'desc' => 'Contribuer aux NDC et accords climatiques de la RDC.', 'link' => route('carbon'), 'col' => 'red'],
            ] as $obj)
            <a href="{{ $obj['link'] }}" class="feature-card reveal group block">
                <div class="flex items-start justify-between mb-4">
                    <div class="text-3xl">{{ $obj['icon'] }}</div>
                    <span class="text-xs font-bold text-gray-200 font-display">{{ $obj['num'] }}</span>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2 group-hover:text-forest-700 transition-colors">
                    {{ $obj['title'] }}
                </h3>
                <p class="text-gray-400 text-xs leading-relaxed">{{ $obj['desc'] }}</p>
                <div class="mt-4 flex items-center gap-1 text-forest-600 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                    Découvrir
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     IMPACT — Triptyque
════════════════════════════════════════════════════ --}}
<section class="py-24 bg-forest-pattern relative overflow-hidden">
    {{-- Deco forêt fond --}}
    <div class="absolute right-0 top-0 w-96 h-96 bg-forest-100/50 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <div class="section-badge mb-5">📈 Impact attendu</div>
            <h2 class="section-title mb-4">
                Trois Dimensions<br>d'Impact Concret
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Environnemental --}}
            <div class="impact-card reveal bg-gradient-to-br from-forest-900 to-forest-700 text-white">
                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-3xl mb-6">🌿</div>
                <h3 class="font-display font-bold text-xl mb-4">Impact Environnemental</h3>
                <ul class="space-y-2.5">
                    @foreach(['Réduction de la déforestation', 'Séquestration accrue du CO₂', 'Protection de la biodiversité', 'Restauration des zones dégradées', 'Stabilisation des cycles hydrologiques'] as $i)
                    <li class="flex items-start gap-2 text-white/75 text-sm">
                        <svg class="w-4 h-4 text-green-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        {{ $i }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('conservation') }}" class="mt-6 inline-flex items-center gap-1.5 text-green-300 text-xs font-semibold hover:text-green-100 transition-colors">
                    En savoir plus →
                </a>
            </div>

            {{-- Économique --}}
            <div class="impact-card reveal bg-gradient-to-br from-blue-maniema-900 to-blue-maniema-700 text-white" style="transition-delay:100ms">
                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-3xl mb-6">💹</div>
                <h3 class="font-display font-bold text-xl mb-4">Impact Économique</h3>
                <ul class="space-y-2.5">
                    @foreach(['Génération de crédits carbone certifiés', 'Revenus durables pour les communautés', 'Création d\'emplois locaux verts', 'Diversification des sources de revenus', 'Attractivité pour les investisseurs ESG'] as $i)
                    <li class="flex items-start gap-2 text-white/75 text-sm">
                        <svg class="w-4 h-4 text-blue-300 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        {{ $i }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('carbon') }}" class="mt-6 inline-flex items-center gap-1.5 text-blue-300 text-xs font-semibold hover:text-blue-100 transition-colors">
                    En savoir plus →
                </a>
            </div>

            {{-- Social --}}
            <div class="impact-card reveal bg-gradient-to-br from-gold-700 to-gold-500 text-white" style="transition-delay:200ms">
                <div class="w-14 h-14 bg-white/15 rounded-2xl flex items-center justify-center text-3xl mb-6">🤝</div>
                <h3 class="font-display font-bold text-xl mb-4">Impact Social</h3>
                <ul class="space-y-2.5">
                    @foreach(['Amélioration des conditions de vie', 'Renforcement des capacités locales', 'Participation communautaire active', 'Éducation environnementale', 'Gouvernance forestière inclusive'] as $i)
                    <li class="flex items-start gap-2 text-white/85 text-sm">
                        <svg class="w-4 h-4 text-white flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        {{ $i }}
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('community') }}" class="mt-6 inline-flex items-center gap-1.5 text-white text-xs font-semibold hover:text-white/80 transition-colors">
                    En savoir plus →
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     ACTUALITÉS
════════════════════════════════════════════════════ --}}
@if($latestNews && $latestNews->count() > 0)
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4 mb-12 reveal">
            <div>
                <div class="section-badge mb-4">📰 Dernières nouvelles</div>
                <h2 class="section-title">Actualités du Programme</h2>
            </div>
            <a href="{{ route('news.index') }}" class="btn-forest text-sm flex-shrink-0">
                Toutes les actualités →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 stagger">
            @foreach($latestNews as $article)
            <article class="news-card reveal bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow group">
                <a href="{{ route('news.show', $article->slug) }}" class="block overflow-hidden h-48">
                    @if($article->cover_image)
                        <img src="{{ asset('storage/' . $article->cover_image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-forest-900 to-blue-maniema-900 flex items-center justify-center">
                            <span class="text-6xl">🌳</span>
                        </div>
                    @endif
                </a>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs bg-forest-50 text-forest-700 font-semibold px-3 py-1 rounded-full">{{ $article->category_label }}</span>
                        <span class="text-xs text-gray-400">{{ $article->formatted_date }}</span>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-forest-700 transition-colors">
                        <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 mb-4">{{ $article->excerpt }}</p>
                    <a href="{{ route('news.show', $article->slug) }}" class="text-forest-600 font-semibold text-sm flex items-center gap-1 hover:text-forest-800 transition-colors">
                        Lire l'article
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif


{{-- ════════════════════════════════════════════════════
     PARTENAIRES — Strip
════════════════════════════════════════════════════ --}}
<section class="py-14 bg-gray-50 border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs text-gray-400 uppercase tracking-[0.25em] font-semibold mb-8">
            Partenaires institutionnels
        </p>
        <div class="flex flex-wrap items-center justify-center gap-8 md:gap-14">
            @foreach([
                ['name' => 'BFD SARL', 'sub' => 'Porteur de projet', 'img' => null],
                ['name' => 'Gouv. RDC', 'sub' => 'Partenaire inst.', 'img' => null],
                ['name' => 'Min. Env.', 'sub' => 'Autorité tutelle', 'img' => null],
                ['name' => 'Maniema', 'sub' => 'Gouvernorat', 'img' => asset('images/logo-maniema.png')],
                ['name' => 'Partenaires', 'sub' => 'Techniques intl.', 'img' => null],
            ] as $p)
            <div class="partner-item text-center flex flex-col items-center gap-2">
                <div class="w-14 h-14 rounded-full bg-white shadow-md border border-gray-100 overflow-hidden flex items-center justify-center">
                    @if($p['img'])
                        <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" class="w-full h-full object-cover"
                             onerror="this.style.display='none'; this.parentElement.querySelector('.fallback').style.display='flex'">
                        <div class="fallback" style="display:none; width:100%; height:100%; align-items:center; justify-content:center;">
                            <span class="text-blue-maniema-700 font-black text-xs">{{ substr($p['name'],0,2) }}</span>
                        </div>
                    @else
                        <span class="text-gray-600 font-black text-xs">{{ substr($p['name'],0,3) }}</span>
                    @endif
                </div>
                <div>
                    <p class="text-gray-700 font-semibold text-xs">{{ $p['name'] }}</p>
                    <p class="text-gray-400 text-[10px]">{{ $p['sub'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     CTA FINAL — Appel à rejoindre
════════════════════════════════════════════════════ --}}
<section class="relative py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1586348943529-beaae6c28db9?w=1600&q=70"
             alt="" class="w-full h-full object-cover">
        <div class="absolute inset-0"
             style="background: linear-gradient(135deg, rgba(3,15,33,0.92) 0%, rgba(6,26,12,0.88) 50%, rgba(3,15,33,0.92) 100%)"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {{-- Logo centré --}}
        <div class="flex justify-center mb-8 reveal">
            <img src="{{ asset('images/logo-maniema.png') }}"
                 alt="Province du Maniema"
                 class="logo-glow w-20 h-20 rounded-full object-cover border-2 border-gold-400/40"
                 onerror="this.style.display='none'">
        </div>

        <div class="section-badge white mx-auto mb-6 reveal">
            🌍 Rejoignez le mouvement
        </div>

        <h2 class="text-3xl sm:text-4xl md:text-5xl font-display font-black text-white mb-5 leading-tight reveal">
            Ensemble, Protégeons<br>
            <span class="gradient-text-gold">le Poumon Vert de l'Afrique</span>
        </h2>

        <p class="text-white/70 text-lg leading-relaxed mb-10 max-w-2xl mx-auto reveal">
            Que vous soyez bailleur, organisation internationale, institution gouvernementale
            ou entreprise engagée — rejoignez ConsForest Maniema dans cette mission vitale
            pour la planète et les générations futures.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center reveal">
            <a href="{{ route('contact') }}" class="btn-gold px-10 py-4 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Contactez-nous
            </a>
            <a href="{{ route('partners') }}" class="btn-ghost-white px-10 py-4 text-sm">
                Voir les partenaires
            </a>
        </div>
    </div>
</section>

@endsection
