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
      $messages=[
         'name.required'=>'you have to put your name',
         'email.required'=>'Please put your email',
         'email.email'=>'Put valid email',
      ];
    $validate=$req->validate([
      'name'=>'required|min:5',
      'email'=>'required|email',
      'subject'=>'required|min:5',
      'message'=>'required|min:5',
    ], $messages);
      if($validate){

         $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'subject'=>$req->subject,
            'message'=>$req->message,
         ];
         $contact->insert($data);
        
         return redirect('contact')->with('msg', 'We have received your message');
       
      }

  }
  public function contactList(){
   $contacts= Contact::all();
   $data['messages']= $contacts;
   return view('contactList', $data);
  }
 
  
}
