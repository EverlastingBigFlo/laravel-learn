<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexCntroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
            return view('about');
        }

    public  function names($names) {
   
    return view('contact' ,['name'=>$names,'age'=>10]);
}
public function register(){
return view('register');
}

public function reg(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required'
    ]);

   User::create($request->all());
   return redirect()->back()->with('message','Registration successfull');
    }




public function login(){
    return view('login');
    }

        

    public function getLogin(Request $request){
        $request -> validate([
            'email' => 'required|email',
            // 'password' => 'min:6|required',

            'password' => 'required|confirmed|min:6',

            'password_confirmation' => 'required',
        ]);
        return "WELCOME";
    }
    }


