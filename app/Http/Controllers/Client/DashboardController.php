<?php

namespace App\Http\Controllers\Client;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.client.index');
    }

    public function subcategories(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }

        $request->validate([
            'category' => 'required|exists:categories,id'
        ]);

        $subcategories = SubCategory::where('category_id', $request->category)->get(['id', 'name']);

        return response()->json($subcategories);
    }
}
