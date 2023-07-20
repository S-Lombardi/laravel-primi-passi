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

            img {
                width: 50%
            }

        </style>
    </head>
    <body >
        
        <header class="d-flex justify-content-between p-4 mb-5">
            <h1 class="text-dark-emphasis">
                Portfolio
            </h1>

            <h5 class="align-self-center">
                S.Lombardi
            </h5>
        </header>


        <div class="container">
            <div class="row flex-column">
                <div class="col">

                    <div class="d-flex justify-content-center">
                        
                        <img src="{{asset($img_portfolio_1)}}" alt="">
                        
                    </div>
    
                    <div class="d-flex justify-content-center my-4">
    
                        <img src="{{asset($img_portfolio_3)}}" alt="">
                        
                    </div>
    
                    <div class="d-flex justify-content-center mb-5">
    
                        <img src="{{asset($img_portfolio_2)}}" alt="">
                        
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>