<?php

namespace modules\Customer\app\Http\Controllers\auth;


use App\Enum\SmsEnum;
use App\Http\Controllers\Controller;
use App\services\SmsService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use modules\Customer\app\Http\Resources\CustomerDetailResource;
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
        $tokenResult = $customer->createToken('auth_token');
        $token = $tokenResult->plainTextToken;

        $tokenResult->accessToken->expires_at = Carbon::now()->addWeeks(2);
        $tokenResult->accessToken->save();


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

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile_number' => 'required|integer',
            'password' => 'required|string|min:6'
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'password' => Hash::make($request->password)
        ]);

        $customer->save();

        return $this->reportSuccess('customer created successfully');
    }

    public function forgotPassword(Request $request)
    {
        $mobile = $request->mobile_number;
        $request->validate([
            'mobile' => 'required|exists:users,mobile_number',
        ],
            [
                'mobile.exists' => 'The provided mobile number does not exist in our records',
            ]
        );

        // Save OTP to the user record or a separate table
        $customer = Customer::where('mobile_number', $mobile)->first();
        if (!$customer) {
            return $this->reportError('Customer not found');
        }

        $this->smsService->sendSmsToken(
            smsType: SmsEnum::SMS_TYPE['FORGOT_PASSWORD'],
            mobileNumber: $request->mobile_number,
            userType: Customer::class,
            userId: $customer->id
        );
        return $this->reportSuccess('OTP sent successfully');
    }

}
