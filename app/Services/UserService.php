<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{
    public function __construct()
    {
    }
    public function registrationService(Request $request): JsonResponse
    {
        $user = User::create([
            'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'uuid' => Str::uuid(),
            'status' => 'active',
        ]);

        Auth::login($user);


        switch ($request->role) {
            case 'user':
                $redirect = route('index');
                break;
            case 'client':
                $redirect = route('index');
                break;
            default:
                $redirect = route('index');
                break;
        }

        return response()->json([
            'message' => 'You have successfully registered',
            'header' => 'Registration successful',
            'redirect' => $redirect,
        ], 201);
    }
}
