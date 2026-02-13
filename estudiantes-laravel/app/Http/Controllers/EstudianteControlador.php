<?php

// ============================================================
// CONTROLADOR
// Comando para generarlo:
// php artisan make:controller EstudianteControlador
// Ubicación: app/Http/Controllers/EstudianteControlador.php
// ============================================================

namespace App\Http\Controllers;

use App\Http\Requests\EstudiantesRequest;
use App\Repositories\Services\EstudianteServicio;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EstudianteControlador extends Controller
{
    protected $estudianteServicio;

    public function __construct(EstudianteServicio $estudianteServicio)
    {
        $this->estudianteServicio = $estudianteServicio;
    }

    /**
     * GET /api/estudiantes
     */
    public function index()
    {
        $estudiantes = $this->estudianteServicio->obtenerTodos();

        return response()->json([
            'mensaje' => 'Estudiantes obtenidos correctamente.',
            'datos'   => $estudiantes,
        ], 200);
    }

    /**
     * GET /api/estudiantes/{id}
     */
    public function show($id)
    {
        try {
            $estudiante = $this->estudianteServicio->obtenerPorId($id);

            return response()->json([
                'mensaje' => 'Estudiante encontrado.',
                'datos'   => $estudiante,
            ], 200);

        } catch (ModelNotFoundException) {
            return response()->json([
                'mensaje' => 'El estudiante con ID ' . $id . ' no fue encontrado.',
            ], 404);
        }
    }

    /**
     * POST /api/estudiantes
     */
    public function store(EstudiantesRequest $request)
    {
        $estudiante = $this->estudianteServicio->crear($request->validated());

        return response()->json([
            'mensaje' => 'Estudiante creado correctamente.',
            'datos'   => $estudiante,
        ], 201);
    }

    /**
     * PUT|PATCH /api/estudiantes/{id}
     */
    public function update(EstudiantesRequest $request, $id)
    {
        try {
            $estudiante = $this->estudianteServicio->actualizar($id, $request->validated());

            return response()->json([
                'mensaje' => 'Estudiante actualizado correctamente.',
                'datos'   => $estudiante,
            ], 200);

        } catch (ModelNotFoundException) {
            return response()->json([
                'mensaje' => 'El estudiante con ID ' . $id . ' no fue encontrado.',
            ], 404);
        }
    }

    /**
     * DELETE /api/estudiantes/{id}
     */
    public function destroy($id)
    {
        try {
            $this->estudianteServicio->eliminar($id);

            return response()->json([
                'mensaje' => 'Estudiante eliminado correctamente.',
            ], 200);

        } catch (ModelNotFoundException) {
            return response()->json([
                'mensaje' => 'El estudiante con ID ' . $id . ' no fue encontrado.',
            ], 404);
        }
    }
}
