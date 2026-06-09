{{-- ═══════════════════════════════════════════════════
     FOOTER – ConsForest Maniema
     Footer complet 4 colonnes + copyright
═══════════════════════════════════════════════════ --}}
<footer class="bg-gradient-to-br from-gray-950 via-blue-950 to-gray-950 text-white">

    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Col 1 : Logo & Description --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-5">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-600 to-green-600 flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-xl">CF</span>
                    </div>
                    <div>
                        <p class="font-bold text-white text-base leading-tight">ConsForest Maniema</p>
                        <p class="text-green-400 text-xs">Conservation & Crédit Carbone</p>
                    </div>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed mb-5">
                    Programme de conservation forestière, reboisement et développement durable
                    en République Démocratique du Congo, province du Maniema.
                </p>
                {{-- Social Links --}}
                <div class="flex gap-3">
                    <a href="#" class="w-9 h-9 bg-white/10 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-200" aria-label="Facebook">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-white/10 hover:bg-sky-500 rounded-lg flex items-center justify-center transition-colors duration-200" aria-label="Twitter">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-white/10 hover:bg-blue-700 rounded-lg flex items-center justify-center transition-colors duration-200" aria-label="LinkedIn">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 bg-white/10 hover:bg-red-600 rounded-lg flex items-center justify-center transition-colors duration-200" aria-label="YouTube">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 001.46 6.42 29 29 0 001 12a29 29 0 00.46 5.58 2.78 2.78 0 001.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.96A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/></svg>
                    </a>
                </div>
            </div>

            {{-- Col 2 : Navigation --}}
            <div>
                <h3 class="text-white font-semibold text-base mb-5 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-green-500 block"></span>
                    Navigation
                </h3>
                <ul class="space-y-2.5">
                    @foreach([
                        ['route' => 'home',         'label' => 'Accueil'],
                        ['route' => 'about',        'label' => 'À propos du projet'],
                        ['route' => 'conservation', 'label' => 'Conservation forestière'],
                        ['route' => 'carbon',       'label' => 'Crédit carbone'],
                        ['route' => 'community',    'label' => 'Impact communautaire'],
                        ['route' => 'gallery',      'label' => 'Galerie photos'],
                        ['route' => 'news.index',   'label' => 'Actualités'],
                        ['route' => 'partners',     'label' => 'Partenaires'],
                        ['route' => 'contact',      'label' => 'Contact'],
                    ] as $link)
                    <li>
                        <a href="{{ route($link['route']) }}"
                           class="text-gray-400 hover:text-green-400 text-sm transition-colors duration-200 flex items-center gap-2">
                            <svg class="w-3 h-3 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Col 3 : Partenaires --}}
            <div>
                <h3 class="text-white font-semibold text-base mb-5 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-yellow-400 block"></span>
                    Partenaires
                </h3>
                <ul class="space-y-3">
                    @foreach([
                        ['icon' => '🏢', 'name' => 'BFD SARL', 'desc' => 'Porteur du projet'],
                        ['icon' => '🇨🇩', 'name' => 'Gouvernement RDC', 'desc' => 'Partenaire institutionnel'],
                        ['icon' => '🌿', 'name' => 'Min. Environnement', 'desc' => 'Autorité de tutelle'],
                        ['icon' => '🗺️', 'name' => 'Province du Maniema', 'desc' => 'Gouvernorat local'],
                        ['icon' => '🤝', 'name' => 'Partenaires Techniques', 'desc' => 'Accompagnement terrain'],
                    ] as $partner)
                    <li class="flex items-start gap-3">
                        <span class="text-xl flex-shrink-0 mt-0.5">{{ $partner['icon'] }}</span>
                        <div>
                            <p class="text-white text-sm font-medium">{{ $partner['name'] }}</p>
                            <p class="text-gray-500 text-xs">{{ $partner['desc'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Col 4 : Contact --}}
            <div>
                <h3 class="text-white font-semibold text-base mb-5 flex items-center gap-2">
                    <span class="w-6 h-0.5 bg-red-500 block"></span>
                    Coordonnées
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-green-900/50 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white text-sm font-medium">Siège Social</p>
                            <p class="text-gray-400 text-xs leading-relaxed">Kinshasa, RDC<br>Bureau Provincial – Kindu, Maniema</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-blue-900/50 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white text-sm font-medium">E-mail</p>
                            <a href="mailto:info@consforestmaniema.cd" class="text-gray-400 hover:text-green-400 text-xs transition-colors">info@consforestmaniema.cd</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-yellow-900/50 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white text-sm font-medium">Téléphone</p>
                            <a href="tel:+243XXXXXXXXX" class="text-gray-400 hover:text-green-400 text-xs transition-colors">+243 XXX XXX XXX</a>
                        </div>
                    </li>
                </ul>

                {{-- CTA Contact --}}
                <div class="mt-6">
                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-green-700 to-green-600 hover:from-green-600 hover:to-green-500 text-white text-sm font-semibold rounded-lg transition-all duration-200 hover:-translate-y-0.5 shadow-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                        Prendre contact
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer Bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-gray-500 text-sm text-center">
                &copy; {{ date('Y') }} <span class="text-white font-medium">ConsForest Maniema</span> – BFD SARL.
                Tous droits réservés.
            </p>
            <div class="flex items-center gap-4 text-xs text-gray-500">
                <span class="flex items-center gap-1.5">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    Projet actif en RDC
                </span>
                <span class="text-gray-700">|</span>
                <span>Province du Maniema</span>
            </div>
        </div>
    </div>
</footer>
