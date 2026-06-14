{{--
    Composant : Carte membre d'équipe (page À propos)
    Props :
      $name        — Nom complet
      $role        — Fonction principale
      $subtitle    — Titre complémentaire (optionnel)
      $description — Responsabilités (string ou array, optionnel)
      $email       — Adresse email
      $photo       — Fichier dans public/images/team/ (optionnel)
      $initials    — 2 lettres fallback (auto si absent)
      $color       — green | gold | blue (défaut: green)
--}}
@props([
    'name',
    'role',
    'subtitle'    => null,
    'description' => null,
    'email',
    'photo'       => null,
    'initials'    => null,
    'color'       => 'green',
])

@php
    $photoFile    = $photo ? trim($photo) : null;
    $hasPhoto     = $photoFile && file_exists(public_path('images/team/' . $photoFile));
    $photoUrl     = $hasPhoto ? asset('images/team/' . str_replace(' ', '%20', $photoFile)) : null;

    $avatarInitials = $initials ?: mb_strtoupper(
        collect(explode(' ', trim($name)))->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('')
    );

    $palettes = [
        'green' => [
            'from'         => '#0a3b1a',
            'to'           => '#16a34a',
            'accent'       => '#138038',
            'accentLight'  => 'rgba(22,163,74,0.08)',
            'accentBorder' => 'rgba(22,163,74,0.18)',
            'badgeColor'   => '#34c961',
            'roleColor'    => '#138038',
            'roleBg'       => 'rgba(22,163,74,0.09)',
            'ringClass'    => '',
        ],
        'gold' => [
            'from'         => '#2d1200',
            'to'           => '#92400e',
            'accent'       => '#b45309',
            'accentLight'  => 'rgba(240,180,41,0.08)',
            'accentBorder' => 'rgba(240,180,41,0.20)',
            'badgeColor'   => '#d97706',
            'roleColor'    => '#b45309',
            'roleBg'       => 'rgba(240,180,41,0.09)',
            'ringClass'    => 'ring-gold',
        ],
        'blue' => [
            'from'         => '#051f42',
            'to'           => '#0d4ea8',
            'accent'       => '#0a3d7f',
            'accentLight'  => 'rgba(13,78,168,0.08)',
            'accentBorder' => 'rgba(13,78,168,0.18)',
            'badgeColor'   => '#2775c5',
            'roleColor'    => '#0a3d7f',
            'roleBg'       => 'rgba(13,78,168,0.09)',
            'ringClass'    => 'ring-blue',
        ],
    ];
    $p = $palettes[$color] ?? $palettes['green'];

    $descItems = is_array($description) ? $description : ($description ? [$description] : []);
@endphp

