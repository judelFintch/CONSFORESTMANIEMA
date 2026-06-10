@extends('layouts.app')

@section('title', 'ConsForest Maniema – Conservation Forestière & Crédit Carbone en RDC')
@section('description', 'BFD SARL et le Gouvernorat du Maniema protègent la deuxième plus grande forêt tropicale du monde. Conservation forestière, reboisement et crédits carbone certifiés en RDC.')
@section('keywords', 'ConsForest Maniema, conservation forêt RDC, crédit carbone Congo, BFD SARL, reboisement Maniema, bassin Congo')

@section('content')

{{-- ════════════════════════════════════════════════════
     HERO
════════════════════════════════════════════════════ --}}
<section class="hero-section">

    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?w=1920&q=90"
             alt="Forêt tropicale du Bassin du Congo, province du Maniema"
             class="hero-bg-img w-full h-full object-cover scale-[1.04]"
             loading="eager"
             fetchpriority="high">
    </div>

    <div class="hero-overlay absolute inset-0 z-[2]"></div>
    <div class="hero-grain absolute inset-0 z-[3]"></div>

    {{-- Particules végétales CSS — sans emoji --}}
    <div aria-hidden="true" class="absolute inset-0 z-[5] pointer-events-none overflow-hidden">
        <span class="leaf leaf-2"></span>
        <span class="leaf leaf-4"></span>
        <span class="leaf leaf-6"></span>
        <span class="leaf leaf-8"></span>
    </div>

    <div class="relative z-[10] w-full max-w-4xl mx-auto px-6 sm:px-8 flex flex-col items-center text-center pt-28 pb-20">

        <div class="flex flex-col items-center gap-2 mb-6 hero-a1">
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
                <p class="text-white/40 text-[10px] tracking-widest mt-0.5 font-light">Justice · Paix · Travail · RDC</p>
            </div>
        </div>

        <div class="w-20 h-px mb-6 hero-line"
             style="background: linear-gradient(90deg, transparent, rgba(240,180,41,0.5), transparent)"></div>

        <h1 class="hero-display mb-5 hero-a3">
            <span class="line-natural">Préserver</span>
            <em class="line-forest">la Forêt</em>
            <span class="line-natural">du Congo</span>
        </h1>

        <p class="hero-subtitle hero-a4">
            BFD SARL en partenariat avec le Gouvernement de la RDC et la Province du Maniema —
            conservation forestière, reboisement et crédits carbone certifiés REDD+.
        </p>

        <div class="flex items-center gap-2.5 mb-7 hero-a5">
            <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse flex-shrink-0"></span>
            <span class="text-green-400/75 text-xs font-light tracking-widest">Programme actif</span>
            <span class="text-white/18 text-xs">·</span>
            <span class="text-white/35 text-xs tracking-wider font-light">Kindu, Maniema</span>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 items-center hero-a6">
            <a href="{{ route('about') }}" class="btn-gold">
                Découvrir le projet
            </a>
            <a href="{{ route('carbon') }}" class="btn-ghost-white">
                Crédit Carbone
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>

    {{-- Métriques flottantes --}}
    <div class="hidden xl:block absolute bottom-20 left-8 z-[10]">
        <div class="glass-card px-5 py-3.5">
            <p class="text-gold-300 font-display text-2xl font-light leading-none">2<sup class="text-sm">e</sup></p>
            <p class="text-white/40 text-[11px] mt-1 font-light tracking-wide">Forêt tropicale mondiale</p>
        </div>
    </div>
    <div class="hidden xl:block absolute bottom-20 right-8 z-[10]">
        <div class="glass-card px-5 py-3.5 text-right">
            <p class="text-green-300 font-display text-xl font-light leading-none">REDD+</p>
            <p class="text-white/40 text-[11px] mt-1 font-light tracking-wide">Crédits certifiés</p>
        </div>
    </div>

    {{-- Indicateur de scroll --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-[10] flex flex-col items-center gap-1.5 scroll-indicator">
        <span class="text-white/30 text-[10px] tracking-[0.2em] uppercase font-light">Découvrir</span>
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


{{-- ════════════════════════════════════════════════════
     GALERIE 3 PHOTOS
════════════════════════════════════════════════════ --}}
<section class="py-14 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-10 reveal">
            <p class="text-xs font-semibold tracking-[0.25em] uppercase text-gold-500 mb-2">Regard sur le terrain</p>
            <h2 class="text-2xl sm:text-3xl font-display font-black text-gray-900 leading-tight">
                La Forêt du Maniema <span class="gradient-text-forest">en Images</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-4">

            <div class="md:col-span-7 reveal-left relative group overflow-hidden rounded-2xl shadow-xl">
                <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=900&q=80"
                     alt="Canopée dense de la forêt tropicale du Maniema"
                     loading="lazy"
                     class="w-full h-64 md:h-[480px] object-cover group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6">
                    <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-gold-300 bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full mb-2 border border-white/15">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                        Conservation active
                    </span>
                    <p class="text-white font-bold text-lg leading-tight drop-shadow-lg">
                        Canopée forestière<br>du Bassin du Congo
                    </p>
                    <p class="text-white/60 text-xs mt-1">Province du Maniema, RDC</p>
                </div>
            </div>

            <div class="md:col-span-5 flex flex-col gap-4">

                <div class="reveal relative group overflow-hidden rounded-2xl shadow-xl flex-1">
                    <img src="https://images.unsplash.com/photo-1565118531796-763e5082d113?w=700&q=80"
                         alt="Rivière traversant la forêt tropicale – zone de conservation"
                         loading="lazy"
                         class="w-full h-52 md:h-[230px] object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/55 via-black/5 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-blue-300 bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full mb-1.5 border border-white/15">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            Ressources hydriques
                        </span>
                        <p class="text-white font-semibold text-sm leading-snug drop-shadow">
                            Cours d'eau et biodiversité aquatique
                        </p>
                    </div>
                </div>

                <div class="reveal relative group overflow-hidden rounded-2xl shadow-xl flex-1" style="animation-delay: 0.15s">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=700&q=80"
                         alt="Reboisement communautaire – programme ConsForest Maniema"
                         loading="lazy"
                         class="w-full h-52 md:h-[230px] object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/5 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-4">
                        <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-green-300 bg-black/40 backdrop-blur-sm px-3 py-1 rounded-full mb-1.5 border border-white/15">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            Reboisement
                        </span>
                        <p class="text-white font-semibold text-sm leading-snug drop-shadow">
                            Programme de reboisement communautaire
                        </p>
                    </div>
                </div>
            </div>
        </div>

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
     STATS — Chiffres clés
════════════════════════════════════════════════════ --}}
<section class="py-16 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-forest-50/40 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">

            <div class="stat-card reveal text-center p-6 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-forest-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                    </svg>
                </div>
                <div class="text-forest-600 font-black text-4xl sm:text-5xl font-display leading-none mb-1">
                    <span class="count-num" data-count="336">336</span><span class="text-xl">Mha</span>
                </div>
                <p class="text-gray-500 text-xs sm:text-sm font-medium mt-1">Forêts du Bassin Congo</p>
            </div>

            <div class="stat-card reveal text-center p-6 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-gold-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gold-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 6h.008v.008H6V6z"/>
                    </svg>
                </div>
                <div class="text-gold-500 font-black text-4xl sm:text-5xl font-display leading-none mb-1">
                    <span class="count-num" data-count="10000">10&thinsp;000</span><span class="text-xl">+</span>
                </div>
                <p class="text-gray-500 text-xs sm:text-sm font-medium mt-1">Espèces animales</p>
            </div>

            <div class="stat-card reveal text-center p-6 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-blue-maniema-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-maniema-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                    </svg>
                </div>
                <div class="text-blue-maniema-500 font-black text-4xl sm:text-5xl font-display leading-none mb-1">
                    <span class="count-num" data-count="80">80</span><span class="text-xl">M</span>
                </div>
                <p class="text-gray-500 text-xs sm:text-sm font-medium mt-1">Personnes dépendantes</p>
            </div>

            <div class="stat-card reveal text-center p-6 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 mx-auto mb-4 rounded-xl bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-maniema-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/>
                    </svg>
                </div>
                <div class="text-red-maniema-500 font-black text-4xl sm:text-5xl font-display leading-none mb-1">
                    <span class="count-num" data-count="100">100</span><span class="text-xl">%</span>
                </div>
                <p class="text-gray-500 text-xs sm:text-sm font-medium mt-1">Crédits certifiés REDD+</p>
            </div>

        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     PRÉSENTATION — Deux colonnes
