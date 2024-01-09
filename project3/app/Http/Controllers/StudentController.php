<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function login(){
        return view('student.login');
       }
       public function store(Request $request)
       {
           $user=$request->all();
        //    dd($user);
           if(Auth::guard('student')->attempt(['email'=>$user['email'], 'password'=>$user['password']])){
            // return redirect('admin/dashboard')->with('msg', 'Admin Login successfully');
            return redirect()->route('student.dashboard');
    
           }
           else{
            echo 'Probelm';
           }
        //    $request->session()->regenerate();
    
        //    return redirect()->intended(RouteServiceProvider::HOME);
       }
}
