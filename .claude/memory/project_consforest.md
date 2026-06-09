---
name: project-consforest-maniema
description: Structure complète du projet Laravel ConsForest Maniema — conservation forestière et crédit carbone en RDC
metadata:
  type: project
---

Projet Laravel complet pour **ConsForest Maniema** (BFD SARL), site institutionnel de conservation forestière et crédit carbone en RDC, province du Maniema.

**Why:** Site vitrine institutionnel professionnel pour présenter le programme à des autorités, bailleurs et organisations internationales.

**How to apply:** Référencer cette structure lors des modifications futures du projet.

## Stack technique
- Laravel (latest stable, installé /tmp/consforest puis copié)
- Tailwind CSS v4 (via `@tailwindcss/vite`)
- Alpine.js v3 + plugins collapse & intersect
- Vite v8
- SQLite (dev), PHP 8.4

## Structure des pages
| Route | Fichier Blade | Contrôleur |
|---|---|---|
| `/` | home.blade.php | HomeController |
| `/a-propos` | about.blade.php | AboutController |
| `/conservation-forestiere` | conservation.blade.php | ConservationController |
| `/credit-carbone` | carbon.blade.php | CarbonController |
| `/impact-communautaire` | community.blade.php | CommunityController |
| `/galerie` | gallery.blade.php | GalleryController |
| `/actualites` | news/index.blade.php | NewsController@index |
| `/actualites/{slug}` | news/show.blade.php | NewsController@show |
| `/partenaires` | partners.blade.php | PartnersController |
| `/contact` | contact.blade.php + POST | ContactController |

## Modèles
- **Article** : title, slug, category, cover_image, excerpt, content, author, published, published_at
- **Contact** : full_name, email, phone, subject, message, read

## Charte graphique CSS (app.css)
- Couleurs custom : `--color-forest-*`, `--color-institutional-*`, `--color-gold-*`, `--color-earth-*`
- Classes utilitaires : `.btn-primary`, `.btn-forest`, `.btn-outline`, `.card-hover`, `.gradient-text`, `.hero-overlay`, `.page-header`, `.animate-fade-up`

## Composants
- `resources/views/components/header.blade.php` – Nav sticky, responsive Alpine.js
- `resources/views/components/footer.blade.php` – 4 colonnes + copyright
- `resources/views/layouts/app.blade.php` – Layout principal avec SEO complet

## Base de données
- 6 articles de démonstration seedés (ArticlesSeeder)
- Tables : articles, contacts + tables Laravel par défaut
- `php artisan db:seed` pour reseeder

## Lancer le projet
```bash
php artisan serve
npm run dev   # dev
npm run build # production
```

## Pistes d'amélioration futures
- Panel admin (Filament ou Nova) pour gérer articles et contacts
- Upload d'images pour les articles
- Newsletter/abonnement
- Multilingue (FR/EN)
- Vraie carte interactive (Leaflet/MapLibre) sur la page contact
