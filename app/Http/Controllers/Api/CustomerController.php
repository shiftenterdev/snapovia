<?php
/**
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Iftakharul Alam Bappa <info@shiftenter.dev> 
 */
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerRegisterRequest;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function login(CustomerLoginRequest $request)
    {
        $customer = \App\Models\Customer::whereEmail($request->email)
            ->whereStatus(1)
            ->first();
        if ($customer) {
            if (Hash::check($request->password, $customer->password)) {
                return response()->json(['token' => $customer->api_token], 200);
            }
        }
        return response()->json('Authorization Failed', 400);
    }

    public function registration(CustomerRegisterRequest $request)
    {
        try {
            $customer = Customer::create($request->only(['first_name', 'last_name', 'email', 'password']));
            return response()->json(['token' => $customer->api_token], 200);
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 403);
        }
    }
}
