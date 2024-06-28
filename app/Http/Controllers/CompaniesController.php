<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
   public function companies(){
    return view("companies");
   }

    public function data(){
        return redirect('companiseview');
    }
    
    function viewdata(){
       
        return view('companiseview');
    } 
    
    function editdata(){
        return view('/companiesedit');
    }
}
