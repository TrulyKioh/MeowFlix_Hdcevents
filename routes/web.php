<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;

Route::get('/', [PaginasController::class, 'login']);
Route::get('/tela_inicial', [PaginasController::class, 'tela_inicial']);
Route::get('/criacao_de_filme', [PaginasController::class, 'criacao_de_filme']);
Route::get('/editar_filme', [PaginasController::class, 'editar_filme',]);
