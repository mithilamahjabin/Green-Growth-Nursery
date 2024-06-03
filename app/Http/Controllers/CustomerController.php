<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6'
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
        ]);
        if ($customer) {
            Toastr::success(' Registration success .');
            return redirect()->route('home')->with('msg', 'Registration success.');
        } else {
            Toastr::error('Something went wrong');
            return redirect()->back();
        }
    }

    public function doLogin (Request $request)
    {

        //validation

        $credentials = $request->except('_token');
        // dd($credentials);

        if (auth()->guard('customer')->attempt($credentials)) {
            // dd("valid user");
            Toastr::success(' Login Success.');
            return redirect()->route('home')->with('msg', 'Login successfully.');
        }

        // dd("invalid user");

        else {
            Toastr::error('Invalid Credentials.');
            return redirect()->back();
            // ->withErrors(['Invalid login information']);

        }
    }


    public function customerlogout()
    {
        auth()->guard('customer')->logout();
        Toastr::success('Logout Successfully.');
        return redirect()->route('customer.login')->with('msg', 'Logout Success');
    }
}
