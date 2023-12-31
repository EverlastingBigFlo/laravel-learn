<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexCntroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }

    public  function names($names)
    {

        return view('contact', ['name' => $names, 'age' => 10]);
    }
    public function register()
    {
        return view('register');
    }

    public function reg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'age' => 'required|integer|gte:17', 
            'country' => 'required',
            'password' => 'required'
        ]);

        //to create account to the database
        User::create($request->all());

        //    to route to a page that will flash after successful login
        return redirect()->back()->with('message', 'Registration successfull');
    }




    public function login()
    {
        return view('login');
    }



    public function getLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',

            'password' => 'required|confirmed|min:6',

            'password_confirmation' => 'required',
        ]);
        return "WELCOME";
    }
}
