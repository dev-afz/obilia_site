<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Action\ServiceProvider\JobAction;
use App\Http\Controllers\Controller;
use App\Managers\FileManager;
use Illuminate\Http\Request;

class JobController extends Controller
{
    use FileManager;
    public function index()
    {

        return view('dashboard.service-provider.jobs');
    }


    public function apply(Request $request, JobAction $action)
    {
        $request->validate(
            [
                'id' => 'required|integer|exists:jobs,id',
                'work_letter' => 'required|string|max:2000',
                'additional_document' => 'nullable|file|max:2048',
                'price' => 'required|integer|min:1',
                'terms' => 'required'
            ],

            [
                'terms.required' => 'You must agree to the terms and conditions'
            ]
        );

        $action->apply($request);

        return response()->json([
            'status' => 'success',
            'message' => 'Proposal sent successfully',
        ]);
    }


    public function likedJobs()
    {
        return view('dashboard.service-provider.liked-jobs');
    }
}
