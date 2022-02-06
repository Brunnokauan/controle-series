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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', 'App\Http\Controllers\SeriesController@index')->name('listar_series');
Route::get('/series/criar', 'App\Http\Controllers\SeriesController@create')->name('form_criar_serie')/*->middleware('autenticador')*/;
Route::post('/series/criar', 'App\Http\Controllers\SeriesController@store')/*->middleware('autenticador')*/; 
Route::delete('/series/{id}', 'App\Http\Controllers\SeriesController@destroy')/*->middleware('autenticador')*/;
Route::post('/series/{id}/editaNome', 'App\Http\Controllers\SeriesController@editaNome')/*->middleware('autenticador')*/;
Route::get('/series/{serieId}/temporadas', 'App\Http\Controllers\TemporadasController@index');
Route::get('/temporadas/{temporada}/episodios', 'App\Http\Controllers\EpisodiosController@index');
Route::post('/temporadas/{temporada}/episodios/assistir', 'App\Http\Controllers\EpisodiosController@assistir')/*->middleware('autenticador')*/;
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/entrar', 'App\Http\Controllers\EntrarController@index');
//Route::post('/entrar', 'App\Http\Controllers\EntrarController@entrar');

//Route::get('/registrar', 'App\Http\Controllers\RegistroController@create');
//Route::post('/registrar', 'App\Http\Controllers\RegistroController@store');

/*Route::get('/sair', function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect ('/entrar');
});*/




