@extends('layouts.app')

@section('title', 'Conservation Forestière – Protection des Forêts du Maniema')
@section('description', 'ConsForest Maniema protège les forêts du Bassin du Congo : lutte contre la déforestation, restauration des espaces dégradés, préservation de la biodiversité en province du Maniema, RDC.')
@section('keywords', 'conservation forestière Maniema, protection forêt Congo, déforestation RDC, restauration forêt, biodiversité bassin Congo, reboisement')

@section('content')

{{-- Page Header --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4">
            <a href="{{ route('home') }}">Accueil</a><span>/</span>
            <span class="text-white font-medium">Conservation Forestière</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Conservation Forestière</h1>
        <p class="text-white/80 text-xl max-w-2xl">
            Protéger, restaurer et préserver le patrimoine forestier de la province du Maniema.
        </p>
    </div>
</div>


{{-- Intro : Bassin du Congo --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center animate-fade-up">
            <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 rounded-full px-4 py-1.5 text-sm font-medium mb-6">
                🌳 Le Bassin du Congo
            </div>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">
                La Deuxième Plus Grande Forêt Tropicale du Monde
            </h2>
            <p class="text-gray-600 text-xl leading-relaxed mb-8">
                S'étendant sur plus de <strong class="text-green-700">336 millions d'hectares</strong>, la forêt
                du Bassin du Congo représente le deuxième plus grand massif forestier tropical de la planète.
                Elle constitue un puits de carbone naturel irremplaçable et un réservoir de biodiversité unique.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                @foreach([
                    ['val' => '336M', 'unit' => 'ha', 'label' => 'de forêts'],
                    ['val' => '600+', 'unit' => '', 'label' => 'espèces d\'arbres'],
                    ['val' => '400+', 'unit' => '', 'label' => 'espèces de mammifères'],
                    ['val' => '1000+', 'unit' => '', 'label' => 'espèces d\'oiseaux'],
                ] as $stat)
                <div class="bg-green-50 rounded-2xl p-5">
                    <div class="text-3xl font-bold text-green-700 mb-1">{{ $stat['val'] }}<span class="text-lg">{{ $stat['unit'] }}</span></div>
                    <p class="text-gray-600 text-sm">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- Menaces --}}
<section class="py-20 bg-red-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Les Menaces Identifiées</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Une analyse rigoureuse des causes de dégradation forestière dans la province du Maniema.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon' => '🪓', 'title' => 'Déforestation illégale', 'desc' => 'L\'abattage non contrôlé d\'arbres pour le bois de chauffage et la production de charbon constitue la principale menace.', 'severity' => 'Critique'],
                ['icon' => '⛏️', 'title' => 'Exploitation minière', 'desc' => 'Les activités minières artisanales et industrielles dégradent les sols forestiers et contaminent les cours d\'eau.', 'severity' => 'Élevée'],
                ['icon' => '🌾', 'title' => 'Agriculture sur brûlis', 'desc' => 'L\'expansion des terres agricoles par la méthode de déforestation et brûlis détruit des hectares de forêt chaque année.', 'severity' => 'Élevée'],
                ['icon' => '🏘️', 'title' => 'Expansion urbaine', 'desc' => 'La croissance démographique rapide entraîne une pression croissante sur les zones forestières périurbaines.', 'severity' => 'Modérée'],
                ['icon' => '🔥', 'title' => 'Feux incontrôlés', 'desc' => 'Les incendies de forêt, souvent d\'origine humaine, ravagent des zones entières de végétation.', 'severity' => 'Élevée'],
                ['icon' => '🌡️', 'title' => 'Changement climatique', 'desc' => 'Les perturbations climatiques amplifient la vulnérabilité des écosystèmes forestiers face aux autres menaces.', 'severity' => 'Croissante'],
            ] as $threat)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-red-100 card-hover animate-fade-up">
                <div class="flex items-start justify-between mb-3">
                    <span class="text-3xl">{{ $threat['icon'] }}</span>
                    <span class="text-xs bg-red-100 text-red-700 font-medium px-2.5 py-1 rounded-full">{{ $threat['severity'] }}</span>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">{{ $threat['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $threat['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Notre approche --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 rounded-full px-4 py-1.5 text-sm font-medium mb-4">
                Notre approche
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Une Stratégie de Conservation Intégrée
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                BFD SARL propose une approche holistique articulant surveillance, protection, restauration et développement communautaire.
            </p>
        </div>

        <div class="space-y-8 max-w-5xl mx-auto">
            @foreach([
                [
                    'num' => '01',
                    'icon' => '🛡️',
                    'title' => 'Protection Active des Forêts',
                    'desc' => 'Mise en place de patrouilles forestières, installation de postes de surveillance, formation de gardes forestiers communautaires et création de zones de protection intégrale.',
                    'points' => ['Délimitation des zones protégées', 'Patrouilles anti-braconnage', 'Systèmes d\'alerte précoce', 'Coordination avec les autorités'],
                    'color' => 'green',
                ],
                [
                    'num' => '02',
                    'icon' => '🌱',
                    'title' => 'Restauration et Reboisement',
                    'desc' => 'Programmes intensifs de plantation d\'espèces forestières indigènes dans les zones dégradées, avec suivi à long terme de la régénération naturelle assistée.',
                    'points' => ['Pépinières communautaires', 'Plantation d\'espèces natives', 'Régénération naturelle assistée', 'Suivi et monitoring'],
                    'color' => 'emerald',
                ],
                [
                    'num' => '03',
                    'icon' => '🦋',
                    'title' => 'Protection de la Biodiversité',
                    'desc' => 'Identification et protection des espèces endémiques, création de corridors biologiques, inventaires de la faune et de la flore, préservation des habitats critiques.',
                    'points' => ['Inventaires faunistiques', 'Corridors biologiques', 'Espèces clés protégées', 'Zones de nidification'],
                    'color' => 'teal',
                ],
                [
                    'num' => '04',
                    'icon' => '📊',
                    'title' => 'Monitoring et Évaluation',
                    'desc' => 'Utilisation de technologies modernes (télédétection, GPS, drones) pour mesurer l\'efficacité des interventions et produire des données scientifiques fiables.',
                    'points' => ['Télédétection satellite', 'Cartographie forestière', 'Rapports périodiques', 'Évaluation d\'impact'],
                    'color' => 'blue',
                ],
            ] as $step)
            <div class="flex gap-6 p-6 bg-{{ $step['color'] }}-50 rounded-3xl border border-{{ $step['color'] }}-100 animate-fade-up">
                <div class="flex-shrink-0 w-16 h-16 bg-{{ $step['color'] }}-600 text-white rounded-2xl flex items-center justify-center text-2xl shadow-md">
                    {{ $step['icon'] }}
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-{{ $step['color'] }}-400 font-bold text-sm">{{ $step['num'] }}</span>
                        <h3 class="font-bold text-gray-900 text-lg">{{ $step['title'] }}</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4">{{ $step['desc'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($step['points'] as $point)
                        <span class="text-xs bg-white border border-{{ $step['color'] }}-200 text-{{ $step['color'] }}-700 px-3 py-1 rounded-full">
                            ✓ {{ $point }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Zone d'intervention --}}
<section class="py-20 bg-gradient-to-br from-blue-950 to-green-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Zone d'Intervention : Province du Maniema</h2>
        <p class="text-white/70 text-lg max-w-2xl mx-auto mb-12">
            La province du Maniema, au cœur de la RDC, constitue le théâtre principal
            des interventions de conservation du programme ConsForest.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['icon' => '🗺️', 'title' => 'Superficie', 'val' => '132 250 km²', 'desc' => 'Surface totale de la province'],
                ['icon' => '🌳', 'title' => 'Couverture forestière', 'val' => '~70%', 'desc' => 'Territoire couvert par la forêt'],
                ['icon' => '👥', 'title' => 'Population', 'val' => '~3 millions', 'desc' => 'Habitants de la province'],
            ] as $info)
            <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6">
                <span class="text-4xl mb-3 block">{{ $info['icon'] }}</span>
                <p class="text-white font-bold text-xl mb-1">{{ $info['val'] }}</p>
                <p class="text-white/70 text-sm">{{ $info['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- CTA --}}
<section class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Soutenir la Conservation Forestière</h2>
        <p class="text-gray-600 mb-8">Votre implication fait la différence. Contactez-nous pour explorer les modalités de partenariat.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-forest">Nous contacter</a>
            <a href="{{ route('carbon') }}" class="btn-primary">Crédit Carbone →</a>
        </div>
    </div>
</section>

@endsection
