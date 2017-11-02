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
    @if(Auth::guest())
    <div class="col-sm-3 col-md-offset-9" style="font-size:20px;">
      <b style="color:green;"><a href="{{url('/register')}}" style="color:green;">Daftar</a> | <a href="{{url('/login')}}" style="color:green;">Masuk</a></b>
    </div>
    @else
      @include('layouts.menu')
    @endif
  </div> 
	<div class="row" style="padding-top:40px;color:green;">
    <div class="col-md-10 col-md-offset-2">
      <b style="align-text:left;"><p>Tips Jual dan Beli</p>    
        <p style="align-text:left;">
          Tips untuk penjual :
        </p>
        <div>
          1. Berikan informasi produk secara jelas dan detail.
        </div>
        <div>
          2. Apabila menggunakan COD, bertemulah d tempat aman.
        </div>
        <div>
          3. Apabila pembayaran online, hanya terima lewat rekening Agriniaga.
        </div>
        <div>
          4. Waspada terhadap penipuan berupa tawaran yang menggiurkan.
        </div><br>
        <p style="align-text:left;">
          Tips untuk pembeli :
        </p>
        <div>
          1. Cek lah barang secara jelas dan detail.
        </div>
        <div>
          2. Apabila menggunakan COD, bertemulah d tempat aman.
        </div>
        <div>
          3. Apabila pembayaran online, hanya terima lewat rekening Agriniaga.
        </div>
        <div>
          4. Waspada terhadap penipuan.
        </div></b>
    </div>
	</div>
</div>

  <div class="row" style="margin-top:80px;">
    @include('layouts.app2')
  </div>

@endsection