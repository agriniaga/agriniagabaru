<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{

  public function manajemenAkun(){
    $akun = User::where('role','<>',100)->get();
    return view('/manajemenakun',compact('akun'));
  }

  public function hapusAkun(Request $request){
  	$akun = User::find($request->id_hapus);
  	$akun->delete();
  	return redirect('manajemenakun');
  }

  public function verifikasiAkun(Request $request){
  	$akun = User::find($request->id_verifikasi);
  	$akun->role=1;
  	$akun->save();
  	return redirect('manajemenakun');
  }

  public function editAkun(Request $request){
  	$akun = User::find($request->id_edit);
  	$akun->name= $request->nama_edit;
  	$akun->email= $request->email_edit;
  	$akun->wa= $request->no_hp_edit;
  	$akun->ktp= $request->ktp_edit;
  	$akun->nama_toko= $request->nama_toko_edit;
  	$akun->save();
  	return redirect('manajemenakun');
  }

  public function akunAPI($id){
  	$akun = User::find($id);
  	return $akun;
  }

}
