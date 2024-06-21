<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

// Definir rutas de la API
Route::apiResource('personas', PersonaController::class);