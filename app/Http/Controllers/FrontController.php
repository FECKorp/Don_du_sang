<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function home() {
        return view('base_template');
    }

    public function login()
    {
        return view("login");
    }
}
