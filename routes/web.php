<?php

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_cidade', [CidadeController::class, "formCriarCidade"]);
Route::get('/lista_cidades', [CidadeController::class, "listar"]);
Route::post('/criar_cidade', [CidadeController::class, 'criar']);
Route::delete("/deletar_cidade/{id}", [CidadeController::class, 'deletar']);



Route::get('/cadastro_estado', [EstadoController::class, "formCriarEstado"]);
Route::get('/listar_estados', [EstadoController::class, "listar"]);
Route::post('/criar_estado', [EstadoController::class, 'criar']);
Route::delete("/deletar_estado/{id}", [EstadoController::class, 'deletar']);




Route::get('/', [AppController::class, 'inicial']);