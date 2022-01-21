<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $fileds = $request -> validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:user,email',
            'password' => 'required|string|confirmed',
            'role' => 'required|integer'

        ]);
        $user = User::create([
            'name' => $fileds['nmae'],
            'email' => $fileds['email'],
            'password' => bcrypt( $fileds['password']),
            'role' => $fileds['role']
        ]);

        $token =$user->createToken($request->userAgent(),[$fileds['role']])->plainTextToken;
        
        $reponse = [
            'user' => $user,
            'token' => $token,
        ];
        return response($reponse,201);

    }
    public function login(Request $request){

    }
    public function logout(){

    }

}

