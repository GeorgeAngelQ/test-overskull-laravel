<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\ValidRequest;

class UpdateRequest extends ValidRequest
{

    public function rules(): array
    {
        return [
            'id' => 'required|integer|exists:categories,id',
            'name' => 'required|string|max:50',
            'description' => 'nullable|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'id.required' => 'El ID de la categoría es obligatorio.',
            'id.integer' => 'El ID de la categoría debe ser un número entero.',
            'id.exists' => 'La categoría con el ID especificado no existe.',
            'name.required' => 'El nombre de la categoría es obligatorio.',
            'name.string' => 'El nombre de la categoría debe ser una cadena de texto.',
            'name.max' => 'El nombre de la categoría no debe exceder los 20 caracteres.',
            'description.string' => 'La descripción de la categoría debe ser una cadena de texto.',
            'description.max' => 'La descripción de la categoría no debe exceder los 255 caracteres.',
        ];
    }
}