════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-24 items-center">

            <div class="relative reveal-left order-2 lg:order-1">
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=700&q=80"
                         alt="Canopée du Bassin du Congo"
                         class="w-full h-80 lg:h-[480px] object-cover hover:scale-105 transition-transform duration-700">
                </div>
                <div class="absolute -bottom-5 -right-5 glass-card p-5 shadow-2xl max-w-[200px]"
                     style="background: rgba(2,13,6,0.9); border-color: rgba(240,180,41,0.2)">
                    <p class="text-gold-400 font-black text-3xl leading-none font-display">2e</p>
                    <p class="text-white/80 text-xs mt-1 leading-tight">Forêt tropicale<br>la plus grande</p>
                </div>
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
                <div class="absolute -z-10 top-10 left-10 w-64 h-64 rounded-full border-2 border-dashed border-green-200/60"></div>
            </div>

            <div class="reveal-right order-1 lg:order-2">
                <div class="section-badge mb-6">À propos du programme</div>

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

                <div class="grid grid-cols-2 gap-3 mb-8">

                    <div class="flex items-center gap-2.5 p-3 bg-forest-50 rounded-xl border border-forest-100">
                        <div class="w-7 h-7 rounded-lg bg-forest-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-forest-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">Protection active</span>
                    </div>

                    <div class="flex items-center gap-2.5 p-3 bg-forest-50 rounded-xl border border-forest-100">
                        <div class="w-7 h-7 rounded-lg bg-forest-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-forest-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">Reboisement</span>
                    </div>

                    <div class="flex items-center gap-2.5 p-3 bg-forest-50 rounded-xl border border-forest-100">
                        <div class="w-7 h-7 rounded-lg bg-forest-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-forest-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">Crédits carbone</span>
                    </div>

                    <div class="flex items-center gap-2.5 p-3 bg-forest-50 rounded-xl border border-forest-100">
                        <div class="w-7 h-7 rounded-lg bg-forest-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-forest-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">Communautés</span>
                    </div>

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
     PROBLÉMATIQUE — Section sombre
