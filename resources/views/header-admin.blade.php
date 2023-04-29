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
                box-shadow: 0 2px 2px -2px rgba(0,0,0,.2);
                }

            header h2 {
                color: #66EB9A;
            }
            span {
                color: #235235;
            }

            .filter {
                padding-inline: 20px;
                text-decoration: none;
                color: black;
            }
            .filter {
                position: relative;
            }
            .filter::after {
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
            .filter:hover::after {
                transform: scaleX(1);
            }

            svg {
                color: black;
                margin-left: 30px;
            }
            svg:hover {
                color: #66EB9A;
            }
    </style>
</head>
<body>
    <header>
            <h2>
                <span>WE</span>FASHION
            </h2>
            <nav>
                <a class="filter" href="#">PRODUITS</a>
                <a class="filter" href="#">CATÉGORIES</a>
                <a href="{{ route('products.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/> <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/> </svg></a>
            </nav>
    </header>
</body>
</html>