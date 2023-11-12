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
        return view('admin.auth.login');
    }

    // public function registerView()
    // {
    //     return view('admin.register');
    // }

    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|unique:users|email',
    //         'password' => 'required'
    //     ]);
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     if (Auth::attempt($request->only('name', 'password'))) {
    //         return redirect()->route('dashboard')->with('success', 'Login Success!');
    //     } else {
    //         return back()->with('error', 'Invalide Email or Password');
    //     }
    //     return redirect()->route('login')->with('success', 'Register successfully');
    // }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect()->route('dashboard')->with('success', 'Login Success!');
        }

        return back()->with('error', 'Invalide Username or Password');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }


    // password change
    public function changePassword(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required',
        ]);
        $has_password = Auth::user()->password;
        if(Hash::check($request->old_password, $has_password))
        {
            if(!Hash::check($request->password, $has_password))
            {
                $user = User::findOrFail(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login')->with('success', 'Password Change successfully');
            }
            else
            {
                return redirect()->back()->withInput();
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Password didn\'t match!');
        }
    }

}

