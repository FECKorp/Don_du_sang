<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('isAdmin');
    }

    public function user_gestion() {
        $admins = User::all()->where("is_admin", "=", 1);
        $eleves = User::all()->where("classe_id", "!=", null);
        $users = User::all()->where("classe_id", "=", null)->where("is_admin", "=", 0);
        $countAllUsers = $admins->count() + $eleves->count() + $users->count();
        $classes = Classe::all();
        return view("dashboard.pages.user_gestion", compact("admins", "eleves", "users", "classes", "countAllUsers"));
    }

    public function home() {
        return view("dashboard.template");
    }

    public function template() {
        return view("dashboard.content_base_template");
    }
}
