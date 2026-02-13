<?php
namespace App\Repositories\Services;

use App\Repositories\Interfaces\EstudianteInterface;

class EstudianteServicio
{
    protected $estudianteRepositorio;

    public function __construct(EstudianteInterface $estudianteRepositorio)
    {
        $this->estudianteRepositorio = $estudianteRepositorio;
    }

    public function obtenerTodos()
    {
        return $this->estudianteRepositorio->obtenerTodos();
    }

    public function obtenerPorId($id)
    {
        return $this->estudianteRepositorio->obtenerPorId($id);
    }

    public function crear(array $datos)
    {
        return $this->estudianteRepositorio->crear($datos);
    }

    public function actualizar($id, array $datos)
    {
        return $this->estudianteRepositorio->actualizar($id, $datos);
    }

    public function eliminar($id)
    {
        return $this->estudianteRepositorio->eliminar($id);
    }
}
