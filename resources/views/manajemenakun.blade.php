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
          <table class="table table-striped table-bordered">
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
              @php($no=1)
              @foreach($akun as $key)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$key->username}}</td>
                <td>{{$key->name}}</td>
                <td>{{$key->nama_toko}}</td>
                <td>{{$key->ktp}}</td>
                @if($key->role==0)
                <td><span><small class="label bg-green">Pembeli</small></span></td>
                <td>
                    <a href="#editakun" class="btn btn-success btn-sm" style="width:80px;" data-toggle="modal" onclick="editAkun(this)" data-name="{{$key->name}}" data-id="{{$key->id}}">Edit</a>
                    <a href="#hapusakun" class="btn btn-danger btn-sm" style="width:80px;" data-toggle="modal" onclick="hapusAkun(this)" data-name="{{$key->name}}" data-id="{{$key->id}}">Delete</a>
                </td>
                @elseif($key->role==1)
                <td><span><small class="label bg-orange">Penjual</small></span></td>
                  <td>
                      <a href="#editakun" class="btn btn-success btn-sm" style="width:80px;" data-toggle="modal" onclick="editAkun(this)" data-name="{{$key->name}}" data-id="{{$key->id}}">Edit</a>
                      <a href="#hapusakun" class="btn btn-danger btn-sm" style="width:80px;" data-toggle="modal" onclick="hapusAkun(this)" data-name="{{$key->name}}" data-id="{{$key->id}}">Delete</a>
                  </td>
                @elseif($key->role==2)
                <td><span><small class="label bg-blue">Verifikasi</small></span></td>
                    <td><a href="#verifikasi" class="btn btn-primary btn-sm" style="width:80px;" data-toggle="modal" onclick="verifikasiAkun(this)" data-name="{{$key->name}}" data-id="{{$key->id}}">Verified</a>
                        <a href="#editakun" class="btn btn-success btn-sm" style="width:80px;" data-toggle="modal" onclick="editAkun(this)" data-name="{{$key->name}}" data-id="{{$key->id}}">Edit</a>
                        <a href="#hapusakun" class="btn btn-danger btn-sm" style="width:80px;" data-toggle="modal" onclick="hapusAkun(this)" data-name="{{$key->name}}" data-id="{{$key->id}}">Delete</a>
                    </td>
                @endif
              </tr>
              @endforeach
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
                <form action="{{url('editakun')}}" method="post" class="form-horizontal">
                    <div class="modal-body">
                            <table class="table">
                                <tr>
                                    <td width="30%">Nama</td>
                                    <td width="2%">:</td>
                                    <td>
                                        <input type="hidden" class="form-control" id="id_edit" name="id_edit">
                                        <input type="text" class="form-control" id="nama_edit" name="nama_edit">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="email_edit" name="email_edit"></td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="no_hp_edit" name="no_hp_edit"></td>
                                </tr>
                                <tr>
                                    <td>KTP</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="ktp_edit" name="ktp_edit"></td>
                                </tr>
                                <tr>
                                    <td>Nama Toko</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="nama_toko_edit" name="nama_toko_edit"></td>
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
                <form action="{{url('hapusakun')}}" method="post" class="form-horizontal">
                    <div class="modal-body">
                      <p><h4>Apakah Anda Yakin Ingin Menghapus Akun <i id="nama_hapus">XXX</i> ?</h4></p>
                    </div>
                <!-- footer modal -->
                    <div class="modal-footer">
                        <input type="hidden" name="id_hapus" id="id_hapus">
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
                <form action="verfikasiakun" method="post" class="form-horizontal">
                    <div class="modal-body">
                      <p><h4>Lakukan Verifikasi Terhadap Akun <i id="nama_verifikasi">XXX</i> Untuk Buka Toko?</h4></p>
                    </div>
                <!-- footer modal -->
                    <div class="modal-footer">
                        <input type="hidden" id="id_verifikasi" name="id_verifikasi">
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
<script type="text/javascript">
  function verifikasiAkun(produk) {
    var id_produk = produk.getAttribute('data-id');
    var nama_produk = produk.getAttribute('data-name');
    document.getElementById('id_verifikasi').value = id_produk;
    document.getElementById('nama_verifikasi').innerHTML = nama_produk;
  }

  function hapusAkun(produk) {
    var id_produk = produk.getAttribute('data-id');
    var nama_produk = produk.getAttribute('data-name');
    document.getElementById('id_hapus').value = id_produk;
    document.getElementById('nama_hapus').innerHTML = nama_produk;
  }

  function editAkun(produk) {
    var id_produk = produk.getAttribute('data-id');
    document.getElementById('id_edit').value = id_produk;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           var response = xhttp.responseText;
           var data = JSON.parse(response)
           document.getElementById('nama_edit').value = data.name
           document.getElementById('email_edit').value = data.email
           document.getElementById('no_hp_edit').value = data.wa
           document.getElementById('ktp_edit').value = data.ktp
           document.getElementById('nama_toko_edit').value = data.nama_toko
        }
    };
    xhttp.open("GET", "toko/"+id_produk, true);
    xhttp.send();
  }
</script>
@endsection
