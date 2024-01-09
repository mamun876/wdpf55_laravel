<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
   public function login(){
    return view('admin.login');
   }
   public function store(Request $request)
   {
       $user=$request->all();
    //    dd($user);
       if(Auth::guard('admin')->attempt(['email'=>$user['email'], 'password'=>$user['password']])){
        // return redirect('admin/dashboard')->with('msg', 'Admin Login successfully');
        return redirect()->route('admin.dashboard');

       }
       else{
        echo 'Probelm';
       }
    //    $request->session()->regenerate();

    //    return redirect()->intended(RouteServiceProvider::HOME);
   }
}
