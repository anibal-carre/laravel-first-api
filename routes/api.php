<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("usuarios", [UsuarioController::class, "index"]);
Route::get("usuarios/{id}", [UsuarioController::class, "show"]);
