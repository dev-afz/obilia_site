<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Models\Skill;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Managers\FileManager;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class DashboardController extends Controller
{
    use FileManager;
    public function index()
    {
        return view('dashboard.service-provider.index');
    }

    public function profile()
    {
        $subcategories = SubCategory::active()->get(['id', 'name', 'category_id']);
        $user = auth()->user()->load([
            'kycs',
            'business',
            'skills.skill',
        ]);
        return view('dashboard.service-provider.profile', compact('subcategories', 'user'));
    }


    public function editProfile()
    {
        $user  = auth()->user()->load([
            'kycs',
            'business',
            'skills',
        ]);

        $skills = Skill::active()->get(['id', 'name']);
        $user_skills = array_map('strval', $user->skills->pluck('skill_id')->toArray());
        $aadhar_kyc = $user->kycs->where('name', 'aadhar')->first();
        $pan_kyc = $user->kycs->where('name', 'pan')->first();

        return view('dashboard.service-provider.edit-profile', compact('user', 'skills', 'user_skills', 'aadhar_kyc', 'pan_kyc'));
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric|digits:10',
            'gender' => 'nullable|in:male,female,other',
            'skills' => 'required|array',
            'skills.*' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:512',
            'aadhar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'pan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = $request->user()->load(['kycs']);


        DB::beginTransaction();

        $user->update([
            'phone' =>  $request->phone,
            'gender' => $request->gender,
            'images' => ($request->hasFile('image')) ? $this->uploadFileToDO($request->image, 'images/user') : $user->images,
        ]);

        foreach ($request->skills as $skill) {
            $user->skills()->updateOrCreate([
                'skill_id' => $skill,
            ], [
                'skill_id' => $skill,
            ]);
        }

        if ($request->hasFile('aadhar')) {
            if ($user->kycs->where('name', 'aadhar')->first()) {
                throw ValidationException::withMessages([
                    'aadhar' => 'Aadhar image already exists if you want to update please contact to support',
                ]);
            }
            $user->kycs()->create([
                'name' => 'aadhar',
                'file' => $this->uploadFileToDO($request->aadhar, 'images/user/kyc'),
            ]);
        }

        if ($request->hasFile('pan')) {
            if ($user->kycs->where('name', 'pan')->first()) {
                throw ValidationException::withMessages([
                    'pan' => 'Pan image already exists if you want to update please contact to support',
                ]);
            }
            $user->kycs()->create([
                'name' => 'pan',
                'file' => $this->uploadFileToDO($request->pan, 'images/user/kyc'),
            ]);
        }
        DB::commit();

        return response()->json([
            'message' => 'Profile updated successfully',
            // 'redirect' => route('service-provider.profile'),
        ], 200);
    }



    public function addBusiness()
    {
        $user = auth()->user()->load([
            'business',
        ]);
        if ($user->business) {
            return redirect()->route('service-provider.edit-business');
        }
        return view('dashboard.service-provider.add-business', compact('user'));
    }


    public function storeBusiness(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'address' => 'required|string|max:5000',
            'incorporation_certificate' => 'required|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'gst_no' => 'nullable|string|max:255',
        ]);

        $user = $request->user();

        if ($user->business) {
            throw ValidationException::withMessages([
                'business' => 'Business already added',
            ]);
        }

        $user->business()->create([
            'name' => $request->name,
            'cin' => $request->cin,
            'address' => $request->address,
            'incorporation_certificate' => $this->uploadFileToDO($request->incorporation_certificate, 'images/user/business'),
            'gstin' => $request->gst_no,
        ]);

        return response()->json([
            'message' => 'Business added successfully',
            'redirect' => route('service-provider.profile'),
        ], 200);
    }


    public function editBusiness()
    {
        $user = auth()->user()->load([
            'business',
        ]);

        if (!$user->business) {
            return redirect()->route('service-provider.add-business');
        }

        $business = $user->business;

        return view('dashboard.service-provider.edit-business', compact('user', 'business'));
    }

    public function updateBusiness(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'address' => 'required|string|max:5000',
            'incorporation_certificate' => 'nullable|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'gst_no' => 'nullable|string|max:255',
        ]);

        $user = $request->user();
        $business  = $user->business;
        if (!$business) {
            throw ValidationException::withMessages([
                'business' => 'Business not found',
            ]);
        }

        $business->update([
            'name' => $request->name,
            'cin' => $request->cin,
            'address' => $request->address,
            'incorporation_certificate' => ($request->hasFile('incorporation_certificate')) ? $this->uploadFileToDO($request->incorporation_certificate, 'images/user/business') : $business->incorporation_certificate,
            'gstin' => $request->gst_no,
        ]);

        return response()->json([
            'message' => 'Business updated successfully',
            'redirect' => route('service-provider.profile'),
        ], 200);
    }
}
