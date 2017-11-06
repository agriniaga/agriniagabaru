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
      <form method="post" action="{{url('produk/search')}}">
        {{ csrf_field() }}
        <div class="col-sm-12" style="height:40px">
          <div class="box" style="width:100%;height:100%;padding:1px;border:0;">
            <span class="fa fa-search" style="width:5%;padding-left:10px;padding-right:10px;margin-top:10px;"></span> 
            <input name="nama" type="text" style="border:none;width:30%;" placeholder="Cari Produk"> | 
            <select name="provinsi" style="border:none;width:25%;">
              <option style="display: none;" value="0" selected>Provinsi</option>
              @foreach($provinsi as $p)
                <option value="{{$p->id}}">{{$p->nama}}</option>
              @endforeach
            </select> | 
            <select name="kategori" style="border:none;width:25%;">
              <option style="display: none;" value="0" selected>Kategori</option>
              @foreach($kategori as $k)
                <option value="{{$k->id}}">{{$k->nama}}</option>
              @endforeach
            </select>
            <button name="submit" class="btn btn-success" style="width:10%;">
              <span class="fa fa-search"></span>
            </button>
          </div>                                               
        </div>
      </form>  
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>

  <div class="row" style="margin-top:250px;">
    @include('layouts.app2')
  </div>
@endsection
