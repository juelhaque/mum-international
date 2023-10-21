<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function registerView()
    {
        return view('admin.register');
    }


    // public function register(Request $request)
    // {

    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|unique:users|email',
    //         'password' => 'required|confirmed'
    //     ]);

    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);
    //     $user->save();


    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         return redirect()->route('dashboard')->with('success', 'Login Success!');
    //     } else {
    //         return back()->with('error', 'Invalide Email or Password');
    //     }
    //     return redirect()->route('login')->with('success', 'Register successfully');
    // }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Login Success!');
        }

        return back()->with('error', 'Invalide Email or Password');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }


}

