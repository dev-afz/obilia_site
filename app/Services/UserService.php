<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Action\ServiceProvider\ProviderAction;
use App\Services\RazorpayX\CreateContactService;

class UserService
{
    public function __construct()
    {
    }
    public function registrationService(Request $request): JsonResponse
    {
        DB::beginTransaction();
        $user = User::create([
            'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'uuid' => Str::uuid(),
            'status' => 'active',
        ]);


        $service = new CreateContactService();

        Auth::login($user);

        $service->createRazorpayContact($user);

        $signedUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['user' => $user->email]
        );
        switch ($request->role) {
            case 'service_provider':
                $action = new ProviderAction($user);
                $action->rechargeBalance();
                $redirect = route('service-provider.index');
                break;
            case 'client':
                $redirect = route('client.index');
                break;
            default:
                $redirect = route('index');
                break;
        }
        DB::commit();

        Mail::send(new VerificationMail($user, $signedUrl));
        return response()->json([
            'message' => 'You have successfully registered',
            'header' => 'Registration successful',
            'redirect' => $redirect,
        ], 201);
    }
}
