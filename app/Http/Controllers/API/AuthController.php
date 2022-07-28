<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validation
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);
        // Validation Message On Fail
        if ($validation->fails()) {
            $response = [
                'status' => 400,
                'success' => false,
                'message' => $validation->errors(),
            ];

            return response()->json($response, 400);
        }
        // No error on Validation then create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // create response for new user
        $response = [
            'status' => 201,
            'success' => true,
            'message' => 'user Register Successfully!',
            'data' => [
                'token' => $user->createToken('MyApp')->plainTextToken,
                'name' => $user->name,
                'email' => $user->email,
            ]
        ];

        return response()->json($response, 200);
    }
}
