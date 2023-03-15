<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Managers\FileManager;
use Illuminate\Validation\ValidationException;
use App\Services\RazorpayX\CreateFundAccountService;

class DashboardController extends Controller
{

    use FileManager;

    public function index()
    {

        $jobs = auth()->user()->posted_jobs()->get('id');
        $total_jobs = $jobs->count();
        $total_active_jobs = auth()->user()->posted_jobs()->where('status', 'active')->count();
        $total_pending_jobs = auth()->user()->posted_jobs()->where('status', 'pending')->count();
        $total_completed_jobs = auth()->user()->posted_jobs()->where('status', 'completed')->count();
        $total_cancelled_jobs = auth()->user()->posted_jobs()->where('status', 'cancelled')->count();

        // $total_applications = a?


        return view('dashboard.client.index', compact('total_jobs', 'total_active_jobs', 'total_pending_jobs', 'total_completed_jobs', 'total_cancelled_jobs'));
    }





    public function category(Request $request)
    {
        if (!$request->ajax()) {
            abort(404);
        }
        $request->validate([
            'industry_id' => 'required|exists:industries,id'
        ]);

        $categories = Category::where('industry_id', $request->industry_id)->get(['id', 'name']);

        return response()->json($categories);
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

    public function profile(Request $request)
    {
        $user = auth()->user()->load([
            'kycs',
            'business',
            'bank',
        ]);
        return view('dashboard.client.profile', compact('user'));
    }




    public function editProfile()
    {
        $user  = auth()->user()->load([
            'kycs',
            'business',
            'skills',
        ]);

        $aadhar_kyc = $user->kycs->where('name', 'aadhar')->first();
        $pan_kyc = $user->kycs->where('name', 'pan')->first();

        return view('dashboard.client.edit-profile', compact('user',  'aadhar_kyc', 'pan_kyc'));
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric|digits:10',
            'gender' => 'nullable|in:male,female,other',
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
            // 'redirect' => route('client.profile'),
        ], 200);
    }



    public function addBusiness()
    {
        $user = auth()->user()->load([
            'business',
        ]);
        if ($user->business) {
            return redirect()->route('client.edit-business');
        }
        return view('dashboard.client.add-business', compact('user'));
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
            'redirect' => route('client.profile'),
        ], 200);
    }


    public function editBusiness()
    {
        $user = auth()->user()->load([
            'business',
        ]);

        if (!$user->business) {
            return redirect()->route('client.add-business');
        }

        $business = $user->business;

        return view('dashboard.client.edit-business', compact('user', 'business'));
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
            'redirect' => route('client.profile'),
        ], 200);
    }




    public function addBank(Request $request)
    {
        $user = $request->user()->load([
            'bank',
        ]);

        if ($user->bank) {
            return redirect()->route('client.edit-bank');
        }

        return view('dashboard.client.add-bank', compact('user'));
    }

    public function storeBank(Request $request)
    {
        $request->validate([
            'account_holder_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'bank_address' => 'required|string|max:3000',
            'bank_branch' => 'required|string|max:3000',
            'bank_city' => 'required|string|max:255',
            'bank_state' => 'required|string|max:255',
        ]);

        $user = $request->user();

        if ($user->bank) {
            throw ValidationException::withMessages([
                'bank' => 'Bank already added',
            ]);
        }
        $createService  = new CreateFundAccountService();

        DB::beginTransaction();

        $bank =   $user->bank()->create([
            'account_holder_name' => $request->account_holder_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
            'name' => $request->bank_name,
            'address' => $request->bank_address,
            'branch' => $request->bank_branch,
            'city' => $request->bank_city,
            'state' => $request->bank_state,
        ]);

        $createService->createFundAccount($bank);
        DB::commit();

        return response()->json([
            'message' => 'Bank added successfully',
            'redirect' => route('client.profile'),
        ], 200);
    }


    public function editBank(Request $request)
    {
        $user = $request->user()->load([
            'bank',
        ]);

        if (!$user->bank) {
            return redirect()->route('client.add-bank');
        }

        $bank = $user->bank;

        return view('dashboard.client.edit-bank', compact('user', 'bank'));
    }

    public function updateBank(Request $request)
    {
        $request->validate([
            'account_holder_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'bank_address' => 'required|string|max:3000',
            'bank_branch' => 'required|string|max:3000',
            'bank_city' => 'required|string|max:255',
            'bank_state' => 'required|string|max:255',
        ]);

        $user = $request->user();

        $bank = $user->bank;

        $old_bank = $bank;

        if (!$bank) {
            throw ValidationException::withMessages([
                'bank' => 'Bank not found',
            ]);
        }

        DB::beginTransaction();
        $bank->update([
            'account_holder_name' => $request->account_holder_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
            'name' => $request->bank_name,
            'address' => $request->bank_address,
            'branch' => $request->bank_branch,
            'city' => $request->bank_city,
            'state' => $request->bank_state,
        ]);

        if ($old_bank->account_number != $bank->account_number) {
            $createService  = new CreateFundAccountService();
            $createService->createFundAccount($bank);
        }

        DB::commit();



        return response()->json([
            'message' => 'Bank updated successfully',
            'redirect' => route('client.profile'),
        ], 200);
    }
}
