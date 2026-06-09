@extends('layouts.app')

@section('title', 'À propos – BFD SARL et le Projet ConsForest Maniema')
@section('description', 'Découvrez la vision, la mission et les valeurs du projet ConsForest Maniema porté par BFD SARL en partenariat avec le Gouvernement de la RDC et le Ministère de l\'Environnement.')
@section('keywords', 'BFD SARL, à propos ConsForest Maniema, vision mission, gouvernement RDC, ministère environnement, conservation forêt Congo')

@section('content')

{{-- Page Header --}}
<div class="page-header pt-32 pb-16">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="breadcrumb flex items-center gap-2 text-sm mb-4" aria-label="Fil d'Ariane">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <span class="text-white font-medium">À propos</span>
        </nav>
        <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">
            À Propos du Projet
        </h1>
        <p class="text-white/80 text-xl max-w-2xl">
            BFD SARL et sa vision pour la conservation forestière en République Démocratique du Congo.
        </p>
    </div>
</div>


{{-- Contexte --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="animate-fade-up">
                <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 rounded-full px-4 py-1.5 text-sm font-medium mb-6">
                    Contexte du projet
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">
                    Une Initiative Née d'une Urgence Planétaire
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-5">
                    Le Bassin du Congo représente l'un des patrimoines naturels les plus précieux de l'humanité.
                    Deuxième plus grande forêt tropicale du monde, il joue un rôle irremplaçable dans la régulation
                    du climat mondial et abrite une biodiversité extraordinaire.
                </p>
                <p class="text-gray-600 leading-relaxed mb-5">
                    Face aux menaces croissantes — déforestation, exploitation illégale, expansion agricole —
                    <strong class="text-blue-700">BFD SARL (Bâtir sur des Fondements Durables)</strong> a lancé
                    le programme ConsForest Maniema, un programme structuré et ambitieux de conservation
                    forestière, de reboisement et de développement durable.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Ce programme est développé en étroite collaboration avec le <strong>Gouvernement de la
                    République Démocratique du Congo</strong> et le <strong>Ministère de l'Environnement
                    et Développement Durable</strong>, garantissant son ancrage institutionnel et sa légitimité.
                </p>
            </div>
            <div class="animate-fade-up">
                <div class="rounded-3xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1504701954957-2010ec3bcec1?w=700&q=80"
                         alt="Forêt du Bassin du Congo" class="w-full h-80 object-cover">
                </div>
                <div class="grid grid-cols-3 gap-3 mt-3">
                    <div class="rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497491704085-44fe2a91b5e0?w=300&q=80" alt="" class="w-full h-24 object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=300&q=80" alt="" class="w-full h-24 object-cover">
                    </div>
                    <div class="rounded-2xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=300&q=80" alt="" class="w-full h-24 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Vision, Mission, Valeurs --}}
<section class="py-20 bg-forest-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Vision, Mission & Valeurs</h2>
            <p class="text-gray-600 max-w-xl mx-auto">Les fondements qui guident chaque action du programme ConsForest Maniema.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="bg-white rounded-3xl p-8 shadow-lg border border-green-100 animate-fade-up">
                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-md">
                    🔭
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Notre Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    Contribuer à la lutte mondiale contre le changement climatique en faisant de la
                    République Démocratique du Congo un acteur majeur de la <strong class="text-green-700">séquestration
                    du carbone</strong> grâce à la protection et à la restauration de ses forêts.
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-lg border border-blue-100 animate-fade-up">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-md">
                    🎯
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Notre Mission</h3>
                <p class="text-gray-600 leading-relaxed">
                    Protéger, restaurer et valoriser durablement les forêts de la RDC, particulièrement
                    dans la province du Maniema, à travers un programme structuré de <strong class="text-blue-700">
                    conservation forestière</strong>, de reboisement, de crédits carbone et d'accompagnement
                    communautaire.
                </p>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-lg border border-amber-100 animate-fade-up">
                <div class="w-14 h-14 bg-gradient-to-br from-amber-400 to-amber-600 rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-md">
                    ⭐
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Nos Valeurs</h3>
                <ul class="space-y-2.5">
                    @foreach([
                        ['icon' => '🌿', 'val' => 'Durabilité environnementale'],
                        ['icon' => '⚖️', 'val' => 'Équité et inclusion sociale'],
                        ['icon' => '🔍', 'val' => 'Transparence et redevabilité'],
                        ['icon' => '🤝', 'val' => 'Partenariat et coopération'],
                        ['icon' => '🔬', 'val' => 'Innovation et rigueur scientifique'],
                    ] as $v)
                    <li class="flex items-center gap-2 text-gray-600 text-sm">
                        <span>{{ $v['icon'] }}</span>
                        <span>{{ $v['val'] }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>


{{-- BFD SARL --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">BFD SARL – Porteur du Projet</h2>
            </div>
            <div class="bg-gradient-to-br from-blue-950 to-green-950 rounded-3xl p-8 sm:p-12 text-white">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="md:col-span-2">
                        <p class="text-white/90 text-lg leading-relaxed mb-5">
                            <strong class="text-yellow-400">BFD SARL — Bâtir sur des Fondements Durables</strong>
                            est une société congolaise engagée dans le développement durable, la protection
                            de l'environnement et l'accompagnement des communautés locales.
                        </p>
                        <p class="text-white/75 leading-relaxed mb-5">
                            Fondée sur les principes d'excellence, d'innovation et de responsabilité sociale,
                            BFD SARL s'est positionnée comme un acteur de référence dans le secteur
                            environnemental en RDC.
                        </p>
                        <p class="text-white/75 leading-relaxed">
                            Avec ConsForest Maniema, BFD SARL concrétise sa vision d'un développement
                            qui réconcilie croissance économique et préservation des écosystèmes.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4">
                        @foreach([
                            ['label' => 'Société', 'val' => 'BFD SARL'],
                            ['label' => 'Pays', 'val' => 'RDC'],
                            ['label' => 'Secteur', 'val' => 'Environnement'],
                            ['label' => 'Zone', 'val' => 'Province du Maniema'],
                        ] as $info)
                        <div class="bg-white/10 rounded-xl p-3">
                            <p class="text-white/60 text-xs mb-0.5">{{ $info['label'] }}</p>
                            <p class="text-white font-semibold text-sm">{{ $info['val'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- Partenariats Institutionnels --}}
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Partenariats Institutionnels</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                ConsForest Maniema bénéficie d'un cadre institutionnel solide, ancré dans les
                politiques nationales de développement durable de la RDC.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach([
                ['icon' => '🇨🇩', 'title' => 'Gouvernement RDC', 'desc' => 'Partenaire institutionnel principal. Cadre légal et soutien politique au plus haut niveau.', 'color' => 'blue'],
                ['icon' => '🌿', 'title' => 'Min. Environnement', 'desc' => 'Ministère de l\'Environnement et Développement Durable. Autorité de tutelle et certification.', 'color' => 'green'],
                ['icon' => '🗺️', 'title' => 'Province du Maniema', 'desc' => 'Gouvernorat de la province du Maniema. Ancrage territorial et coordination locale.', 'color' => 'amber'],
                ['icon' => '🤝', 'title' => 'Partenaires Intl.', 'desc' => 'Organisations internationales et bailleurs de fonds engagés pour le développement durable.', 'color' => 'violet'],
            ] as $p)
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 card-hover">
                <span class="text-4xl mb-4 block">{{ $p['icon'] }}</span>
                <h3 class="font-bold text-gray-900 mb-2">{{ $p['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $p['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- CTA --}}
<section class="py-16 bg-gradient-to-r from-green-800 to-blue-900">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-4">
            Intéressé par le projet ?
        </h2>
        <p class="text-white/80 text-lg mb-8">
            Contactez-nous pour en savoir davantage sur le programme ConsForest Maniema
            et les opportunités de partenariat.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-outline px-8 py-3.5">Nous contacter</a>
            <a href="{{ route('partners') }}" class="bg-white text-green-800 font-semibold px-8 py-3.5 rounded-lg hover:bg-gray-50 transition-colors inline-flex items-center gap-2">
                Voir les partenaires
            </a>
        </div>
    </div>
</section>

@endsection
