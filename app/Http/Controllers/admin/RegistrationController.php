<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.auth.user', compact('users'));
    }

    public function create()
    {
        return view('admin.auth.user_create');
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required|min:3',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:1',
            // 'image' => 'mimes:jpg,png,jpeg,bmp'
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            if ($request->hasfile('image')) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/user', $imageName);
                $user->image = 'uploads/user/' . $imageName;
            }
            $user->save();
            return redirect()->route('user.index')->with('success','User Insertion Successfull!');
        } catch (\Throwable $th) {
            // return $th->getMessage();
            return redirect()->back()->with('error', 'User Insertion Failed!');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.auth.user_edit', compact('user'));
    }


    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
        ]);

        try {
            $user = User::find($id);
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            // $user->password = $request->password;
            if ($request->hasfile('image')) {
                if (file_exists($user->image) && $user->image != null) {
                    unlink($user->image);
                }
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = rand() . "." . $ext;
                $image->move('uploads/product', $imageName);
                $user->image = 'uploads/product/' . $imageName;
            }
            $user->update();

            return redirect()->route('user.index')->with('success', 'Update Successful!');
            // }
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Update Failed!');
        }
    }


    public function destroy($id)
    {
        try {
            $user = User::find($id);
            if (file_exists($user->image) && $user->image != null) {
                unlink($user->image);
            }
            $user->delete();
            return redirect()->route('user.index')->with('success', 'Deleted Successful');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->back()->with('error', 'Deleted failed');
        }
    }
}
