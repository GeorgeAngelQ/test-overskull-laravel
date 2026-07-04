<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\ValidRequest;

class UpdateRequest extends ValidRequest
{

    public function rules(): array
    {
        return [
            'id' => 'required|integer|exists:products,id',
            'name' => 'required|string|max:20',
            'description' => 'nullable|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'id.required' => 'El ID del producto es obligatorio.',
            'id.integer' => 'El ID del producto debe ser un número entero.',
            'id.exists' => 'El producto con el ID especificado no existe.',
            'name.required' => 'El nombre del producto es obligatorio.',
            'name.string' => 'El nombre del producto debe ser una cadena de texto.',
            'name.max' => 'El nombre del producto no debe exceder los 20 caracteres.',
            'description.string' => 'La descripción del producto debe ser una cadena de texto.',
            'description.max' => 'La descripción del producto no debe exceder los 255 caracteres.',
        ];
    }
}
