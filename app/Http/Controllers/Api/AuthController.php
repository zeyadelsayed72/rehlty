<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        }

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'avatar' => $avatarPath,
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'message' => 'تم إنشاء الحساب بنجاح',
            'token' => $token,
            'user' => new UserResource($user),
        ], 201);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($request->email) {
            $credentials['email'] = $request->email;
        } else {
            $credentials['phone'] = $request->phone;
        }

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'message' => 'البيانات غير صحيحة'
            ], 401);
        }

        return response()->json([
            'message' => 'تم تسجيل الدخول بنجاح',
            'token' => $token,
            'user' => new UserResource(auth('api')->user()),
        ]);
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json(['Message' => 'Logged out']);
    }

    public function me()
    {
        return response()->json(new UserResource(auth('api')->user()));
    }
}
