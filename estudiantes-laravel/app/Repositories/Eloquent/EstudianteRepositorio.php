<?php

namespace App\Repositories\Eloquent;

use App\Models\Estudiante;
use App\Repositories\Interfaces\EstudianteInterface;

class EstudianteRepositorio implements EstudianteInterface
{
    public function obtenerTodos()
    {
        return Estudiante::all();
    }

    public function obtenerPorId($id)
    {
        return Estudiante::findOrFail($id);
    }

    public function crear(array $datos)
    {
        return Estudiante::create($datos);
    }

    public function actualizar($id, array $datos)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($datos);
        return $estudiante;
    }

    public function eliminar($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return $estudiante->delete();
    }
}
