<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afficher Produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="card-title text-primary mb-4">{{ $produit->nom }}</h1>
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <h5 class="text-secondary">Code</h5>
                            <p class="lead">{{ $produit->code_produit }}</p>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-secondary">Quantité</h5>
                            <p class="lead">{{ $produit->quantite }}</p>
                        </div>
                        <div class="mb-3">
                            <h5 class="text-secondary">Prix</h5>
                            <p class="lead">{{ $produit->prix }} €</p>
                        </div>
                        <div class="mb-4">
                            <h5 class="text-secondary">Description</h5>
                            <p class="lead">{{ $produit->description }}</p>
                        </div>
                        <a href="{{ route('produits.index') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Retour
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>