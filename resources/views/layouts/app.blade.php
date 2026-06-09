<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO --}}
    <title>@yield('title', 'ConsForest Maniema') | Projet de Conservation Forestière en RDC</title>
    <meta name="description" content="@yield('description', 'ConsForest Maniema – Programme de conservation forestière, reboisement et crédit carbone en République Démocratique du Congo, province du Maniema. BFD SARL en partenariat avec le Gouvernement de la RDC.')">
    <meta name="keywords" content="@yield('keywords', 'conservation forestière, RDC, Maniema, crédit carbone, reboisement, forêt tropicale, BFD SARL, développement durable, Congo, bassin du Congo')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="BFD SARL – ConsForest Maniema">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'ConsForest Maniema') | Conservation Forestière en RDC">
    <meta property="og:description" content="@yield('description', 'Programme de conservation forestière et crédit carbone en RDC, province du Maniema.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="ConsForest Maniema">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'ConsForest Maniema')">
    <meta name="twitter:description" content="@yield('description', 'Conservation forestière et crédit carbone en RDC.')">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800|playfair-display:400,600,700" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="font-sans antialiased bg-white text-gray-900">

    {{-- Header --}}
    @include('components.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- Back to Top Button --}}
    <button
        x-data="{ show: false }"
        x-init="window.addEventListener('scroll', () => show = window.scrollY > 400)"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-6 right-6 z-50 w-12 h-12 bg-green-700 hover:bg-green-800 text-white rounded-full shadow-lg flex items-center justify-center transition-all duration-300 hover:-translate-y-1"
        aria-label="Retour en haut">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

    @stack('scripts')
</body>
</html>
