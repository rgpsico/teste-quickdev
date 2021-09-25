<?php

use App\Http\Controllers\Api\moviesController;
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

Route::get('/teste',[moviesController::class,"teste"]);
Route::get('/',[moviesController::class,"index"]);
Route::get('/movie/releasedate/movies',[moviesController::class,"releaseDate"]);
Route::get('/movie/popular/{popular}',[moviesController::class,"popularmMovies"]);
Route::get('/movie/genri/{id}',[moviesController::class,"byGenre"]);
Route::get('/movie/rate/movies/{rate}',[moviesController::class,"rating"]);
Route::get('/movie/{title}',[moviesController::class,"byTitle"]);
Route::get('/movie/{id}/show',[moviesController::class,"show"]);

