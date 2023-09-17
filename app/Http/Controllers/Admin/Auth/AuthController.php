<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\AuthRequest;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.auth.login');
    }



    public function postLogin(AuthRequest $request)
    {
        $loginIdentifier = $request->input("login_identifier");
        $password = $request->input("password");
        
        if (auth()->guard('admin')->attempt(['email' => $loginIdentifier, 'password' => $password]) ||
            auth()->guard('admin')->attempt(['phone' => $loginIdentifier, 'password' => $password])) {
               // تم تسجيل الدخول بنجاح
            $user = auth()->guard('admin')->user();
            $message = 'Welcome Dear ' . $user->first_name . ' !';
            toastr()->success($message);
            

                return redirect()->route('admin.dashboard');
        } else {
            // فشل تسجيل الدخول
            return redirect()->back()->withErrors([
                'error' => 'There is an error in the email or password.',
            ]);
        }
           
    }

    public function logout()
    {

        $gaurd = $this->getGaurd();
        $gaurd->logout();

        return redirect()->route('home');
    }

    private function getGaurd()
    {
        return auth('admin');
    }
}
