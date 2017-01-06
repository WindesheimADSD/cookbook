<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //HOME
    public function home()
    {
        return view('home');
    }
    // ABOUT
    public function about()
    {
        return view('about');
    }
    // CONTACT
    public function contact()
    {
        return view('contact');
    }
}
