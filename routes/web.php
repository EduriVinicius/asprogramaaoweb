<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\DonoController;
use App\Models\Carro;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('carros', [CarroController::class, 'index']);
Route::get('carros/create', [CarroController::class, 'create']);
Route::post('carros', [CarroController::class, 'store']);
Route::get('carros/{id}/edit', [CarroController::class, 'edit']);
Route::put('carros/{id}', [CarroController::class, 'update']);
Route::delete('carros/{id}', [CarroController::class, 'destroy']);

Route::get('donos', [DonoController::class, 'index']);
Route::get('donos/create', [DonoController::class, 'create']);
Route::post('donos', [DonoController::class, 'store']);
Route::get('donos/{id}/edit', [DonoController::class, 'edit']);
Route::put('donos/{id}', [DonoController::class, 'update']);
Route::delete('donos/{id}', [DonoController::class, 'destroy']);
