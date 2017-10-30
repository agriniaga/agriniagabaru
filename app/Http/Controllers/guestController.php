<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guestController extends Controller
{
    public function tips(){
        return view('tips');
    }

    public function syarat(){
        return view('syarat');
    }
}
