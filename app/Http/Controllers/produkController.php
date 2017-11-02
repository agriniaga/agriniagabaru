<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk;

class produkController extends Controller
{
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
}
