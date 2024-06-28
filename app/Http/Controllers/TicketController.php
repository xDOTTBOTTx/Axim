<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function ticket(){
        return view("tickets");
    }

    public function data(){
        return redirect('ticketsview');
    }
    
    function viewdata(){
       
        return view('ticketsview');
    } 
    function editdata(){
        return view('/ticketsedit');
    }
}
