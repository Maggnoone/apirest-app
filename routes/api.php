<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\NotasController;
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


Route::get('/alumnos', [AlumnosController::class, 'showAll']);
Route::get('/notas', [NotasController::class, 'showNotes']);
Route::get('/notas/{id}', [NotasController::class, 'show']);
Route::post('/notas', [NotasController::class, 'create']);
Route::delete('/notas/{id}', [NotasController::class, 'delete']);
Route::put('/notas/{id}', [NotasController::class, 'edit']);







