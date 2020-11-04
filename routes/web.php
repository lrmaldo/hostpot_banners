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

Route::POST('/post_hotspot','InicioController@host');

/* ruta con filtro de zona  */

Route::POST('/hotspot_zona/{id}','InicioController@hotspot_zona');
Route::get('/login_hostpot','Iniciocontroller@loginHost');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
/* Route::get('/','InicioController@Inicio');
Route::get('/user','InicioController@user');

Route::get('/ip_add','InicioController@ip_add');


Route::get('/home', 'HomeController@index')->name('home'); */

Route::resource('Carrusel','CarruselController');
Route::resource('usuario','UserController');
Route::resource('banners','BannersController');
Route::resource('zonas','ZonasController');



Route::get('politica',function(){
    return view('politicas');
});



Route::get('preview',function(){
    $carruseles = App\Carrusel::all();
    
    return view('preview',compact('carruseles'));
});
