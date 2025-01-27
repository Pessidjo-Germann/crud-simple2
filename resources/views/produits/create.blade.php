<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produits Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin-top: 2rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 2rem;
            text-align: center;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1>Créer un nouveau produit</h1>
                <form action="{{ route('produits.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="code_produit" class="form-label">Code du produit</label>
                        <input type="text" name="code_produit" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom du produit</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="quantite" class="form-label">Quantité</label>
                        <input type="number" name="quantite" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="number" step="0.01" name="prix" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5">Créer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>