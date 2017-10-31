@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    @include('layouts.head')
  </div>
  <div class="row">
  @include('layouts.menu')
  </div> 
  <div class="row">
    <div class="col-sm-10 col-sm-offset-2" style="padding-top:10px">
     <h3 style="color:red"><b>Hasil Pencarian : {{$nama}} </b></h3>     
    </div>
  </div>
  @foreach($produk as $p)
  <div class="row" style="padding-top:20px">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="row" style="margin-bottom:20px;">
          <div class="col-sm-5">  
            <div class="box" style="border:0;width: 350px;height: 190px;">
              <img src="{{url('image/background.JPEG')}}" style="width:96%;height:93%;margin:2%;">              
            </div>                                         
          </div> 
          <div class="col-sm-5 col-sm-offset-2" style="margin-left: 80px;">
            <div class="box" style="border:0;margin-bottom:5px;">
              <div style="padding-left:3%;padding-right:3%;padding-top:1%;padding-bottom:1%;">
                <p style="padding:none;"><h5>{{$p->nama}}</h5>
                <h5 style="color:green">{{$p->id_provinsi}}</h5>
                <h5 style="color:green">{{$p->id_kategori}}</h5></p>
                <div>
                  <p><h4>Rp. {{$p->harga}},-/{{$p->satuan}}</h4></p>
                </div>
              </div>            
            </div>
            <div class="box" style="border:0;height:65px;">
              <div class="row" style="padding-left:3%;padding-right:3%;padding-top:1%;padding-bottom:1%;">
                <div class="col-sm-7">
                  <p style="color:green"><b>Bambang</b><br>WA : 081271545023 <br> BBM : 123ABC</p>
                </div>
                <div class="col-sm-5">
                  <a href="" style="color:green">Kirim Pesan</a>
                </div>
              </div>          
            </div>
          </div>          
        </div>
    </div>

    <div class="col-sm-2"></div>
  </div>
  @endforeach
</div>

<div class="row" style="margin-top:150px;">
    @include('layouts.app2')
  </div>

@endsection