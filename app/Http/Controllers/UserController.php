<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    public function login(Request $req) {
        $user = User::where("email", $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return response()->json([
                "error" => "Invalid credentials"
            ], 400);
        }
        $token = $user->createToken($user->email)->plainTextToken;
        return response()->json(["token" => $token], 200);
    }

    public function logout(Request $req) {
        $req->user()->currentAccessToken()->delete();
        return response()->noContent();
    }
}
