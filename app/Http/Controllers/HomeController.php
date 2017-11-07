<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kategori;
use Carbon\Carbon;
use App\Keranjang;
use Auth;
use App\User;

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

    public function pencarian(){
    	return view('pencarian');
    }

    public function belanja(){
        $keranjang = Auth::user()->keranjangKu();
        return view('belanja',compact('keranjang'));
    }

    public function profil(){
        return view('profil');
    }

    public function pemesanan(){
        $pesan = Auth::user()->checkOrder();
        return view('pemesanan',compact('pesan'));
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

    public function batalpesan(Request $request){
        $keranjang = keranjang::find($request->id);
        $keranjang->delete();

        return redirect()->back();
    }

    public function order(Request $request){
        \DB::table('keranjang')->where('status','0')
        ->update(['status'=>'1']);
        return redirect()->back();
    }

    public function updateprofil(Request $request){
        $datauser = User::find(Auth::user()->id);

        $datauser->name = $request->nama2;
        $datauser->alamat = $request->alamat2;
        $datauser->email = $request->email2;
        $datauser->wa = $request->no_hp2;
        $datauser->bbm = $request->bbm2;
        $datauser->pekerjaan = $request->pekerjaan2;
        $datauser->save();

        return redirect('profil');
    }

    public function bukatoko(Request $request){
        $datauser = User::find(Auth::user()->id);

        $datauser->role = 2;
        $datauser->nama_toko = $request->nama_toko;
        $datauser->npwp = $request->npwp;
        $datauser->ktp = $request->ktp;
        $datauser->telp_toko = $request->telp;
        $datauser->wa = $request->hp;
        $datauser->email_toko = $request->email;
        $datauser->kategori_toko = $request->kategori;
        $datauser->foto_toko = "";
        $datauser->save();

        return redirect('homepage');
    }

    public function confirmOrder(Request $request){
        $order = Keranjang::where('id_pembeli',$request->id_pembeli)
                    ->where('no',$request->no)->get();
        foreach ($order as $key) {
            $key->status=2;
            $key->save();   
         }

         return redirect('pemesanan');
    }


}
