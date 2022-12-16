<?php

namespace App\Http\Controllers\Site;

use App\Models\Job;
use App\Models\Package;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Services\SearchService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Industry;

class BasicController extends Controller
{
    public function index()
    {

        $industries = Industry::active()->take(6)->get();
        $jobs = Job::active()
            ->when(auth()->check(), function ($query) {
                $query->withCount(['likes' => function ($query) {
                    $query->where('user_id', auth()->id());
                }]);
            })
            ->with(['sub_category'])
            ->take(6)->get();

        $packages = Package::active()->with(['perks'])->get();

        return view('index', compact('industries', 'jobs', 'packages'));
    }


    public function categories($slug)
    {
        $industry  = Industry::where('slug', $slug)->active()->firstOrFail();

        $categories = Category::where('industry_id', $industry->id)->active()
            ->with(['sub_categories' => fn ($q) => $q->active()])
            ->get();


        return view('sub-categories', compact('industry', 'categories'));
    }


    public function subcategories($slug)
    {
        return 'working on it';
    }

    public function contact()
    {
        return view('contact-us');
    }


    public function aboutUs()
    {
        $categories = Category::active()->take(6)->get();
        return view('about-us', compact('categories'));
    }

    public function search(Request $request, SearchService $service)
    {
        $request->validate([
            'type' => 'required|in:work,talent',
        ]);

        // Log::info($request->all());

        return $service->search($request);
    }
}
