<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password','role','wa','bbm','alamat','email','pekerjaan',
        'nama_toko', 'alamat_toko', 'npwp','ktp','telp_toko','alamat','email_toko','kategori_toko','foto_toko',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function joinProduk(){
        return $this->belongsTo('App\Produk','id_produk');
    }

    public function keranjangKu(){
        $bucket = Keranjang::where('id_pembeli',$this->id)
                    ->where('status',0)->get();
        return $bucket;
    }

    public function totalKeranjangKu(){
        $bucket = Keranjang::where('id_pembeli',$this->id)
                    ->where('status',0)->get();
        $total = 0;
        foreach ($bucket as $key) {
            $total += $key->hargaBayar();
        }
        return $total;
    }
}
