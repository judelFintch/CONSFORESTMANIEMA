@extends('layouts.app')

@section('title', 'Impact Communautaire – Développement Social ConsForest Maniema')
@section('description', 'ConsForest Maniema génère un impact social positif en province du Maniema : emplois locaux, sensibilisation environnementale, alternatives économiques durables et gouvernance forestière participative.')
@section('keywords', 'impact communautaire Maniema, développement social RDC, emplois verts Congo, sensibilisation forêt, communautés locales conservation')

@section('content')

{{-- Page Header --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4">
            <a href="{{ route('home') }}">Accueil</a><span>/</span>
            <span class="text-white font-medium">Impact Communautaire</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Impact Communautaire</h1>
        <p class="text-white/80 text-xl max-w-2xl">
            Les communautés locales au cœur du programme de conservation — acteurs, bénéficiaires et gardiens de la forêt.
        </p>
    </div>
</div>


{{-- Philosophie --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center animate-fade-up">
            <div class="inline-flex items-center gap-2 bg-amber-50 text-amber-700 rounded-full px-4 py-1.5 text-sm font-medium mb-6">
                🤝 Notre philosophie
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
                La Conservation au Service des Personnes
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                ConsForest Maniema part d'un constat fondamental : <strong>la protection durable des forêts
                n'est possible qu'avec et pour les communautés qui en dépendent</strong>. Les populations
                riveraines sont les premières gardiennes de ces écosystèmes — elles doivent aussi en être
                les premiers bénéficiaires.
            </p>
            <p class="text-gray-600 text-lg leading-relaxed">
                Notre approche intègre systématiquement les communautés locales dans la conception,
                la mise en œuvre et le suivi des activités, garantissant leur appropriation du projet
                et la durabilité des résultats.
            </p>
        </div>
    </div>
</section>


{{-- Retombées sociales --}}
<section class="py-20 bg-amber-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Retombées Sociales Directes</h2>
            <p class="text-gray-600 max-w-xl mx-auto">Des bénéfices concrets et mesurables pour les populations du Maniema.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon' => '💼', 'title' => 'Emplois Locaux Verts', 'desc' => 'Création d\'emplois directs : gardes forestiers, agents de terrain, pépiniéristes, techniciens environnementaux et gestionnaires communautaires.', 'color' => 'green'],
                ['icon' => '🏫', 'title' => 'Formation & Éducation', 'desc' => 'Programmes de formation en gestion forestière, agroforesterie, conservation de la nature et entrepreneuriat vert.', 'color' => 'blue'],
                ['icon' => '💰', 'title' => 'Partage des Revenus', 'desc' => 'Mécanisme équitable de redistribution d\'une part des revenus du crédit carbone aux communautés participantes.', 'color' => 'amber'],
                ['icon' => '🏥', 'title' => 'Services Sociaux', 'desc' => 'Financement de services de base — eau, santé, éducation — grâce aux revenus générés par le programme.', 'color' => 'teal'],
                ['icon' => '🌾', 'title' => 'Agroforesterie', 'desc' => 'Développement de systèmes agroforestiers permettant de concilier production alimentaire et conservation forestière.', 'color' => 'emerald'],
                ['icon' => '⚖️', 'title' => 'Droits Fonciers', 'desc' => 'Appui à la sécurisation des droits fonciers coutumiers des communautés sur leurs terres et ressources forestières.', 'color' => 'violet'],
            ] as $item)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 card-hover animate-fade-up">
                <div class="w-12 h-12 bg-{{ $item['color'] }}-50 rounded-xl flex items-center justify-center text-2xl mb-4">{{ $item['icon'] }}</div>
                <h3 class="font-bold text-gray-900 mb-2">{{ $item['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Sensibilisation --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Programme de Sensibilisation</h2>
                <p class="text-gray-600 leading-relaxed mb-6">
                    La sensibilisation est un pilier fondamental du programme. Elle vise à transformer
                    les comportements et à construire une culture environnementale durable au sein des
                    communautés du Maniema.
                </p>
                <div class="space-y-4">
                    @foreach([
                        ['icon' => '📚', 'title' => 'Éducation scolaire', 'desc' => 'Intégration de modules environnementaux dans les cursus scolaires locaux.'],
                        ['icon' => '📻', 'title' => 'Radios communautaires', 'desc' => 'Émissions régulières sur la conservation et les bonnes pratiques forestières.'],
                        ['icon' => '🎭', 'title' => 'Théâtre communautaire', 'desc' => 'Représentations théâtrales et culturelles sur les enjeux de la forêt.'],
                        ['icon' => '🏕️', 'title' => 'Sorties terrain', 'desc' => 'Visites de forêts et d\'écosystèmes pour les jeunes et les communautés.'],
                    ] as $prog)
                    <div class="flex items-start gap-4 p-4 bg-green-50 rounded-xl border border-green-100">
                        <span class="text-2xl flex-shrink-0">{{ $prog['icon'] }}</span>
                        <div>
                            <p class="font-semibold text-gray-900 text-sm">{{ $prog['title'] }}</p>
                            <p class="text-gray-500 text-xs mt-0.5">{{ $prog['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-4">
                <div class="rounded-3xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=600&q=80"
                         alt="Communautés locales" class="w-full h-60 object-cover">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1530685932526-48ec92998eaa?w=300&q=80" alt="" class="w-full h-36 object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=300&q=80" alt="" class="w-full h-36 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Alternatives économiques --}}
<section class="py-20 bg-gradient-to-br from-green-950 to-blue-950 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-white mb-4">Alternatives Économiques Durables</h2>
            <p class="text-white/70 max-w-2xl mx-auto">
                Réduire la pression sur les forêts en proposant des sources de revenus durables
                qui respectent les écosystèmes.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach([
                ['icon' => '🌿', 'title' => 'Agroforesterie', 'desc' => 'Cultures sous couvert arboré pour une production alimentaire compatible avec la forêt.'],
                ['icon' => '🍯', 'title' => 'Apiculture', 'desc' => 'Production de miel et pollinisation des cultures, activité rentable et bénéfique pour la forêt.'],
                ['icon' => '🌿', 'title' => 'Plantes médicinales', 'desc' => 'Valorisation des ressources forestières non ligneuses (PFNL) à haute valeur commerciale.'],
                ['icon' => '🏡', 'title' => 'Écotourisme', 'desc' => 'Développement du tourisme naturel et culturel en forêt, source de revenus durables.'],
            ] as $alt)
            <div class="bg-white/10 border border-white/20 rounded-2xl p-5 backdrop-blur-sm">
                <span class="text-3xl mb-3 block">{{ $alt['icon'] }}</span>
                <h3 class="font-bold text-white mb-2">{{ $alt['title'] }}</h3>
                <p class="text-white/65 text-sm leading-relaxed">{{ $alt['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Gouvernance --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Gouvernance Forestière Locale</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Renforcer les structures communautaires pour une gestion durable et autonome des ressources naturelles.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach([
                ['icon' => '🏛️', 'title' => 'Comités Locaux de Conservation', 'desc' => 'Mise en place de comités villageois chargés de surveiller et gérer les ressources forestières locales.'],
                ['icon' => '📋', 'title' => 'Plans de Gestion Communautaire', 'desc' => 'Élaboration de plans de gestion forestière participatifs, adaptés aux réalités locales.'],
                ['icon' => '🤝', 'title' => 'Accords de Conservation', 'desc' => 'Signature d\'accords formels entre les communautés, BFD SARL et les autorités locales.'],
                ['icon' => '📊', 'title' => 'Suivi Participatif', 'desc' => 'Formation des communautés aux techniques de monitoring et de reporting environnemental.'],
            ] as $gov)
            <div class="flex items-start gap-4 bg-white rounded-2xl p-5 shadow-sm border border-gray-100">
                <span class="text-3xl flex-shrink-0">{{ $gov['icon'] }}</span>
                <div>
                    <h3 class="font-bold text-gray-900 mb-1">{{ $gov['title'] }}</h3>
                    <p class="text-gray-500 text-sm">{{ $gov['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">En savoir plus sur l'impact social</h2>
        <p class="text-gray-600 mb-8">Rejoignez le programme ou devenez partenaire pour amplifier l'impact sur les communautés locales.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-forest">Nous contacter</a>
            <a href="{{ route('partners') }}" class="btn-primary">Nos partenaires</a>
        </div>
    </div>
</section>

@endsection
