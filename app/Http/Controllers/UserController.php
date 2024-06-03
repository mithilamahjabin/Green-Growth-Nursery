<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login()
    {

        return view('backend.pages.login');
    }

    public function doLogin(Request $request)
    {


        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // $credentials=$request->only(['email','password']);

        // if(auth()->attempt([$request->email,$request->password]))


        $credentials = $request->except(['_token']);
        if (auth()->attempt($credentials)) {
            Toastr::success(' Login Successfull');
            return redirect()->route('dashboard');
        } else {
            Toastr::error('Invalid Information');
            return redirect()->back()->withErrors(['Invalid login information']);
        }
    }
    public function logout()
    {
        Auth::logout();
        Toastr::success('Logout Successfull');
        return redirect()->route('admin.login')->with('msg', 'Logout Success');
    }


    public function profile()
    {
        return view('backend.pages.profile');
    }
}
