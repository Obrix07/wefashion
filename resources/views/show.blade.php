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

        .card-detail h4, .card-detail p, .card-detail select {
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
</div>
</body>
</html>