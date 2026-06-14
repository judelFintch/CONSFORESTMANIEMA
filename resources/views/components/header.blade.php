{{-- ═══════════════════════════════════════════════════
     HEADER – ConsForest Maniema
     Design premium : transparent hero → frosted glass au scroll
═══════════════════════════════════════════════════ --}}
@php
$navLinks = [
    ['route' => 'home',         'label' => 'Accueil'],
    ['route' => 'about',        'label' => 'À propos'],
    ['route' => 'conservation', 'label' => 'Conservation'],
    ['route' => 'carbon',       'label' => 'Crédit Carbone'],
    ['route' => 'community',    'label' => 'Impact Social'],
    ['route' => 'about',        'label' => 'Notre Équipe',  'anchor' => '#equipe'],
    ['route' => 'news.index',   'label' => 'Actualités'],
];
@endphp

<header
    x-data="header()"
    :class="scrolled ? 'site-header scrolled' : 'site-header'"
    class="fixed top-0 left-0 right-0 z-50">

    {{-- Ligne dorée décorative en haut --}}
    <div class="h-[2px] w-full"
         style="background: linear-gradient(90deg, transparent 0%, rgba(240,180,41,0.7) 30%, rgba(240,180,41,0.9) 50%, rgba(240,180,41,0.7) 70%, transparent 100%)"></div>

    {{-- Top bar institutionnel --}}
    <div x-show="!scrolled"
         x-transition:leave="transition duration-300"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="border-b border-white/8 py-1.5 px-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <span class="flex items-center gap-2 text-[11px] text-white/45 font-light tracking-[0.15em]">
                <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span>
                Programme actif · Province du Maniema, République Démocratique du Congo
            </span>
            <a href="mailto:info@consforestmaniema.cd"
               class="hidden sm:flex items-center gap-1.5 text-[11px] text-white/40 hover:text-gold-400 transition-colors font-light tracking-wide">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                info@consforestmaniema.cd
            </a>
        </div>
    </div>

    {{-- Main nav --}}
    <nav :class="scrolled ? 'py-2.5' : 'py-4'"
         class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between transition-all duration-400">

        {{-- ── Logo ────────────────────────────────────────────── --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3.5 group flex-shrink-0">
            <div class="relative">
                {{-- Halo doré --}}
                <div class="absolute inset-0 rounded-full bg-gold-400/20 blur-md scale-110 group-hover:scale-125 transition-transform duration-500"></div>
                <img src="{{ asset('images/logo-maniema.png') }}"
                     alt="Logo Province du Maniema"
                     class="relative w-10 h-10 rounded-full object-cover border border-gold-400/50 shadow-lg transition-all duration-300 group-hover:border-gold-400/90"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                <div style="display:none"
                     class="relative w-10 h-10 rounded-full bg-gradient-to-br from-blue-maniema-700 to-forest-800 flex items-center justify-center border border-gold-400/50">
                    <span class="text-white font-black text-xs">CF</span>
                </div>
            </div>
            <div class="hidden sm:block leading-none">
                <p class="font-display font-bold text-lg text-white leading-none tracking-tight group-hover:text-gold-200 transition-colors duration-300"
                   style="font-family: var(--font-display)">ConsForest</p>
                <p class="text-[10px] font-semibold tracking-[0.3em] uppercase mt-0.5 transition-colors duration-300"
                   :class="scrolled ? 'text-green-400/80' : 'text-gold-400/70'">Maniema · RDC</p>
            </div>
        </a>

        {{-- ── Desktop links ───────────────────────────────────── --}}
        <div class="hidden lg:flex items-center">
            @foreach($navLinks as $link)
            <a href="{{ route($link['route']) }}{{ $link['anchor'] ?? '' }}"
               class="nav-link-premium {{ Route::is($link['route']) && !isset($link['anchor']) ? 'active' : '' }}">
                {{ $link['label'] }}
            </a>
            @endforeach
        </div>

        {{-- ── CTA + Burger ────────────────────────────────────── --}}
        <div class="flex items-center gap-3">
            {{-- Séparateur vertical --}}
            <span class="hidden lg:block w-px h-5 bg-white/15"></span>

            <a href="{{ route('contact') }}"
               class="hidden md:inline-flex items-center gap-2 nav-cta-btn"
               :class="scrolled ? 'nav-cta-scrolled' : 'nav-cta-transparent'">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>

            <button @click="mobileOpen = !mobileOpen"
                    class="lg:hidden flex items-center justify-center w-9 h-9 rounded-lg border border-white/20 text-white hover:border-gold-400/60 hover:text-gold-300 transition-all duration-200"
                    aria-label="Menu">
                <svg x-show="!mobileOpen" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </nav>

    {{-- ── Mobile menu ─────────────────────────────────────────── --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-280"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden border-t border-white/8"
         style="background: rgba(2,11,5,0.97); backdrop-filter: blur(24px);">

        <div class="max-w-7xl mx-auto px-4 pt-5 pb-6">

            {{-- Titre mobile --}}
            <p class="text-[10px] font-semibold tracking-[0.3em] uppercase text-white/25 mb-4 px-2">Navigation</p>

            <div class="space-y-0.5">
                @foreach($navLinks as $link)
                <a href="{{ route($link['route']) }}{{ $link['anchor'] ?? '' }}"
                   @click="mobileOpen = false"
                   class="mobile-nav-item {{ Route::is($link['route']) && !isset($link['anchor']) ? 'active' : '' }}">
                    <span class="mobile-nav-dot {{ Route::is($link['route']) && !isset($link['anchor']) ? 'active' : '' }}"></span>
                    {{ $link['label'] }}
                </a>
                @endforeach
            </div>

            {{-- Séparateur --}}
            <div class="my-4 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

            {{-- CTA mobile --}}
            <a href="{{ route('contact') }}" @click="mobileOpen = false"
               class="flex items-center justify-center gap-2 w-full py-3 rounded-xl font-semibold text-sm text-forest-900 transition-all"
               style="background: linear-gradient(135deg, #f0b429 0%, #d97706 100%)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>

            {{-- Email rapide --}}
            <p class="text-center text-[11px] text-white/25 mt-4 font-light">
                info@consforestmaniema.cd
            </p>
        </div>
    </div>
</header>
