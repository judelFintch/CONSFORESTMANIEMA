<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO --}}
    <title>@yield('title', 'ConsForest Maniema') | Conservation Forestière & Crédit Carbone – RDC</title>
    <meta name="description" content="@yield('description', 'ConsForest Maniema – Programme de conservation forestière, reboisement et crédit carbone en République Démocratique du Congo, province du Maniema. BFD SARL en partenariat avec le Gouvernement de la RDC et le Gouvernorat du Maniema.')">
    <meta name="keywords"    content="@yield('keywords', 'conservation forestière RDC, crédit carbone Congo, Maniema, forêt tropicale, BFD SARL, REDD+, reboisement, biodiversité bassin Congo')">
    <meta name="robots"      content="index, follow">
    <meta name="author"      content="BFD SARL – ConsForest Maniema">
    <link rel="canonical"    href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:title"       content="@yield('title', 'ConsForest Maniema') – Conservation Forestière en RDC">
    <meta property="og:description" content="@yield('description', 'Programme de conservation forestière et crédit carbone en RDC, province du Maniema.')">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:site_name"   content="ConsForest Maniema">
    <meta property="og:image"       content="{{ asset('images/og-image.jpg') }}">
    <meta name="twitter:card"       content="summary_large_image">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    {{-- Cormorant Garamond : serif organique haute nature — italique fluide comme les lianes --}}
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:300,400,500,600,700,700i|lora:400,400i,600|inter:400,500,600,700" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="font-sans antialiased bg-white text-gray-900">

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    {{-- Back to Top --}}
    <button
        x-data="{ show: false }"
        x-init="window.addEventListener('scroll', () => show = window.scrollY > 500, { passive: true })"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="back-top fixed bottom-6 right-6 z-50 w-11 h-11 rounded-full flex items-center justify-center text-gray-900"
        aria-label="Retour en haut">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

    {{-- ═══ Bannière Cookie GDPR ═══ --}}
    <div x-data="{
            visible: false,
            init() {
                if (!localStorage.getItem('cf_cookies')) {
                    setTimeout(() => this.visible = true, 900);
                }
            },
            accept() { localStorage.setItem('cf_cookies','accepted'); this.visible = false; },
            refuse()  { localStorage.setItem('cf_cookies','refused');  this.visible = false; }
         }"
         x-show="visible"
         x-cloak
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 translate-y-6"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-250"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-6"
         class="fixed bottom-5 left-4 right-4 sm:left-6 sm:right-auto sm:w-[420px] z-[300]"
         role="alertdialog"
         aria-label="Consentement aux cookies">

        <div class="rounded-2xl p-5 shadow-2xl"
             style="background: linear-gradient(135deg, #020d06 0%, #030f21 100%); border: 1px solid rgba(240,180,41,0.18);">

            {{-- Header --}}
            <div class="flex items-start justify-between gap-3 mb-3">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-xl bg-forest-800/60 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                  d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <p class="text-white font-semibold text-sm">Cookies &amp; confidentialité</p>
                </div>
                <button @click="refuse()"
                        class="text-white/30 hover:text-white/70 transition-colors mt-0.5"
                        aria-label="Fermer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Message --}}
            <p class="text-white/55 text-xs leading-relaxed mb-4">
                ConsForest Maniema utilise des cookies pour améliorer votre expérience de navigation,
                analyser le trafic et personnaliser le contenu. Vos données restent confidentielles
                et ne sont jamais revendues à des tiers.
            </p>

            {{-- Actions --}}
            <div class="flex items-center gap-2">
                <button @click="accept()"
                        class="flex-1 bg-gold-500 hover:bg-gold-400 text-gray-900 text-xs font-bold px-4 py-2.5 rounded-xl transition-colors">
                    Tout accepter
                </button>
                <button @click="refuse()"
                        class="flex-1 text-xs font-medium px-4 py-2.5 rounded-xl transition-colors text-white/50 hover:text-white/80"
                        style="background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.10);">
                    Refuser
                </button>
            </div>

        </div>
    </div>

    @stack('scripts')
</body>
</html>
