<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);
        $token = $user->createToken('sajatToken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
            'role' => $user->role
        ];
        return response()->json([
            'successs' => true,
            'data' => $response
        ], 201);
    }
    public function login(Request $request) {
        if(Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $authUser = Auth::user();
            $success['token'] = $authUser->createToken('myapptoken')->plainTextToken;
            $success['name'] = $authUser->name;
            return response()->json([
                'success' => true,
                'data' => $success
            ]);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'A bejelentkezés sikertelen!',
                'error' => 'Hibás adatok!'
            ]);
        }
    }
    public function logout(Request $request) {
        $user = User::where('name', $request->name)->first();
        $user->tokens()->where('id', $request->tokenId)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Kijelentkezve'
        ], 200);
    }
}
