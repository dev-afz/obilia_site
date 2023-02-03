<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Managers\FileManager;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ServiceController extends Controller
{
    use FileManager;
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'price' => 'required|required|numeric|min:1',
            'sub_category' => 'required|numeric',
            'images' => 'array|required|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
        ]);

        $user = $request->user();
        $sub_category = SubCategory::findOrFail($request->sub_category);
        $service = $user->services()->create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'sub_category_id' => $sub_category->id,
            'category_id' => $sub_category->category_id,
        ]);

        foreach ($request->images as $image) {
            $service->images()->create([
                'image' => $this->uploadFileToDO($image, 'images/services'),
            ]);
        }

        return response()->json([
            'message' => 'Service created successfully',
        ]);
    }


    public function index(Request $request)
    {
        $user = $request->user();
        $services = $user->services()->with(['images', 'user'])->get();
        $html =  $services->map(function ($service) {
            return View::make('components.elements.user-service', ['service' => $service])->render();
        })->implode('');

        return response()->json([
            'html' => $html,
        ]);
    }
}
