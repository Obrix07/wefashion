<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: Figtree;
        }

        main {
            width: 50%;
            margin: auto;
        }

        .card-content {
            margin-top: 30px;
            display: flex;
            flex-direction: row;
            box-shadow: #66EB9A 6px 6px 2.6px;
            border-radius: 100px;
        }

        img {
            width: 50%;
            border-radius: 100px 100px 0 100px;
        }

        .card-detail {
            width: 100%;
            margin-inline: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .card-detail h4,
        .card-detail p,
        .card-detail select {
            margin-bottom: 15px;
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

        @media screen and (max-width: 1200px) {
            main {
                width: 70%;
                margin: auto;
            }
        }

        @media screen and (max-width: 1050px) {

            .card-content {
                width: 60%;
                margin: 30px auto;
                flex-direction: column;
                align-items: center;
                padding-bottom: 10px;
            }

            img {
                width: 100%;
                margin: auto;
                border-radius: 100px 100px 100px 100px;
            }

            .card-detail {
                width: 100%;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .card-detail h4,
            .card-detail p,
            .card-detail select {
                margin-bottom: 5px;
            }

            button {
                width: 130px;
                height: 40px;
                line-height: 40px;
            }
        }

        @media screen and (max-width: 500px) {
            main {
                width: 90%;
            }

            .card-content {
                font-size: 0.8em;
            }

            button {
                width: 60px;
                height: 25px;
                line-height: 25px;
            }
        }
    </style>
</head>

<body>
    @include('header')
    <main>
        <div class="card">
            <div class="card-content">
                <img src="../image/femmes/Wxl-_19PE_juin18_3490.jpg" alt="">
                <div class="card-detail">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p>{{ $product->price }} €</p>
                    @if($product->category_id == 1)
                    <p>Homme</p>
                    @elseif($product->category_id == 2)
                    <p>Femme</p>
                    @endif
                    <select name="" id="">
                        <option value="">S</option>
                        <option value="">M</option>
                        <option value="">XL</option>
                    </select>
                    <button>Acheter</button>
                </div>
            </div>
        </div>
    </main>
    @include('footer')
</body>

</html>