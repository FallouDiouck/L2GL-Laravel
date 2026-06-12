<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5" style="max-width:600px;">
        <h1 class="mb-4">Modifier un produit</h1>

        <form action="{{ route('produits.update', $produit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" value="{{ $produit->nom }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $produit->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="number" name="prix" step="0.01" class="form-control" value="{{ $produit->prix }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Quantité</label>
                <input type="number" name="quantite" class="form-control" value="{{ $produit->quantite }}">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>