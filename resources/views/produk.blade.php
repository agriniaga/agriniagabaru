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

  @foreach($Produk as $P)
  <div class="row" style="margin-top:20px">
      <div class="col-sm-7 col-sm-offset-2">
        <div class="box" style="width:100%;border:none;">
          <div class="col-sm-7">
            <div class="box" style="border:0;margin-bottom:5px;">
              <div style="padding-left:3%;padding-right:3%;padding-top:1%;padding-bottom:1%;">
                <div class="row" style="margin-left:10px;margin-right:10px;">
                  <p style="padding:none;"><h5>{{$P->nama}}</h5>
                  <h5 style="color:green">{{$P->joinProvinsi->nama}}</h5>
                  <h5 style="color:green">{{$P->joinKategori->nama}}</h5></p>
                </div>
                <div class="row" style="margin-left:10px;margin-right:10px;">
                  <label class="pull-left"><h4>Rp. {{number_format($P->harga,0,'.','.')}},-/kg</h4></label>
                  <label class="pull-right"><h4><b>Diskon {{$P->diskon}}%</b></h4></label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="box" style="border:0;width: 250px;height: 135px;">
              <img src="{{url('image/background.JPEG')}}" style="width:96%;height:93%;margin:2%;">
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
            <center><a href="#editproduk" data-id="{{$P->id}}" class="btn btn-primary" onclick="editProduk(this)" style="width:60px" data-toggle="modal">Edit</a></center>
          </div>
          <div class="row" style="margin-top:5px;margin-bottom:5px;">
            <center><a href="#hapusproduk" data-id="{{$P->id}}" data-name="{{$P->nama}}" class="btn btn-danger" onclick="hapusProduk(this)" style="width:60px" data-toggle="modal">Hapus</a></center>
          </div>
        </div>
      </div>
  </div>
  @endforeach

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
              <form action="{{url('editproduk')}}" method="post" class="form-horizontal">
                  <div class="modal-body">
                          <table class="table">
                              <tr>
                                  <td width="30%">Nama Produk</td>
                                  <td width="2%">:</td>
                                  <td>
                                    <input type="hidden" class="form-control" id="id_edit" name="id_edit">
                                    <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                                  </td>
                              </tr>
                              <tr>
                                  <td>Harga</td>
                                  <td>:</td>
                                  <td><input type="number" class="form-control" id="harga_produk" name="harga_produk"></td>
                              </tr>
                              <tr>
                                  <td>Diskon (%)</td>
                                  <td>:</td>
                                  <td><input type="number" class="form-control" id="diskon_produk" name="diskon_produk"></td>
                              </tr>
                              <tr>
                                  <td>Kategori</td>
                                  <td>:</td>
                                  <td>
                                    <select id="kategori_produk" name="kategori_produk" class="form-control" style="width:100%">
                                      @foreach($Kategori as $kat)
                                      <option value="{{$kat->id}}">{{$kat->nama}}</option>
                                      @endforeach
                                    </select></td>
                              </tr>
                              <tr>
                                  <td>Provinsi</td>
                                  <td>:</td>
                                  <td>
                                    <select id="provinsi_produk" name="provinsi_produk" class="form-control" style="width:100%">
                                    @foreach($Provinsi as $prov)
                                      <option value="{{$prov->id}}">{{$prov->nama}}</option>
                                    @endforeach
                                    </select></td>
                              </tr>
                              <tr>
                                  <td>Deskripsi</td>
                                  <td>:</td>
                                  <td><textarea class="form-control" name="deskripsi_produk" id="deskripsi_produk" style="width:100%"></textarea></td>
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
              <form action="{{url('hapusproduk')}}" method="post" class="form-horizontal">
                  <div class="modal-body">
                    <p><h4>Apakah Anda Yakin Ingin Menghapus Produk <i id="nama_hapus">XXX</i> ?</h4></p>
                  </div>
              <!-- footer modal -->
                  <div class="modal-footer">
                      <input type="hidden" name="id_hapus" id="id_hapus" value="">
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
  function hapusProduk(produk) {
    var id_produk = produk.getAttribute('data-id');
    var nama_produk = produk.getAttribute('data-name');
    document.getElementById('id_hapus').value = id_produk;
    document.getElementById('nama_hapus').innerHTML = nama_produk;
  }

  function editProduk(produk) {
    var id_produk = produk.getAttribute('data-id');
    document.getElementById('id_edit').value = id_produk;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           var response = xhttp.responseText;
           var data = JSON.parse(response)
           document.getElementById('nama_produk').value = data.nama
           document.getElementById('harga_produk').value = data.harga
           document.getElementById('diskon_produk').value = data.diskon
           var kategori = document.getElementById('kategori_produk').childNodes
           for(var i = 1;i<kategori.length;i=i+2){
              if(kategori[i].value == data.id_kategori){
                kategori[i].selected = true;
              }
           }
           var provinsi = document.getElementById('provinsi_produk').childNodes
           for(var i = 1;i<provinsi.length;i=i+2){
              if(provinsi[i].value == data.id_provinsi){
                provinsi[i].selected = true;
              }
           }
           document.getElementById('deskripsi_produk').innerHTML = data.deskripsi
        }
    };
    xhttp.open("GET", "produk/"+id_produk, true);
    xhttp.send();
  }
</script>

@endsection
