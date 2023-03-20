<?php

namespace App\Http\Controllers\Site;

use App\Models\Job;
use App\Models\User;
use App\Models\Package;
use App\Models\Category;
use App\Models\Industry;
use App\Models\SubCategory;
use App\Models\UserService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\SearchService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Services\RazorpayX\CreateContactService;
use Illuminate\Validation\ValidationException;

class BasicController extends Controller
{
    public function index()
    {

        $industries = Industry::active()->take(6)->get();

        $categories = Category::active()->take(6)->get();

        $jobs = Job::active()
            ->when(auth()->check(), function ($query) {
                $query->withCount(['likes' => function ($query) {
                    $query->where('user_id', auth()->id());
                }]);
            })
            ->with(['sub_category'])
            ->take(6)->get();

        $packages = Package::active()->with(['perks'])->get();

        return view('temp.home', compact('industries', 'jobs', 'packages', 'categories'));
    }


    public function wishlist(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:1000',
            'phone' => 'nullable|numeric|digits:10',
        ]);


        $alreadyExists = Wishlist::where('email', $request->email)->first();

        if ($alreadyExists) {
            throw ValidationException::withMessages([
                'email' => 'You have already added your email to our wishlist.',
            ]);
        }


        Wishlist::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return response()->json([
            'message' => 'Thank you for your interest. We will get back to you soon.',
            'status' => 'success'
        ], 200);
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


    public function provider($uuid)
    {
        $user = User::where('uuid', $uuid)
            ->with(['services' => fn ($q) => $q->active()->with(['sub_category', 'category', 'images', 'user'])])
            ->firstOrFail();


        return view('provider', compact('user'));
    }


    public function serviceDetails($user_uuid, $service_slug)
    {

        $service = UserService::where('slug', $service_slug)
            ->whereHas('user', fn ($q) => $q->where('uuid', $user_uuid))
            ->with(['sub_category', 'category', 'images', 'user'])
            ->firstOrFail();

        // $service_metadata = explode(',', $service->metadata);


        $recommended = UserService::where('category_id', $service->category_id)
            ->where('id', '!=', $service->id)
            // ->whereHas('user', fn ($q) => $q->where('uuid', '!=', $user_uuid))
            ->with(['sub_category', 'category', 'images', 'user'])->take(6)->inRandomOrder()->get();




        return view('service-details', compact('service', 'recommended'));
    }


    public function test()
    {

        $industries = Industry::active()->take(6)->get();

        $categories = Category::active()->take(6)->get();

        $jobs = Job::active()
            ->when(auth()->check(), function ($query) {
                $query->withCount(['likes' => function ($query) {
                    $query->where('user_id', auth()->id());
                }]);
            })
            ->with(['sub_category'])
            ->take(6)->get();

        $packages = Package::active()->with(['perks'])->get();

        return view('index', compact('industries', 'jobs', 'packages', 'categories'));
    }
}
