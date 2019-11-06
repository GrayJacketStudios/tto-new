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
Route::group(['middleware' => ['auth']], function() {

    Route::get('/', function () {
        return view('pages/inicio');
    });

    Route::get('/home', function () {
        return view('pages/inicio');
    });

    Route::get('/clientes/particulares',function(){
        return view('pages/clientes/particulares');
    });
    Route::get('/clientes/empresas',function(){
        return view('pages/clientes/empresas');
    });
});
Auth::routes();
