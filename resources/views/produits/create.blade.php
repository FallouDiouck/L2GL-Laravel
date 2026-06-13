@extends('layouts.app')
@section('title', 'Ajouter un produit')
@section('content')
    <div style="max-width:600px;">
        <h1 class="mb-4">Ajouter un produit</h1>

        <form action="{{ route('produits.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" 
                    class="form-control @error('nom') is-invalid @enderror" 
                    value="{{ old('nom') }}"
                    placeholder="Nom du produit">
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" 
                    class="form-control @error('description') is-invalid @enderror"
                    placeholder="Description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="number" name="prix" step="0.01"
                    class="form-control @error('prix') is-invalid @enderror"
                    value="{{ old('prix') }}"
                    placeholder="0.00">
                @error('prix')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Quantité</label>
                <input type="number" name="quantite"
                    class="form-control @error('quantite') is-invalid @enderror"
                    value="{{ old('quantite') }}"
                    placeholder="0">
                @error('quantite')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection