<!DOCTYPE html>
<html lang="fr" class="h-full bg-[#f0f4f0]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion – ConsForest Maniema</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans antialiased flex items-center justify-center p-4">

    <div class="w-full max-w-sm">

        {{-- Logo --}}
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-2xl bg-[#1a2e1a] mb-4">
                <svg class="w-7 h-7 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-900">ConsForest Maniema</h1>
            <p class="text-sm text-gray-500 mt-1">Espace d'administration</p>
        </div>

        {{-- Card --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">

            @if($errors->any())
                <div class="mb-5 px-4 py-3 bg-red-50 border border-red-200 rounded-lg text-sm text-red-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Adresse e-mail</label>
                    <input id="email" name="email" type="email"
                           value="{{ old('email') }}"
                           required autocomplete="email"
                           class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 text-sm text-gray-900
                                  focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                                  placeholder:text-gray-400 transition"
                           placeholder="admin@consforest.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">Mot de passe</label>
                    <input id="password" name="password" type="password"
                           required autocomplete="current-password"
                           class="w-full px-3.5 py-2.5 rounded-lg border border-gray-300 text-sm text-gray-900
                                  focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent
                                  placeholder:text-gray-400 transition"
                           placeholder="••••••••">
                </div>

                <div class="flex items-center gap-2">
                    <input id="remember" name="remember" type="checkbox"
                           class="w-4 h-4 rounded border-gray-300 text-green-600 focus:ring-green-500 cursor-pointer">
                    <label for="remember" class="text-sm text-gray-600 cursor-pointer">Se souvenir de moi</label>
                </div>

                <button type="submit"
                        class="w-full py-2.5 px-4 bg-[#1a2e1a] hover:bg-green-800 text-white text-sm font-semibold
                               rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                    Se connecter
                </button>
            </form>
        </div>

        <p class="text-center text-xs text-gray-400 mt-6">
            <a href="{{ route('home') }}" class="hover:text-green-700 transition-colors">← Retour au site</a>
        </p>
    </div>

</body>
</html>
