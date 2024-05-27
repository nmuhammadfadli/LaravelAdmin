<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function galery()
    {
        return view('galery');
    }

    public function product()
    {
        return view('product');
    }

    public function contact()
    {
        return view('contact');
    }
}
