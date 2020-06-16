<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $token = $user->createToken('Token');
                return response()->json([
                    'message' => 'Success Login',
                    'token' => $token->accessToken,
                ]);
            }
            else 
            {
                return response()->json([
                    'message' => 'Password Doesn\'t Match',   
                ]);
            }            
        }
        else
        {
            return response()->json([
                'message' => 'Email not found',
            ]);
        }
    }
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
        ]);
        
        $token = $user->createToken('Token');
        return response()->json([
            'message' => 'Success Register',
            'token' => $token->accessToken,
        ]);
    }
}
