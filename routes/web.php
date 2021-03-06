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

Route::POST('/hotspot_zona_only_v/{id}','InicioController@hotspot_zona_video');/* video */
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
    $id_zona = 0;
    return view('preview',compact('carruseles','id_zona'));
});

Route::get('preview/{id}',function($id){
    $carruseles = App\Carrusel::where('zona_id','=',$id)->where('activo','=',1)->get();
    $id_zona = $id;
    return view('zona_preview',compact('carruseles','id_zona'));
});

/* solo video preview */

Route::get('previewv/{id}',function($id){
    $carruseles = App\Carrusel::where('zona_id','=',$id)->where('activo','=',1)->get();
    $id_zona = $id;
    return view('zona_previewv',compact('carruseles','id_zona'));
});

Route::get('alogin/{id}',function($id){
    $carruseles = App\Carrusel::where('zona_id','=',$id)->where('activo','=',1)->get();
    
    return view('hostpot.alogin',compact('carruseles'));
});

Route::get('alogin',function(){
    $carruseles = App\Carrusel::all();
    
    return view('hostpot.alogin',compact('carruseles'));
});

Route::get('aloginImagen/{id}',function($id){
    $carruseles = App\Carrusel::where('zona_id','=',$id)->where('activo','=',1)->get();
    $id_zona = $id;
    return view('hostpot.aloginConImagen',compact('carruseles','id_zona'));
});