@extends('layouts.app')

@section('title', 'Partenaires – Institutions et Organisations ConsForest Maniema')
@section('description', 'Découvrez les partenaires du projet ConsForest Maniema : BFD SARL, Gouvernement de la RDC, Ministère de l\'Environnement, Province du Maniema et partenaires techniques internationaux.')
@section('keywords', 'partenaires ConsForest, BFD SARL, gouvernement RDC, ministère environnement Congo, partenaires conservation forêt')

@section('content')

{{-- Page Header --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4">
            <a href="{{ route('home') }}">Accueil</a><span>/</span>
            <span class="text-white font-medium">Partenaires</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">Nos Partenaires</h1>
        <p class="text-white/80 text-xl max-w-2xl">
            Un réseau solide d'institutions et d'organisations engagées pour la conservation forestière en RDC.
        </p>
    </div>
</div>


{{-- Intro --}}
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 rounded-full px-4 py-1.5 text-sm font-medium mb-6">
            🤝 Partenariat & Coopération
        </div>
        <h2 class="text-3xl font-bold text-gray-900 mb-5">
            Une Alliance pour la Forêt et le Développement
        </h2>
        <p class="text-gray-600 text-lg leading-relaxed">
            ConsForest Maniema est le fruit d'un partenariat solide entre le secteur privé,
            les institutions publiques, les autorités locales et la coopération internationale.
            Cette approche multi-acteurs garantit la légitimité, l'efficacité et la durabilité du programme.
        </p>
    </div>
</section>


{{-- Partenaires principaux --}}
<section class="py-16 bg-forest-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Partenaires Principaux</h2>
        </div>

        <div class="space-y-8">
            @foreach([
                [
                    'icon' => '🏢',
                    'name' => 'BFD SARL',
                    'full' => 'Bâtir sur des Fondements Durables',
                    'type' => 'Porteur de projet',
                    'desc' => 'BFD SARL est la société privée congolaise qui porte et coordonne le programme ConsForest Maniema. Fondée sur les principes d\'excellence, de responsabilité sociale et d\'innovation, BFD SARL mobilise les ressources humaines, techniques et financières nécessaires à la réussite du programme.',
                    'role' => 'Coordination globale, mobilisation des ressources, gestion opérationnelle, relations avec les partenaires techniques et financiers.',
                    'color' => 'blue',
                    'badge_color' => 'bg-blue-100 text-blue-700',
                ],
                [
                    'icon' => '🇨🇩',
                    'name' => 'Gouvernement de la RDC',
                    'full' => 'République Démocratique du Congo',
                    'type' => 'Partenaire institutionnel',
                    'desc' => 'Le Gouvernement de la République Démocratique du Congo apporte son soutien politique et institutionnel au programme. Ce partenariat garantit l\'ancrage du projet dans les politiques nationales de développement durable et les engagements climatiques de la RDC.',
                    'role' => 'Cadre légal et réglementaire, validation politique, coordination inter-ministérielle, engagement international (CCNUCC, ONU-REDD).',
                    'color' => 'green',
                    'badge_color' => 'bg-green-100 text-green-700',
                ],
                [
                    'icon' => '🌿',
                    'name' => 'Ministère de l\'Environnement et Développement Durable',
                    'full' => 'République Démocratique du Congo',
                    'type' => 'Autorité de tutelle',
                    'desc' => 'Le Ministère de l\'Environnement et Développement Durable assure la supervision technique et réglementaire du programme. Son appui garantit la conformité du projet avec les lois forestières nationales et les standards internationaux de conservation.',
                    'role' => 'Supervision réglementaire, validation technique des méthodologies, coordination REDD+, certification et reporting climatique national.',
                    'color' => 'emerald',
                    'badge_color' => 'bg-emerald-100 text-emerald-700',
                ],
                [
                    'icon' => '🗺️',
                    'name' => 'Province du Maniema',
                    'full' => 'Gouvernorat Provincial',
                    'type' => 'Partenaire territorial',
                    'desc' => 'Le Gouvernorat de la Province du Maniema apporte l\'ancrage territorial indispensable au programme. Sa connaissance du terrain, ses relations avec les communautés et son autorité locale sont des atouts essentiels pour la mise en œuvre des activités.',
                    'role' => 'Coordination locale, relations communautaires, appui logistique, résolution des conflits fonciers, facilitation des accès terrain.',
                    'color' => 'amber',
                    'badge_color' => 'bg-amber-100 text-amber-700',
                ],
            ] as $partner)
            <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 card-hover animate-fade-up">
                <div class="flex flex-col sm:flex-row gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-20 h-20 bg-{{ $partner['color'] }}-50 border-2 border-{{ $partner['color'] }}-200 rounded-2xl flex items-center justify-center text-4xl">
                            {{ $partner['icon'] }}
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-3 mb-2">
                            <h3 class="text-xl font-bold text-gray-900">{{ $partner['name'] }}</h3>
                            <span class="text-xs {{ $partner['badge_color'] }} font-medium px-3 py-1 rounded-full">
                                {{ $partner['type'] }}
                            </span>
                        </div>
                        <p class="text-gray-400 text-sm mb-3">{{ $partner['full'] }}</p>
                        <p class="text-gray-600 leading-relaxed mb-4">{{ $partner['desc'] }}</p>
                        <div class="bg-{{ $partner['color'] }}-50 rounded-xl p-3">
                            <p class="text-xs font-semibold text-{{ $partner['color'] }}-700 mb-1">Rôle dans le programme</p>
                            <p class="text-{{ $partner['color'] }}-600 text-sm">{{ $partner['role'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Partenaires techniques --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Partenaires Techniques & Financiers</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Le programme ConsForest recherche activement des partenaires techniques et financiers
                engagés dans le développement durable et la conservation de la biodiversité.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon' => '🌍', 'type' => 'Organismes Internationaux', 'desc' => 'ONU-REDD, PNUE, FAO et autres agences onusiennes spécialisées en foresterie et développement durable.'],
                ['icon' => '🏦', 'type' => 'Bailleurs de Fonds', 'desc' => 'Institutions financières internationales, fonds verts, mécanismes bilatéraux et philanthropies environnementales.'],
                ['icon' => '🔬', 'type' => 'Partenaires Scientifiques', 'desc' => 'Universités, centres de recherche et instituts spécialisés en écologie forestière, carbone et biodiversité.'],
                ['icon' => '🏢', 'type' => 'Secteur Privé ESG', 'desc' => 'Entreprises engagées dans la neutralité carbone cherchant à investir dans des projets de compensation de qualité.'],
                ['icon' => '📋', 'type' => 'Certificateurs', 'desc' => 'Organismes de certification accrédités pour les standards VCS, Gold Standard et autres protocoles carbone.'],
                ['icon' => '🤝', 'type' => 'ONG Environnementales', 'desc' => 'Organisations non gouvernementales actives dans la conservation, le développement communautaire et la gouvernance forestière.'],
            ] as $tech)
            <div class="border-2 border-dashed border-gray-200 hover:border-green-300 rounded-2xl p-6 text-center transition-colors duration-200 card-hover">
                <span class="text-4xl mb-4 block">{{ $tech['icon'] }}</span>
                <h3 class="font-bold text-gray-700 mb-2">{{ $tech['type'] }}</h3>
                <p class="text-gray-400 text-sm leading-relaxed">{{ $tech['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- Devenir partenaire CTA --}}
<section class="py-20 bg-gradient-to-br from-blue-950 to-green-950">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
            Devenez Partenaire de ConsForest Maniema
        </h2>
        <p class="text-white/80 text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
            Vous représentez une institution, une organisation ou une entreprise engagée dans
            le développement durable ? Rejoignez notre réseau de partenaires et contribuez
            à préserver l'une des forêts les plus importantes de la planète.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
            @foreach([
                ['icon' => '💰', 'title' => 'Financement', 'desc' => 'Appui financier au programme'],
                ['icon' => '🔬', 'title' => 'Technique', 'desc' => 'Expertise et accompagnement'],
                ['icon' => '🤝', 'title' => 'Institutionnel', 'desc' => 'Soutien politique et légal'],
            ] as $type)
            <div class="bg-white/10 border border-white/20 rounded-xl p-5">
                <span class="text-3xl mb-2 block">{{ $type['icon'] }}</span>
                <p class="text-white font-semibold">{{ $type['title'] }}</p>
                <p class="text-white/60 text-sm">{{ $type['desc'] }}</p>
            </div>
            @endforeach
        </div>
        <a href="{{ route('contact') }}" class="btn-outline px-10 py-4 text-base">
            Proposer un partenariat
        </a>
    </div>
</section>

@endsection
