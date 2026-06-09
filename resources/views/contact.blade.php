@extends('layouts.app')

@section('title', 'Contact – Prendre contact avec ConsForest Maniema')
@section('description', 'Contactez l\'équipe ConsForest Maniema pour toute question relative au projet de conservation forestière et crédit carbone en RDC, province du Maniema. Formulaire de contact, adresse et téléphone.')
@section('keywords', 'contact ConsForest Maniema, BFD SARL contact, conservation forêt RDC contact, Maniema contact')

@section('content')

{{-- Page Header --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4">
            <a href="{{ route('home') }}">Accueil</a><span>/</span>
            <span class="text-white font-medium">Contact</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Contactez-Nous</h1>
        <p class="text-white/80 text-xl max-w-2xl">
            Une question ? Un projet de partenariat ? Écrivez-nous — nous vous répondons sous 48 heures.
        </p>
    </div>
</div>


<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Sidebar Info --}}
            <div class="lg:col-span-1 space-y-6">

                {{-- Info Cards --}}
                @foreach([
                    [
                        'icon' => 'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z',
                        'title' => 'Siège Social',
                        'lines' => ['Kinshasa, République Démocratique du Congo', 'Bureau Provincial : Kindu, Province du Maniema'],
                        'color' => 'green',
                    ],
                    [
                        'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'title' => 'Adresse E-mail',
                        'lines' => ['info@consforestmaniema.cd', 'bfd@consforestmaniema.cd'],
                        'color' => 'blue',
                    ],
                    [
                        'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
                        'title' => 'Téléphone',
                        'lines' => ['+243 XXX XXX XXX', 'Lun–Ven, 8h–17h (heure de Kinshasa)'],
                        'color' => 'amber',
                    ],
                ] as $info)
                <div class="flex items-start gap-4 p-5 bg-{{ $info['color'] }}-50 rounded-2xl border border-{{ $info['color'] }}-100">
                    <div class="w-11 h-11 bg-{{ $info['color'] }}-600 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $info['icon'] }}"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900 text-sm mb-1">{{ $info['title'] }}</p>
                        @foreach($info['lines'] as $line)
                        <p class="text-gray-600 text-sm">{{ $line }}</p>
                        @endforeach
                    </div>
                </div>
                @endforeach

                {{-- Social --}}
                <div class="p-5 bg-gray-50 rounded-2xl">
                    <p class="font-semibold text-gray-900 text-sm mb-3">Suivez-nous</p>
                    <div class="flex gap-3">
                        @foreach([
                            ['bg' => 'bg-blue-600 hover:bg-blue-700', 'label' => 'Facebook', 'path' => 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z'],
                            ['bg' => 'bg-sky-500 hover:bg-sky-600', 'label' => 'Twitter', 'path' => 'M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z'],
                            ['bg' => 'bg-blue-700 hover:bg-blue-800', 'label' => 'LinkedIn', 'path' => 'M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z'],
                        ] as $social)
                        <a href="#" aria-label="{{ $social['label'] }}"
                           class="{{ $social['bg'] }} w-9 h-9 text-white rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="{{ $social['path'] }}"/></svg>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>


            {{-- Contact Form --}}
            <div class="lg:col-span-2">
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Envoyez-nous un message</h2>
                    <p class="text-gray-500 text-sm mb-8">Tous les champs marqués * sont obligatoires.</p>

                    {{-- Session Messages --}}
                    @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-green-800 text-sm">{{ session('success') }}</p>
                    </div>
                    @endif

                    <div x-data="contactForm()">

                        {{-- Success Message --}}
                        <div x-show="success"
                             x-transition
                             class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <p x-text="message" class="text-green-800 text-sm"></p>
                        </div>

                        {{-- Error Message --}}
                        <div x-show="error"
                             x-transition
                             class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl flex items-start gap-3">
                            <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                            <p x-text="message" class="text-red-800 text-sm"></p>
                        </div>

                        <form action="{{ route('contact.store') }}"
                              method="POST"
                              @submit.prevent="submit($event)"
                              class="space-y-5">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                {{-- Nom --}}
                                <div>
                                    <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1.5">
                                        Nom complet <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text"
                                           id="full_name"
                                           name="full_name"
                                           value="{{ old('full_name') }}"
                                           placeholder="Jean-Pierre Mukendi"
                                           class="form-input @error('full_name') border-red-400 @enderror"
                                           required>
                                    @error('full_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                                        Adresse e-mail <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email"
                                           id="email"
                                           name="email"
                                           value="{{ old('email') }}"
                                           placeholder="jean@exemple.com"
                                           class="form-input @error('email') border-red-400 @enderror"
                                           required>
                                    @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                {{-- Téléphone --}}
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1.5">
                                        Téléphone
                                    </label>
                                    <input type="tel"
                                           id="phone"
                                           name="phone"
                                           value="{{ old('phone') }}"
                                           placeholder="+243 XXX XXX XXX"
                                           class="form-input">
                                </div>

                                {{-- Sujet --}}
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1.5">
                                        Sujet <span class="text-red-500">*</span>
                                    </label>
                                    <select id="subject"
                                            name="subject"
                                            class="form-input @error('subject') border-red-400 @enderror"
                                            required>
                                        <option value="" disabled {{ !old('subject') ? 'selected' : '' }}>Choisir un sujet</option>
                                        @foreach([
                                            'Demande d\'information générale',
                                            'Proposition de partenariat',
                                            'Investissement / Crédit Carbone',
                                            'Collaboration scientifique',
                                            'Presse & Médias',
                                            'Question technique',
                                            'Autre',
                                        ] as $subj)
                                        <option value="{{ $subj }}" {{ old('subject') === $subj ? 'selected' : '' }}>
                                            {{ $subj }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('subject')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Message --}}
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-1.5">
                                    Votre message <span class="text-red-500">*</span>
                                </label>
                                <textarea id="message"
                                          name="message"
                                          rows="6"
                                          placeholder="Décrivez votre demande, votre projet ou votre question..."
                                          class="form-input resize-none @error('message') border-red-400 @enderror"
                                          required>{{ old('message') }}</textarea>
                                @error('message')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Submit --}}
                            <div class="flex items-center gap-4">
                                <button type="submit"
                                        :disabled="submitting"
                                        class="btn-forest disabled:opacity-60 disabled:cursor-not-allowed px-8 py-3.5 text-base">
                                    <span x-show="!submitting" class="flex items-center gap-2">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                        </svg>
                                        Envoyer le message
                                    </span>
                                    <span x-show="submitting" class="flex items-center gap-2">
                                        <svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                                        </svg>
                                        Envoi en cours...
                                    </span>
                                </button>
                                <p class="text-gray-400 text-xs">
                                    Réponse sous 48h ouvrables
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Map Placeholder --}}
<section class="h-64 bg-gray-200 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-green-900/80 to-blue-900/80 flex items-center justify-center">
        <div class="text-center text-white">
            <div class="text-5xl mb-3">🗺️</div>
            <p class="font-bold text-xl mb-1">Province du Maniema</p>
            <p class="text-white/70">République Démocratique du Congo</p>
        </div>
    </div>
    <img src="https://images.unsplash.com/photo-1569974507005-6dc61f97fb9c?w=1440&q=60"
         alt="Carte RDC" class="w-full h-full object-cover opacity-40">
</section>

@endsection
