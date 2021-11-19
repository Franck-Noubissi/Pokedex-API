<?php

use App\Http\Controllers\PokemeonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route pour afficher pokemon.
Route::get('/pokemon', [PokemeonController::class, 'index'])->middleware('jwt');

//Route pour afficher  un pokemon selon son id.
Route::get('/pokemon/{id}', [PokemeonController::class, 'show'])->middleware('jwt');

//Route pour afficher le nombre de pokemon demandé.
Route::get('/pagination/{endpoint}', [PokemeonController::class, 'pagination'])->middleware('jwt');