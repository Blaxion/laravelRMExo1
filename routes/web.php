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

Route::get('/farhad', function () {
    $nom = "<h2>khibaziev</h2>";
    return view('nom');
});

Route::get('/welcome/{chiffre}', function ($chiffre) {
    
    return view('welcome' , compact('chiffre'));
}); 

Route::get('/welcome/{chiffre1}/{chiffre2}', function ($chiffre1 ,$chiffre2) {
    
    return view('new' , compact('chiffre1',"chiffre2"));
}); 


