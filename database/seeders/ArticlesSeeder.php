<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticlesSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Lancement officiel du programme ConsForest Maniema en partenariat avec le Gouvernement de la RDC',
                'category' => 'evenement',
                'excerpt' => 'BFD SARL a officiellement lancé le programme ConsForest Maniema lors d\'une cérémonie solennelle à Kinshasa, en présence de représentants du Gouvernement et du Ministère de l\'Environnement.',
                'content' => "Le programme ConsForest Maniema a été officiellement lancé lors d'une cérémonie de haut niveau à Kinshasa, marquant une étape historique dans la conservation forestière en République Démocratique du Congo.\n\nCette initiative ambitieuse, portée par BFD SARL, vise à protéger et restaurer les forêts de la province du Maniema, tout en générant des crédits carbone certifiés et en créant des opportunités économiques pour les communautés locales.\n\nLors de cette cérémonie, les autorités ont réaffirmé l'engagement de la RDC dans la lutte contre le changement climatique et la préservation de son patrimoine naturel exceptionnel.",
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Première mission de terrain dans la province du Maniema : état des lieux forestier',
                'category' => 'conservation',
                'excerpt' => 'Les équipes de terrain de ConsForest Maniema ont effectué une première mission d\'évaluation des ressources forestières dans plusieurs zones de la province du Maniema.',
                'content' => "Les équipes techniques de ConsForest Maniema ont conduit une mission d'évaluation sur le terrain dans plusieurs territoires de la province du Maniema, permettant d'établir un état des lieux détaillé des ressources forestières.\n\nCette mission a permis de cartographier les zones prioritaires d'intervention, d'identifier les principaux facteurs de dégradation et d'établir un contact initial avec les communautés locales.\n\nLes données collectées constituent la base scientifique sur laquelle sera construit le programme de conservation et de génération de crédits carbone.",
                'published_at' => now()->subDays(12),
            ],
            [
                'title' => 'Atelier de formation des gardes forestiers communautaires au Maniema',
                'category' => 'communaute',
                'excerpt' => 'Plus de 50 gardes forestiers communautaires ont bénéficié d\'une formation intensive sur les techniques de surveillance, de protection et de gestion durable des forêts.',
                'content' => "Dans le cadre de la mise en œuvre du programme ConsForest Maniema, un atelier de formation intensive a réuni plus de 50 gardes forestiers communautaires issus de différentes localités de la province du Maniema.\n\nCette formation de cinq jours a couvert les techniques de patrouille forestière, l'identification des espèces menacées, les procédures de signalement des incidents et les outils de monitoring participatif.\n\nLes participants, hommes et femmes des communautés riveraines, constituent désormais le premier rempart de protection des forêts du Maniema.",
                'published_at' => now()->subDays(20),
            ],
            [
                'title' => 'ConsForest Maniema : un mécanisme de crédit carbone certifié en cours d\'élaboration',
                'category' => 'carbone',
                'excerpt' => 'L\'équipe technique de ConsForest Maniema travaille à la mise en place d\'un mécanisme de crédit carbone conforme aux standards internationaux VCS et REDD+.',
                'content' => "L'équipe technique de ConsForest Maniema a engagé les travaux d'élaboration d'un mécanisme de crédit carbone répondant aux exigences des standards internationaux les plus reconnus, notamment le Verified Carbon Standard (VCS) et le cadre REDD+ de la CCNUCC.\n\nCe processus comprend l'établissement d'une baseline de référence, la conception des méthodologies de mesure, le reporting et la vérification (MRV), ainsi que la définition des bénéfices sociaux et environnementaux.\n\nL'objectif est de pouvoir émettre les premiers crédits carbone certifiés dès que le programme atteindra sa pleine capacité opérationnelle.",
                'published_at' => now()->subDays(35),
            ],
            [
                'title' => 'Partenariat stratégique avec le Ministère de l\'Environnement et Développement Durable',
                'category' => 'partenariat',
                'excerpt' => 'BFD SARL et le Ministère de l\'Environnement ont signé un protocole de partenariat stratégique pour la mise en œuvre du programme ConsForest Maniema.',
                'content' => "Un protocole de partenariat stratégique a été signé entre BFD SARL et le Ministère de l'Environnement et Développement Durable de la République Démocratique du Congo, formalisant la collaboration institutionnelle au cœur du programme ConsForest Maniema.\n\nCet accord définit les rôles et responsabilités de chaque partie, les mécanismes de coordination, les procédures de validation et le cadre de partage des bénéfices.\n\nIl constitue une garantie fondamentale pour les partenaires techniques et financiers du programme, attestant de son ancrage dans les politiques nationales de développement durable.",
                'published_at' => now()->subDays(45),
            ],
            [
                'title' => 'Sensibilisation environnementale dans les écoles du Maniema : 500 élèves touchés',
                'category' => 'communaute',
                'excerpt' => 'Une campagne de sensibilisation environnementale menée dans 15 écoles de la province du Maniema a permis de toucher plus de 500 élèves sur les enjeux de la forêt.',
                'content' => "Dans le cadre de son volet éducatif, ConsForest Maniema a conduit une campagne de sensibilisation environnementale dans 15 établissements scolaires de la province du Maniema, touchant plus de 500 élèves du primaire et du secondaire.\n\nCes sessions interactives ont abordé l'importance des forêts pour le climat, la biodiversité locale, les pratiques de conservation et les alternatives à la déforestation.\n\nDes kits pédagogiques ont été distribués dans chaque établissement, et des clubs environnementaux ont été mis en place pour pérenniser les actions de sensibilisation.",
                'published_at' => now()->subDays(60),
            ],
        ];

        foreach ($articles as $data) {
            Article::create([
                'title'        => $data['title'],
                'slug'         => Str::slug($data['title']),
                'category'     => $data['category'],
                'excerpt'      => $data['excerpt'],
                'content'      => $data['content'],
                'author'       => 'Équipe ConsForest Maniema',
                'published'    => true,
                'published_at' => $data['published_at'],
            ]);
        }
    }
}
