<?php

namespace App\Services\RazorpayX;

use App\Models\UserBank;
use Illuminate\Validation\ValidationException;

class CreateFundAccountService
{

    public function createFundAccount(UserBank $bank)
    {

        $user = $bank->user;
        \Log::info(json_encode([
            'contact_id' => $user->rp_contact,
            'account_type' => 'bank_account',
            'bank_account' => [
                'account_number' => $bank->account_number,
                'ifsc' => $bank->ifsc_code,
                'name' => $bank->account_holder_name,
            ],
        ], true));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.razorpay.com/v1/fund_accounts');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'contact_id' => $user->rp_contact,
            'account_type' => 'bank_account',
            'bank_account' => [
                'account_number' => $bank->account_number,
                'ifsc' => $bank->ifsc_code,
                'name' => $bank->account_holder_name,
            ],
        ], true));
        curl_setopt($ch, CURLOPT_USERPWD, env('razorpay_test_key') . ':' . env('razorpay_test_secret'));

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $result = json_decode($result, true);

        if (isset($result['error'])) {
            \Log::error('RazorpayX CreateFundAccountService Error: ' . json_encode($result));
            throw ValidationException::withMessages([
                'error' => ($result['error']['code'] == 'BAD_REQUEST_ERROR') ? $result['error']['description'] : 'Something went wrong',
            ]);
        }

        $bank->rp_account_number = $result['id'];
        $bank->save();

        return $result;
    }
}
