<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tesztek', [TesztController::class, 'index']);
Route::get('/tesztek/kategoria/{id}', [KategoriaController::class, 'index']);
Route::get('/kategoriak', [KategoriaController::class, 'index']);
Route::post('/teszt', [TesztController::class, 'postTeszt']);