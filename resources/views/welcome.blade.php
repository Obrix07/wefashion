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

        footer {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 4px 0px inset;
            /* background: #66EB9A; */
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 30px;
            padding-block: 30px;
        }

        .footer-head {
            text-align: center;
        }

        .footer-alignment {
            width: 70%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            text-align: center;
            width: 20%;
        }
    </style>

</head>

<body>
    @include('header')
    <main>
        <p>4 résultats</p>
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
    <footer>
        <div class="footer-head">
            <h2>WeFashion</h2>
            <a href="#">Inscrivez vous à la newsletter</a>
        </div>
        <div class="footer-alignment">
            <div class="footer-content">
                <h4>Informations</h4>
                <a href="#">Mentions légales</a>
                <a href="#">Presse</a>
                <a href="#">Fabrication</a>
            </div>
            <div class="footer-content">
                <h4>Services client</h4>
                <a href="#">Contactez-nous</a>
                <a href="#">Livraison et retour</a>
                <a href="#">Conditions de vente</a>
            </div>
            <div class="footer-content">
                <h4>Réseaux sociaux</h4>
                <a href="#"><i>F</i></a>
                <a href="#"><i>I</i></a>
            </div>
        </div>
    </footer>
</body>

</html>