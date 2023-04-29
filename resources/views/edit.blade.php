<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: Figtree;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 30%;
            margin: 30px auto;
            align-items: center;
            box-shadow: #66EB9A 6px 6px 2.6px;
            border-radius: 100px;
            padding: 20px;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 10px;
            margin-block: 10px;
        }
        button {
            width: 200px;
            height: 60px;
            line-height: 60px;
            background: transparent;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            border-radius: 25px;
            cursor: pointer;
        }
        button:hover {
            transform: translateY(1px);
            box-shadow: rgba(0, 0, 0, 0.15) 0.95px 0.95px 1.6px;
        }
        button:active {
            transform: translateY(2px);
            box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 0px;
        }
    </style>
</head>

<body>
    @include('header-admin')
    @if(isset($product))
    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Prix :</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
        <label for="visible">Visible :</label>
        <select name="visible" id="visible">
            <option value="0">Masqué</option>
            <option value="1">Visible</option>
        </select>
        </div>
        <div class="form-group">
        <label for="state">Statut :</label>
        <select name="state" id="state" value="{{ $product->state }}">
            <option value="0">Normal</option>
            <option value="1">En solde</option>
        </select>
        </div>

        <div class="form-group">
        <label for="reference">Ref :</label>
        <input type="text" id="reference" name="reference" value="{{ $product->reference }}" required>
        </div>

        <div class="form-group">
        <label for="category_id">Statut :</label>
        <select name="category_id" id="category_id">
            <option value="1">Homme</option>
            <option value="2">Femmme</option>
        </select>
        </div>
        <!-- Ajouter les autres champs du formulaire ici -->
        <button type="submit" class="btn btn-primary">Modifier le produit</button>
    </form>
    @else
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea>
        </div>

        <div class="form-group">
        <label for="price">Prix :</label>
        <input type="number" id="price" name="price" required>
        </div>

        <div class="form-group">
        <label for="visible">Visible :</label>
        <!-- <input type="checkbox" id="visible" name="visible"></input> -->
        <select name="visible" id="visible">
            <option value="0">Masqué</option>
            <option value="1">Visible</option>
        </select>
        </div>

        <div class="form-group">
        <label for="state">Statut :</label>
        <select name="state" id="state">
            <option value="0">Normal</option>
            <option value="1">En solde</option>
        </select>
        </div>

        <div class="form-group">
        <label for="reference">Ref :</label>
        <input type="text" id="reference" name="reference" required>
        </div>

        <div class="form-group">
        <label for="category_id">Statut :</label>
        <select name="category_id" id="category_id">
            <option value="1">Homme</option>
            <option value="2">Femmme</option>
        </select>
        </div>

        <button type="submit">Créer le produit</button>
        @endif
</body>

</html>