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
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <h3 style="color:green;"><b>Manajemen Akun</b></h3>
    </div>
  </div>
	<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered" style="display:block;overflow-x:auto">
            <thead>
              <th width="1%"><center>No</th>
              <th><center>Username</th>
              <th><center>Nama</th>
              <th><center>Nama Toko</th>
              <th><center>KTP</th>
              <th><center>Status</th>
              <th width="30%"><center>Pilihan</th>
            </thead>
            <tbody style="text-align:center">
              <tr>
                <td>1</td>
                <td>John123</td>
                <td>John</td>
                <td>Maju Johny</td>
                <td>123456789101112131415</td>
                <td><span><small class="label bg-green">Pembeli</small></span></td>
                <td>
                    <a href="#editakun" class="btn btn-success btn-sm" style="width:80px;" data-toggle="modal">Edit</a>
                    <a href="#hapusakun" class="btn btn-danger btn-sm" style="width:80px;" data-toggle="modal">Delete</a>
                </td>
              </tr>
                <tr>
                  <td>2</td>
                  <td>John123</td>
                  <td>John</td>
                  <td>Maju Johny</td>
                  <td>123456789101112131415</td>
                  <td><span><small class="label bg-orange">Penjual</small></span></td>
                  <td>
                      <a href="#editakun" class="btn btn-success btn-sm" style="width:80px;" data-toggle="modal">Edit</a>
                      <a href="#hapusakun" class="btn btn-danger btn-sm" style="width:80px;" data-toggle="modal">Delete</a>
                  </td>
                </tr>
                  <tr>
                    <td>3</td>
                    <td>John123</td>
                    <td>John</td>
                    <td>Maju Johny</td>
                    <td>123456789101112131415</td>
                    <td><span><small class="label bg-blue">Verifikasi</small></span></td>
                    <td><a href="#verifikasi" class="btn btn-primary btn-sm" style="width:80px;" data-toggle="modal">Verified</a>
                        <a href="#editakun" class="btn btn-success btn-sm" style="width:80px;" data-toggle="modal">Edit</a>
                        <a href="#hapusakun" class="btn btn-danger btn-sm" style="width:80px;" data-toggle="modal">Delete</a>
                    </td>
                  </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
	</div>


    <div id="editakun" class="modal fade modal-success" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Edit Akun</center></h4>
                </div>
                <!-- body modal -->
                <form action="" method="post" class="form-horizontal">
                    <div class="modal-body">
                            <table class="table">
                                <tr>
                                    <td width="30%">Nama</td>
                                    <td width="2%">:</td>
                                    <td><input type="text" class="form-control" id="nama_akun" name="nama_akun"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="email" name="email"></td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="no_hp" name="no_hp"></td>
                                </tr>
                                <tr>
                                    <td>KTP</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="KTP" name="KTP"></td>
                                </tr>
                                <tr>
                                    <td>Nama Toko</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="Nama Toko" name="Nama Toko"></td>
                                </tr>
                            </table>
                    </div>
                <!-- footer modal -->
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-default pull-right">Edit</button>
                    </div>
                        {{ csrf_field() }}
                </form>
                <!-- footer modal -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


    <div id="hapusakun" class="modal fade modal-danger" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Hapus Akun</center></h4>
                </div>
                <!-- body modal -->
                <form action="" method="post" class="form-horizontal">
                    <div class="modal-body">
                      <p><h4>Apakah Anda Yakin Ingin Menghapus Akun <i>XXX</i> ?</h4></p>
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

    <div id="verifikasi" class="modal fade modal-primary" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Verifikasi Akun</center></h4>
                </div>
                <!-- body modal -->
                <form action="" method="post" class="form-horizontal">
                    <div class="modal-body">
                      <p><h4>Lakukan Verifikasi Terhadap Akun <i>XXX</i> Untuk Buka Toko?</h4></p>
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
