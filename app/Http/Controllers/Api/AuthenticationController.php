<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\LoginValidationRequest;
use App\Models\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Sanctum\NewAccessToken;

class AuthenticationController extends Controller
{
    public function login(LoginValidationRequest $request) {
        $condition = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ];
        $user = Users::where($condition)->first();
        if($user) {
            $token = $user->createToken('auth_token')->plainTextToken;
            return response(
                    [
                        'success' => true,
                        'token' => $token,
                        'message' => 'Login successful',
                        'user' => $user
                    ]
                );
        }
        else {
            return response([
                'success' => false,
                'message' => 'Login Failed!'
            ]);
        }
    }
}
