@extends('layouts.app')
@section('title', 'Liste des produits')
@section('content')
<h1>Liste des produits</h1>
<a href="{{ route('produits.create') }}" class="btn btn-primary mb-3">Ajouter un produit</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produits as $produit)
        <tr>
            <td>{{ $produit->nom }}</td>
            <td>{{ $produit->description }}</td>
            <td>{{ $produit->prix }} €</td>
            <td>{{ $produit->quantite }}</td>
            <td>
                <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection