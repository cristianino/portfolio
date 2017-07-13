<?php

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
//Para crear un control se usa el comando php artisan make:controller nombreNuevoControl
//Rutas de get. primer parametro se define la ruta get y en el efund una funcion a ejecutar. En este caso el cóigo a ejecutar es la clase PagesController y el metodo home y about
Route::get('/', 'PagesController@home');
