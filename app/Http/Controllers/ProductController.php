<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\ApiResponse;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Requests\Product\ShowRequest;
use App\Http\Requests\Product\DestroyRequest;

class ProductController extends Controller
{
    use ApiResponse;

        public function index(){
        $products = Product::all();
        return $this->successResponse('Productos obtenidos con éxito', $products);
    }

    public function show(int $id){
        $product = Product::find($id);
        return $this->successResponse('Producto obtenido con éxito', $product);
    }

    public function store(StoreRequest $request){
        $request->validated();
        $product = Product::create($request->all());
        return $this->successResponse('Producto creado con éxito', $product, 201);
    }

    public function update(UpdateRequest $request, int $id){
        $request->validated();
        $product = Product::find($id);
        $product->update($request->all());
        return $this->successResponse('Producto actualizado con éxito', $product);
    }

    public function destroy(int $id){
        $product = Product::find($id);
        $product->delete();
        return $this->successResponse('Producto eliminado con éxito', null, 204);
    }
}
