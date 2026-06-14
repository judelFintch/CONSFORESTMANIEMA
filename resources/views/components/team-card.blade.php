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
    $hasPhoto = $photo && file_exists(public_path('images/team/' . $photo));

    $avatarInitials = $initials ?: mb_strtoupper(
        collect(explode(' ', trim($name)))->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('')
    );

    $palettes = [
        'green' => [
            'ringClass'  => '',
            'innerFrom'  => '#0a3b1a',
            'innerTo'    => '#16a34a',
            'accent'     => '#138038',
            'accentLight'=> 'rgba(22,163,74,0.10)',
            'accentBorder'=> 'rgba(22,163,74,0.20)',
            'badgeColor' => '#34c961',
            'badgeBg'    => 'rgba(22,163,74,0.10)',
            'badgeBorder'=> 'rgba(52,201,97,0.22)',
            'roleColor'  => '#138038',
        ],
        'gold' => [
            'ringClass'  => 'ring-gold',
            'innerFrom'  => '#1a0e00',
            'innerTo'    => '#92400e',
            'accent'     => '#b45309',
            'accentLight'=> 'rgba(240,180,41,0.10)',
            'accentBorder'=> 'rgba(240,180,41,0.22)',
            'badgeColor' => '#d97706',
            'badgeBg'    => 'rgba(240,180,41,0.10)',
            'badgeBorder'=> 'rgba(240,180,41,0.22)',
            'roleColor'  => '#b45309',
        ],
        'blue' => [
            'ringClass'  => 'ring-blue',
            'innerFrom'  => '#051f42',
            'innerTo'    => '#0d4ea8',
            'accent'     => '#0a3d7f',
            'accentLight'=> 'rgba(13,78,168,0.10)',
            'accentBorder'=> 'rgba(13,78,168,0.20)',
            'badgeColor' => '#2775c5',
            'badgeBg'    => 'rgba(13,78,168,0.10)',
            'badgeBorder'=> 'rgba(13,78,168,0.22)',
            'roleColor'  => '#0a3d7f',
        ],
    ];
    $p = $palettes[$color] ?? $palettes['green'];

    $descItems = is_array($description) ? $description : ($description ? [$description] : []);
@endphp

<article
    x-data="{ expanded: false }"
    class="team-card bg-white rounded-2xl overflow-hidden flex flex-col border shadow-sm"
    style="border-color: {{ $p['accentBorder'] }};">

    {{-- Barre accent haute --}}
    <div class="h-[3px] w-full flex-shrink-0"
         style="background: linear-gradient(90deg, {{ $p['accent'] }}, {{ $p['badgeColor'] }});"></div>

    <div class="p-6 flex flex-col flex-1 gap-0">

        {{-- Bloc avatar + identité --}}
        <div class="flex items-start gap-4 mb-4">

            {{-- Avatar circulaire avec anneau gradient --}}
            <div class="flex-shrink-0 relative">
                <div class="avatar-ring {{ $p['ringClass'] }}">
                    <div class="w-16 h-16 rounded-full overflow-hidden"
                         style="background: linear-gradient(145deg, {{ $p['innerFrom'] }}, {{ $p['innerTo'] }});">
                        @if($hasPhoto)
                            <img src="{{ asset('images/team/' . $photo) }}"
                                 alt="Photo de {{ $name }}"
                                 class="w-full h-full object-cover object-top">
                        @else
                            <svg viewBox="0 0 64 64" class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="29" fill="none" stroke="{{ $p['badgeColor'] }}" stroke-width="0.7" opacity="0.20"/>
                                <circle cx="32" cy="32" r="21" fill="none" stroke="{{ $p['badgeColor'] }}" stroke-width="0.6" opacity="0.14"/>
                                <circle cx="32" cy="32" r="13" fill="none" stroke="{{ $p['badgeColor'] }}" stroke-width="0.5" opacity="0.10"/>
                                <text x="32" y="37" text-anchor="middle"
                                      font-family="Inter,ui-sans-serif,sans-serif"
                                      font-size="15" font-weight="900"
                                      fill="white" opacity="0.92">{{ $avatarInitials }}</text>
                            </svg>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Nom, rôle, sous-titre --}}
            <div class="min-w-0 flex-1 pt-0.5">
                <h3 class="font-bold text-gray-900 text-base leading-snug mb-0.5">
                    {{ $name }}
                </h3>
                <p class="text-sm font-semibold leading-tight mb-0.5" style="color: {{ $p['roleColor'] }};">
                    {{ $role }}
                </p>
                @if($subtitle)
                <p class="text-xs text-gray-400 leading-snug">{{ $subtitle }}</p>
                @endif
            </div>
        </div>

        {{-- Description --}}
        @if(count($descItems) > 0)
        <div class="mb-4 flex-1 rounded-xl px-3 py-2.5" style="background: {{ $p['accentLight'] }};">
            @if(count($descItems) === 1)
                <p class="text-gray-600 text-xs leading-relaxed">{{ $descItems[0] }}</p>
            @else
                <ul class="space-y-1.5">
                    @foreach($descItems as $i => $item)
                    <li class="flex items-start gap-2 text-xs text-gray-600 leading-relaxed"
                        @if($i >= 2) x-show="expanded" x-cloak @endif>
                        <span class="mt-1.5 w-1 h-1 rounded-full flex-shrink-0"
                              style="background: {{ $p['badgeColor'] }};"></span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                @if(count($descItems) > 2)
                <button @click="expanded = !expanded"
                        class="mt-2 text-[11px] font-semibold transition-colors"
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
           class="mt-auto inline-flex items-center gap-2 text-xs font-medium px-4 py-2.5 rounded-xl
                  border transition-all duration-200 hover:opacity-80 w-full justify-center"
           style="border-color: {{ $p['accentBorder'] }}; color: {{ $p['accent'] }}; background: {{ $p['accentLight'] }};">
            <svg class="w-3.5 h-3.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="truncate">{{ $email }}</span>
        </a>

    </div>
</article>
