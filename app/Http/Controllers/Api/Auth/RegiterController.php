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
        $addres = Addres::select('id','name_' . app()->getLocale() . ' as name' ) -> get();
        return response()->json($addres);
    }
    
    public function register(Request $request){
        $validator =  Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address_id' => 'required',
            'gender' => 'required',
            'phone' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $dt = Carbon::now();
        $todayDate =$dt->toDayDateTimeString();

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address_id' => $request->address_id,
            'gender' => $request->gender,
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
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return response()->json(['token' => $token]);
    }

    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }
}
