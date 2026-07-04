<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\DestroyRequest;
use App\Http\Requests\Category\ShowRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Traits\ApiResponse;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ApiResponse;

    public function index(){
        $categories = Category::all();
        return $this->successResponse('Categorías obtenidas con éxito', $categories);
    }

    public function show(int $id){
        $category = Category::find($id);
        return $this->successResponse('Categoría obtenida con éxito', $category);
    }

    public function store(StoreRequest $request){
        $request->validated();
        $category = Category::create($request->all());
        return $this->successResponse('Categoría creada con éxito', $category, 201);
    }

    public function update(UpdateRequest $request, int $id){
        $request->validated();
        $category = Category::find($id);
        $category->update($request->all());
        return $this->successResponse('Categoría actualizada con éxito', $category);
    }

    public function destroy(int $id){
        $category = Category::find($id);
        if (!$category) {
            return $this->errorResponse('Categoría no encontrada', 404);
        }
        $category->delete();
        return $this->successResponse('Categoría eliminada con éxito', null, 204);
    }
}
