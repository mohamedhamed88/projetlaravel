<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json([
            'success' => true,
            'donnee' => $categories
        ], Response::HTTP_OK);
    }

    public function detail($id)
    {
        $category = Category::where('id', $id)->with('products')->first();
        return response()->json([
            'success' => true,
            'donnee' => $category
        ], Response::HTTP_OK);
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json([
            'success' => true,
        ], Response::HTTP_OK);
    }


    public function addCategory(Request $request)
    {
        Category::create([
            'category' => $request->category
        ]);
        return response()->json([
            'success' => true,
        ], Response::HTTP_OK);
    }
}
