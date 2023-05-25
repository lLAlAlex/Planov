<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index() {
        return view('/login');
    }

    public function login(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if($request->remember) {
            Cookie::queue('mycookie', $request->email, 5);
        }

        if(Auth::attempt($credentials, $request->remember)) {
            Session::put('mysession', $credentials);
            return redirect('/');
        }

        $rules = [
            'email' => 'exists:users,email',
            'password' => 'exists:users,password',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }
    }
}
