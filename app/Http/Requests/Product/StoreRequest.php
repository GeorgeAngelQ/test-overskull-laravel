<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\ValidRequest;

class StoreRequest extends ValidRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:20',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|decimal:0,2|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|integer|exists:categories,id'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del producto es obligatorio.',
            'name.string' => 'El nombre del producto debe ser una cadena de texto.',
            'name.max' => 'El nombre del producto no debe exceder los 20 caracteres.',
            'description.string' => 'La descripción del producto debe ser una cadena de texto.',
            'description.max' => 'La descripción del producto no debe exceder los 255 caracteres.',
            'price.required' => 'El precio del producto es obligatorio.',
            'price.numeric' => 'El precio del producto debe ser un número.',
            'price.decimal' => 'El precio del producto debe tener hasta 2 decimales.',
            'price.min' => 'El precio del producto no puede ser negativo.',
            'stock.required' => 'El stock del producto es obligatorio.',
            'stock.integer' => 'El stock del producto debe ser un número entero.',
            'stock.min' => 'El stock del producto no puede ser negativo.',
            'category_id.required' => 'La categoría del producto es obligatoria.',
            'category_id.integer' => 'La categoría del producto debe ser un número entero.',
            'category_id.exists' => 'La categoría seleccionada no existe.'
        ];
    }
}
