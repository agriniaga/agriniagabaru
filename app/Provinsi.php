<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = "provinsi";
    public $timestamps = false; 

    public function joinProduk(){
    	return $this->hasMany('App\produk','id_provinsi');
    }
}
