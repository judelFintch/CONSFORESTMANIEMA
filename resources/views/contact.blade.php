@extends('layouts.app')

@section('title', 'Contact – Prendre contact avec ConsForest Maniema')
@section('description', 'Contactez l\'équipe ConsForest Maniema pour toute question relative au projet de conservation forestière et crédit carbone en RDC, province du Maniema.')
@section('keywords', 'contact ConsForest Maniema, BFD SARL contact, conservation forêt RDC contact, Maniema contact')

@section('content')

{{-- ══════════════════════════════════════════
     PAGE HEADER
══════════════════════════════════════════ --}}
<div class="page-header pt-32 pb-24" style="min-height: 380px;">

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
            <span class="text-white font-medium">Contact</span>
        </nav>

        <span class="section-badge white mb-5">Parlons ensemble</span>

        <h1 style="font-family: var(--font-display);"
            class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight">
            Contactez-<span style="color: #f0b429;">nous</span>
        </h1>
        <p class="text-white/65 text-lg max-w-xl leading-relaxed">
            Une question, un projet de partenariat ou une opportunité carbone ?
            Écrivez-nous — nous vous répondons sous <strong class="text-white/85">48 heures ouvrables</strong>.
        </p>
    </div>
</div>


{{-- ══════════════════════════════════════════
     FORMULAIRE + SIDEBAR
══════════════════════════════════════════ --}}
<section class="py-16 bg-white cf-net-bg">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- ── Sidebar ── --}}
            <div class="space-y-5 reveal-left">

                {{-- Info cards --}}
                @foreach([
                    [
                        'icon'  => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z',
                        'title' => 'Siège Social',
                        'lines' => ['8618 Av. de la Clinique, Im. Gloire à Dieu Ap. 1', 'Commune de la Gombe, Kinshasa — RDC'],
                        'color' => '#16a34a', 'bg' => 'rgba(22,163,74,0.08)',
                    ],
                    [
                        'icon'  => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'title' => 'E-mail',
                        'lines' => ['info@consforestmaniema.com', 'proj.eco.kinma@gmail.com'],
                        'color' => '#1d6fa8', 'bg' => 'rgba(29,111,168,0.08)',
                    ],
                ] as $info)
                <div class="flex items-start gap-4 p-4 rounded-2xl border border-gray-100"
                     style="background: {{ $info['bg'] }};">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                         style="background: {{ $info['color'] }}18;">
                        <svg class="w-5 h-5" style="color: {{ $info['color'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $info['icon'] }}"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900 text-sm mb-1">{{ $info['title'] }}</p>
                        @foreach($info['lines'] as $line)
                        <p class="text-gray-500 text-xs">{{ $line }}</p>
                        @endforeach
                    </div>
                </div>
                @endforeach

                {{-- Réseaux --}}
                <div class="p-4 bg-gray-50 rounded-2xl border border-gray-100">
                    <p class="font-semibold text-gray-900 text-sm mb-3">Suivez-nous</p>
                    <div class="flex gap-2.5">
                        @foreach([
                            ['bg' => '#1877f2', 'label' => 'Facebook', 'path' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'],
                            ['bg' => '#0ea5e9', 'label' => 'Twitter',  'path' => 'M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z'],
                            ['bg' => '#0a66c2', 'label' => 'LinkedIn', 'path' => 'M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z'],
                        ] as $social)
                        <a href="#" aria-label="{{ $social['label'] }}"
                           class="w-9 h-9 text-white rounded-xl flex items-center justify-center hover:opacity-80 transition-opacity"
                           style="background: {{ $social['bg'] }};">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="{{ $social['path'] }}"/>
                            </svg>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Temps de réponse --}}
                <div class="p-4 rounded-2xl border border-forest-100" style="background: rgba(22,163,74,0.05);">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse flex-shrink-0"></span>
                        <p class="text-forest-700 font-semibold text-xs">Équipe disponible</p>
                    </div>
                    <p class="text-gray-400 text-xs leading-relaxed">
                        Temps de réponse habituel : <strong class="text-gray-600">moins de 48h</strong>
                        en jours ouvrables.
                    </p>
                </div>

            </div>


            {{-- ── Formulaire ── --}}
            <div class="lg:col-span-2 reveal-right">
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                    <h2 class="font-bold text-gray-900 text-xl mb-1">Envoyez-nous un message</h2>
                    <p class="text-gray-400 text-xs mb-7">Tous les champs marqués * sont obligatoires.</p>

                    @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-green-800 text-sm">{{ session('success') }}</p>
                    </div>
                    @endif

                    <div x-data="contactForm()">

                        <div x-show="done" x-transition class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <p x-text="msg" class="text-green-800 text-sm"></p>
                        </div>

                        <div x-show="fail" x-transition class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl flex items-start gap-3">
                            <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                            <p x-text="msg" class="text-red-800 text-sm"></p>
                        </div>

                        <form action="{{ route('contact.store') }}"
                              method="POST"
                              @submit.prevent="submit($event)"
                              class="space-y-5">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="full_name" class="block text-xs font-semibold text-gray-700 mb-1.5">
                                        Nom complet <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="full_name" name="full_name"
                                           value="{{ old('full_name') }}"
                                           placeholder="Jean-Pierre Mukendi"
                                           class="form-input @error('full_name') border-red-400 @enderror"
                                           required>
                                    @error('full_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-semibold text-gray-700 mb-1.5">
                                        E-mail <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" id="email" name="email"
                                           value="{{ old('email') }}"
                                           placeholder="jean@exemple.com"
                                           class="form-input @error('email') border-red-400 @enderror"
                                           required>
                                    @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-xs font-semibold text-gray-700 mb-1.5">
                                    Sujet <span class="text-red-500">*</span>
                                </label>
                                <select id="subject" name="subject"
                                        class="form-input @error('subject') border-red-400 @enderror"
                                        required>
                                    <option value="" disabled {{ !old('subject') ? 'selected' : '' }}>Choisir un sujet</option>
                                    @foreach(["Demande d'information générale", 'Proposition de partenariat', 'Investissement / Crédit Carbone', 'Collaboration scientifique', 'Presse & Médias', 'Question technique', 'Autre'] as $subj)
                                    <option value="{{ $subj }}" {{ old('subject') === $subj ? 'selected' : '' }}>{{ $subj }}</option>
                                    @endforeach
                                </select>
                                @error('subject')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-xs font-semibold text-gray-700 mb-1.5">
                                    Votre message <span class="text-red-500">*</span>
                                </label>
                                <textarea id="message" name="message" rows="6"
                                          placeholder="Décrivez votre demande, votre projet ou votre question..."
                                          class="form-input resize-none @error('message') border-red-400 @enderror"
                                          required>{{ old('message') }}</textarea>
                                @error('message')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-center gap-4 pt-1">
                                <button type="submit"
                                        :disabled="sending"
                                        class="btn-gold disabled:opacity-60 disabled:cursor-not-allowed px-7">
                                    <span x-show="!sending" class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                        </svg>
                                        Envoyer le message
                                    </span>
                                    <span x-show="sending" class="flex items-center gap-2">
                                        <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                                        </svg>
                                        Envoi en cours…
                                    </span>
                                </button>
                                <p class="text-gray-400 text-xs">Réponse sous 48h ouvrables</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════
     LOCALISATION
══════════════════════════════════════════ --}}
<section class="py-12 bg-institutional">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 text-white">
            @foreach([
                ['val' => 'Kinshasa', 'label' => 'Siège social — C/ Gombe', 'sub' => '8618 Av. de la Clinique, Im. Gloire à Dieu Ap. 1', 'c' => '#4ade80'],
                ['val' => 'Kindu',    'label' => 'Bureau provincial',  'sub' => 'Province du Maniema',              'c' => '#f0b429'],
                ['val' => 'Kailo & Pangi', 'label' => 'Zones d\'intervention', 'sub' => 'Territoires forestiers',  'c' => '#93c5fd'],
            ] as $loc)
            <div class="rounded-2xl p-5 flex items-center gap-4"
                 style="background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.10);">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                     style="background: {{ $loc['c'] }}20;">
                    <svg class="w-5 h-5" style="color: {{ $loc['c'] }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-white text-sm">{{ $loc['val'] }}</p>
                    <p class="text-white/40 text-xs">{{ $loc['label'] }}</p>
                    <p class="text-white/30 text-xs">{{ $loc['sub'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
