<?php

namespace App\Http\Controllers\Site;

use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\AddMetadataJob;
use App\Managers\SanitaryManager;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Log;

class BasicController extends Controller
{
    public function index()
    {

        $categories = Category::active()->take(6)->get();
        $jobs = Job::active()
            ->when(auth()->check(), function ($query) {
                $query->withCount(['likes' => function ($query) {
                    $query->where('user_id', auth()->id());
                }]);
            })
            ->with(['sub_category'])
            ->take(6)->get();

        return view('index', compact('categories', 'jobs'));
    }


    public function categories($slug)
    {
        $category  = Category::where('slug', $slug)->active()->firstOrFail();

        $subcategories = SubCategory::where('category_id', $category->id)->active()->get();


        return view('sub-categories', compact('category', 'subcategories'));
    }


    public function contact()
    {
        return view('contact-us');
    }


    public function search(Request $request, SanitaryManager $manager)
    {
        $request->validate([
            'q' => 'required|string|min:3|max:255'
        ]);

        Log::info($request->all());

        $data = $manager->sanitize($request);



        if ($request->ajax()) {
            $jobs = Job::active()->isPublic()->paginate(2, ['*'], 'page', $request->page);
            $html = '';
            $showBtn = false;
            $class = "col-md-6";
            foreach ($jobs as $key => $job) {
                $html .= view('components.elements.job-card', compact('job', 'showBtn', 'class'))->render();
            }

            $url_link_html  = view('components.helper.url-links', compact('jobs'))->render();


            return response()->json(['html' => $html, 'links' => $url_link_html]);
        }
        $jobs = Job::active()->isPublic()->paginate(2);

        return view('browse.jobs', compact('jobs'));
    }
}
