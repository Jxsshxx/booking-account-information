<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function BookingDetails(){
        return view('BookingDetails');
    }

    public function welcome(){
        return view('welcome');
    }

}
