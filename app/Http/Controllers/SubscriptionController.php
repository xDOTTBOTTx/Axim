<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscription(){
        return view("subscription");
    }
    public function data(){
        return redirect('subscriptionview');
    }
    
    function viewdata(){
       
        return view('subscriptionview');
    } 
    
    function editdata(){
        return view('/editdata');
    }
}
