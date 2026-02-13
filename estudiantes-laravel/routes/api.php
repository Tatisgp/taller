<?php

// ============================================================
// RUTAS API
// Este archivo YA EXISTE en Laravel, solo reemplaza su contenido.
// Ubicación: routes/api.php
// ============================================================

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteControlador;

/*
|--------------------------------------------------------------------------
| Rutas API — Estudiantes
|--------------------------------------------------------------------------
|
| GET    /api/estudiantes          → index   (listar todos)
| POST   /api/estudiantes          → store   (crear)
| GET    /api/estudiantes/{id}     → show    (ver uno)
| PUT    /api/estudiantes/{id}     → update  (actualizar completo)
| PATCH  /api/estudiantes/{id}     → update  (actualizar parcial)
| DELETE /api/estudiantes/{id}     → destroy (eliminar)
|
*/

Route::apiResource('estudiantes', EstudianteControlador::class);
