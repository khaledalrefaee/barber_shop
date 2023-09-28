<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\Addres;
use App\Models\User;
use Illuminate\Http\Request;
use App\Support\StorageRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class RegiterController extends Controller
{
    public function getallAddres()
    {
        $addres = Addres::select('id','name') -> get();

        if ($addres->isEmpty()) {
            return response(['data' => 'No  Addres found' ,'status'=>false]);
        } else {
            return response()->json(['data' => $addres ,'status'=>true]);
        }

    }

    public function register(Request $request){
        $validator =  Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'address_id' => 'required',
            'phone' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Unauthorized','status'=>false], 401);
        }

        $dt = Carbon::now();
        $todayDate =$dt->toDayDateTimeString();

        $user = User::create([
            'name' => $request->name,
            'address_id' => $request->address_id,
            'phone' => $request->phone,
            'join_date' =>$todayDate,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully','data'=>$user ,'status'=>true], 201);

    }

    public function login(Request $request)
    {


        $credentials = $request->only('phone', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized','status'=>false], 401);
        }
        return response()->json(['token' => $token,'status'=>true]);
    }

    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }
}
