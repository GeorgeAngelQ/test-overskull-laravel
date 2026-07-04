<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\ValidRequest;

class DestroyRequest extends ValidRequest
{

    public function rules(): array
    {
        return [
            'id' => 'required|integer|exists:categories,id'
        ];
    }
    public function messages(): array
    {
        return [
            'id.required' => 'El ID de la categoría es obligatorio.',
            'id.integer' => 'El ID de la categoría debe ser un número entero.',
            'id.exists' => 'La categoría con el ID especificado no existe.'
        ];
    }
}
