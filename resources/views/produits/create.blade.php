<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5" style="max-width:600px;">
        <h1 class="mb-4">Ajouter un produit</h1>

        <form action="{{ route('produits.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom du produit">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="number" name="prix" step="0.01" class="form-control" placeholder="0.00">
            </div>

            <div class="mb-3">
                <label class="form-label">Quantité</label>
                <input type="number" name="quantite" class="form-control" placeholder="0">
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>