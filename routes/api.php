<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\TokenController;

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

Route::post('loginApi', [TokenController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/recetas', 'App\Http\Controllers\RecetasController@index');
    Route::post('/recetas', 'App\Http\Controllers\RecetasController@store');
    Route::put('/recetas/{id}', 'App\Http\Controllers\RecetasController@update');
    Route::delete('/recetas/{id}', 'App\Http\Controllers\RecetasController@destroy');
});

