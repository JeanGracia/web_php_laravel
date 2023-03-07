<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route::get    | Consulta
| Route::post   | Guarda
| Route::delete | Elimina
| Route::put    | Actualiza
|
*/

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('contactame', ['as' => 'contactos', function () {
    return view('contactos');
}]);

Route::get('saludos/{nombre?}', ['as' => 'saludos', function($nombre = "Invitado") {
    return view('saludo', compact('nombre'));
}])->where('nombre', "[A-Za-z]+");