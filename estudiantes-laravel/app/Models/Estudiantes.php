<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $table = 'estudiantes';

protected $fillable = [
    'nombre_completo',
    'email',
    'celular',
    'nivel_academico',
    'programa',
    'fecha_matricula',
];

protected $casts = [
    'fecha_matricula' => 'date',
];

}
