@extends('admin.layout')

@section('title', 'Actualités')
@section('header', 'Gestion des actualités')

@section('content')
<div class="space-y-5">

    {{-- Header actions --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <div>
            <p class="text-sm text-gray-500">{{ $articles->total() }} article(s) au total</p>
        </div>
        <a href="{{ route('admin.articles.create') }}"
           class="inline-flex items-center gap-2 px-4 py-2 bg-[#1a2e1a] hover:bg-green-800 text-white text-sm
                  font-semibold rounded-lg transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Nouvel article
        </a>
    </div>

    {{-- Filters --}}
    <form method="GET" class="bg-white rounded-xl border border-gray-200 p-4 flex flex-wrap gap-3 items-end">
        <div class="flex-1 min-w-40">
            <label class="block text-xs font-medium text-gray-600 mb-1">Recherche</label>
            <input type="text" name="search" value="{{ request('search') }}"
                   placeholder="Titre de l'article…"
                   class="w-full px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <div>
            <label class="block text-xs font-medium text-gray-600 mb-1">Catégorie</label>
            <select name="category"
                    class="px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-white">
                <option value="">Toutes</option>
                @foreach($categories as $key => $label)
                    <option value="{{ $key }}" @selected(request('category') === $key)>{{ $label }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="block text-xs font-medium text-gray-600 mb-1">Statut</label>
            <select name="status"
                    class="px-3 py-2 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-white">
                <option value="">Tous</option>
                <option value="published" @selected(request('status') === 'published')>Publié</option>
                <option value="draft"     @selected(request('status') === 'draft')>Brouillon</option>
            </select>
        </div>
        <button type="submit"
                class="px-4 py-2 text-sm font-semibold bg-gray-900 text-white rounded-lg hover:bg-gray-700 transition-colors">
            Filtrer
        </button>
        @if(request()->anyFilled(['search','category','status']))
            <a href="{{ route('admin.articles.index') }}"
               class="px-4 py-2 text-sm font-medium text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                Réinitialiser
            </a>
        @endif
    </form>

    {{-- Table --}}
    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden">
        @if($articles->isEmpty())
            <div class="text-center py-16 text-gray-400">
                <svg class="w-10 h-10 mx-auto mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <p class="text-sm">Aucun article trouvé.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-gray-100 bg-gray-50 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            <th class="text-left px-4 py-3 w-16">Image</th>
                            <th class="text-left px-4 py-3">Titre</th>
                            <th class="text-left px-4 py-3 hidden md:table-cell">Catégorie</th>
                            <th class="text-left px-4 py-3 hidden lg:table-cell">Auteur</th>
                            <th class="text-left px-4 py-3 hidden lg:table-cell">Date</th>
                            <th class="text-center px-4 py-3">Statut</th>
                            <th class="text-right px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @foreach($articles as $article)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-4 py-3">
                                @if($article->cover_image)
                                    <img src="{{ Storage::url($article->cover_image) }}"
                                         alt="" class="w-12 h-12 object-cover rounded-lg bg-gray-100">
                                @else
                                    <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center">
                                        <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <p class="font-medium text-gray-900 line-clamp-1">{{ $article->title }}</p>
                                <p class="text-xs text-gray-400 mt-0.5 line-clamp-1">{{ $article->excerpt }}</p>
                            </td>
                            <td class="px-4 py-3 hidden md:table-cell">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium
                                             bg-green-50 text-green-700">
                                    {{ $article->category_label }}
                                </span>
                            </td>
                            <td class="px-4 py-3 hidden lg:table-cell text-gray-600">{{ $article->author }}</td>
                            <td class="px-4 py-3 hidden lg:table-cell text-gray-500 text-xs whitespace-nowrap">
                                {{ $article->published_at?->format('d/m/Y') ?? '—' }}
                            </td>
                            <td class="px-4 py-3 text-center">
                                <form method="POST" action="{{ route('admin.articles.toggle', $article) }}">
                                    @csrf @method('PATCH')
                                    <button type="submit"
                                            class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold transition-colors
                                                   {{ $article->published
                                                      ? 'bg-green-100 text-green-700 hover:bg-red-100 hover:text-red-700'
                                                      : 'bg-gray-100 text-gray-500 hover:bg-green-100 hover:text-green-700' }}"
                                            title="{{ $article->published ? 'Dépublier' : 'Publier' }}">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $article->published ? 'bg-green-500' : 'bg-gray-400' }}"></span>
                                        {{ $article->published ? 'Publié' : 'Brouillon' }}
                                    </button>
                                </form>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center justify-end gap-1">
                                    <a href="{{ route('news.show', $article->slug) }}" target="_blank"
                                       class="p-1.5 rounded-md text-gray-400 hover:text-blue-600 hover:bg-blue-50 transition-colors"
                                       title="Voir">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', $article) }}"
                                       class="p-1.5 rounded-md text-gray-400 hover:text-green-700 hover:bg-green-50 transition-colors"
                                       title="Modifier">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.articles.destroy', $article) }}"
                                          onsubmit="return confirm('Supprimer définitivement cet article ?')">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                                class="p-1.5 rounded-md text-gray-400 hover:text-red-600 hover:bg-red-50 transition-colors"
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
        @endif
    </div>
</div>
@endsection
