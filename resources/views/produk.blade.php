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
    <div class="col-sm-3 col-sm-offset-3" style="color:red;">
      <p><b><h3>Produk Saya</h3></b></p>
    </div>
    <div class="col-sm-3">
      <div style="margin-top:20px;margin-left:5px">
        <a href="{{url('/unggahproduk')}}"><button type="button" name="button" class="btn btn-success">Unggah Produk Baru</button></a>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top:20px">
      <div class="col-sm-7 col-sm-offset-2">
        <div class="box" style="width:100%;border:none;">
          <div class="col-sm-7">
            <div class="box" style="border:0;margin-bottom:5px;">
              <div>
                <table border="2" style="width:100%;height:100%;">
                  <tr>
                    <td>
                      <div class="row" style="margin-left:10px;margin-right:10px;">
                        <p style="padding:none;"><h5>Jagung Manis Asli Palembang</h5>
                        <h5 style="color:green">Palembang</h5>
                        <h5 style="color:green">Pertanian</h5></p>
                      </div>
                      <div class="row" style="margin-left:10px;margin-right:10px;">
                        <label class="pull-left"><h4>Rp. 4000,-/kg</h4></label>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="box" style="border:0;width: 250px;height: 135px;">
              <table border="2" style="width:100%;height:100%;">
                <tr>
                  <td>
                    <div class="">
                      <img src="{{url('image/background.JPEG')}}" style="width: 250px;height: 130px;margin:2px;">
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="box" style="border:none;width:60%;height:50%;">
          <div class="row">
            <h5><center><b>Atur Produk</b></center></h5>
          </div>
          <hr style="margin-top:1px;margin-bottom;2px;">
          <div class="row">
            <center><a href="#editproduk" class="btn btn-primary" style="width:60px" data-toggle="modal">Edit</a></center>
          </div>
          <div class="row" style="margin-top:5px;margin-bottom:5px;">
            <center><a href="#hapusproduk" class="btn btn-danger" style="width:60px" data-toggle="modal">Hapus</a></center>
          </div>
        </div>
      </div>
  </div>

  <div class="row" style="margin-top:20px">
      <div class="col-sm-7 col-sm-offset-2">
        <div class="box" style="width:100%;border:none;">
          <div class="col-sm-7">
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
          </div>
          <div class="col-sm-5">
            <div class="box" style="border:0;width: 250px;height: 135px;">
              <img src="{{url('image/jargon.png')}}" style="width:96%;height:93%;margin:2%;">
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="box" style="border:none;width:60%;height:50%;">
          <div class="row">
            <h5><center><b>Atur Produk</b></center></h5>
          </div>
          <hr style="margin-top:1px;margin-bottom;2px;">
          <div class="row">
            <center><a href="#editproduk" class="btn btn-primary" style="width:60px" data-toggle="modal">Edit</a></center>
          </div>
          <div class="row" style="margin-top:5px;margin-bottom:5px;">
            <center><a href="#hapusproduk" class="btn btn-danger" style="width:60px" data-toggle="modal">Hapus</a></center>
          </div>
        </div>
      </div>
  </div>



  <div id="editproduk" class="modal fade modal-success" role="dialog">
      <div class="modal-dialog">
          <!-- konten modal-->
          <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><center>Edit Produk</center></h4>
              </div>
              <!-- body modal -->
              <form action="" method="post" class="form-horizontal">
                  <div class="modal-body">
                          <table class="table">
                              <tr>
                                  <td width="30%">Nama Produk</td>
                                  <td width="2%">:</td>
                                  <td><input type="text" class="form-control" id="nama_produk" name="nama_produk"></td>
                              </tr>
                              <tr>
                                  <td>Harga</td>
                                  <td>:</td>
                                  <td><input type="text" class="form-control" id="nama_produk" name="nama_produk"></td>
                              </tr>
                              <tr>
                                  <td>Diskon (%)</td>
                                  <td>:</td>
                                  <td><input type="text" class="form-control" id="nama_produk" name="nama_produk"></td>
                              </tr>
                              <tr>
                                  <td>WA</td>
                                  <td>:</td>
                                  <td><input type="text" class="form-control" id="wa" name="wa"></td>
                              </tr>
                              <tr>
                                  <td>BBM</td>
                                  <td>:</td>
                                  <td><input type="text" class="form-control" id="bbm" name="bbm"></td>
                              </tr>
                              <tr>
                                  <td>Kategori</td>
                                  <td>:</td>
                                  <td>
                                    <select id="kategori" class="form-control" style="width:100%">
                                      <option value="pertanian">Pertanian</option>
                                    </select></td>
                              </tr>
                              <tr>
                                  <td>Provinsi</td>
                                  <td>:</td>
                                  <td>
                                    <select id="provinsi" class="form-control" style="width:100%">
                                      <option value="Sumatera Barat">Sumatera Barat</option>
                                    </select></td>
                              </tr>
                              <tr>
                                  <td>Deskripsi</td>
                                  <td>:</td>
                                  <td><textarea class="form-control" style="width:100%"></textarea></td>
                              </tr>
                              <tr>
                                  <td>Foto</td>
                                  <td>:</td>
                                  <td>
                                  <div>
                                    <img src="{{url('image/background.JPEG')}}" style="width:250px;">
                                  </div><br>
                                  <div>
                                    <input type="file" class="form-control">
                                  </div>
                                  </td>
                              </tr>
                          </table>
                  </div>
              <!-- footer modal -->
                  <div class="modal-footer">
                      <button type="submit" name="submit" class="btn btn-default pull-right">Ubah</button>
                  </div>
                      {{ csrf_field() }}
              </form>
              <!-- footer modal -->
              <div class="modal-footer">

              </div>
          </div>
      </div>
  </div>


  <div id="hapusproduk" class="modal fade modal-success" role="dialog">
      <div class="modal-dialog">
          <!-- konten modal-->
          <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><center>Hapus Produk</center></h4>
              </div>
              <!-- body modal -->
              <form action="" method="post" class="form-horizontal">
                  <div class="modal-body">
                    <p><h4>Apakah Anda Yakin Ingin Menghapus Produk <i>XXX</i> ?</h4></p>
                  </div>
              <!-- footer modal -->
                  <div class="modal-footer">
                      <button type="submit" name="submit" class="btn btn-default pull-right">Ya</button>
                  </div>
                      {{ csrf_field() }}
              </form>
              <!-- footer modal -->
              <div class="modal-footer">

              </div>
          </div>
      </div>
  </div>

</div>

@endsection
