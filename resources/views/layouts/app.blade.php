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

    @stack('scripts')
</body>
</html>
