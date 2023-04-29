<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/welcome.css">

    <!-- Styles -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: Figtree;
        }

        main {
            width: 70%;
            margin: auto;
        }

        .nb-result {
            text-align: right;
        }

        .wrapper {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
        }

        .card {
            width: 30%;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            text-align: center;
            cursor: pointer;
        }

        .card:hover {
            animation: test 0.25s forwards;
        }

        @keyframes test {
            0% {
                box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
            }

            100% {
                box-shadow: #66EB9A 6px 6px 2.6px;
            }
        }

        img {
            width: 100%;
            border-radius: 20px 20px 0 0;
        }

        h4 {
            padding-top: 10px;
        }

        p {
            padding: 10px;
        }
    </style>

</head>

<body>
    @include('header')
    <main>
        <p class="nb-result">{{ $products->count() }} résultats</p>
        <div class="wrapper">
            <!-- <img src="{{ asset('image//femmes/Wxl-_19PE_juin18_3490.jpg') }}" alt="Example Image"> -->
            @foreach ($products as $product)
            <div class="card" onClick="window.location.href='{{ route('products.show', $product->id) }}'">
                <img src="../image/femmes/Wxl-_19PE_juin18_3490.jpg" alt="">
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->price }}€</p>
            </div>
            @endforeach
        </div>
    </main>
    @include('footer')
</body>

</html>