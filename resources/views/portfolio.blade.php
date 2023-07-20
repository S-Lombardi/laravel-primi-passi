<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Primi passi con Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('style.css')}}">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            img {
                width: 400px
            }
        </style>
    </head>
    <body >

        <h1>Portfolio</h1>

        <div class="container">
            <div class="row flex-column">
                <div class="col-12 d-flex flex-column align-items-center">

                    <div class="card">
                        
                        <img src="{{asset($img_portfolio_1)}}" alt="">
    
                        
                    </div>
    
                    <div class="card my-4">
    
                        <img src="{{asset($img_portfolio_3)}}" alt="">
                        
                    </div>
    
                    <div class="card mb-5">
    
                        <img src="{{asset($img_portfolio_2)}}" alt="">
                        
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>