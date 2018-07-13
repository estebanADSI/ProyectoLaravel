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

Route::get('/', function () {
    return view('welcome');
});


//------------------ Mis Rutas------------------------
Route::get('/mi_ruta', function($name){
    return 'Hola mundo soy '.$name;
});

Route::get('/name/{name}', function($name){
    return 'Hola  '.$name;
});

Route::get('/names/{name}', function($name){
    return 'Hola  '.$name;
});