════════════════════════════════════════════════════ --}}
<section class="relative py-24 overflow-hidden bg-forest-dark">

    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1504701954957-2010ec3bcec1?w=1600&q=70"
             alt="" class="w-full h-full object-cover opacity-15">
    </div>
    <div class="absolute inset-0 z-[1]"
         style="background: linear-gradient(to bottom, #020d06 0%, rgba(2,13,6,0.7) 50%, #020d06 100%)"></div>

    <div class="relative z-[2] max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-14 reveal">
            <div class="section-badge white mb-6">La problématique</div>
            <h2 class="section-title white mb-5">
                Une Forêt Menacée,<br>
                <span class="gradient-text-gold">une Planète en Danger</span>
            </h2>
            <p class="text-white/60 text-lg leading-relaxed">
                Le Bassin du Congo — deuxième poumon vert de la planète — est aujourd'hui menacé
                par des pressions humaines croissantes et irréversibles.
            </p>
        </div>

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

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 stagger">

            <div class="reveal glass-card p-5 text-center">
                <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-white/8 flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"/>
                    </svg>
                </div>
                <h4 class="text-white font-bold text-sm mb-1">Déforestation</h4>
                <p class="text-white/45 text-xs">Abattage massif non contrôlé</p>
            </div>

            <div class="reveal glass-card p-5 text-center">
                <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-white/8 flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                    </svg>
                </div>
                <h4 class="text-white font-bold text-sm mb-1">Mines illégales</h4>
                <p class="text-white/45 text-xs">Extraction destructrice des sols</p>
            </div>

            <div class="reveal glass-card p-5 text-center">
                <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-white/8 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                    </svg>
                </div>
                <h4 class="text-white font-bold text-sm mb-1">Agriculture</h4>
                <p class="text-white/45 text-xs">Expansion des terres agricoles</p>
            </div>

            <div class="reveal glass-card p-5 text-center">
                <div class="w-12 h-12 mx-auto mb-3 rounded-xl bg-white/8 flex items-center justify-center">
                    <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z"/>
                    </svg>
                </div>
                <h4 class="text-white font-bold text-sm mb-1">Feux de brousse</h4>
                <p class="text-white/45 text-xs">Brûlis non maîtrisés</p>
            </div>

        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     OBJECTIFS — 4 cartes principales
