<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function home() {
        return view("dashboard.template");
    }

    public function template()
    {
        return view("dashboard.content_base_template");
    }
}
