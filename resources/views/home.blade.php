@extends('layouts.app')

@section('title', 'Accueil – Projet de Conservation Forestière et Crédit Carbone en RDC')
@section('description', 'ConsForest Maniema – BFD SARL porte un programme de conservation forestière, reboisement et crédit carbone dans la province du Maniema, RDC. Protéger la deuxième plus grande forêt tropicale du monde.')
@section('keywords', 'conservation forestière RDC, crédit carbone Congo, reboisement Maniema, forêt tropicale bassin Congo, BFD SARL, développement durable RDC')

@section('content')

{{-- ════════════════════════════════════════════════════
     SECTION 1 : HERO
════════════════════════════════════════════════════ --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">

    {{-- Background Image --}}
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1448375240586-882707db888b?w=1920&q=80"
             alt="Forêt tropicale du Bassin du Congo"
             class="w-full h-full object-cover"
             loading="eager">
        <div class="hero-overlay absolute inset-0"></div>
    </div>

    {{-- Decorative Elements --}}
    <div class="absolute top-20 left-10 w-64 h-64 bg-green-500/10 rounded-full blur-3xl z-10"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl z-10"></div>

    {{-- Hero Content --}}
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-20 text-center">

        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-5 py-2 text-white text-sm font-medium mb-8">
            <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
            Partenariat RDC – Ministère de l'Environnement
        </div>

        {{-- Title --}}
        <h1 class="hero-title text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6 max-w-5xl mx-auto">
            Projet de <span class="text-green-400">Conservation Forestière</span>
            et <span class="text-yellow-400">Crédit Carbone</span> en RDC
        </h1>

        {{-- Subtitle --}}
        <p class="text-white/85 text-lg sm:text-xl md:text-2xl max-w-3xl mx-auto leading-relaxed mb-10">
            Préserver la deuxième plus grande forêt tropicale du monde tout en générant
            un impact <strong class="text-green-300">climatique</strong>,
            <strong class="text-yellow-300">économique</strong> et
            <strong class="text-blue-300">social</strong> durable.
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('about') }}" class="btn-forest text-base px-8 py-3.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Découvrir le projet
            </a>
            <a href="{{ route('contact') }}" class="btn-outline text-base px-8 py-3.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Nous contacter
            </a>
        </div>

        {{-- Scroll indicator --}}
        <div class="mt-16 animate-bounce">
            <a href="#presentation" aria-label="Défiler">
                <svg class="w-8 h-8 text-white/60 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>
    </div>

    {{-- Wave SVG --}}
    <div class="absolute bottom-0 left-0 right-0 z-20">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 80L60 68.9C120 57.8 240 35.6 360 29.3C480 23 600 32.6 720 40.1C840 47.6 960 52.9 1080 52.9C1200 52.9 1320 47.6 1380 44.9L1440 42.2V80H1380C1320 80 1200 80 1080 80C960 80 840 80 720 80C600 80 480 80 360 80C240 80 120 80 60 80H0Z" fill="white"/>
        </svg>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     SECTION 2 : PRÉSENTATION