════════════════════════════════════════════════════ --}}
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <div class="section-badge mb-5">Nos objectifs stratégiques</div>
            <h2 class="section-title mb-4">Une Vision Claire pour<br>un Avenir Durable</h2>
            <p class="text-gray-500 max-w-xl mx-auto">
                Le programme ConsForest Maniema articule ses actions autour de quatre piliers fondamentaux.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 stagger">

            <a href="{{ route('conservation') }}" class="feature-card reveal group block">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-11 h-11 rounded-xl bg-forest-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-forest-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-gray-200 font-display">01</span>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2 group-hover:text-forest-700 transition-colors">Protection des forêts</h3>
                <p class="text-gray-400 text-xs leading-relaxed">Protéger les espaces forestiers des activités destructrices.</p>
                <div class="mt-4 flex items-center gap-1 text-forest-600 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                    Découvrir
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </a>

            <a href="{{ route('conservation') }}" class="feature-card reveal group block">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-11 h-11 rounded-xl bg-green-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-gray-200 font-display">02</span>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2 group-hover:text-forest-700 transition-colors">Reboisement</h3>
                <p class="text-gray-400 text-xs leading-relaxed">Restaurer les zones dégradées par plantation d'espèces natives.</p>
                <div class="mt-4 flex items-center gap-1 text-forest-600 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                    Découvrir
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </a>

            <a href="{{ route('carbon') }}" class="feature-card reveal group block">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-11 h-11 rounded-xl bg-blue-maniema-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-maniema-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-gray-200 font-display">03</span>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2 group-hover:text-forest-700 transition-colors">Crédit carbone</h3>
                <p class="text-gray-400 text-xs leading-relaxed">Certifier et valoriser les crédits carbone du programme.</p>
                <div class="mt-4 flex items-center gap-1 text-forest-600 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                    Découvrir
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </a>

            <a href="{{ route('community') }}" class="feature-card reveal group block">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-11 h-11 rounded-xl bg-gold-50 flex items-center justify-center">
                        <svg class="w-5 h-5 text-gold-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-gray-200 font-display">04</span>
                </div>
                <h3 class="font-bold text-gray-900 text-sm mb-2 group-hover:text-forest-700 transition-colors">Communautés locales</h3>
                <p class="text-gray-400 text-xs leading-relaxed">Créer des opportunités économiques durables localement.</p>
                <div class="mt-4 flex items-center gap-1 text-forest-600 text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                    Découvrir
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </a>

        </div>

        <div class="text-center mt-10 reveal">
            <a href="{{ route('conservation') }}"
               class="inline-flex items-center gap-2 text-forest-600 hover:text-forest-800 font-semibold text-sm transition-colors group border border-forest-200 hover:border-forest-400 px-5 py-2.5 rounded-xl">
                Voir tous nos objectifs
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     IMPACT — Triptyque
════════════════════════════════════════════════════ --}}
<section class="py-24 bg-forest-pattern relative overflow-hidden">
    <div class="absolute right-0 top-0 w-96 h-96 bg-forest-100/50 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 reveal">
            <div class="section-badge mb-5">Impact attendu</div>
            <h2 class="section-title mb-4">
                Trois Dimensions<br>d'Impact Concret
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="impact-card reveal bg-gradient-to-br from-forest-900 to-forest-700 text-white">
                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                    </svg>
                </div>
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

            <div class="impact-card reveal bg-gradient-to-br from-blue-maniema-900 to-blue-maniema-700 text-white" style="transition-delay:100ms">
                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                    </svg>
                </div>
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

            <div class="impact-card reveal bg-gradient-to-br from-gold-700 to-gold-500 text-white" style="transition-delay:200ms">
                <div class="w-14 h-14 bg-white/15 rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                    </svg>
                </div>
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
                <div class="section-badge mb-4">Dernières nouvelles</div>
                <h2 class="section-title">Actualités du Programme</h2>
            </div>
            <a href="{{ route('news.index') }}" class="btn-forest text-sm flex-shrink-0">
                Toutes les actualités
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
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
                            <svg class="w-16 h-16 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
                            </svg>
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
     PARTENAIRES — Strip institutionnel
