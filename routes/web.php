<?php

use App\Http\Controllers\MoviesController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [MoviesController::class, 'index']);
Route::post('/', [MoviesController::class, 'store']);
Route::get('/create', [MoviesController::class, 'create']);
Route::get('/{movie}/edit', [MoviesController::class, 'edit']);
Route::put('/{movie}', [MoviesController::class, 'update']);
Route::delete('/{movie}', [MoviesController::class, 'destroy']);
