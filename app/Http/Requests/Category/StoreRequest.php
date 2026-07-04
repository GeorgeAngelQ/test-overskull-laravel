<?php

namespace App\Http\Requests\Category;

use App\Http\Requests\ValidRequest;

class StoreRequest extends ValidRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre de la categoría es obligatorio.',
            'name.string' => 'El nombre de la categoría debe ser una cadena de texto.',
            'name.max' => 'El nombre de la categoría no debe exceder los 20 caracteres.',
            'description.string' => 'La descripción de la categoría debe ser una cadena de texto.',
            'description.max' => 'La descripción de la categoría no debe exceder los 255 caracteres.',
        ];
    }
}
