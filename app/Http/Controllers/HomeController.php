<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kategori;
use Carbon\Carbon;
use App\Keranjang;
use Auth;

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

    public function belanja(){
        $keranjang = Auth::user()->keranjangKu();
        return view('belanja',compact('keranjang'));
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

    public function pesan(Request $request){
        $keranjang = new keranjang();
        $keranjang->tanggal = Carbon::now()->toDateString();
        $keranjang->id_pembeli = Auth::user()->id;
        $keranjang->no = $keranjang->lastNumber();
        $keranjang->id_produk = $request->id_produk;
        $keranjang->jumlah = $request->jumlahpesan;
        $keranjang->status = 0;
        $keranjang->save();

        return redirect()->back();
    }

}
