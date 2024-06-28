<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class UserController extends Controller
{
   
    public function users(){
        return view("users");
    }

     public function data(){
        return redirect('userview');
    }

    function viewdata(){
   
    return view('userview');
    } 

        function editdata(){
        return view('/editdata');
        } 
}
