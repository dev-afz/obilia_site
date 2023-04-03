<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

class VerificationController extends Controller
{
    public function send(Request $request)
    {
        $user = $request->user();

        $signedUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['user' => $user->email]
        );

        \Mail::send(new VerificationMail($user, $signedUrl));


        return redirect()->back()->with([
            'status' => 'verification-link-sent'
        ]);
    }


    public function verify(Request $request)
    {


        $user = User::where('email', $request->user)->firstOrFail();


        if (!$request->hasValidSignature()) {
            return response()->json([
                'message' => 'Invalid/Expired url provided.'
            ], 401);
        }

        if ($user->hasVerifiedEmail()) {
            return response()->json([
                'message' => 'Email already verified.'
            ]);
        }


        if ($user->email !== $request->user) {
            return response()->json([
                'message' => 'Invalid email provided.'
            ], 401);
        }


        $user->markEmailAsVerified();



        return response()->json([
            'message' => 'Email successfully verified.'
        ]);
    }



    public function notice(Request $request)
    {
        $route =  (auth()->user()->role == 'service_provider') ? route('service-provider.index') : route('client.index');
        return $request->user()->hasVerifiedEmail()
            ? redirect($route)
            : view('auth.verify');
    }
}
