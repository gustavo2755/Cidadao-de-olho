<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\RedesSociaiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * This is where i call my controllers , here you can see that each of these urls is for one function
 * in "/gastos" you can check the 5 deputy who use more spend for month
 * in "/redes" you can check the rank of the social medias
 */
Route::get('/gastos', [GastoController::class, 'organizadeput']);
Route::get('/redes', [RedesSociaiController::class, 'organizaredes']);
