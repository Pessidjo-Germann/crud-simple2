<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier le produit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center mb-0">Éditer le produit</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('produits.update', $produit->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="code" class="form-label">Code du produit</label>
                                <input type="text" id="code" name="code_produit" class="form-control" value="{{ $produit->code_produit }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nom du produit</label>
                                <input type="text" id="name" name="nom" class="form-control" value="{{ $produit->nom }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantité</label>
                                <input type="number" id="quantity" name="quantite" class="form-control" value="{{ $produit->quantite }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="prix" class="form-label">Prix</label>
                                <input type="number" id="prix" step="0.01" name="prix" class="form-control" value="{{ $produit->prix }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control" rows="3">{{ $produit->description }}</textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                <a href="{{ route('produits.index') }}" class="btn btn-secondary">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>