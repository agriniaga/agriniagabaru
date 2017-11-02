<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    public $timestamps = false; 

    public function joinProduk(){
    	return $this->hasMany('App\produk','id_kategori');
    }
}
