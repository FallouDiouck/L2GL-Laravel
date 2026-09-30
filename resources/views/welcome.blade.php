<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Mon Application') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">

    <div class="bg-white rounded-lg shadow-md p-10 max-w-md w-full text-center">

        <!-- Icône -->
        <div class="mb-6">
            <svg class="w-16 h-16 mx-auto text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10"/>
            </svg>
        </div>

        <!-- Titre -->
        <h1 class="text-3xl font-bold text-gray-800 mb-2">
            Mon Application
        </h1>
        <p class="text-gray-500 mb-8">
            Bienvenue ! Connectez-vous ou créez un compte pour continuer.
        </p>

        <!-- Boutons -->
        <div class="flex flex-col gap-3">
            <a href="{{ route('login') }}"
                class="w-full bg-indigo-600 text-white py-3 px-6 rounded-md font-medium hover:bg-indigo-700 transition">
                Se connecter
            </a>
            <a href="{{ route('register') }}"
                class="w-full bg-white text-indigo-600 py-3 px-6 rounded-md font-medium border border-indigo-600 hover:bg-indigo-50 transition">
                Créer un compte
            </a>
        </div>

    </div>

    <p class="mt-6 text-gray-400 text-sm">
        Copyright &copy; {{ date('Y') }} Mon Application
    </p>

</body>
</html>