<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kategori;
use Carbon\Carbon;
use App\Keranjang;

class guestController extends Controller
{
    public function tips(){
        return view('tips');
    }

    public function syarat(){
        return view('syarat');
    }

    public function homepage(){
        $provinsi = Provinsi::all();
        $kategori = Kategori::all();
    	return view('homepage',compact('provinsi','kategori'));
    }

}
