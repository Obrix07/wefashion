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

        .add {
            display: block;
            width: 50px;
            height: 50px;
            margin: auto;
            margin-top: 30px;
            color: #66EB9A;
            background: transparent;
            border: none;
            font-size: 2rem;
            border-radius: 50px;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            text-align: center;
            cursor: pointer;
        }

        .add:hover {
            animation: hover 0.25s forwards;
        }

        @keyframes hover {
            0% {
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }

            100% {
                box-shadow: #66EB9A 3px 3px 2.6px;
            }
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

        td {
            cursor: pointer;
        }
        tbody tr:hover {
            border: 2px solid black;
        }

        .delete-button{
            background: transparent;
            border: none;
            cursor: pointer;
        }
        .delete-button:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    @include('header-admin')
    <button class="add" onClick="window.location.href='{{ route('products.create') }}'">+</button>
    <table>
        <thead>
            <tr>
                <th colspan="1">Id</th>
                <th colspan="1">Nom</th>
                <th colspan="1">Description</th>
                <th colspan="1">Prix</th>
                <th>Actions</th>
                <!-- <th colspan="1">Référence</th>
                <th colspan="1">Visibilité</th>
                <th colspan="1">Statut</th>
                <th colspan="1">Catégorie</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr onClick="window.location.href='{{ route('products.edit', $product->id) }}'">
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">&#10060;</button>
                    </form>
                </td>
                <!-- <td>{{ $product->reference }}</td>
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
                @endif -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>