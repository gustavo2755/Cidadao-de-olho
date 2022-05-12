<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ControladorApi;
use App\Models\Deputado;

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

/**
     * This is where i testing my functions , using this routes to check if there is anything wrong,before i 
     * finish this project this is gonna be at the rith place.
     */
Route::get('/', function () {
    $response=http::get(url:'http://dadosabertos.almg.gov.br/ws/deputados/lista_telefonica?formato=json');
    dd($response);
});
Route::get('/teste', [ControladorApi::class, 'organizadeput']);
Route::get('/testeR', [ControladorApi::class, 'organizaredes']);

