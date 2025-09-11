<?php

namespace App\services;

use App\Enum\SmsEnum;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Modules\Customer\app\Models\SmsLog;

class SmsService
{
    public function sendSmsToken(string $smsType, string $mobileNumber, string $userType, int $userId)
    {
        $token = $this->generateSmsToken(6);
        if (config('app.isTesting')) {
            $token = '111111';
        }

        $message = 'You can reuse this OTP code till today (23:59:59 pm), so do not delete it. Your OTP code is ' . $token . 'Please dont share it with anyone.';
        $sms = SmsLog::create([
            'user_type' => $userType,
            'user_id' => $userId,
            'token' => $token,
            'type' => $smsType,
            'number' => $mobileNumber,
            'message' => $message,
            'provider' => SmsEnum::SMS_PROVIDER['DOIT_SMS'],
        ]);

        return $this->sendSmsMessage($sms);
    }

    public function generateSmsToken($length)
    {
        $min = pow(10, $length - 1); // Minimum value for the specified length
        $max = pow(10, $length) - 1; // Maximum value for the specified length

        return mt_rand($min, $max); // Generate a random integer within the range
    }

    public function sendSmsMessage($sms)
    {
        $smsApiUrl = 'https://sms.doit.gov.np/api/sms';
        $authToken = 'Bearer ' . config('app.sms_token');
        $postData = [
            "message" => $sms->message,
            "mobile" => $sms->number,
        ];
        $response = Http::withHeaders([
            'Authorization' => $authToken,
            'Accept' => 'application/json',
            "Content-Type" => "application/json",
        ])->post($smsApiUrl, $postData);

        $sms->update([
            'request' => json_encode($postData),
            'response' => $response->body(),
        ]);


        if ($response->successful()) {
            return ['status' => true, 'message' => 'Sms sent successfully'];
        } else {
            return ['status' => false, 'message' => 'Failed to send Sms'];
        }
    }

    public function sendCommonMessage(string $smsType, string $mobileNumber, $userType, $userId, string $message)
    {
        $sms = SmsLog::create([
            'user_type' => $userType,
            'user_id' => $userId,
            'type' => $smsType,
            'number' => $mobileNumber,
            'message' => $message,
            'provider' => SmsEnum::SMS_PROVIDER['DOIT_SMS'],
        ]);

        return $this->sendSmsMessage($sms);
    }

    public function sendCommonMessageV2(string $smsType, string $mobileNumber,$userType, $userId, string $message, string $token = null) {
        $smsData = [
            'user_type' => $userType,
            'user_id' => $userId,
            'type' => $smsType,
            'number' => $mobileNumber,
            'message' => $message,
            'provider' => SmsEnum::SMS_PROVIDER['DOIT_SMS'],
            'token' => $token,
        ];

        if ($token) {
            $smsData['token'] = $token;
            $smsData['is_verified'] = false;
        }

        $sms = SmsLog::create($smsData);

        return $this->sendSmsMessage($sms);
    }
}
