<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(isset($product))
    <form method="POST" action="{{ route('products.update', $product->id) }}">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
    </div>
    <!-- Ajouter les autres champs du formulaire ici -->
    <button type="submit" class="btn btn-primary">Modifier le produit</button>
</form>
    @else
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
            
            <label for="description">Description :</label>
            <textarea id="description" name="description" required></textarea>
            
            <label for="price">Prix :</label>
            <input type="number" id="price" name="price" required>
            
            <label for="visible">Visible :</label>
            <!-- <input type="checkbox" id="visible" name="visible"></input> -->
            <select name="visible" id="visible">
                <option value="0">Masqué</option>
                <option value="1">Visible</option>
            </select>
            
            <label for="state">Statut :</label>
            <select name="state" id="state">
                <option value="0">Normal</option>
                <option value="1">En solde</option>
            </select>
            
            <label for="reference">Ref :</label>
            <input type="text" id="reference" name="reference" required>
            
            <label for="category_id">Statut :</label>
            <select name="category_id" id="category_id">
                <option value="1">Homme</option>
                <option value="2">Femmme</option>
            </select>
            
            <button type="submit">Créer le produit</button>
    @endif
</body>
</html>