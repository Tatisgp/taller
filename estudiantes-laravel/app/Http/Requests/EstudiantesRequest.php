<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudiantesRequest extends FormRequest
{
    public function authorize(): bool
{
    return true;
}

public function rules(): array
{
    $esActualizacion = $this->isMethod('put') || $this->isMethod('patch');

    return [
        'nombre_completo' => $esActualizacion
                            ? 'sometimes|string|max:255'
                            : 'required|string|max:255',

        'email' => $esActualizacion
                ? 'sometimes|email|unique:estudiantes,email,' . $this->route('estudiante')
                : 'required|email|unique:estudiantes,email',

        'celular' => 'nullable|string|max:20',

        'nivel_academico' => $esActualizacion
                            ? 'sometimes|string|max:100'
                            : 'required|string|max:100',

        'programa' => $esActualizacion
                        ? 'sometimes|string|max:150'
                        : 'required|string|max:150',

        'fecha_matricula' => $esActualizacion
                            ? 'sometimes|date'
                            : 'required|date',
    ];
}

public function messages(): array
{
    return [
        'nombre_completo.required' => 'El nombre del estudiante es obligatorio.',
        'nombre_completo.string'   => 'El nombre debe ser texto.',
        'nombre_completo.max'      => 'El nombre no puede tener más de 255 caracteres.',

        'email.required'           => 'El correo electrónico es obligatorio.',
        'email.email'              => 'El correo electrónico no tiene un formato válido.',
        'email.unique'             => 'Este correo electrónico ya está registrado.',

        'celular.string'           => 'El celular debe ser texto.',
        'celular.max'              => 'El celular no puede tener más de 20 caracteres.',

        'nivel_academico.required' => 'El nivel académico es obligatorio.',
        'nivel_academico.string'   => 'El nivel académico debe ser texto.',
        'nivel_academico.max'      => 'El nivel académico no puede tener más de 100 caracteres.',

        'programa.required'        => 'El programa es obligatorio.',
        'programa.string'          => 'El programa debe ser texto.',
        'programa.max'             => 'El programa no puede tener más de 150 caracteres.',

        'fecha_matricula.required' => 'La fecha de matrícula es obligatoria.',
        'fecha_matricula.date'     => 'La fecha de matrícula no tiene un formato válido (YYYY-MM-DD).',
    ];
}

}