════════════════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 border-y border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs text-gray-400 uppercase tracking-[0.3em] font-semibold mb-12">
            Partenaires institutionnels
        </p>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 items-center">

            <div class="partner-item text-center py-4 px-3 rounded-xl hover:bg-white hover:shadow-sm transition-all">
                <div class="h-8 flex items-center justify-center mb-2">
                    <span class="font-black text-gray-800 text-base tracking-tight">BFD SARL</span>
                </div>
                <p class="text-gray-400 text-xs">Porteur de projet</p>
            </div>

            <div class="partner-item text-center py-4 px-3 rounded-xl hover:bg-white hover:shadow-sm transition-all">
                <div class="h-8 flex items-center justify-center mb-2">
                    <span class="font-bold text-gray-700 text-sm tracking-wide">Gouvernement</span>
                </div>
                <p class="text-gray-400 text-xs">République Démocratique du Congo</p>
            </div>

            <div class="partner-item text-center py-4 px-3 rounded-xl hover:bg-white hover:shadow-sm transition-all">
                <div class="h-8 flex items-center justify-center mb-2">
                    <span class="font-bold text-gray-700 text-sm tracking-wide">Min. Environnement</span>
                </div>
                <p class="text-gray-400 text-xs">Autorité de tutelle</p>
            </div>

            <div class="partner-item text-center py-4 px-3 rounded-xl hover:bg-white hover:shadow-sm transition-all">
                <div class="h-8 flex items-center justify-center mb-2">
                    <img src="{{ asset('images/logo-maniema.png') }}"
                         alt="Province du Maniema"
                         class="h-8 w-8 rounded-full object-cover mx-auto"
                         onerror="this.outerHTML='<span class=\'font-bold text-gray-700 text-sm\'>Maniema</span>'">
                </div>
                <p class="text-gray-400 text-xs">Province du Maniema</p>
            </div>

            <div class="partner-item text-center py-4 px-3 rounded-xl hover:bg-white hover:shadow-sm transition-all">
                <div class="h-8 flex items-center justify-center mb-2">
                    <span class="font-bold text-gray-700 text-sm tracking-wide">Partenaires Intl.</span>
                </div>
                <p class="text-gray-400 text-xs">Organisations techniques</p>
            </div>

        </div>
        <div class="text-center mt-8">
            <a href="{{ route('partners') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-forest-700 text-xs font-semibold transition-colors">
                Voir tous les partenaires
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     CTA FINAL
════════════════════════════════════════════════════ --}}
<section class="relative py-28 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1586348943529-beaae6c28db9?w=1600&q=70"
             alt="" class="w-full h-full object-cover">
        <div class="absolute inset-0"
             style="background: linear-gradient(135deg, rgba(3,15,33,0.92) 0%, rgba(6,26,12,0.88) 50%, rgba(3,15,33,0.92) 100%)"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex justify-center mb-8 reveal">
            <img src="{{ asset('images/logo-maniema.png') }}"
                 alt="Province du Maniema"
                 class="logo-glow w-20 h-20 rounded-full object-cover border-2 border-gold-400/40"
                 onerror="this.style.display='none'">
        </div>

        <div class="section-badge white mx-auto mb-6 reveal">
            Rejoignez le mouvement
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
