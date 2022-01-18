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

//HOMEPAGE
//Qua va il nome del file in VIEW è come se avesse questa estensione:.blade.php
Route::get('/', function () {
    return view('home', [    
        'title'=> 'Laravel',
        'subtitle'=> 'is a cool framework', //Passiamo delle chiavi di array come variabili nel file blade invocato qua
    ]); 
});
