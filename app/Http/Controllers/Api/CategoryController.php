<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')
            ->with('children')
                ->with('ads')
                    ->get();

        return CategoryResource::collection($categories);
    }

    public function show($id)
    {
        $category= Category::with(['children', 'ads'])
            ->withCount('ads')
                ->findOrFail($id);

        return new CategoryResource($category);
    }
}
