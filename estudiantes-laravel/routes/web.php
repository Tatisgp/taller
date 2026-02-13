<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteControlador;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para estudiantes
Route::get('/estudiantes', [EstudianteControlador::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/{estudiante}', [EstudianteControlador::class, 'show'])->name('estudiantes.show');
Route::get('/estudiantes/crear', [EstudianteControlador::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes', [EstudianteControlador::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/{estudiante}/editar', [EstudianteControlador::class, 'edit'])->name('estudiantes.edit');
Route::put('/estudiantes/{estudiante}', [EstudianteControlador::class, 'update'])->name('estudiantes.update');
Route::delete('/estudiantes/{estudiante}', [EstudianteControlador::class, 'destroy'])->name('estudiantes.destroy');
