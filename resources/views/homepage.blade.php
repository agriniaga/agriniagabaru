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
  @include('layouts.menu')
  </div>
	<div class="row" style="padding-top:30px">
		<div div class="col-sm-2"></div>
		<div div class="col-sm-8">
        <div class="col-sm-12" style="height:40px">
          <div class="box" style="width:100%;height:100%;padding:1px;border:0;">
            <table border="2" style="width:100%;height:100%;">
              <tr>
                <td>
                  <span class="fa fa-search" style="width:6%;padding-left:10px;padding-right:10px;margin-top:10px;"></span>
                  <input type="text" style="border:none;width:30%;" placeholder="Cari Produk"> |
                  <select style="border:none;width:25%;">
                    <option style="display: none;" selected>Provinsi</option>
                    <option>Sumatera Barat</option></select> |
                  <select style="border:none;width:25%;">
                    <option style="display: none;" selected>Kategori</option>
                    <option>Pertanian</option>
                  </select>
                  <button class="btn btn-success" style="width:10%;margin-bottom:1px;">
                    <span class="fa fa-search"></span>
                  </button>
                </td>
              </tr>
            </table>
          </div>
        </div>
		</div>
		<div class="col-sm-2"></div>
	</div>

  <div class="row" style="margin-top:50px">
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

</div>

  <div class="row" style="margin-top:70px;">
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
