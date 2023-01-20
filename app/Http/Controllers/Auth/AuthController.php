<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials, $request->remember_me === 'on')) {
            $request->session()->regenerate();

            return response()->json([
                'message' => 'Successfully logged in',
                'redirect' => (auth()->user()->role == 'service_provider') ? route('service-provider.index') : route('client.index'),
            ]);
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    public function register(Request $request, UserService $userService)
    {
        $request->validate([
            'role' => 'required|in:service_provider,client',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        return $userService->registrationService($request);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('index');
    }
}
