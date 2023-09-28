<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        $user = Auth::user()->load(['addres']);

        return response()->json([
            'rec_id'=>$user->rec_id,
            'name' => $user->name,
            'phone' => $user->phone,
            'address' => $user->addres->name,
            'join_date' => $user->join_date,

        ]);

    }
}
