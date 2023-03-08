<?php

namespace App\Services\RazorpayX;

class CheckFundAccountService
{
    public function checkFundAccount($contactId)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.razorpay.com/v1/fund_accounts/' . $contactId);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        curl_setopt($ch, CURLOPT_USERPWD, env('razorpay_test_key') . ':' . env('razorpay_test_secret'));

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $result = json_decode($result, true);

        return $result;
    }
}
