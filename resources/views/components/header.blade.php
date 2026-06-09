{{-- ═══════════════════════════════════════════════════
     HEADER – ConsForest Maniema
     Responsive, sticky, avec sous-menu mobile Alpine.js
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
    ['route' => 'contact',      'label' => 'Contact'],
];
@endphp

<header
    x-data="{
        scrolled: false,
        mobileOpen: false,
        init() { window.addEventListener('scroll', () => { this.scrolled = window.scrollY > 60; }); }
    }"
    :class="scrolled ? 'bg-white shadow-lg' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">

    {{-- Top bar --}}
    <div :class="scrolled ? 'hidden' : 'block'"
         class="bg-gradient-to-r from-blue-900 to-green-900 text-white text-xs py-1.5 px-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <span class="flex items-center gap-2">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                info@consforestmaniema.cd
            </span>
            <span class="hidden sm:flex items-center gap-4">
                <span class="flex items-center gap-1.5">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    +243 XXX XXX XXX
                </span>
                <span class="text-white/60">|</span>
                <span>Kinshasa & Maniema, RDC</span>
            </span>
        </div>
    </div>

    {{-- Main Nav --}}
    <nav :class="scrolled ? 'py-3' : 'py-4'"
         class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between transition-all duration-300">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 group flex-shrink-0">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-800 to-green-700 flex items-center justify-center shadow-md group-hover:shadow-lg transition-shadow">
                <span class="text-white font-bold text-lg">CF</span>
            </div>
            <div class="hidden sm:block">
                <p :class="scrolled ? 'text-green-800' : 'text-white'"
                   class="font-bold text-base leading-tight transition-colors duration-300">
                    ConsForest Maniema
                </p>
                <p :class="scrolled ? 'text-blue-700' : 'text-green-300'"
                   class="text-xs transition-colors duration-300">
                    Conservation & Crédit Carbone
                </p>
            </div>
        </a>

        {{-- Desktop Nav Links --}}
        <div class="hidden lg:flex items-center gap-1">
            @foreach($navLinks as $link)
                @if($link['route'] !== 'contact')
                    <a href="{{ route($link['route']) }}"
                       class="nav-link px-3 py-2 text-sm font-medium rounded-lg transition-all duration-200
                              {{ Route::is($link['route']) ? 'text-green-700 bg-green-50' : '' }}"
                       :class="scrolled ? 'text-gray-700 hover:text-green-700 hover:bg-green-50' : 'text-white/90 hover:text-white hover:bg-white/10'">
                        {{ $link['label'] }}
                    </a>
                @endif
            @endforeach
        </div>

        {{-- CTA + Mobile Toggle --}}
        <div class="flex items-center gap-3">
            {{-- Contact CTA --}}
            <a href="{{ route('contact') }}"
               class="hidden md:inline-flex items-center gap-2 px-4 py-2 rounded-lg font-semibold text-sm transition-all duration-200
                      bg-gradient-to-r from-green-700 to-green-600 text-white hover:from-green-800 hover:to-green-700 shadow-md hover:shadow-lg hover:-translate-y-0.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>

            {{-- Mobile Menu Toggle --}}
            <button @click="mobileOpen = !mobileOpen"
                    class="lg:hidden p-2 rounded-lg transition-colors duration-200"
                    :class="scrolled ? 'text-gray-700 hover:bg-gray-100' : 'text-white hover:bg-white/10'"
                    aria-label="Menu">
                <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </nav>

    {{-- Mobile Menu --}}
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="lg:hidden bg-white border-t border-gray-100 shadow-2xl">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
            @foreach($navLinks as $link)
                <a href="{{ route($link['route']) }}"
                   @click="mobileOpen = false"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-green-50 hover:text-green-800 font-medium transition-colors duration-200
                          {{ Route::is($link['route']) ? 'bg-green-50 text-green-800' : '' }}">
                    <span class="w-2 h-2 rounded-full {{ Route::is($link['route']) ? 'bg-green-600' : 'bg-gray-300' }}"></span>
                    {{ $link['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</header>