════════════════════════════════════════════════════ --}}
<section id="presentation" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Text --}}
            <div class="animate-fade-up">
                <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 rounded-full px-4 py-1.5 text-sm font-medium mb-6">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                    À propos du programme
                </div>

                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 leading-tight mb-6">
                    <span class="gradient-text">BFD SARL</span> — Bâtir sur des<br>
                    Fondements Durables
                </h2>

                <p class="text-gray-600 text-lg leading-relaxed mb-5">
                    BFD SARL porte un programme ambitieux de <strong class="text-green-700">conservation forestière</strong>,
                    de reboisement et de <strong class="text-blue-700">développement durable</strong> en République
                    Démocratique du Congo, au cœur de la province du <strong>Maniema</strong>.
                </p>

                <p class="text-gray-600 leading-relaxed mb-8">
                    Ce projet, réalisé en partenariat avec le <strong>Gouvernement de la RDC</strong> et le
                    <strong>Ministère de l'Environnement et Développement Durable</strong>, vise à protéger les
                    écosystèmes forestiers, générer des <strong class="text-green-700">crédits carbone certifiés</strong>
                    et produire des retombées économiques et sociales concrètes pour les communautés locales.
                </p>

                <div class="flex flex-wrap gap-3 mb-8">
                    @foreach(['Conservation', 'Reboisement', 'Crédit Carbone', 'Biodiversité', 'Communautés'] as $tag)
                    <span class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-green-50 hover:text-green-700 transition-colors">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>

                <a href="{{ route('about') }}" class="btn-primary">
                    En savoir plus
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            {{-- Image Grid --}}
            <div class="grid grid-cols-2 gap-4 animate-fade-up">
                <div class="space-y-4">
                    <div class="rounded-2xl overflow-hidden h-48 card-hover">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=400&q=80"
                             alt="Forêt tropicale Congo"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden h-32 card-hover">
                        <img src="https://images.unsplash.com/photo-1567706438869-66d2b5e7b9e3?w=400&q=80"
                             alt="Reboisement communautaire"
                             class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="space-y-4 pt-8">
                    <div class="rounded-2xl overflow-hidden h-32 card-hover">
                        <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=400&q=80"
                             alt="Biodiversité forestière"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden h-48 card-hover">
                        <img src="https://images.unsplash.com/photo-1489493512598-d08130f49bea?w=400&q=80"
                             alt="Communautés locales"
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     SECTION 3 : CHIFFRES CLÉS
════════════════════════════════════════════════════ --}}
<section class="py-20 bg-gradient-to-br from-blue-950 via-green-950 to-blue-950 relative overflow-hidden">

    <div class="absolute inset-0 bg-[url('data:image/svg+xml,...')] opacity-5"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">

        <div class="text-center mb-14">
            <div class="inline-flex items-center gap-2 bg-white/10 text-white rounded-full px-4 py-1.5 text-sm font-medium mb-4">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                Chiffres et impact
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Un Programme d'Envergure Mondiale
            </h2>
            <p class="text-white/70 text-lg max-w-2xl mx-auto">
                Le Bassin du Congo, deuxième poumon vert de la planète, au cœur d'une initiative
                de conservation sans précédent.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach([
                ['icon' => '🌳', 'value' => '2e', 'unit' => '', 'label' => 'Forêt tropicale mondiale', 'color' => 'from-green-500 to-green-700'],
                ['icon' => '🦎', 'value' => '10000', 'unit' => '+', 'label' => 'Espèces faunistiques', 'color' => 'from-emerald-500 to-emerald-700'],
                ['icon' => '🌍', 'value' => '336', 'unit' => 'Mha', 'label' => 'Forêts du Bassin Congo', 'color' => 'from-teal-500 to-teal-700'],
                ['icon' => '💨', 'value' => '8', 'unit' => '%', 'label' => 'Émissions mondiales réduites', 'color' => 'from-blue-500 to-blue-700'],
                ['icon' => '👨‍👩‍👧', 'value' => '80', 'unit' => 'M', 'label' => 'Personnes dépendantes', 'color' => 'from-indigo-500 to-indigo-700'],
                ['icon' => '📜', 'value' => '100', 'unit' => '%', 'label' => 'Crédits certifiés', 'color' => 'from-violet-500 to-violet-700'],
            ] as $stat)
            <div class="stat-card bg-white/10 backdrop-blur-sm border border-white/15 rounded-2xl p-5 text-center">
                <span class="text-3xl mb-3 block">{{ $stat['icon'] }}</span>
                <div class="text-3xl sm:text-4xl font-bold text-white mb-1">
                    {{ $stat['value'] }}<span class="text-xl text-yellow-400">{{ $stat['unit'] }}</span>
                </div>
                <p class="text-white/60 text-xs leading-tight">{{ $stat['label'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     SECTION 4 : PROBLÉMATIQUE
════════════════════════════════════════════════════ --}}
<section class="py-20 bg-forest-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12 animate-fade-up">
                <div class="inline-flex items-center gap-2 bg-red-50 text-red-700 rounded-full px-4 py-1.5 text-sm font-medium mb-4">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    La problématique
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
                    Une Forêt Menacée, une Planète en Danger
                </h2>
            </div>

            <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-xl border border-gray-100 animate-fade-up">
                <p class="text-gray-700 text-lg leading-relaxed mb-8 text-center italic border-l-4 border-green-500 pl-6">
                    «&nbsp;Le Bassin du Congo abrite la deuxième plus grande forêt tropicale de la planète.
                    Véritable réservoir de biodiversité et puits naturel de carbone, cette forêt est aujourd'hui
                    menacée par la déforestation, l'exploitation illégale des ressources naturelles,
                    l'expansion agricole et les activités minières.&nbsp;»
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach([
                        ['icon' => '🪓', 'title' => 'Déforestation', 'desc' => 'Exploitation non contrôlée du bois'],
                        ['icon' => '⛏️', 'title' => 'Mines illégales', 'desc' => 'Extraction minière destructrice'],
                        ['icon' => '🌾', 'title' => 'Agriculture', 'desc' => 'Expansion des surfaces agricoles'],
                        ['icon' => '🔥', 'title' => 'Feux de brousse', 'desc' => 'Brûlis non contrôlés'],
                    ] as $threat)
                    <div class="flex items-start gap-3 p-4 bg-red-50 rounded-xl border border-red-100">
                        <span class="text-2xl">{{ $threat['icon'] }}</span>
                        <div>
                            <p class="font-semibold text-gray-900 text-sm">{{ $threat['title'] }}</p>
                            <p class="text-gray-500 text-xs mt-0.5">{{ $threat['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     SECTION 5 : OBJECTIFS
════════════════════════════════════════════════════ --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 animate-fade-up">
            <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 rounded-full px-4 py-1.5 text-sm font-medium mb-4">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Nos objectifs
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Une Vision Claire pour un Avenir Durable
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Le programme ConsForest Maniema articule ses actions autour de sept objectifs
                stratégiques complémentaires.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon' => '🛡️', 'title' => 'Protection des forêts', 'desc' => 'Protéger les espaces forestiers des activités destructrices et préserver leur intégrité écologique.', 'color' => 'green', 'link' => route('conservation')],
                ['icon' => '🌱', 'title' => 'Reboisement', 'desc' => 'Restaurer les zones forestières dégradées par des programmes intensifs de plantation d\'espèces indigènes.', 'color' => 'emerald', 'link' => route('conservation')],
                ['icon' => '💨', 'title' => 'Crédit carbone', 'desc' => 'Mettre en place un mécanisme de certification et de valorisation des crédits carbone générés.', 'color' => 'blue', 'link' => route('carbon')],
                ['icon' => '🦋', 'title' => 'Biodiversité', 'desc' => 'Préserver la richesse biologique exceptionnelle du Bassin du Congo et ses espèces endémiques.', 'color' => 'teal', 'link' => route('conservation')],
                ['icon' => '👥', 'title' => 'Communautés locales', 'desc' => 'Créer des opportunités économiques durables et améliorer les conditions de vie des populations.', 'color' => 'indigo', 'link' => route('community')],
                ['icon' => '🎓', 'title' => 'Sensibilisation', 'desc' => 'Former et sensibiliser les populations à la protection et à la gestion durable des ressources naturelles.', 'color' => 'violet', 'link' => route('community')],
                ['icon' => '⚖️', 'title' => 'Gouvernance', 'desc' => 'Renforcer les institutions locales pour une gestion transparente et durable des forêts.', 'color' => 'amber', 'link' => route('about')],
                ['icon' => '🌡️', 'title' => 'Climat RDC', 'desc' => 'Contribuer aux engagements climatiques nationaux et internationaux de la République Démocratique du Congo.', 'color' => 'red', 'link' => route('carbon')],
            ] as $obj)
            <a href="{{ $obj['link'] }}"
               class="card-hover bg-white border-2 border-gray-100 hover:border-{{ $obj['color'] }}-200 rounded-2xl p-6 group animate-fade-up block">
                <div class="w-12 h-12 bg-{{ $obj['color'] }}-50 rounded-xl flex items-center justify-center text-2xl mb-4 group-hover:scale-110 transition-transform duration-300">
                    {{ $obj['icon'] }}
                </div>
                <h3 class="font-bold text-gray-900 mb-2 group-hover:text-{{ $obj['color'] }}-700 transition-colors">
                    {{ $obj['title'] }}
                </h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $obj['desc'] }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     SECTION 6 : IMPACT ATTENDU
════════════════════════════════════════════════════ --}}
<section class="py-20 bg-institutional-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14 animate-fade-up">
            <div class="inline-flex items-center gap-2 bg-white text-green-700 rounded-full px-4 py-1.5 text-sm font-medium mb-4 shadow-sm">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.293 7.293A1 1 0 0112 7z" clip-rule="evenodd"/>
                </svg>
                Impact attendu
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                Trois Dimensions d'Impact
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Le programme ConsForest Maniema génère un impact concret et mesurable
                sur trois plans essentiels.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Impact Environnemental --}}
            <div class="impact-card animate-fade-up">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl mb-6">🌿</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Impact Environnemental</h3>
                <ul class="space-y-3">
                    @foreach([
                        'Réduction significative de la déforestation',
                        'Séquestration accrue du CO₂ atmosphérique',
                        'Protection de la biodiversité locale',
                        'Restauration des zones dégradées',
                        'Stabilisation des cycles hydrologiques',
                    ] as $item)
                    <li class="flex items-start gap-2 text-gray-600 text-sm">
                        <svg class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                <div class="mt-6 pt-5 border-t border-green-100">
                    <a href="{{ route('conservation') }}" class="text-green-700 font-semibold text-sm hover:text-green-800 flex items-center gap-1">
                        En savoir plus
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Impact Économique --}}
            <div class="impact-card animate-fade-up" style="background: linear-gradient(135deg, #fff 0%, #eff6ff 100%); border-color: #bfdbfe;">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-3xl mb-6">💹</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Impact Économique</h3>
                <ul class="space-y-3">
                    @foreach([
                        'Génération de crédits carbone certifiés',
                        'Revenus durables pour les communautés',
                        'Création d\'emplois locaux verts',
                        'Diversification des sources de revenus',
                        'Attractivité pour les investisseurs verts',
                    ] as $item)
                    <li class="flex items-start gap-2 text-gray-600 text-sm">
                        <svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                <div class="mt-6 pt-5 border-t border-blue-100">
                    <a href="{{ route('carbon') }}" class="text-blue-700 font-semibold text-sm hover:text-blue-800 flex items-center gap-1">
                        En savoir plus
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Impact Social --}}
            <div class="impact-card animate-fade-up" style="background: linear-gradient(135deg, #fff 0%, #fefce8 100%); border-color: #fde68a;">
                <div class="w-16 h-16 bg-amber-100 rounded-2xl flex items-center justify-center text-3xl mb-6">🤝</div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Impact Social</h3>
                <ul class="space-y-3">
                    @foreach([
                        'Amélioration des conditions de vie',
                        'Renforcement des capacités locales',
                        'Participation communautaire active',
                        'Éducation environnementale',
                        'Gouvernance forestière inclusive',
                    ] as $item)
                    <li class="flex items-start gap-2 text-gray-600 text-sm">
                        <svg class="w-4 h-4 text-amber-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                <div class="mt-6 pt-5 border-t border-amber-100">
                    <a href="{{ route('community') }}" class="text-amber-700 font-semibold text-sm hover:text-amber-800 flex items-center gap-1">
                        En savoir plus
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     SECTION 7 : ACTUALITÉS RÉCENTES
════════════════════════════════════════════════════ --}}
@if($latestNews && $latestNews->count() > 0)
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-12">
            <div>
                <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 rounded-full px-4 py-1.5 text-sm font-medium mb-3">
                    Actualités
                </div>
                <h2 class="text-3xl font-bold text-gray-900">Dernières Nouvelles</h2>
            </div>
            <a href="{{ route('news.index') }}" class="btn-forest mt-4 sm:mt-0 text-sm">
                Toutes les actualités
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($latestNews as $article)
            <article class="news-card card-hover bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-sm animate-fade-up">
                <div class="h-48 overflow-hidden bg-gray-100">
                    @if($article->cover_image)
                        <img src="{{ asset('storage/' . $article->cover_image) }}"
                             alt="{{ $article->title }}" class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-green-800 to-blue-900 flex items-center justify-center">
                            <span class="text-5xl">🌳</span>
                        </div>
                    @endif
                </div>
                <div class="p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs bg-green-50 text-green-700 font-medium px-2.5 py-1 rounded-full">
                            {{ $article->category_label }}
                        </span>
                        <span class="text-xs text-gray-400">{{ $article->formatted_date }}</span>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">{{ $article->title }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed line-clamp-3 mb-4">{{ $article->excerpt }}</p>
                    <a href="{{ route('news.show', $article->slug) }}"
                       class="text-green-700 font-semibold text-sm hover:text-green-800 flex items-center gap-1 transition-colors">
                        Lire l'article
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif


{{-- ════════════════════════════════════════════════════
     SECTION 8 : PARTENAIRES
════════════════════════════════════════════════════ --}}
<section class="py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <p class="text-gray-500 text-sm uppercase tracking-widest font-medium">
                Nos partenaires institutionnels
            </p>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16">
            @foreach([
                ['name' => 'BFD SARL', 'subtitle' => 'Bâtir sur des Fondements Durables'],
                ['name' => 'Gouvernement RDC', 'subtitle' => 'République Démocratique du Congo'],
                ['name' => 'Min. Environnement', 'subtitle' => 'Développement Durable'],
                ['name' => 'Province Maniema', 'subtitle' => 'Gouvernorat Provincial'],
                ['name' => 'Partenaires Intl.', 'subtitle' => 'Organisations Techniques'],
            ] as $partner)
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto mb-2 rounded-xl bg-white shadow-md border border-gray-100 flex items-center justify-center group-hover:shadow-lg transition-shadow duration-300 group-hover:border-green-200">
                    <span class="text-blue-800 font-bold text-xs leading-tight text-center px-1">{{ substr($partner['name'], 0, 5) }}</span>
                </div>
                <p class="text-gray-700 font-semibold text-sm">{{ $partner['name'] }}</p>
                <p class="text-gray-400 text-xs">{{ $partner['subtitle'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════
     SECTION 9 : APPEL À L'ACTION
════════════════════════════════════════════════════ --}}
<section class="relative py-24 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1586348943529-beaae6c28db9?w=1920&q=80"
             alt="Forêt verte RDC"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-950/90 via-green-950/85 to-blue-950/90"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-sm border border-white/20 rounded-full px-5 py-2 text-white text-sm font-medium mb-8">
            <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
            Rejoignez le mouvement
        </div>

        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
            Ensemble, Protégeons<br>
            <span class="text-green-400">le Poumon Vert de l'Afrique</span>
        </h2>

        <p class="text-white/80 text-lg leading-relaxed mb-10 max-w-2xl mx-auto">
            Que vous soyez bailleur, organisation internationale, institution gouvernementale
            ou entreprise engagée, rejoignez ConsForest Maniema dans cette mission vitale
            pour la planète et les générations futures.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-forest px-8 py-4 text-base">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Contactez-nous
            </a>
            <a href="{{ route('partners') }}" class="btn-outline px-8 py-4 text-base">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                Voir les partenaires
            </a>
        </div>
    </div>
</section>

@endsection
