@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div style="width:100%;text-align:center">
        <img src="{{url('image/nama.png')}}" style="width: 20%;height: 20%;position:relative;">
    </div>
    <div style="width:100%;text-align:center">
        <img src="{{url('image/jargon.png')}}" style="width: 30%;height: 30%;position:relative;">
    </div>
    <hr style="width:80%; background-color: green; height: 1px; border: 0;position:relative;">
  </div>
  <div class="row">
    <div class="col-sm-3 col-md-offset-9" style="font-size:20px;">
      <b style="color:green;"><a href="{{url('/register')}}" style="color:green;">Daftar</a> | <a href="{{url('/login')}}" style="color:green;">Masuk</a></b>
    </div>
  </div> 
  <div class="row" style="padding-top:40px;color:green;">
    <div class="col-md-6 col-md-offset-2">
      <b style="align-text:left;"><p>Syarat dan ketentuan di agriniaga.com :</p>
        <div>
          1. Untuk mengupload produk, harus daftar dulu menjadi member agriniaga.
        </div>
        <div>
          2. Produk yang diupload tidak boleh mengandung unsur SARA, tabu, dan vulgar.
        </div>
        <div>
          3. Agriniaga tidak berhak menentukan harga, karna harga ditentukan oleh penjual dan hasil negosiasi antara penjual dan pembeli
        </div>
        <div>
          4. Agriniaga tidak bertanggungjawag terhadap kualitas yang dikirim oleh penjual. Oleh karena itu kami menganjurkan setiap pembeli mengecek produk secara langsung.
        </div>
        <div>
          5. Apabila terdapat penipuan terhadap pembayaran selain dari rekening Agriniaga, kami tidak akan bertanggungjawab.
        </div></b>
    </div>
  </div>
</div>

  <div class="row" style="margin-top:100px;">
    @include('layouts.app2')
  </div>

@endsection