@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    @include('layouts.head')
  </div>
  <div class="row">
    @include('layouts.menu')
  </div>
  <div class="row" style="margin-top:20px;">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="box">
        <div class="row">
          <h4><center>Daftar Pemesanan Produk</center></h4>
        </div>
        <div class="row">
          <table class="table table-striped" style="margin:2%;width:100%;display:block;overflow-x:auto">
            <thead>
              <tr>
                <td width="1%" rowspan="2"><center><b>No</b></td>
                <td rowspan="2"><center><b>Pelanggan</b></td>
                <td colspan="3"><center><b>Produk</b></td>
                <td rowspan="2"><center><b>Waktu Pesan</b></td>
                <td rowspan="2" width="1%"><center><b>Pilihan</b></td>
              </tr>
              <tr>
                <td><center><b>Jenis</b></td>
                <td width="1%"><center><b>Jumlah</b></td>
                <td width="1%"><center><b>Status</b></td>
              </tr>
            </thead>
            <tbody>
              <td><center>1</td>
              <td><a href="" onclick="klik()" style="color:green;">John</a></td>
              <td>Jagung Manis<br>Jagung Palembang</td>
              <td><center>1<br>1</td>
              <td>Menunggu <br>Menunggu</td>
              <td><center>04-11-2017</td>
              <td><button onclick="selesai()" class="btn btn-success">Selesai</button></td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function selesai(){
      var konfirmasi = confirm('Pesanan Telah Selesai?');
      if (konfirmasi == true) {
        alert('okey');
      } else{

      };
    }

    function klik(){
      alert('Info Pelanggan\n\n Nama : John\n Email : John@gmail.com\n No HP : 08XXXXXXXXXX');
    }
  </script>

</div>

@endsection
