<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request) {
        $user = User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return response()->json(['error'=>'Invalid credentials'],400);
        }
        return response()->json([
            "user"=>$user,
            "token"=>$user->createToken('token')->plainTextToken
        ]);
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:8|max:255',
        ]);
        if($validator->fails()) {
            return response()->json($validator->errors());
        }
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return response()->json([
            "user"=>$user,
            "token"=>$user->createToken('token')->plainTextToken
        ]);
    }

    public function logout(Request $request){
        $request->user->currentAccessToken()->delete();
        return response()->noContent();
    }
}
