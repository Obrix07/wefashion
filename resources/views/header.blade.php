<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            height: 70px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding-inline: 15%;
            box-shadow: 0 2px 2px -2px rgba(0, 0, 0, .2);
        }

        header h2 {
            color: #66EB9A;
        }

        span {
            color: #235235;
        }

        header a {
            padding-inline: 20px;
            text-decoration: none;
            color: black;
        }

        header a {
            position: relative;
        }

        header a::after {
            content: '';
            transform-origin: 0 0;
            transform: scaleX(0);
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: .4em;
            background: #66EB9A;
            z-index: -1;
            opacity: 0.8;
            transition: transform .3s;
        }

        a:hover::after {
            transform: scaleX(1);
        }

        #burger-icon {
            display: none;
        }

        @media screen and (max-width: 900px) {

            header nav a {
                display: none;
            }

            #burger-icon {
                display: block;
                font-size: 25px;
                color: black;
                padding: 15px;
                cursor: pointer;
            }

            header nav.active a {
                position: relative;
                top: 60px;
                display: flex;
                flex-direction: row;
                text-align: center;
                padding: 10px;
                background-color: white;
                border-bottom: 1px solid #ccc;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="{{ route('products.index') }}">
            <h2>
                <span>WE</span>FASHION
            </h2>
        </a>
        <nav>
            <a href="{{ route('state.filter', ['state' => '1']) }}">SOLDES</a>
            <a href="{{ route('category.filter', ['category_id' => '2']) }}">FEMME</a>
            <a href="{{ route('category.filter', ['category_id' => '1']) }}">HOMME</a>
            <a href="#" id="burger-icon">&#9776;</a>
        </nav>
    </header>
    <script>
        document.getElementById("burger-icon").addEventListener("click", function() {
            document.querySelector("header nav").classList.toggle("active");
        });
    </script>
</body>

</html>