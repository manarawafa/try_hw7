<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return "hello from customer controller";
    }
    public function custdata()
    {
        return view('customers');
    }
}
