<?php

namespace App\Http\Controllers;

class CertificationController extends Controller
{
    public function index()
    {
        return view('certification', [
            'cadres'    => $this->cadres(),
            'phases'    => $this->phases(),
            'garanties' => $this->garanties(),
        ]);
    }

    private function cadres(): array
    {
        return [
            [
                'id'          => 'international',
                'label'       => 'International',
                'flag'        => '🌍',
                'hex'         => '#0d4ea8',
                'header_from' => '#0a3d7f',
                'header_to'   => '#051f42',
                'description' => 'Cadre onusien et accords multilatéraux encadrant les marchés carbone et la protection forestière.',
                'items'       => [
                    ['title' => 'CCNUCC', 'detail' => 'Convention-cadre des Nations Unies sur les changements climatiques'],
                    ['title' => 'Accord de Paris', 'detail' => 'Article 5 – forêts et puits de carbone, engagements climatiques mondiaux'],
                    ['title' => 'NDC de la RDC', 'detail' => 'Contribution Déterminée au niveau National – engagement climatique de la RDC'],
                    ['title' => 'Sauvegardes de Cancún', 'detail' => 'Protection sociale, environnementale et des droits des peuples autochtones'],
                    ['title' => 'CLIP', 'detail' => 'Consentement Libre, Informé et Préalable des communautés locales'],
                    ['title' => 'Droits humains & communautés', 'detail' => 'Respect des droits fondamentaux et droits coutumiers des populations locales'],
                    ['title' => 'Article 6 / ITMOs', 'detail' => 'Transferts Internationaux de Résultats d\'Atténuation – prévention du double comptage'],
                ],
            ],
            [
                'id'          => 'national',
                'label'       => 'National RDC',
                'flag'        => '🇨🇩',
                'hex'         => '#d97706',
                'header_from' => '#92400e',
                'header_to'   => '#78350f',
                'description' => 'Cadre législatif et réglementaire de la République Démocratique du Congo.',
                'items'       => [
                    ['title' => 'Ordonnance-Loi n°23/007', 'detail' => 'Du 3 mars 2023 – cadre légal des marchés carbone en RDC'],
                    ['title' => 'Décret n°23/22 – ARMCA', 'detail' => 'Du 14 juin 2023 créant l\'Autorité de Régulation des Marchés Carbone et REDD+'],
                    ['title' => 'Arrêté Ministériel n°047/2018', 'detail' => 'CAB/MIN/EDD/AAN/MML – procédures de validation et vérification'],
                    ['title' => 'Registre National REDD+', 'detail' => 'Enregistrement officiel des projets et suivi des crédits carbone en RDC'],
                    ['title' => 'Homologation des projets', 'detail' => 'Procédure nationale d\'approbation avant toute validation externe'],
                    ['title' => 'Quote-part de l\'État', 'detail' => 'Répartition légale des revenus entre l\'État, la province et les communautés'],
                ],
            ],
            [
                'id'          => 'provincial',
                'label'       => 'Province du Maniema',
                'flag'        => '🌿',
                'hex'         => '#16a34a',
                'header_from' => '#0f5e29',
                'header_to'   => '#0a3b1a',
                'description' => 'Ancrage territorial et gouvernance locale au cœur de la Province du Maniema.',
                'items'       => [
                    ['title' => 'PIREDD Maniema', 'detail' => 'Programme Intégré REDD+ du Maniema – alignement des activités et objectifs'],
                    ['title' => 'Comités Locaux de Développement', 'detail' => 'CLD – organes de gouvernance communautaire et de validation locale'],
                    ['title' => 'Édits provinciaux', 'detail' => 'Respect de la réglementation provinciale sur les forêts et la conservation'],
                    ['title' => 'Communautés locales', 'detail' => 'Implication directe des villages riverains dans la gestion et les décisions'],
                    ['title' => 'Partage local des bénéfices', 'detail' => 'Distribution équitable des revenus aux communautés selon le PPB signé'],
                ],
            ],
        ];
    }

