<?php

namespace App\Http\Controllers;

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
    }
