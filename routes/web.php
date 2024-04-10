<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/", [ClienteController::class, "index"]);


Route::post("/adicionar", [ClienteController::class, "adicionar"]);
Route::get("/editar/{id}", [ClienteController::class, "editar"]);
Route::post("/atualizar/{id}", [ClienteController::class, "atualizar"]);
Route::get("/excluir/{id}", [ClienteController::class, "excluir"]);