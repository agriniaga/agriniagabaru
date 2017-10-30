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
  @include('layouts.menu')
  </div> 
	<div class="row" style="padding-top:60px">
		<div div class="col-sm-2"></div>
		<div div class="col-sm-8">
        <div class="col-sm-12" style="height:40px">
          <div class="box" style="width:100%;height:100%;padding:1px;border:0;">
            <span class="fa fa-search" style="width:5%;padding-left:10px;padding-right:10px;margin-top:10px;"></span> 
            <input type="text" style="border:none;width:30%;" placeholder="Cari Produk"> | 
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

  <div class="row" style="margin-top:250px;">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <div class="col-sm-6">
        <div>
          <a href="" style="color:green;">Tips Jual Beli</a>
        </div>
        <div>
          <a href="" style="color:green;">Pasang Iklan</a>
        </div>
        <div>
          <a href="" style="color:green;">Sarat dan Ketentuan</a>
        </div>        
      </div>
      <div class="col-sm-6">
        <div>
          <a href="" style="color:green;">Tentang Kami</a>
        </div>
        <div>
          <a href="" style="color:green;">Customer Care</a>
        </div>        
      </div>
    </div>
    <div class="col-sm-0">
    </div>
    <div class="col-sm-4">
      <div class="col-sm-6">
        <div>
          <img src="{{url('image/ig.png')}}" width="20px" height="20px"> | <a href="" style="color:black;">agriniaga</a>
        </div>
        <div>
          <img src="{{url('image/twitter.png')}}" width="20px" height="20px"> | <a href="" style="color:black;">@agriniaga01</a>
        </div>      
      </div>
      <div class="col-sm-6">
        <div>
          <img src="{{url('image/fb.png')}}" width="20px" height="20px"> | <a href="" style="color:black;">Agriniaga</a>
        </div>
        <div>
          <img src="{{url('image/youtube.png')}}" width="20px" height="20px"> | <a href="" style="color:black;">Agriniaga</a>
        </div>        
      </div>      
    </div>
    <div class="col-sm-2"></div>
  </div>
@endsection