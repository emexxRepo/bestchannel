<?php

namespace App\Http\Controllers;

use App\Repositories\SocialRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request, UserRepositoryInterface $userRepository)
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


        $user = $userRepository->where('email', $request->post('email'));

        if (empty($user)) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'User empty'

                ]
            );
        }

        try {
            $token = $user->createToken('MyApp')->accessToken;
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ], 404);
        }
        return response()->json([
            'success' => true,
            'data' => [
                'email' => $request->get('email'),
                'token' => $token
            ]
        ], 200);
    }

    public function register(Request $request, SocialRepositoryInterface $socialRepository, UserRepositoryInterface $userRepository)
    {
        $dataUser = $request->all('name', 'email', 'password');

        $dataSocial = $request->all('facebook', 'youtube', 'instagram', 'twitter');

        try {

            $userSocial = $socialRepository->create($dataSocial);
            $user = $userRepository->create($dataUser);

        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage(),
                'success' => false
            ]);
        }

    }
}