    private function phases(): array
    {
        return [
            [
                'number'    => '01',
                'title'     => 'Préparation et sécurisation du projet',
                'subtitle'  => 'Études de base, engagement communautaire et sécurisation foncière',
                'color_hex' => '#16a34a',
                'light_hex' => '#f0fdf4',
                'duration'  => '6 – 12 mois',
                'steps'     => [
                    'Définir le périmètre géographique au Maniema',
                    'Choisir le type d\'intervention : REDD+, reforestation, afforestation ou gestion forestière durable',
                    'Réaliser les études socio-économiques, environnementales et la ligne de base carbone',
                    'Sécuriser le foncier et documenter les droits coutumiers et légaux',
                    'Obtenir le CLIP avec les communautés locales',
                    'Rédiger le PDD/DCP (Document de Description du Projet)',
                    'Préparer le Plan de Partage des Bénéfices (PPB)',
                ],
                'result' => 'Dossier complet, communautés engagées, foncier sécurisé',
            ],
            [
                'number'    => '02',
                'title'     => 'Homologation nationale',
                'subtitle'  => 'Validation par l\'ARMCA et inscription au Registre National REDD+',
                'color_hex' => '#0d4ea8',
                'light_hex' => '#eff6ff',
                'duration'  => '3 – 6 mois',
                'steps'     => [
                    'Soumettre le dossier complet à l\'ARMCA et au Registre National REDD+',
                    'Inclure : PDD, PPB, preuves CLIP, titres fonciers ou accords locaux',
                    'Examen de conformité avec la loi nationale et la NDC RDC',
                    'Obtenir l\'avis favorable et l\'homologation nationale',
                    'Inscription officielle au Registre National REDD+',
                    'Formalisation des droits sur les futures UREC (Unités de Réduction d\'Émissions Carbone)',
                ],
                'result' => 'Homologation officielle et droits carbone enregistrés au Registre National',
            ],
            [
                'number'    => '03',
                'title'     => 'Validation externe et mise en œuvre',
                'subtitle'  => 'Vérification par un organisme tiers indépendant et lancement des activités terrain',
                'color_hex' => '#d97706',
                'light_hex' => '#fffbeb',
                'duration'  => '3 – 6 mois',
                'steps'     => [
                    'Soumettre le PDD à un VVB (Validation and Verification Body) indépendant accrédité',
                    'Utiliser un standard international reconnu : Verra VCS ou Gold Standard',
                    'Validation technique, sociale et environnementale du projet',
                    'Lancer les activités terrain : reforestation, agroforesterie, patrouilles, sensibilisation',
                    'Respecter scrupuleusement le PDD validé et le PPB signé',
                ],
                'result' => 'Projet validé internationalement, activités terrain en cours',
            ],
            [
                'number'    => '04',
                'title'     => 'Suivi, vérification et émission des crédits',
                'subtitle'  => 'Système MRV et certification des réductions d\'émissions',
                'color_hex' => '#16a34a',
                'light_hex' => '#f0fdf4',
                'duration'  => 'Annuel / pluriannuel',
                'steps'     => [
                    'Mettre en place le système MRV (Mesure, Rapportage, Vérification)',
                    'Mesurer les réductions d\'émissions ou les séquestrations de carbone',
                    'Produire des données fiables, transparentes et vérifiables',
                    'Soumettre les résultats à la vérification indépendante du VVB',
                    'Certification des crédits carbone suite à la vérification positive',
                    'Émission des crédits sur le registre du standard choisi (Verra ou Gold Standard)',
                ],
                'result' => 'Crédits carbone certifiés et émis sur registre international',
            ],
            [
                'number'    => '05',
                'title'     => 'Transactions et conformité fiscale',
                'subtitle'  => 'Vente des crédits, traçabilité et partage équitable des bénéfices',
                'color_hex' => '#0d4ea8',
                'light_hex' => '#eff6ff',
                'duration'  => 'Continu',
                'steps'     => [
                    'Enregistrer les crédits générés dans le registre national et international',
                    'Notifier toutes les transactions à l\'ARMCA',
                    'Garantir la traçabilité complète des ventes de crédits carbone',
                    'Appliquer le Plan de Partage des Bénéfices (PPB)',
                    'Verser les quotes-parts à l\'État, à la Province du Maniema et aux communautés',
                    'Gérer les ITMOs si les crédits sont utilisés par un État étranger',
                    'Appliquer l\'ajustement correspondant pour éviter tout double comptage',
                ],
                'result' => 'Revenus distribués, conformité fiscale et traçabilité intégrale garanties',
            ],
        ];
    }

    private function garanties(): array
    {
        return [
            [
                'title'     => 'Transparence totale',
                'desc'      => 'Toutes les données, résultats et transactions sont rendus publics et accessibles.',
                'color_hex' => '#0d4ea8',
                'icon'      => 'eye',
            ],
            [
                'title'     => 'Respect des communautés',
                'desc'      => 'Les populations locales sont au cœur de chaque décision et bénéficient directement.',
                'color_hex' => '#16a34a',
                'icon'      => 'people',
            ],
            [
                'title'     => 'CLIP documenté',
                'desc'      => 'Le Consentement Libre, Informé et Préalable est obtenu et archivé avant tout démarrage.',
                'color_hex' => '#d97706',
                'icon'      => 'document',
            ],
            [
                'title'     => 'Conformité ARMCA',
                'desc'      => 'Homologation nationale complète et inscription au Registre National REDD+ de la RDC.',
                'color_hex' => '#0d4ea8',
                'icon'      => 'shield',
            ],
            [
                'title'     => 'Alignement Accord de Paris',
                'desc'      => 'Le projet contribue directement aux NDC de la RDC et aux objectifs de l\'Article 6.',
                'color_hex' => '#16a34a',
                'icon'      => 'globe',
            ],
            [
                'title'     => 'Traçabilité des crédits',
                'desc'      => 'Chaque crédit est enregistré, suivi et auditable via des registres internationaux certifiés.',
                'color_hex' => '#d97706',
                'icon'      => 'lightning',
            ],
            [
                'title'     => 'Partage équitable',
                'desc'      => 'Les bénéfices sont répartis entre l\'État, la province et les communautés selon un plan validé.',
                'color_hex' => '#0d4ea8',
                'icon'      => 'scale',
            ],
            [
                'title'     => 'Protection durable des forêts',
                'desc'      => 'Conservation à long terme des forêts du Maniema pour les générations actuelles et futures.',
                'color_hex' => '#16a34a',
                'icon'      => 'sparkle',
            ],
        ];
    }
}
