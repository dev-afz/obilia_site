<?php

namespace App\Services;

use App\Models\User;
use App\Services\Helpers\OauthHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class OauthService
{
    use OauthHelper;

    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', 'Something went wrong');
        }
        $user = User::where('email', $user->email)->first();
        if (!empty($user)) {
            Auth::login($user, true);
            return ($user->role == 'service_provider') ? redirect()->route('service-provider.index') : redirect()->route('client.index');
        }

        return redirect()->route('index')->with('error', 'User not found');
    }
}
