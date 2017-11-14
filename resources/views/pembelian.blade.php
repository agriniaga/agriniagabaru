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
      <div class="box" style="border:none">
        <div class="row">
          <h4><center>Daftar Pembelian Produk</center></h4>
        </div>
        <div class="row">
          <table class="table table-striped" style="margin-left:20px;width:940px;">
            <thead>
              <tr>
                <td width="1%" rowspan="2"><center><b>No</b></td>
                <td><center><b>Nama Barang</b></td>
                <td><center><b>Jumlah</b></td>
                <td><center><b>Harga</b></td>
                <td><center><b>Waktu Pemesanan</b></td>
                <td><center><b>Toko</b></td>
              </tr>
            </thead>
            <tbody>
              <td><center>1</td>
              <td>Jagung Manis</td>
              <td>1</td>
              <td>Rp.4.000,-</td>
              <td>14-11-2017</td>
              <td>Agriniaga</td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
