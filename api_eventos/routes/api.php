<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
//use App\Http\Controllers\TicketsController;
//use App\Http\Controllers\ClientesController;

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

Route::get('/eventos',[EventosController::class,'index']);
//Route::get('/eventos/{evento}',[EventosController::class,'show']);
Route::post('/eventos',[EventosController::class,'store']);
Route::put('/eventos/{evento}',[EventosController::class,'update']);
Route::delete('/eventos/{evento}',[EventosController::class,'destroy']);

//Route::apiResource('/eventos',EventosController::class);

//Route::get('/tickets',[TicketsController::class,'index']);
//Route::get('/clientes',[ClientesController::class,'index']);
