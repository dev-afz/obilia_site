<?php

namespace App\Services\Helpers;

use App\Models\User;

trait OauthHelper
{
    /*
    |--------------------------------------------------------------------------
    | Handle Redirect after login
    |--------------------------------------------------------------------------
    |
    | Check if user is client or user and redirect to respective dashboard
    |
    */

    private function handleRedirect(User $user)
    {
        switch ($user->role) {
            case 'user':
                return dd('user');
                break;
            case 'client':
                return dd('client');
                break;

            default:
                return redirect()->route('index');
                break;
        }
    }
}
