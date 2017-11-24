<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    	return view('home');
    }

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

    public function belanja(){
        return view('belanja');
    }

    public function profil(){
        return view('profil');
    }

    public function produk(){
        return view('produk');
    }

    public function pemesanan(){
        return view('pemesanan');
    }

    public function pembelian(){
        return view('pembelian');
    }

    public function bukatoko(){
        return view('bukatoko');
    }

    public function editproduk(){
        return view('editproduk');
    }


}
