<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primi passi con Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: rgb(21, 25, 29);
            }
        </style>

    </head>
    <body >
            
        <header class="d-flex align-items-center justify-content-between p-4 mb-5">

            <h4 class="text-dark-emphasis">
                S.Lombardi
            </h4>

            <div>

                <a class= "text-white-50 me-4" href="/contacts"> Contatti </a>
    
                <a  class= "text-white-50" href="/portfolio"> Portfolio </a>
                
            </div>
        </header>

        <div class="container">

            <div class="d-flex justify-content-center">
                <h1>Hello world</h1>

            </div>

        </div>
        
    </body>
</html>
