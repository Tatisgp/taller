<?php

namespace App\Repositories\Interfaces;

interface EstudianteInterface
{
    public function obtenerTodos();
    public function obtenerPorId($id);
    public function crear(array $datos);
    public function actualizar($id, array $datos);
    public function eliminar($id);
}