<article
    x-data="{ expanded: false }"
    class="team-card bg-white rounded-2xl overflow-hidden flex flex-col border shadow-sm"
    style="border-color: {{ $p['accentBorder'] }};">

    {{-- ── Bannière photo / gradient ── --}}
    <div class="relative overflow-hidden flex-shrink-0" style="height: 200px;">

        @if($hasPhoto)
            {{-- Photo pleine largeur --}}
            <img src="{{ $photoUrl }}"
                 alt="Photo de {{ $name }}"
                 class="w-full h-full object-cover object-top">
            {{-- Voile dégradé en bas pour lisibilité --}}
            <div class="absolute inset-0"
                 style="background: linear-gradient(0deg, rgba(5,15,5,0.72) 0%, rgba(5,15,5,0.15) 45%, transparent 80%);"></div>
        @else
            {{-- Gradient de couleur + grands initiaux --}}
            <div class="absolute inset-0"
                 style="background: linear-gradient(145deg, {{ $p['from'] }} 0%, {{ $p['to'] }} 100%);">
                {{-- Cercles décoratifs --}}
                <div class="absolute -right-8 -top-8 w-36 h-36 rounded-full"
                     style="background: {{ $p['badgeColor'] }}; opacity: 0.08;"></div>
                <div class="absolute -left-6 -bottom-10 w-44 h-44 rounded-full"
                     style="background: {{ $p['accent'] }}; opacity: 0.10;"></div>
                {{-- Motif de lignes subtiles --}}
                <svg class="absolute inset-0 w-full h-full opacity-[0.04]" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="grid-{{ $avatarInitials }}" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <path d="M 20 0 L 0 0 0 20" fill="none" stroke="white" stroke-width="0.5"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#grid-{{ $avatarInitials }})"/>
                </svg>
            </div>
            {{-- Grands initiaux centrés --}}
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="font-black select-none"
                      style="font-size: 5.5rem; line-height:1; color: white; opacity: 0.18; letter-spacing: -0.04em;">
                    {{ $avatarInitials }}
                </span>
            </div>
        @endif

        {{-- Badge rôle en bas de la bannière --}}
        <div class="absolute bottom-0 inset-x-0 px-4 pb-3.5 pt-6">
            <span class="inline-block text-[10px] font-bold px-2.5 py-1 rounded-lg backdrop-blur-sm"
                  style="background: rgba(255,255,255,0.14); color: white; border: 1px solid rgba(255,255,255,0.22);">
                {{ $role }}
            </span>
        </div>

        {{-- Avatar cercle flottant en bas à gauche --}}
        <div class="absolute -bottom-6 left-4 z-10">
            <div class="avatar-ring {{ $p['ringClass'] }}"
                 style="box-shadow: 0 0 0 3px white;">
                <div class="w-12 h-12 rounded-full overflow-hidden"
                     style="background: linear-gradient(145deg, {{ $p['from'] }}, {{ $p['to'] }});">
                    @if($hasPhoto)
                        <img src="{{ $photoUrl }}"
                             alt="{{ $name }}"
                             class="w-full h-full object-cover object-top">
                    @else
                        <svg viewBox="0 0 48 48" class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                            <text x="24" y="30" text-anchor="middle"
                                  font-family="Inter,ui-sans-serif,sans-serif"
                                  font-size="13" font-weight="900"
                                  fill="white" opacity="0.90">{{ $avatarInitials }}</text>
                        </svg>
                    @endif
                </div>
            </div>
        </div>

    </div>

    {{-- ── Contenu ── --}}
    <div class="px-4 pb-4 flex flex-col flex-1">

        {{-- Espace pour l'avatar qui déborde --}}
        <div class="h-8 flex-shrink-0"></div>

        {{-- Identité --}}
        <div class="mb-3">
            <h3 class="font-bold text-gray-900 text-[15px] leading-snug mb-0.5">{{ $name }}</h3>
            @if($subtitle)
            <p class="text-xs text-gray-400 leading-snug">{{ $subtitle }}</p>
            @endif
        </div>

        {{-- Description --}}
        @if(count($descItems) > 0)
        <div class="flex-1 mb-3.5 rounded-xl px-3 py-2.5" style="background: {{ $p['accentLight'] }}; border: 1px solid {{ $p['accentBorder'] }};">
            @if(count($descItems) === 1)
                <p class="text-gray-600 text-[11.5px] leading-relaxed">{{ $descItems[0] }}</p>
            @else
                <ul class="space-y-1.5">
                    @foreach($descItems as $i => $item)
                    <li class="flex items-start gap-2 text-[11.5px] text-gray-600 leading-relaxed"
                        @if($i >= 2) x-show="expanded" x-cloak @endif>
                        <span class="mt-1.5 w-1 h-1 rounded-full flex-shrink-0"
                              style="background: {{ $p['badgeColor'] }};"></span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                @if(count($descItems) > 2)
                <button @click="expanded = !expanded"
                        class="mt-2 text-[10.5px] font-semibold transition-colors"
                        style="color: {{ $p['accent'] }};">
                    <span x-text="expanded ? '↑ Voir moins' : '↓ Voir plus'">↓ Voir plus</span>
                </button>
                @endif
            @endif
        </div>
        @else
        <div class="flex-1"></div>
        @endif

        {{-- Email --}}
        <a href="mailto:{{ $email }}"
           class="mt-auto inline-flex items-center gap-2 text-[11.5px] font-medium px-4 py-2.5 rounded-xl
                  border transition-all duration-200 hover:opacity-80 w-full justify-center group"
           style="border-color: {{ $p['accentBorder'] }}; color: {{ $p['accent'] }}; background: {{ $p['accentLight'] }};">
            <svg class="w-3.5 h-3.5 flex-shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="truncate">{{ $email }}</span>
        </a>

    </div>
</article>
