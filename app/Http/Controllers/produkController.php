<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk;
use App\Kategori;
use App\Provinsi;
use Auth;

class produkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function produkSearch(Request $request){
    	return redirect('pencarian/'.$request->provinsi.'/'.$request->kategori.'/'.$request->nama);
    }

    public function searchWithName($provinsi,$kategori,$nama){
    	$where = "";
    	if($provinsi != '0' && $kategori != '0'){
    		$where = " id_provinsi = '".$provinsi."' and id_kategori = '".$kategori."' and";
    	} else if($provinsi != '0'){
    		$where = " id_provinsi = '".$provinsi."' and ";
    	} else if($kategori != '0'){
    		$where = " id_kategori = '".$kategori."' and ";
    	}

    	$whereNama = "nama like '%".$nama."%'";

    	$produk = DB::select('select * from produk where'.$where." ".$whereNama);

    	return view('pencarian',compact('produk','nama'));

    }

    public function searchWithoutName($provinsi,$kategori){
    	$where = "";
    	if($provinsi != '0' && $kategori != '0'){
    		$where = " where id_provinsi = '".$provinsi."' and id_kategori = '".$kategori."'";
    	} else if($provinsi != '0'){
    		$where = " where id_provinsi = '".$provinsi."'";
    	} else if($kategori != '0'){
    		$where = " where id_kategori = '".$kategori."'";
    	}

        $nama = "";
    	$produk = DB::select('select * from produk'.$where);

    	return view('pencarian',compact('produk','nama'));
    }

    public function produk(){
        $Produk = Auth::user()->myProduct();
        $Kategori = Kategori::all();
        $Provinsi = Provinsi::all();
        return view('produk',compact('Produk','Kategori','Provinsi'));
    }

    public function hapusproduk(Request $request){
        $Produk = Produk::find($request->id_hapus);
        $Produk->delete();
        return redirect('produk');
    }

    public function editproduk(Request $request){
        $Produk = Produk::find($request->id_edit);
        $Produk->nama = $request->nama_produk;
        $Produk->harga = $request->harga_produk;
        $Produk->diskon = $request->diskon_produk;
        $Produk->id_provinsi = $request->provinsi_produk;
        $Produk->id_kategori = $request->kategori_produk;
        $Produk->deskripsi = $request->deskripsi_produk;
        $Produk->save();
        return redirect('produk');
    }

    public function productAPI($id){
        $produk = Produk::find($id);
        return $produk;
    }

}
