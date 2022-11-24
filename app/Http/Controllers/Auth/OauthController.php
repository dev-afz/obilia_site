<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\OauthService;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class OauthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback(Request $request, OauthService $oauthService)
    {
        return $oauthService->handleGoogleCallback($request);
    }
}
