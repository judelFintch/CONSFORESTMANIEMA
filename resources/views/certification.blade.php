@extends('layouts.app')

@section('title', 'Certification REDD+ et Crédit Carbone en RDC – ConsForest Maniema')
@section('description', 'Découvrez le processus complet de certification REDD+ et Crédit Carbone en RDC : cadre légal international, homologation ARMCA, validation externe, MRV et transactions. Projet ConsForest Maniema, Province du Maniema.')
@section('keywords', 'REDD+ RDC, certification carbone Congo, ARMCA, Registre National REDD+, Accord de Paris, crédit carbone Maniema, processus certification, UREC, VCS Gold Standard')

@section('content')

{{-- ══════════════════════════════════════════════════════════
     HERO SECTION
══════════════════════════════════════════════════════════ --}}
<section class="hero-section hero-grain relative" style="min-height: 78vh; max-height: 860px;">

    {{-- Background image --}}
    <img src="{{ asset('images/2.jpeg') }}"
         alt="Forêt du Maniema – ConsForest"
         class="hero-bg-img absolute inset-0 w-full h-full object-cover"
         style="transform: scale(1.08);"
         onerror="this.style.background='#020d06'; this.style.display='none';">

    {{-- Overlay forêt + touche institutionnelle bleue --}}
    <div class="hero-overlay absolute inset-0"></div>
    <div class="absolute inset-0" style="background: linear-gradient(135deg, rgba(8,45,94,0.55) 0%, rgba(6,26,12,0.20) 50%, rgba(2,13,6,0.60) 100%);"></div>

    {{-- Feuilles flottantes --}}
    <div class="leaf leaf-2"></div>
    <div class="leaf leaf-4"></div>
    <div class="leaf leaf-6"></div>
    <div class="leaf leaf-8"></div>

    {{-- Contenu hero --}}
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 flex flex-col justify-center" style="min-height: inherit;">

        {{-- Badge REDD+ --}}
        <div class="hero-a2 mb-7">
            <span class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full text-xs font-semibold tracking-widest uppercase"
                  style="background: rgba(240,180,41,0.10); border: 1px solid rgba(240,180,41,0.30); color: #f0b429;">
                <span class="w-1.5 h-1.5 rounded-full animate-pulse" style="background: #f0b429;"></span>
                REDD+ · Crédit Carbone · RDC
            </span>
        </div>

        {{-- Titre --}}
        <div class="hero-a4 mb-6" style="max-width: 820px;">
            <h1 class="font-display" style="font-family: var(--font-display); line-height: 1.05;">
                <span class="block font-light text-white/90" style="font-size: clamp(1.9rem, 4.5vw, 4rem);">
                    Processus de Certification
                </span>
                <span class="block font-bold italic" style="font-size: clamp(2rem, 5vw, 4.5rem); background: linear-gradient(135deg, #f0b429 0%, #fde68a 45%, #d97706 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    REDD+ &amp; Crédit Carbone
                </span>
                <span class="block font-light text-white/75" style="font-size: clamp(1.1rem, 2.5vw, 1.9rem); margin-top: 0.2em;">
                    en République Démocratique du Congo
                </span>
            </h1>
        </div>

        {{-- Sous-titre --}}
        <p class="hero-a5 hero-subtitle" style="max-width: 540px;">
            Un parcours encadré pour garantir des crédits carbone fiables, traçables et conformes — du terrain au registre international.
        </p>

        {{-- CTAs --}}
        <div class="hero-a6 flex flex-wrap gap-4 mb-14">
            <a href="#processus" class="btn-gold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
                Découvrir le processus
            </a>
            <a href="{{ route('contact') }}" class="btn-ghost-white">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>
        </div>

        {{-- Stats --}}
        <div class="hero-a7 flex flex-wrap gap-10">
            @foreach([
                ['val' => '5', 'label' => 'Phases de certification'],
                ['val' => '3', 'label' => 'Niveaux de conformité'],
                ['val' => '2', 'label' => 'Standards internationaux'],
            ] as $s)
            <div class="flex items-center gap-3">
                <span class="font-display font-bold"
                      style="font-family: var(--font-display); font-size: 2.25rem; line-height: 1; background: linear-gradient(135deg, #f0b429, #fde68a); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    {{ $s['val'] }}
                </span>
                <span class="text-white/45 text-sm font-light leading-tight" style="max-width: 88px;">{{ $s['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Vague de transition --}}
    <div class="hero-wave">
        <svg viewBox="0 0 1440 56" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 56L60 50C120 44 240 32 360 26C480 20 600 20 720 25C840 30 960 40 1080 43C1200 46 1320 43 1380 41.5L1440 40V56H0V56Z" fill="#ffffff"/>
        </svg>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     2. INTRO — 3 NIVEAUX DE CONFORMITÉ
══════════════════════════════════════════════════════════ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- En-tête section --}}
        <div class="text-center mb-14 reveal">
            <span class="section-badge">Cadre de conformité</span>
            <h2 class="section-title mt-4 mb-5">
                Trois niveaux <span class="accent">imbriqués</span> de conformité
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg leading-relaxed">
                La certification Crédit Carbone en RDC s'inscrit dans une architecture réglementaire à trois niveaux qui garantit la crédibilité et la légitimité de chaque crédit émis.
            </p>
        </div>

        {{-- 3 cartes niveaux --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 stagger">

            {{-- Niveau 1 – International --}}
            <div class="reveal rounded-2xl p-7 border border-blue-100 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300"
                 style="background: linear-gradient(145deg, #eff6ff 0%, #f8fbff 100%);">
                <div class="absolute -top-8 -right-8 w-28 h-28 rounded-full opacity-[0.07]" style="background: #0d4ea8;"></div>
                <div class="relative">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="text-3xl">🌍</span>
                        <div>
                            <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-blue-400">Niveau 1</p>
                            <h3 class="font-bold text-gray-900 text-lg leading-tight">International</h3>
                        </div>
                    </div>
                    <ul class="space-y-2.5">
                        @foreach(['ONU & CCNUCC', 'Accord de Paris', 'Sauvegardes de Cancún', 'Article 6 / ITMOs', 'CLIP & droits humains'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-700">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background: #0d4ea8;"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Niveau 2 – National RDC --}}
            <div class="reveal rounded-2xl p-7 border border-amber-100 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300"
                 style="background: linear-gradient(145deg, #fffbeb 0%, #fffff8 100%);">
                <div class="absolute -top-8 -right-8 w-28 h-28 rounded-full opacity-[0.07]" style="background: #d97706;"></div>
                <div class="relative">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="text-3xl">🇨🇩</span>
                        <div>
                            <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-amber-500">Niveau 2</p>
                            <h3 class="font-bold text-gray-900 text-lg leading-tight">National RDC</h3>
                        </div>
                    </div>
                    <ul class="space-y-2.5">
                        @foreach(['ARMCA', 'Registre National REDD+', 'Homologation officielle', 'Lois et décrets', 'Quote-part État'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-700">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background: #d97706;"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Niveau 3 – Province Maniema --}}
            <div class="reveal rounded-2xl p-7 border border-green-100 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-300"
                 style="background: linear-gradient(145deg, #f0fdf4 0%, #f7fff9 100%);">
                <div class="absolute -top-8 -right-8 w-28 h-28 rounded-full opacity-[0.07]" style="background: #16a34a;"></div>
                <div class="relative">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="text-3xl">🌿</span>
                        <div>
                            <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-green-500">Niveau 3</p>
                            <h3 class="font-bold text-gray-900 text-lg leading-tight">Province du Maniema</h3>
                        </div>
                    </div>
                    <ul class="space-y-2.5">
                        @foreach(['PIREDD Maniema', 'CLD communautaires', 'Édits provinciaux', 'Gouvernance locale', 'Partage des bénéfices'] as $item)
                        <li class="flex items-center gap-2.5 text-sm text-gray-700">
                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background: #16a34a;"></span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     3. CADRE LÉGAL & INSTITUTIONNEL — ONGLETS ALPINE.JS
══════════════════════════════════════════════════════════ --}}
<section class="py-20 bg-forest-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-12 reveal">
            <span class="section-badge">Textes de référence</span>
            <h2 class="section-title mt-4 mb-4">
                Cadre <span class="gold">légal &amp; institutionnel</span>
            </h2>
            <p class="text-gray-500 max-w-xl mx-auto leading-relaxed">
                Les instruments juridiques et institutionnels qui encadrent chaque étape du processus de certification.
            </p>
        </div>

        {{-- Composant onglets Alpine.js --}}
        <div x-data="{ tab: 'international' }" class="reveal">

            {{-- Boutons onglets --}}
            <div class="flex flex-wrap justify-center gap-2.5 mb-8">
                @foreach($cadres as $cadre)
                <button
                    @click="tab = '{{ $cadre['id'] }}'"
                    :class="tab === '{{ $cadre['id'] }}' ? 'cert-tab-active' : 'cert-tab-inactive'"
                    class="cert-tab-btn">
                    <span>{{ $cadre['flag'] }}</span>
                    <span>{{ $cadre['label'] }}</span>
                </button>
                @endforeach
            </div>

            {{-- Panneaux onglets --}}
            @foreach($cadres as $cadre)
            <div
                x-show="tab === '{{ $cadre['id'] }}'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                style="display: none;">

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

                    {{-- En-tête coloré --}}
                    <div class="px-8 py-7"
                         style="background: linear-gradient(135deg, {{ $cadre['header_from'] }} 0%, {{ $cadre['header_to'] }} 100%);">
                        <div class="flex items-center gap-4">
                            <span class="text-4xl">{{ $cadre['flag'] }}</span>
                            <div>
                                <p class="text-white/50 text-[10px] font-bold tracking-[0.2em] uppercase mb-0.5">Niveau de conformité</p>
                                <h3 class="text-white font-bold text-2xl leading-tight">{{ $cadre['label'] }}</h3>
                                <p class="text-white/60 text-sm mt-1 leading-relaxed">{{ $cadre['description'] }}</p>
                            </div>
                        </div>
                    </div>

                    {{-- Grille des textes --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach($cadre['items'] as $idx => $item)
                        <div class="p-6 {{ $idx < count($cadre['items']) - 1 ? 'border-b sm:border-b-0 sm:border-r border-gray-50/80' : '' }} hover:bg-gray-50/60 transition-colors group">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 transition-transform duration-300 group-hover:scale-110"
                                     style="background: {{ $cadre['hex'] }}14;">
                                    <svg class="w-4 h-4" fill="none" stroke="{{ $cadre['hex'] }}" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 text-sm leading-tight mb-1">{{ $item['title'] }}</p>
                                    <p class="text-gray-400 text-xs leading-relaxed">{{ $item['detail'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     4. TIMELINE — LES 5 PHASES (ACCORDÉON ALPINE.JS)
══════════════════════════════════════════════════════════ --}}
<section id="processus" class="py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-16 reveal">
            <span class="section-badge">Parcours de certification</span>
            <h2 class="section-title mt-4 mb-5">
                Les <span class="accent">5 phases</span> vers la certification
            </h2>
            <p class="text-gray-500 max-w-xl mx-auto text-lg leading-relaxed">
                Un processus rigoureux et transparent, de l'engagement communautaire jusqu'à l'émission des crédits sur les registres internationaux.
            </p>
        </div>

        {{-- Accordéon des phases --}}
        <div x-data="{ open: 0 }" class="space-y-3">

            @foreach($phases as $i => $phase)
            <div class="reveal rounded-2xl border border-gray-100 overflow-hidden bg-white shadow-sm transition-shadow duration-300"
                 :class="{{ $i }} === open ? 'shadow-md' : 'shadow-sm'">

                {{-- En-tête phase (clic pour ouvrir/fermer) --}}
                <button
                    @click="open === {{ $i }} ? open = -1 : open = {{ $i }}"
                    class="w-full flex items-center gap-4 sm:gap-5 px-5 sm:px-7 py-5 text-left hover:bg-gray-50/50 transition-colors group"
                    :class="{{ $i }} === open ? 'bg-gray-50/40' : ''">

                    {{-- Numéro phase --}}
                    <div class="flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 rounded-2xl flex items-center justify-center font-bold text-xl sm:text-2xl relative"
                         style="font-family: var(--font-display); background: {{ $phase['color_hex'] }}12; border: 1.5px solid {{ $phase['color_hex'] }}30; color: {{ $phase['color_hex'] }};">
                        {{ $phase['number'] }}
                        {{-- Indicateur actif --}}
                        <span
                            x-show="open === {{ $i }}"
                            class="absolute -top-1 -right-1 w-3 h-3 rounded-full"
                            style="background: {{ $phase['color_hex'] }}; box-shadow: 0 0 0 3px white, 0 0 0 4px {{ $phase['color_hex'] }}40;">
                        </span>
                    </div>

                    {{-- Infos phase --}}
                    <div class="flex-1 min-w-0">
                        <div class="flex flex-wrap items-center gap-2 mb-0.5">
                            <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-gray-400">Phase {{ $phase['number'] }}</span>
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full text-[11px] font-semibold"
                                  style="background: {{ $phase['color_hex'] }}12; color: {{ $phase['color_hex'] }};">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $phase['duration'] }}
                            </span>
                        </div>
                        <h3 class="font-bold text-gray-900 text-base sm:text-lg leading-tight">{{ $phase['title'] }}</h3>
                        <p class="text-gray-400 text-sm mt-0.5 hidden sm:block">{{ $phase['subtitle'] }}</p>
                    </div>

                    {{-- Chevron animé --}}
                    <div class="flex-shrink-0 w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center transition-all duration-300"
                         :style="{{ $i }} === open ? 'transform: rotate(180deg); border-color: {{ $phase['color_hex'] }}50; background: {{ $phase['color_hex'] }}08' : ''">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>

                {{-- Contenu phase (x-collapse pour animation hauteur) --}}
                <div x-show="open === {{ $i }}" x-collapse>
                    <div class="px-5 sm:px-7 pb-7">

                        {{-- Ligne séparatrice colorée --}}
                        <div class="h-px mb-6 rounded-full" style="background: linear-gradient(90deg, {{ $phase['color_hex'] }}40, {{ $phase['color_hex'] }}15, transparent);"></div>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                            {{-- Étapes (2/3 de la grille) --}}
                            <div class="lg:col-span-2">
                                <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-gray-400 mb-4">Étapes clés</p>
                                <ol class="space-y-3">
                                    @foreach($phase['steps'] as $j => $step)
                                    <li class="flex items-start gap-3">
                                        <span class="flex-shrink-0 w-6 h-6 rounded-full text-xs font-bold flex items-center justify-center text-white mt-0.5"
                                              style="background: {{ $phase['color_hex'] }};">
                                            {{ $j + 1 }}
                                        </span>
                                        <span class="text-gray-600 text-sm leading-relaxed pt-0.5">{{ $step }}</span>
                                    </li>
                                    @endforeach
                                </ol>
                            </div>

                            {{-- Résultat + durée (1/3 de la grille) --}}
                            <div class="space-y-4">
                                <div class="rounded-xl p-5" style="background: {{ $phase['light_hex'] }}; border: 1px solid {{ $phase['color_hex'] }}25;">
                                    <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-gray-400 mb-2">Résultat attendu</p>
                                    <p class="font-semibold text-gray-800 text-sm leading-relaxed">{{ $phase['result'] }}</p>
                                </div>
                                <div class="rounded-xl p-5 bg-gray-50 border border-gray-100">
                                    <p class="text-[10px] font-bold tracking-[0.2em] uppercase text-gray-400 mb-2">Durée estimée</p>
                                    <p class="font-bold text-gray-900 text-xl" style="font-family: var(--font-display); color: {{ $phase['color_hex'] }};">
                                        {{ $phase['duration'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Note de bas de section --}}
        <p class="text-center text-gray-400 text-sm mt-10 leading-relaxed reveal">
            Cliquez sur chaque phase pour détailler les étapes. Ce processus s'applique aux projets ConsForest dans la Province du Maniema.
        </p>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     5. GARANTIES DU PROJET
══════════════════════════════════════════════════════════ --}}
<section class="py-24" style="background: linear-gradient(135deg, #020d06 0%, #061a0c 40%, #030f21 100%);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14 reveal">
            <span class="section-badge white">Engagements du projet</span>
            <h2 class="section-title white mt-4 mb-4">
                Garanties du <span class="gold">projet</span>
            </h2>
            <p class="text-white/45 max-w-xl mx-auto leading-relaxed">
                Chaque crédit carbone généré par ConsForest Maniema repose sur des engagements concrets, vérifiables et durables.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 stagger">
            @foreach($garanties as $g)
            <div class="glass-card p-6 reveal group cursor-default">

                {{-- Icône --}}
                <div class="w-11 h-11 rounded-xl flex items-center justify-center mb-4 transition-transform duration-300 group-hover:scale-110"
                     style="background: {{ $g['color_hex'] }}22;">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="{{ $g['color_hex'] }}">
                        @if($g['icon'] === 'eye')
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        @elseif($g['icon'] === 'people')
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        @elseif($g['icon'] === 'document')
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        @elseif($g['icon'] === 'shield')
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        @elseif($g['icon'] === 'globe')
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        @elseif($g['icon'] === 'lightning')
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        @elseif($g['icon'] === 'scale')
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                        @else
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        @endif
                    </svg>
                </div>

                <h3 class="font-bold text-white text-base mb-2 leading-tight">{{ $g['title'] }}</h3>
                <p class="text-white/45 text-sm leading-relaxed">{{ $g['desc'] }}</p>

                {{-- Ligne décorative en bas --}}
                <div class="mt-5 h-px rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"
                     style="background: linear-gradient(90deg, {{ $g['color_hex'] }}60, transparent);"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     6. CTA FINAL
══════════════════════════════════════════════════════════ --}}
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">

        <div class="inline-flex items-center gap-2 section-badge mb-6">
            <span class="w-1.5 h-1.5 rounded-full animate-pulse" style="background: #f0b429;"></span>
            Partenariat &amp; investissement
        </div>

        <h2 class="section-title mb-5">
            Prêt à rejoindre le <span class="gold">mouvement carbone</span> en RDC ?
        </h2>

        <p class="text-gray-500 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
            Que vous soyez investisseur, organisme de certification, partenaire institutionnel ou simplement curieux d'en savoir plus, notre équipe est à votre écoute.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contact') }}" class="btn-gold">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>
            <a href="{{ route('carbon') }}" class="btn-forest">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
                Nos crédits carbone
            </a>
        </div>
    </div>
</section>

@endsection


@push('head')
<style>
/* ── Onglets cadre légal ─────────────────────────────── */
.cert-tab-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.55rem 1.35rem;
    border-radius: 999px;
    font-size: 0.84rem;
    font-weight: 600;
    letter-spacing: 0.02em;
    border: 1.5px solid;
    transition: all 0.25s ease;
    cursor: pointer;
}
.cert-tab-inactive {
    border-color: #e5e7eb;
    color: #6b7280;
    background: #ffffff;
}
.cert-tab-inactive:hover {
    border-color: #16a34a;
    color: #16a34a;
    background: #f0fdf4;
}
.cert-tab-active {
    border-color: #16a34a;
    color: #ffffff;
    background: linear-gradient(135deg, #0f5e29 0%, #16a34a 100%);
    box-shadow: 0 4px 16px rgba(22,163,74,0.28);
}

/* ── Séparateur grille cadre légal ──────────────────── */
@media (min-width: 640px) {
    .cert-grid-item:not(:last-child) {
        border-right: 1px solid rgba(0,0,0,0.04);
    }
}

/* ── Accordéon : smooth open indicator ─────────────── */
[x-collapse] {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
</style>
@endpush
