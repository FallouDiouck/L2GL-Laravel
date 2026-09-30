<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tableau de bord
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('error'))
                <div class="bg-red-100 text-red-800 px-4 py-3 rounded mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Message de bienvenue -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">
                    Bonjour, {{ Auth::user()->name }} 👋
                </h3>
                <p class="text-gray-500">
                    Bienvenue sur votre espace personnel.
                </p>
            </div>

            <!-- Cartes d'actions -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Profil -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Mon Profil</h4>
                    <p class="text-gray-500 text-sm mb-4">Gérez vos informations personnelles</p>
                    <a href="{{ route('profile.edit') }}"
                        class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md text-sm hover:bg-indigo-700">
                        Voir mon profil
                    </a>
                </div>

                <!-- Email -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Mon Email</h4>
                    <p class="text-gray-500 text-sm mb-4">{{ Auth::user()->email }}</p>
                    <span class="inline-block bg-green-100 text-green-800 px-4 py-2 rounded-md text-sm">
                        Vérifié ✓
                    </span>
                </div>

                <!-- Rôle -->
                <div class="bg-white shadow-sm sm:rounded-lg p-6 text-center">
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-800 mb-2">Mon Rôle</h4>
                    <p class="text-gray-500 text-sm mb-4">Votre niveau d'accès</p>
                    <span class="inline-block bg-yellow-100 text-yellow-800 px-4 py-2 rounded-md text-sm font-medium">
                        {{ ucfirst(Auth::user()->role) }}
                    </span>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>