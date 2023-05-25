<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index() {
        return view('/register');
    }

    public function register(Request $request) {
        $rules = [
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $users = new User();
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->role = "Member";
        $users->save();

        return redirect('/login');
    }
}
