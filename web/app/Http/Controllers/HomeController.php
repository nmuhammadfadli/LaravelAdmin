<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(!session('login')){
            return redirect('/login');
        }else{
            return view('dashboard');
        }
    }
}
