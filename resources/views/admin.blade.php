<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: Figtree;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: auto;
            margin-top: 30px;
        }

        th, td {
        border: 1px solid #ddd;
        text-align: left;
        padding: 8px;
        }

        th {
        background-color: #f2f2f2;
        color: #333;
        }
    </style>
</head>
<body>
    @include('header')
    <button onClick="window.location.href='{{ route('products.create') }}'">test</button>
    <table>
        <thead>
            <tr>
                <th colspan="1">Id</th>
                <th colspan="1">Nom</th>
                <th colspan="1">Description</th>
                <th colspan="1">Prix</th>
                <th colspan="1">Référence</th>
                <th colspan="1">Visibilité</th>
                <th colspan="1">Statut</th>
                <th colspan="1">Catégorie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td onClick="window.location.href='{{ route('products.edit', $product->id) }}'">{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->reference }}</td>
                @if($product->visible == 1) 
                    <td>Visible</td>
                @else
                    <td>Masqué</td>
                @endif
                @if($product->state == 1) 
                    <td>Normal</td>
                @else
                    <td>En solde</td>
                @endif
                @if($product->category_id == 1) 
                    <td>Homme</td>
                @elseif($product->category_id == 2)
                    <td>Femme</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>