@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    @include('layouts.head')
  </div>
  <div class="row">
    @include('layouts.menu')
  </div>
  <div class="row" style="margin-top:10px">
    <div class="col-sm-3 col-sm-offset-3 col-md-3 col-lg-3 col-xs-6" style="color:red;">
      <p><b><h3>Produk Saya</h3></b></p>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
      <div style="margin-top:20px;margin-left:5px">
        <a href="{{url('/unggahproduk')}}"><button type="button" name="button" class="btn btn-success">Unggah Produk Baru</button></a>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top:20px">
      <div class="col-sm-10 col-sm-offset-1 col-md-9 col-lg-9 col-xs-12">
        <div class="box" style="border:none;">
          <table border="1">
            <tr>
              <td>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12" style="margin-top:2%">
                  <div class="box" style="border:0;">
                    <div>
                      <table border="2" style="width:100%;height:100%;">
                        <tr>
                          <td>
                            <div class="row" style="margin-left:10px;margin-right:10px;">
                              <p style="padding:none;"><h5>Jagung Manis Asli Palembang</h5>
                              <h5 style="color:green">Palembang</h5>
                              <h5 style="color:green">Pertanian</h5></p>
                            </div>
                            <div class="row" style="margin-left:10px;margin-right:10px;margin-bottom:5px;">
                              <label class="pull-left"><h4>Rp. 4000,-/kg</h4></label>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12" style="margin-top:2%">
                  <div class="box" style="border:0;width: 100%;height: 100%;">
                    <table border="2" style="width:100%;height:100%;">
                      <tr>
                        <td>
                          <div class="">
                            <img src="{{url('image/background.JPEG')}}" style="width: 96%;height:130px;margin-left:2%;margin-right:2%;margin-top:1%;margin-bottom:1%;">
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12" style="margin-top:2%">
                  <div class="box" style="border:none;width:100%;">
                    <table class="table" border="2" width="100%" style="height:140px;">
                      <thead style="height:50%">
                        <tr>
                          <td><center><b>Atur Produk</b></center></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <center><a href="{{url('/editproduk')}}" class="btn btn-primary" style="width:80%">Edit</a></center>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <center><button onclick="hapus()" class="btn btn-danger" style="width:80%">Hapus</button></center>
                          </td>                    
                        </tr>
                      </tbody>
                    </table>
                </div>
              </div>
                
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    

  <div class="row" style="margin-top:20px">
      <div class="col-sm-10 col-sm-offset-1 col-md-9 col-lg-9 col-xs-12">
        <div class="box" style="border:none;">
          <table border="1">
            <tr>
              <td>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12" style="margin-top:2%">
                  <div class="box" style="border:0;">
                    <div>
                      <table border="2" style="width:100%;height:100%;">
                        <tr>
                          <td>
                            <div class="row" style="margin-left:10px;margin-right:10px;">
                              <p style="padding:none;"><h5>Jagung Manis Asli Palembang</h5>
                              <h5 style="color:green">Palembang</h5>
                              <h5 style="color:green">Pertanian</h5></p>
                            </div>
                            <div class="row" style="margin-left:10px;margin-right:10px;margin-bottom:5px;">
                              <label class="pull-left"><h4>Rp. 4000,-/kg</h4></label>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12" style="margin-top:2%">
                  <div class="box" style="border:0;width: 100%;height: 100%;">
                    <table border="2" style="width:100%;height:100%;">
                      <tr>
                        <td>
                          <div class="">
                            <img src="{{url('image/background.JPEG')}}" style="width: 96%;height:130px;margin-left:2%;margin-right:2%;margin-top:1%;margin-bottom:1%;">
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12" style="margin-top:2%">
                  <div class="box" style="border:none;width:100%;">
                    <table class="table" border="2" width="100%" style="height:140px;">
                      <thead style="height:50%">
                        <tr>
                          <td><center><b>Atur Produk</b></center></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <center><a href="{{url('/editproduk')}}" class="btn btn-primary" style="width:80%">Edit</a></center>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <center><button onclick="hapus()" class="btn btn-danger" style="width:80%">Hapus</button></center>
                          </td>                    
                        </tr>
                      </tbody>
                    </table>
                </div>
              </div>
                
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

  <script type="text/javascript">
    function hapus(){
      var konfirmasi = confirm('Apakah Anda Yakin Ingin Menghapus Produk?');
      if (konfirmasi == true) {
        alert('okey');
      } else{

      };
    }
  </script>

</div>

@endsection
