<?php

namespace Botble\Ecommerce\Http\Controllers\CustomersApi;
use Botble\Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Botble\Ecommerce\Models\Customer as EcCustomer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class RegisterApiController extends Controller
{
    public function RegisterApi(Request $request)

    {
        $response  = Http::asForm()->post("api/RegisterApi");

        // Nhập
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:ec_customers,email',
            'password' => 'required|string|min:1',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 400);
        }

        // tạo
        $customer = EcCustomer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),

        ]);

        return response()->json([
            'success' => true,
            'message' => 'đăng ký thành công',
            'data' => $customer,


        ], 201);
    }

}
