<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::latest()->get();
        // return response()->json([CategoryResource::collection($data), 'Categories fetched']);
        return CategoryResource::collection($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $file = $request->file('image');
        $destinationPath = "public\images";
        $filename = 'category_' . date("Ymd_his") . '.' . $file->extension();
        $category = Category::create([
            'id_category' => $request->id_category,
            'title' => $request->title,
            'image' => $filename,
        ]);
        Storage::putFileAs($destinationPath, $file, $filename);
    
        return response()->json(['Category created successfully.', new CategoryResource($category)]);
    }

    public function show($id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return response()->json(['error' => 'Category not found.'], 404);
        }
        return response()->json(['Category fetched successfully.', new CategoryResource($category)]);
    }

    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'id_category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        if($request->hasFile('image')) {

            $file = $request->file('image');
            $destinationPath = "public\images";
            $filename = 'category_' . date("Ymd_his") . '.' . $file->extension();
            Storage::putFileAs($destinationPath, $file, $filename);

            Storage::delete('public/images/' . $category->image);

            $category->update([
                'id_category' => $request->id_category,
                'title' => $request->title,
                'image' => $filename,
            ]);
        } else {
            $category->update([
                'id_category' => $request->id_category,
                'title' => $request->title,
            ]);
        }

        return response()->json(['Category updated successfully.', new CategoryResource($category)]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Storage::delete('public/images/' . $category->image);
        
        return response()->json(['Category deleted successfully.']);
    }
}
