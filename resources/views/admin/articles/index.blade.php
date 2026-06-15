@extends('admin.layout')

@section('title', 'Actualités')
@section('header', 'Gestion des actualités')

@section('content')

{{-- Stats --}}
<div class="grid grid-cols-2 sm:grid-cols-5 gap-3 mb-6">
    @php
        $statsCards = [
            ['label' => 'Total',      'value' => $stats['total'],     'color' => 'bg-gray-50 border-gray-200',    'dot' => 'bg-gray-400'],
            ['label' => 'Publiés',    'value' => $stats['published'], 'color' => 'bg-green-50 border-green-200',  'dot' => 'bg-green-500'],
            ['label' => 'Brouillons', 'value' => $stats['draft'],     'color' => 'bg-yellow-50 border-yellow-200','dot' => 'bg-yellow-400'],
            ['label' => 'Programmés', 'value' => $stats['scheduled'], 'color' => 'bg-blue-50 border-blue-200',    'dot' => 'bg-blue-500'],
            ['label' => 'En vedette', 'value' => $stats['featured'],  'color' => 'bg-amber-50 border-amber-200',  'dot' => 'bg-amber-400'],
        ];
    @endphp
    @foreach($statsCards as $card)
    <div class="bg-white rounded-xl border {{ $card['color'] }} p-3 flex items-center gap-3">
        <span class="w-2.5 h-2.5 rounded-full shrink-0 {{ $card['dot'] }}"></span>
        <div>
            <p class="text-xl font-bold text-gray-800 leading-none">{{ $card['value'] }}</p>
            <p class="text-xs text-gray-500 mt-0.5">{{ $card['label'] }}</p>
        </div>
    </div>
    @endforeach
</div>

