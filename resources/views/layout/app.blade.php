<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primo Esercizio Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            header, footer{
                height: 50px;
                background-color: lightblue;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .full-height {
                height: calc(100% - 100px);
            }

            .content{
                width: 75%;
                margin: auto;
                text-align: center;
                overflow-y: hidden;
            }

            .content p{
                padding-top: 60px;
                line-height: 30px;
            }
            .content h1{
                padding-top: 50px;
            }

            a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
    </head>
    <body>
        <header class="flex-center">
            <nav class="flex-center">
                <a href="/">Home</a>
                <a href="about">About</a>
            </nav>
        </header>
        
        @yield('content')        

        <footer class="flex-center">
            <p>Primo progetto che utilizza Laravel</p>
        </footer>
    </body>
</html>
