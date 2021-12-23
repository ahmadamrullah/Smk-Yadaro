<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(REQUEST $request)
    {
        $user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if ($user) {
            return redirect()->route('siswa.index');
        }
    }


    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(REQUEST $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password'  => bcrypt($request->password),
            'role'      => 'admin'
        ]);
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
