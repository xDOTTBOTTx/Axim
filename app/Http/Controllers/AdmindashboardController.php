<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmindashboardController extends Controller
{

    public function admindashboard(){
        return view("admin-dashboard");
    }
    public function login(){
        return view("login");
    }
    public function register(){
        return view("register");
    }
}
