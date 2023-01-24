<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function login(Request $request){
        $login = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $login)->first();

        return response()->json([
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ]);
    }
}
