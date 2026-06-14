{{-- ═══════════════════════════════════════════════════
     FOOTER – ConsForest Maniema
     Thème forêt sombre avec accents dorés
═══════════════════════════════════════════════════ --}}
<footer style="background: linear-gradient(180deg, #030f21 0%, #020d06 100%);" class="text-white relative overflow-hidden">

    {{-- Décor végétal --}}
    <div class="absolute bottom-0 left-0 right-0 h-40 pointer-events-none opacity-5"
         style="background: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 160\"><path fill=\"%2316a34a\" d=\"M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,106.7C672,85,768,75,864,80C960,85,1056,107,1152,112C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path></svg>') bottom center / cover no-repeat">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-10">

        {{-- Ligne de séparation dorée --}}
        <div class="h-px bg-gradient-to-r from-transparent via-gold-400/30 to-transparent mb-14"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Col 1 : Identité --}}
            <div class="lg:col-span-1">
                {{-- Logo + Nom --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-5 group">
                    <div class="relative">
                        <div class="absolute inset-0 rounded-full bg-gold-400/15 blur-sm group-hover:bg-gold-400/25 transition-all"></div>
                        <img src="{{ asset('images/logo-maniema.png') }}"
                             alt="Province du Maniema"
                             class="relative w-14 h-14 rounded-full object-cover border-2 border-gold-400/30 group-hover:border-gold-400/60 transition-all"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        <div style="display:none"
                             class="relative w-14 h-14 rounded-full bg-gradient-to-br from-blue-maniema-700 to-forest-700 flex items-center justify-center border-2 border-gold-400/30">
                            <span class="text-white font-black">CF</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-black text-white text-base leading-tight">ConsForest Maniema</p>
                        <p class="text-gold-400/70 text-xs tracking-wider">Conservation & Crédit Carbone</p>
                    </div>
                </a>
                <p class="text-white/45 text-sm leading-relaxed mb-5">
                    Programme de conservation forestière, reboisement et développement durable
                    en RDC, province du Maniema. Porté par <span class="text-white/65">BFD SARL</span>.
                </p>
                {{-- Devise Maniema --}}
                <div class="flex items-center gap-2 text-xs text-gold-400/60 italic mb-5">
                    <span class="w-4 h-px bg-gold-400/40"></span>
                    Justice · Paix · Travail
                    <span class="w-4 h-px bg-gold-400/40"></span>
                </div>
                {{-- Contact rapide --}}
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center gap-2 text-white/50 hover:text-gold-400 text-xs font-medium transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    Nous écrire
                </a>
            </div>

            {{-- Col 2 : Navigation --}}
            <div>
                <h3 class="text-white font-semibold text-xs uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-4 h-px bg-gold-400/50"></span>
                    Navigation
                </h3>
                <ul class="space-y-2">
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
                           class="text-white/45 hover:text-gold-400 text-sm transition-colors duration-200 flex items-center gap-2">
                            <svg class="w-2.5 h-2.5 text-forest-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
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
                <h3 class="text-white font-semibold text-xs uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-4 h-px bg-gold-400/50"></span>
                    Partenaires
                </h3>
                <ul class="space-y-3">
                    @foreach([
                        ['name' => 'BFD SARL',            'sub' => 'Porteur du projet',        'dot' => '#16a34a'],
                        ['name' => 'New Goshen',           'sub' => 'Partenaire carbone REDD+', 'dot' => '#3b82f6'],
                        ['name' => 'Gouvernement RDC',     'sub' => 'Partenaire institutionnel','dot' => '#6b7280'],
                        ['name' => 'Min. Environnement',   'sub' => 'Autorité de tutelle',      'dot' => '#6b7280'],
                        ['name' => 'Province du Maniema',  'sub' => 'Gouvernorat provincial',   'dot' => '#d97706'],
                    ] as $p)
                    <li class="flex items-start gap-3">
                        <div class="w-1.5 h-1.5 rounded-full mt-2 flex-shrink-0"
                             style="background: {{ $p['dot'] }};"></div>
                        <div>
                            <p class="text-white/75 text-sm font-medium">{{ $p['name'] }}</p>
                            <p class="text-white/40 text-xs">{{ $p['sub'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Col 4 : Contact --}}
            <div>
                <h3 class="text-white font-semibold text-xs uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-4 h-px bg-gold-400/50"></span>
                    Coordonnées
                </h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-forest-800/60 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/60 text-xs font-medium">Siège Social</p>
                            <p class="text-white/35 text-xs leading-relaxed mt-0.5">
                                8618 Av. de la Clinique, Im. Gloire à Dieu Ap. 1<br>
                                Commune de la Gombe, Kinshasa — RDC<br>
                                <span class="text-white/25">Bureau terrain : Kindu, Maniema</span>
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-blue-maniema-900/60 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/60 text-xs font-medium">E-mail</p>
                            <a href="mailto:info@consforestmaniema.com" class="text-white/35 hover:text-gold-400 text-xs transition-colors">info@consforestmaniema.com</a>
                            <a href="mailto:proj.eco.kinma@gmail.com" class="text-white/35 hover:text-gold-400 text-xs transition-colors mt-0.5 block">proj.eco.kinma@gmail.com</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-forest-800/60 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-3.5 h-3.5 text-forest-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/60 text-xs font-medium">Site web</p>
                            <span class="text-white/40 text-xs">consforestmaniema.com</span>
                        </div>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="btn-gold mt-6 inline-flex text-xs py-2.5 px-5 tracking-wide">
                    Prendre contact →
                </a>
            </div>
        </div>

        {{-- Newsletter --}}
        <div class="mt-12 rounded-2xl p-6 flex flex-col sm:flex-row items-start sm:items-center gap-6"
             style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.07);">
            <div class="flex-1 min-w-0">
                <h3 class="text-white font-semibold text-sm mb-1">Restez informé</h3>
                <p class="text-white/40 text-xs leading-relaxed">
                    Actualités terrain, rapports de conservation et opportunités de partenariat REDD+.
                </p>
            </div>
            <div x-data="newsletter()" class="w-full sm:w-auto flex-shrink-0">
                <div x-show="!success" class="flex gap-2">
                    <input x-model="email"
                           @keydown.enter="submit()"
                           type="email"
                           placeholder="votre@email.com"
                           class="newsletter-input"
                           :disabled="loading">
                    <button @click="submit()"
                            :disabled="loading || !email"
                            class="newsletter-btn flex-shrink-0">
                        <span x-show="!loading">S'abonner</span>
                        <span x-show="loading" class="flex items-center gap-1.5">
                            <svg class="w-3 h-3 animate-spin" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                            </svg>
                        </span>
                    </button>
                </div>
                <p x-show="error" x-text="error" class="text-red-400 text-xs mt-1.5"></p>
                <div x-show="success"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="flex items-center gap-2 text-green-400 text-sm font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span x-text="message"></span>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-10 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        <div class="mt-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-white/50 text-xs text-center">
                &copy; {{ date('Y') }}
                <span class="text-white/70 font-medium">ConsForest Maniema</span>
                — BFD SARL. Tous droits réservés.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-3 text-[11px] text-white/25">
                <span class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                    Programme actif
                </span>
                <span class="opacity-40">·</span>
                <span>Province du Maniema, RDC</span>
                <span class="opacity-40">·</span>
                <span class="text-gold-400/40">REDD+</span>
                <span class="opacity-40">·</span>
                <a href="https://www.fintchweb.com/"
                   target="_blank" rel="noopener"
                   class="text-white/30 hover:text-gold-400/70 transition-colors duration-200">
                    Conçu par FintchWeb
                </a>
            </div>
        </div>
    </div>
</footer>
