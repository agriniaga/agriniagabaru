<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = "keranjang";
    public $timestamps = false;

    public function joinProduk(){
    	return $this->belongsTo('App\produk','id_produk');
    }

    public function lastNumber(){
    	$number = 1;
    	$lastBucket = keranjang::orderBy('no','desc')->first();
    	if($lastBucket!=null){
    		if($lastBucket->status==0){
    			$number = $lastBucket->no;
    		}else{
    			$number += $lastBucket->no;
    		}
    	}
    	return $number;
    }

    public function hargaBayar(){
    	return $this->joinProduk->harga - $this->joinProduk->diskon;
    }
}
