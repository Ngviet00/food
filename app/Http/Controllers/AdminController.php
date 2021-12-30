<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //get login
    public function login(){
        if(Auth::guard('admin')->check()){
            return redirect('admin/dashboard');
        }
        return view('admin.login');
    }

    //submit login post
    public function loginPost(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with('status', 'Email or Password is incorrect!');
        }
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function order(){
        return view('admin.order');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
