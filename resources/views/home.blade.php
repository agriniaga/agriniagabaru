@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div style="width:100%;text-align:center">
        <img src="{{url('image/nama2.png')}}" style="width: 30%;height: 20%;position:relative;">
    </div>
    <hr style="width:80%; background-color: green; height: 1px; border: 0;position:relative;">
  </div>
  <div class="row">
    <div class="col-sm-9 col-sm-offset-2 col-md-9 col-xs-11 col-lg-9"style="font-size:100%;">
      <b style="color:green;" class="pull-right">
        <a href="{{url('/')}}" style="color:black;">Agriniaga</a> |
        <a href="{{url('/register')}}" style="color:green;">Daftar</a> |
        <a href="{{url('/login')}}" style="color:green;">Masuk</a></b>
    </div>
  </div>

  <div class="row" style="padding-top:20px;">
    <div class="col-sm-5 col-md-5 col-xs-12 col-lg-5">
      <div class="box" style="width:100%;height:100%;border:0;">
        <table border="2" style="width:100%;height:100%;">
          <tr>
            <td>
              <div class="col-md-1 col-sm-1 col-lg-1 col-xs-1" style="padding:0px;">
                <button class="btn btn-default" style="width:100%;" disabled>
                  <span class="fa fa-search"></span>                    
                </button>              
              </div>
              <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
                <div class="row">
                  <input type="text" style="border:none;width:100%;height:30px" placeholder="Cari Produk">               
                </div>           
              </div>
              <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
                <select style="border:none;width:100%;;height:30px">
                  <option style="display: none;" selected>Provinsi</option>
                  <option>Sumatera Barat</option></select>            
              </div>
              <div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
                <select style="border:none;width:100%;height:30px">
                  <option style="display: none;" selected>Kategori</option>
                  <option>Pertanian</option>
                </select>                
              </div>
              <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2" style="padding-right:0px;">
                <button class="btn btn-success" style="width:100%;">
                  <span class="fa fa-search"></span>
                </button>                
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="col-sm-5">

    </div>
  </div>

  <div class="row" style="padding-top:20px">
      <div class="col-sm-3 col-md-3 col-xs-6 col-lg-3">
        <div class="box" style="border:0;width: 100%;height: 100%;">
          <table border="2" style="width:100%;height:100%;">
            <tr>
              <td>
                <div>
                  <img src="{{url('image/background.JPEG')}}" style="width:96%;height:70%;margin:2%;">
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <span>Jagung Manis Asli Palembang</span>
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <span style="color:green">Rp.4.000,-</span>
                  <span class="pull-right-container"><small class="label pull-right bg-green" style="margin-right:10%">Verified</small></span>                
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <a href="{{url('/belanja')}}" class="btn btn-sm btn-success" style="margin-bottom:1px">Pesan</a>                  
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-sm-3 col-md-3 col-xs-6 col-lg-3">
        <div class="box" style="border:0;width: 100%;height: 100%;">
          <table border="2" style="width:100%;height:100%;">
            <tr>
              <td>
                <div>
                  <img src="{{url('image/background.JPEG')}}" style="width:96%;height:70%;margin:2%;">
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <span>Jagung Manis Asli Palembang</span>
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <span style="color:green">Rp.4.000,-</span>   
                  <span class="pull-right-container"><small class="label pull-right bg-green" style="margin-right:10%">Verified</small></span>                
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <a href="{{url('/belanja')}}" class="btn btn-sm btn-success" style="margin-bottom:1px">Pesan</a>                  
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-sm-3 col-md-3 col-xs-6 col-lg-3">
        <div class="box" style="border:0;width: 100%;height: 100%;">
          <table border="2" style="width:100%;height:100%;">
            <tr>
              <td>
                <div>
                  <img src="{{url('image/background.JPEG')}}" style="width:96%;height:70%;margin:2%;">
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <span>Jagung Manis Asli Palembang</span>
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <span style="color:green">Rp.4.000,-</span>                  
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <a href="{{url('/belanja')}}" class="btn btn-sm btn-success" style="margin-bottom:1px">Pesan</a>                  
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-sm-3 col-md-3 col-xs-6 col-lg-3">
        <div class="box" style="border:0;width: 100%;height: 100%;">
          <table border="2" style="width:100%;height:100%;">
            <tr>
              <td>
                <div>
                  <img src="{{url('image/background.JPEG')}}" style="width:96%;height:70%;margin:2%;">
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <span>Jagung Manis Asli Palembang</span>
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <span style="color:green">Rp.4.000,-</span>                  
                </div>
                <div class="row" style="margin-left:1%;margin-top:5%">
                  <a href="{{url('/belanja')}}" class="btn btn-sm btn-success" style="margin-bottom:1px">Pesan</a>                  
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
  </div>

  <div class="row" style="margin-top:30px;">
    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-xs-12 col-lg-10">
      <center> Page <b style="color:green;">1</b> </center>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1 col-md-10 col-xs-12 col-lg-10">
      <center><button type="button" name="button" class="btn btn-sm btn-default">Prev</button> &nbsp;
         <a href="#"  style="color:green;">1</a> <a href="#" style="color:green;">2</a> &nbsp;
         <button type="button" name="button" class="btn btn-sm btn-default">Next</button> </center>
    </div>
  </div>

    <div class="row" style="margin-top:10%;">
      @include('layouts.app2')
    </div>

</div>


@endsection
