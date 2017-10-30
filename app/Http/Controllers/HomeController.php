<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function register(){
    	return view('register');
    }

    public function homepage(){
    	return view('homepage');
    }

    public function pencarian(){
    	return view('pencarian');
    }

    public function tips(){
        return view('tips');
    }

    public function syarat(){
        return view('syarat');
    }

    public function unggahproduk(){
        return view('unggahproduk');
    }

}
