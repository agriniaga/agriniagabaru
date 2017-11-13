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
    <div class="col-sm-9 col-sm-offset-2" style="font-size:20px;">
      <b style="color:green;" class="pull-right">
        <a href="{{url('/')}}" style="color:black;">Agriniaga</a> |
        <a href="{{url('/register')}}" style="color:green;">Daftar</a> |
        <a href="{{url('/login')}}" style="color:green;">Masuk</a></b>
    </div>
  </div>

  <div class="row" style="padding-top:20px;">
    <div class="col-sm-5">
      <div class="box" style="width:100%;height:100%;border:0;">
        <table border="2" style="width:100%;height:100%;">
          <tr>
            <td>
              <span class="fa fa-search" style="width:5%;padding-left:10px;padding-right:10px;margin-top:10px;"></span>
              <input type="text" style="border:none;width:29%;" placeholder="Cari Produk"> |
              <select style="border:none;width:25%;">
                <option style="display: none;" selected>Provinsi</option>
                <option>Sumatera Barat</option></select> |
              <select style="border:none;width:25%;">
                <option style="display: none;" selected>Kategori</option>
                <option>Pertanian</option>
              </select>
              <button class="btn btn-success" style="width:10%; margin-bottom:1px;">
                <span class="fa fa-search"></span>
              </button>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

	<div class="row" style="padding-top:20px">
      <div class="col-sm-3">
        <div class="box" style="border:0;width: 250px;height: 270px;">
          <table border="2" style="width:100%;height:100%;">
            <tr>
              <td>
                <div>
                  <img src="{{url('image/background.JPEG')}}" style="width:96%;height:70%;margin:2%;">
                </div>
                <div class="" style="margin-left:5px;">
                  <h5>Jagung Manis Asli Palembang</h5>
                  <h5 style="color:green">Rp.4.000,-</h5>
                  <a href="{{url('/login')}}" class="btn btn-sm btn-success">Pesan</a>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="box" style="border:0;width: 250px;height: 270px;">
          <table border="2" style="width:100%;height:100%;">
            <tr>
              <td>
                <div>
                  <img src="{{url('image/background.JPEG')}}" style="width:96%;height:70%;margin:2%;">
                </div>
                <div class="" style="margin-left:5px;">
                  <h5>Jagung Manis Asli Palembang</h5>
                  <h5 style="color:green">Rp.4.000,-</h5>
                  <a href="{{url('/login')}}" class="btn btn-sm btn-success">Pesan</a>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="box" style="border:0;width: 250px;height: 270px;">
          <table border="2" style="width:100%;height:100%;">
            <tr>
              <td>
                <div>
                  <img src="{{url('image/background.JPEG')}}" style="width:96%;height:70%;margin:2%;">
                </div>
                <div class="" style="margin-left:5px;">
                  <h5>Jagung Manis Asli Palembang</h5>
                  <h5 style="color:green">Rp.4.000,-</h5>
                  <a href="{{url('/login')}}" class="btn btn-sm btn-success">Pesan</a>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="box" style="border:0;width: 250px;height: 270px;">
          <table border="2" style="width:100%;height:100%;">
            <tr>
              <td>
                <div>
                  <img src="{{url('image/background.JPEG')}}" style="width:96%;height:70%;margin:2%;">
                </div>
                <div class="" style="margin-left:5px;">
                  <h5>Jagung Manis Asli Palembang</h5>
                  <h5 style="color:green">Rp.4.000,-</h5>
                  <a href="{{url('/login')}}" class="btn btn-sm btn-success">Pesan</a>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
	</div>

  <div class="row" style="margin-top:30px;">
    <div class="col-sm-10 col-sm-offset-1">
      <center> Page <b style="color:green;">1</b> </center>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <center><button type="button" name="button" class="btn btn-sm btn-default">Prev</button> &nbsp;
         <a href="#"  style="color:green;">1</a> <a href="#" style="color:green;">2</a> &nbsp;
         <button type="button" name="button" class="btn btn-sm btn-default">Next</button> </center>
    </div>
  </div>

    <div class="row" style="margin-top:70px;">
      @include('layouts.app2')
    </div>

</div>


@endsection
