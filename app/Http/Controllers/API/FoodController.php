<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Http\Resources\FoodResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    public function index()
    {
        $data = Food::latest()->get();
        // return response()->json([FoodResource::collection($data), 'Foods fetched']);
        return FoodResource::collection($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'ingredients' => 'required|string|max:255',
            'instructions' => 'required|string',
            'duration' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $file = $request->file('image');
        $destinationPath = "public\images";
        $filename = 'food_' . date("Ymd_his") . '.' . $file->extension();
        $food = Food::create([
            'title' => $request->title,
            'category' => $request->category,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
            'duration' => $request->duration,
            'image' => $filename,
        ]);
        Storage::putFileAs($destinationPath, $file, $filename);

        return response()->json(['Food created successfully.', new FoodResource($food)]);
    }

    public function show($id)
    {
        $food = Food::find($id);
        if (is_null($food)) {
            return response()->json(['error' => 'Food not found.'], 404);
        }
        return response()->json(['Food fetched successfully.', new FoodResource($food)]);
    }

    public function update(Request $request, Food $food)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'ingredients' => 'required|string|max:255',
            'instructions' => 'required|string',
            'duration' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }


        if($request->hasFile('image')) {

            $file = $request->file('image');
            $destinationPath = "public\images";
            $filename = 'food_' . date("Ymd_his") . '.' . $file->extension();
            Storage::putFileAs($destinationPath, $file, $filename);

            Storage::delete('public/images/' . $food->image);

            $food->update([
                'title' => $request->title,
                'category' => $request->category,
                'ingredients' => $request->ingredients,
                'instructions' => $request->instructions,
                'duration' => $request->duration,
                'image' => $filename,
            ]);
        } else {
            $food->update([
                'title' => $request->title,
                'category' => $request->category,
                'ingredients' => $request->ingredients,
                'instructions' => $request->instructions,
                'duration' => $request->duration,
            ]);
        }

        return response()->json(['Food updated successfully.', new FoodResource($food)]);
    }

    public function destroy(Food $food)
    {
        $food->delete();
        Storage::delete('public/images/' . $food->image);

        return response()->json(['Food deleted successfully.']);
    }
}
