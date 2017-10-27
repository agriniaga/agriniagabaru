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
    <div class="col-sm-4"></div>
    <div class="col-sm-5"></div>
    <div class="col-sm-3" style="font-size:20px;">
      <b style="color:green;"><a href="{{url('/')}}" style="color:green;">John</a> | <a href="{{url('/')}}" style="color:black;">Unggah Produk</a></b>
    </div>
  </div> 
	<div class="row" style="padding-top:60px">
		<div div class="col-sm-2"></div>
		<div div class="col-sm-8">
        <div class="col-sm-12" style="height:40px">
          <div class="box" style="width:100%;height:100%;padding:1px;border:0;">
            <span class="fa fa-search" style="width:10%;padding-left:10px;padding-right:20px;margin-top:10px;"></span> 
            <input type="text" style="border:none;width:26%;" placeholder="Cari Produk"> | 
            <select style="border:none;width:25%;">
              <option style="display: none;" selected>Provinsi</option>
              <option>Sumatera Barat</option></select> | 
            <select style="border:none;width:25%;">
              <option style="display: none;" selected>Kategori</option>
              <option>Pertanian</option>
            </select>
            <button class="btn btn-success" style="width:10%;">
              <span class="fa fa-search"></span>
            </button>
          </div>                                               
        </div>  
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

@endsection