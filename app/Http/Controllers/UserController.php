<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index_page()
    {
        return view('index');
    }

    public function demo()
    {
        return view('index');
    }

    public function demo_1()
    {
        return view('indexz');
    }
}
