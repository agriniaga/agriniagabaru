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
        'nama_toko', 'alamat_toko', 'npwp','ktp','telp_toko','email_toko','kategori_toko','foto_toko',
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

    public function myProduct(){
        $product = Produk::where('id_user',$this->id)->get();
        return $product;
    }

    public function checkPendingOrder(){
        $pesanan = \DB::table('keranjang')
        ->join('produk','produk.id','=','keranjang.id_produk')
        ->where('produk.id_user','=',$this->id)
        ->where('keranjang.status','=','1')
        ->select('keranjang.id_pembeli','keranjang.no')
        ->groupBy('keranjang.id_pembeli','keranjang.no')
        ->get();
        return $pesanan;
    }

    public function checkOrder(){
        $pesanan = \DB::table('keranjang')
        ->join('produk','produk.id','=','keranjang.id_produk')
        ->where('produk.id_user','=',$this->id)
        ->where('keranjang.status','<>',0)
        ->select('keranjang.id_pembeli','keranjang.no','keranjang.status')
        ->groupBy('keranjang.id_pembeli','keranjang.no','keranjang.status')
        ->orderBy('keranjang.status','asc')
        ->get();
        return $pesanan;
    }

    public function showOrder($pembeli,$keranjang){
        $keranjang = \DB::table('keranjang')
        ->join('produk','produk.id','=','keranjang.id_produk')
        ->join('users','keranjang.id_pembeli','=','users.id')
        ->where('keranjang.id_pembeli',$pembeli)
        ->where('keranjang.no',$keranjang)
        ->select('users.name','produk.nama','keranjang.tanggal','keranjang.jumlah','keranjang.status')
        ->orderBy('keranjang.tanggal','desc')
        ->get();

        return $keranjang;
    }
}
