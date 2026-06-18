<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des produits
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('produits.create') }}" 
                    class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4">
                    Ajouter un produit
                </a>

                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b">
                            <th class="py-2 px-3">Nom</th>
                            <th class="py-2 px-3">Description</th>
                            <th class="py-2 px-3">Prix</th>
                            <th class="py-2 px-3">Quantité</th>
                            <th class="py-2 px-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produits as $produit)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-2 px-3">{{ $produit->nom }}</td>
                                <td class="py-2 px-3">{{ $produit->description }}</td>
                                <td class="py-2 px-3">{{ $produit->prix }} €</td>
                                <td class="py-2 px-3">{{ $produit->quantite }}</td>
                                <td class="py-2 px-3 space-x-2">
                                    <a href="{{ route('produits.edit', $produit->id) }}" 
                                        class="bg-yellow-500 text-white px-3 py-1 rounded text-sm hover:bg-yellow-600">
                                        Modifier
                                    </a>
                                    <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                            onclick="return confirm('Supprimer ?')"
                                            class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $produits->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>