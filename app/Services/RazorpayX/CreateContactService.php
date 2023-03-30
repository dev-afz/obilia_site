<?php

namespace App\Services\RazorpayX;

use App\Models\User;

class CreateContactService
{
    public function createRazorpayContact(User $user)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.razorpay.com/v1/contacts');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'name' => $user->name,
            'email' => $user->email,
            'contact' => $user->phone,
            'type' => 'employee',
        ]));
        curl_setopt($ch, CURLOPT_USERPWD, env('razorpay_test_key') . ':' . env('razorpay_test_secret'));

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            \Log::error('Error:' . curl_error($ch));
        }
        curl_close($ch);

        $result = json_decode($result, true);

        $user->rp_contact = $result['id'] ?? null;
        $user->save();

        return $result;
    }
}
