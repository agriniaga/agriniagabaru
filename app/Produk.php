<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";
    public $timestamps = false; 

    public function joinKategori(){
    	return $this->belongsTo('App\Kategori','id_produk');
    }

    public function joinProvinsi(){
    	return $this->belongsTo('App\Provinsi','id_provinsi');
    }

    public function joinUser(){
    	return $this->belongsTo('App\User','id_user');
    }
}
