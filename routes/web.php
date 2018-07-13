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

Route::get('/usuario/{names}', function($names){
    return 'Bienvendido '.$names;
});

//--------------------------------------------------------

Route::get('Ruta2', function(){
    return 'Esta es la ruta dos';
});

Route::get('prueba', 'pruebaController@prueba');

//--------------------------------------------------

Route::resource('trainers', 'TrainerController');