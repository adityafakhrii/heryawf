<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
    	return view('admin.login');
    }

    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))){
    		return redirect('/dashboard');
    	}else{
    		return redirect('/login')->with('fail','Username atau Password yang anda masukkan salah...');
    	}
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }

    public function dashboard()
    {
    	return view('admin.dashboard');
    }


}
