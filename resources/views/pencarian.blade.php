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
     <h3 style="color:red"><b>Hasil Pencarian : Jagung Manis </b></h3>     
    </div>
  </div>
  <div class="row" style="padding-top:20px">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="row" style="margin-bottom:20px;">
          <div class="col-sm-5">  
            <div class="box" style="border:0;width: 350px;height: 205px;">
              <img src="{{url('image/background.JPEG')}}" style="width:96%;height:93%;margin:2%;">              
            </div>                                         
          </div> 
          <div class="col-sm-5 col-sm-offset-2" style="margin-left: 80px;">
            <div class="box" style="border:0;margin-bottom:5px;">
              <div style="padding-left:3%;padding-right:3%;padding-top:1%;padding-bottom:1%;">
                <div class="row" style="margin-left:10px;margin-right:10px;">
                  <p style="padding:none;"><h5>Jagung Manis Asli Palembang</h5>
                  <h5 style="color:green">Palembang</h5>
                  <h5 style="color:green">Pertanian</h5></p>                  
                </div>
                <div class="row" style="margin-left:10px;margin-right:10px;">
                  <label class="pull-left"><h4>Rp. 4000,-/kg</h4></label>                  
                  <label class="pull-right"><h4><b>Diskon 10%</b></h4></label>
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
</div>

@endsection