{{-- Filtres + Nouveau --}}
<div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 mb-4">
    <form method="GET" action="{{ route('admin.articles.index') }}"
          class="flex flex-col sm:flex-row flex-wrap items-end gap-3">

        <div class="flex-1 min-w-[180px]">
            <label class="text-xs font-medium text-gray-500 mb-1 block">Recherche</label>
            <div class="relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Titre, auteur, extrait…"
                    class="w-full pl-9 pr-3 py-2 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
            </div>
        </div>

        <div class="w-full sm:w-40">
            <label class="text-xs font-medium text-gray-500 mb-1 block">Catégorie</label>
            <select name="category" class="w-full py-2 px-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
                <option value="">Toutes</option>
                @foreach($categories as $val => $label)
                    <option value="{{ $val }}" {{ request('category') === $val ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <div class="w-full sm:w-36">
            <label class="text-xs font-medium text-gray-500 mb-1 block">Statut</label>
            <select name="status" class="w-full py-2 px-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition">
                <option value="">Tous</option>
                @foreach($statuses as $val => $label)
                    <option value="{{ $val }}" {{ request('status') === $val ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center gap-1.5 pb-0.5">
            <input type="checkbox" name="featured" value="1" id="featured_filter"
                {{ request('featured') ? 'checked' : '' }}
                class="text-green-600 rounded focus:ring-green-500">
            <label for="featured_filter" class="text-sm text-gray-600 cursor-pointer select-none">En vedette</label>
        </div>

        <div class="flex gap-2">
            <button type="submit" class="px-4 py-2 bg-green-700 hover:bg-green-800 text-white text-sm font-medium rounded-lg transition-colors">
                Filtrer
            </button>
            @if(request()->hasAny(['search','category','status','featured']))
            <a href="{{ route('admin.articles.index') }}"
                class="px-4 py-2 text-sm text-gray-500 hover:text-gray-700 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                Réinitialiser
            </a>
            @endif
        </div>

        <div class="sm:ml-auto">
            <a href="{{ route('admin.articles.create') }}"
                class="flex items-center gap-2 px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-semibold rounded-lg transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Nouvel article
            </a>
        </div>
    </form>
</div>

{{-- Liste articles --}}
@if($articles->isEmpty())
<div class="bg-white rounded-xl border border-gray-200 p-12 text-center">
    <svg class="mx-auto h-12 w-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM9 12h6M9 16h4"/>
    </svg>
    <p class="text-gray-500 font-medium">Aucun article trouvé</p>
    <p class="text-gray-400 text-sm mt-1">
        @if(request()->hasAny(['search','category','status','featured']))
            Modifiez vos filtres ou <a href="{{ route('admin.articles.index') }}" class="text-green-600 hover:underline">réinitialisez</a>.
        @else
            <a href="{{ route('admin.articles.create') }}" class="text-green-600 hover:underline">Créez votre premier article</a>.
        @endif
    </p>
</div>
@else
<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200">
                    <th class="text-left px-4 py-3 font-semibold text-gray-600 w-16">Image</th>
                    <th class="text-left px-4 py-3 font-semibold text-gray-600">Article</th>
                    <th class="text-left px-4 py-3 font-semibold text-gray-600 hidden md:table-cell w-32">Catégorie</th>
                    <th class="text-left px-4 py-3 font-semibold text-gray-600 hidden lg:table-cell w-28">Statut</th>
                    <th class="text-center px-4 py-3 font-semibold text-gray-600 hidden lg:table-cell w-16">Vues</th>
                    <th class="text-left px-4 py-3 font-semibold text-gray-600 hidden xl:table-cell w-28">Date</th>
                    <th class="text-right px-4 py-3 font-semibold text-gray-600 w-28">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($articles as $article)
                <tr class="hover:bg-gray-50/50 transition-colors group">

                    {{-- Miniature --}}
                    <td class="px-4 py-3">
                        @if($article->cover_image)
                            <img src="{{ Storage::url($article->cover_image) }}"
                                class="w-12 h-12 object-cover rounded-lg shadow-sm" alt="{{ $article->cover_image_alt }}">
                        @else
                            <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        @endif
                    </td>

                    {{-- Titre + infos --}}
                    <td class="px-4 py-3 max-w-xs">
                        <div class="flex items-start gap-1.5">
                            @if($article->featured)
                            <svg class="w-3.5 h-3.5 text-amber-400 mt-0.5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            @endif
                            <div>
                                <div class="flex items-center gap-1.5">
                                <p class="font-semibold text-gray-800 leading-tight line-clamp-1">{{ $article->title }}</p>
                                @if($article->has_video)
                                <svg class="w-3.5 h-3.5 text-red-500 shrink-0" fill="currentColor" viewBox="0 0 20 20" title="Contient une vidéo">
                                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm12.553 1.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"/>
                                </svg>
                                @endif
                            </div>
                                <p class="text-xs text-gray-400 mt-0.5 line-clamp-1">{{ $article->excerpt }}</p>
                                <div class="flex flex-wrap items-center gap-x-2 gap-y-0.5 mt-1">
                                    <span class="text-xs text-gray-400">{{ $article->author }}</span>
                                    @if($article->reading_time)
                                    <span class="text-gray-300">·</span>
                                    <span class="text-xs text-gray-400">{{ $article->reading_time_text }}</span>
                                    @endif
                                    {{-- Statut mobile --}}
                                    <span class="lg:hidden inline-flex items-center px-1.5 py-0.5 text-[10px] font-medium rounded-full ring-1 ring-inset {{ $article->status_badge }}">
                                        {{ $article->status_label }}
                                    </span>
                                    {{-- Tags --}}
                                    @if($article->tags)
                                        @foreach(array_slice($article->tags, 0, 2) as $tag)
                                        <span class="hidden sm:inline text-[10px] bg-green-50 text-green-700 px-1.5 py-0.5 rounded-full">{{ $tag }}</span>
                                        @endforeach
                                        @if(count($article->tags) > 2)
                                        <span class="hidden sm:inline text-[10px] text-gray-400">+{{ count($article->tags) - 2 }}</span>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>

                    {{-- Catégorie --}}
                    <td class="px-4 py-3 hidden md:table-cell">
                        <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium bg-gray-100 text-gray-700 rounded-full">
                            {{ $article->category_label }}
                        </span>
                    </td>

                    {{-- Statut --}}
                    <td class="px-4 py-3 hidden lg:table-cell">
                        <form method="POST" action="{{ route('admin.articles.toggle', $article) }}">
                            @csrf @method('PATCH')
                            <button type="submit"
                                class="inline-flex items-center gap-1.5 px-2.5 py-1 text-xs font-semibold rounded-full ring-1 ring-inset transition hover:opacity-80 cursor-pointer {{ $article->status_badge }}"
                                title="Cliquer pour {{ $article->status === 'published' ? 'dépublier' : 'publier' }}">
                                <span class="w-1.5 h-1.5 rounded-full
                                    {{ $article->status === 'published' ? 'bg-green-500' : ($article->status === 'scheduled' ? 'bg-blue-500' : ($article->status === 'archived' ? 'bg-gray-400' : 'bg-yellow-400')) }}">
                                </span>
                                {{ $article->status_label }}
                            </button>
                        </form>
                        @if($article->status === 'scheduled' && $article->scheduled_at)
                        <p class="text-[10px] text-blue-500 mt-0.5 ml-0.5">
                            {{ $article->scheduled_at->format('d/m/Y H:i') }}
                        </p>
                        @endif
                    </td>

                    {{-- Vues --}}
                    <td class="px-4 py-3 hidden lg:table-cell text-center">
                        <span class="text-sm font-medium text-gray-600">{{ number_format($article->views_count) }}</span>
                    </td>

                    {{-- Date --}}
                    <td class="px-4 py-3 hidden xl:table-cell">
                        <span class="text-xs text-gray-500">
                            {{ ($article->published_at ?? $article->created_at)->format('d/m/Y') }}
                        </span>
                    </td>

                    {{-- Actions --}}
                    <td class="px-4 py-3">
                        <div class="flex items-center justify-end gap-1">
                            @if($article->status === 'published')
                            <a href="{{ route('news.show', $article->slug) }}" target="_blank"
                                class="p-1.5 rounded-lg text-gray-400 hover:text-blue-600 hover:bg-blue-50 transition-colors"
                                title="Voir en ligne">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                            @endif
                            <a href="{{ route('admin.articles.edit', $article) }}"
                                class="p-1.5 rounded-lg text-gray-400 hover:text-green-700 hover:bg-green-50 transition-colors"
                                title="Modifier">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <form method="POST" action="{{ route('admin.articles.destroy', $article) }}"
                                x-data
                                @submit.prevent="$confirm('Supprimer cet article définitivement ?') && $el.submit()">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="p-1.5 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50 transition-colors"
                                    title="Supprimer">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($articles->hasPages())
    <div class="px-4 py-3 border-t border-gray-100">
        {{ $articles->links() }}
    </div>
    @endif
</div>
@endif

@endsection
