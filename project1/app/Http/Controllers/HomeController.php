<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function index(){
    //$data['title']='Home Page';
    //$data['welcome']='Welcome to laravel';
   // $data['fruits']=['Apple', 'Mango', 'orange', 'strawberry', 'raspberry'];
    return view('home');
}
public function about(){
   // $data['title']= 'About Page';
    return view('/about');
   }
   public function contact(){
    // $data['title']='contact page';
    return view('/contact');
   }
   public function store(Request $req){
      $contact= new Contact();
      $data=[
         'name'=>$req->name,
         'email'=>$req->email,
         'subject'=>$req->subject,
         'message'=>$req->message,
      ];
      $contact->insert($data);
     
  }
  
}
