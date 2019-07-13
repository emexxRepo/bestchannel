<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->post('email'),
            'password' => $request->post('password')
        ];


        if (!Auth::attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'wrong password or email'
            ]);
        }


        return response()->json([
            'success' => true,
            'data' => [
                'email' => $request->get('email'),
            ]
        ], 200);
    }

    public function register(Request $request)
    {
        $data = $request->all('name','surname','password','facebook','youtube','instagram');




    }
}
