<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rotta per la Home Page
Route::get('/', function () {
    return view('home');
});


//Rotta per la pagina Contacts
Route::get('/contacts', function () {

    //array associativo contenente i dati che voglio visualizzare 
    $data =  [
        'nome' => 'Silvia',
        'cognome' => 'Lombardi',
        'telefono' => '+39 333 3333333'
    ];

    return view('contacts', $data);
});

//Rotta per la pagina Portfolio
Route::get('/portfolio', function () {

    //array associativo contenente i dati che voglio visualizzare 
    $data =  [
        'img_portfolio_1' => '/img/gatto_1.JPG' 
    ];

    return view('portfolio', $data);
});