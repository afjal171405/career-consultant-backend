<?php

namespace modules\Customer\app\Http\Controllers\auth;


use App\Http\Controllers\Controller;
use App\services\SmsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Modules\Admin\Http\Resources\CustomerDetailResource;
use modules\Customer\app\Models\Customer;

class AuthController extends Controller
{
    public $smsService;

    public function __construct()
    {
        $this->smsService = app(SmsService::Class);
    }

    public function getProfile()
    {
        $customer = Customer::where('id', auth()->user()->id)->first();
        return CustomerDetailResource::make($customer);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $customer = Customer::where('email', $request->email)->first();
        if (!$customer || !Hash::check($request->password, $customer->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ]);
        }
        //TODO: send token
        $token = $customer->createToken('Personal Access Token')->accessToken;


        return response([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged Out Successfully']);
    }
}
