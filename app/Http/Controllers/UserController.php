<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('home_us');
    }
    public function contact()
    {
        return view('contact_us');
    }
    public function about()
    {
        return view('about_us');
    }


}

