<?php

namespace App\Http\Controllers\Site;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    public function index()
    {

        $categories = Category::active()->take(6)->get();
        $jobs = Job::active()
            ->with(['sub_category'])
            ->take(6)->get();

        return view('index', compact('categories', 'jobs'));
    }
}
