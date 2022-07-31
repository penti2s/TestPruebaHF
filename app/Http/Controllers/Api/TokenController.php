<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User; //modelo User

class TokenController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if($user){
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json(['token' => $token], 200);
        }
        return response()->json('Usuario no encontrado', 404);

    }
}
