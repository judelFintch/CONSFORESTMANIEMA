{{-- ═══════════════════════════════════════════════════
     HEADER – ConsForest Maniema
     Transparent sur hero → Vert forêt sombre au scroll
═══════════════════════════════════════════════════ --}}
@php
$navLinks = [
    ['route' => 'home',         'label' => 'Accueil'],
    ['route' => 'about',        'label' => 'À propos'],
    ['route' => 'conservation', 'label' => 'Conservation'],
    ['route' => 'carbon',       'label' => 'Crédit Carbone'],
    ['route' => 'community',    'label' => 'Impact Social'],
    ['route' => 'gallery',      'label' => 'Galerie'],
    ['route' => 'news.index',   'label' => 'Actualités'],
    ['route' => 'partners',     'label' => 'Partenaires'],
];
@endphp

<header
    x-data="header()"
    :class="scrolled ? 'site-header scrolled' : 'site-header bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50">

    {{-- Top bar institutionnel --}}
    <div x-show="!scrolled"
         x-transition:leave="transition duration-200" x-transition:leave-end="opacity-0"
         class="border-b border-white/10 py-1.5 px-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between text-xs text-white/60">
            <span class="flex items-center gap-3">
                <span class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span>
                    Programme actif – Province du Maniema, RDC
                </span>
            </span>
            <span class="hidden sm:flex items-center gap-4">
                <a href="mailto:info@consforestmaniema.cd" class="hover:text-gold-400 transition-colors">
                    info@consforestmaniema.cd
                </a>
                <span class="opacity-30">|</span>
                <a href="tel:+243XXXXXXXXX" class="hover:text-gold-400 transition-colors">+243 XXX XXX XXX</a>
            </span>
        </div>
    </div>

    {{-- Main nav --}}
    <nav :class="scrolled ? 'py-3' : 'py-4'"
         class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between transition-all duration-300">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            {{-- Logo Province du Maniema --}}
            <div class="relative flex-shrink-0">
                <img src="{{ asset('images/logo-maniema.png') }}"
                     alt="Logo Province du Maniema"
                     class="w-11 h-11 rounded-full object-cover shadow-lg ring-2 ring-gold-400/40 group-hover:ring-gold-400/80 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                {{-- Fallback si image absente --}}
                <div style="display:none"
                     class="w-11 h-11 rounded-full bg-gradient-to-br from-blue-700 to-green-700 flex items-center justify-center ring-2 ring-gold-400/40">
                    <span class="text-white font-black text-sm">CF</span>
                </div>
            </div>
            <div class="hidden sm:block">
                <p class="font-black text-sm text-white leading-tight tracking-wide">ConsForest Maniema</p>
                <p :class="scrolled ? 'text-green-400' : 'text-gold-400/80'"
                   class="text-[10px] font-medium tracking-widest uppercase transition-colors">
                    Conservation & Crédit Carbone
                </p>
            </div>
        </a>

        {{-- Desktop nav --}}
        <div class="hidden lg:flex items-center gap-0.5">
            @foreach($navLinks as $link)
            <a href="{{ route($link['route']) }}"
               class="nav-item px-3.5 py-2 rounded-lg text-white/85 hover:text-white hover:bg-white/8 transition-colors
                      {{ Route::is($link['route']) ? 'text-white bg-white/10 active' : '' }}">
                {{ $link['label'] }}
            </a>
            @endforeach
        </div>

        {{-- CTA + Burger --}}
        <div class="flex items-center gap-3">
            <a href="{{ route('contact') }}"
               class="hidden md:inline-flex items-center gap-2 btn-gold py-2 px-5 text-xs">
                Nous contacter
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>

            <button @click="mobileOpen = !mobileOpen"
                    class="lg:hidden w-10 h-10 flex items-center justify-center rounded-lg text-white hover:bg-white/10 transition-colors"
                    aria-label="Menu">
                <svg x-show="!mobileOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </nav>

    {{-- Mobile menu --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-250"
         x-transition:enter-start="opacity-0 -translate-y-3"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-180"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="lg:hidden border-t border-white/10"
         style="background: rgba(2,13,6,0.96); backdrop-filter: blur(20px);">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
            @foreach($navLinks as $link)
            <a href="{{ route($link['route']) }}"
               @click="mobileOpen = false"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-white/75 hover:text-white hover:bg-white/8 font-medium text-sm transition-all
                      {{ Route::is($link['route']) ? 'bg-white/10 text-white' : '' }}">
                <span class="w-1.5 h-1.5 rounded-full {{ Route::is($link['route']) ? 'bg-gold-400' : 'bg-white/25' }}"></span>
                {{ $link['label'] }}
            </a>
            @endforeach
            <a href="{{ route('contact') }}" @click="mobileOpen = false"
               class="block mt-3 btn-gold text-center py-3 rounded-xl text-sm">
                Nous contacter
            </a>
        </div>
    </div>
</header>
