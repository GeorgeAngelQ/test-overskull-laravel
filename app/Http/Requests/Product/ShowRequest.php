<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\ValidRequest;

class ShowRequest extends ValidRequest
{

    public function rules(): array
    {
        return [
            'id' => 'required|integer|exists:products,id'
        ];
    }
    public function messages(): array
    {
        return [
            'id.required' => 'El ID del producto es obligatorio.',
            'id.integer' => 'El ID del producto debe ser un número entero.',
            'id.exists' => 'El producto con el ID especificado no existe.'
        ];
    }
}
