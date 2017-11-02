<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function homepage(){
        $provinsi = Provinsi::all();
        $kategori = Kategori::all();
    	return view('homepage',compact('provinsi','kategori'));
    }

    public function pencarian(){
    	return view('pencarian');
    }

    public function unggahproduk(){
        return view('unggahproduk');
    }

}
