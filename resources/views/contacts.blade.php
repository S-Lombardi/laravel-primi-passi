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

        <div class="container mt-4">
            <h1>Pagina Contatti</h1>
                
            <div class= "text-white-50">
    
                <div>
                    Nome:  {{ $nome }} 
                </div>
                <div>
                    Cognome:  {{ $cognome }}
                </div>
                <div>
                    Cellulare:  {{ $telefono }}
                </div>
            </div>

        </div>
    
    </body>
</html>