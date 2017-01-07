<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //HOME
    public function home()
    {
        alert()->info('Welcome to the laravel class ', 'This is a message to show that it works with Sweet Alert')->autoclose(3500);
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
