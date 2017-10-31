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
    <form method="">
      <div class="col-sm-6 col-sm-offset-1">
        <div class="box" style="border:none;width:100%;height:100%;">          
          <table class="table table-striped">
            <thead>
              <tr>
                <td width="1%"><b><center>No</center></b></td>
                <td><b><center>Nama Barang</center></b></td>
                <td><b><center>Harga</center></b></td>
                <td><b><center>Jumlah Barang</center></b></td>
                <td width="1%"><b><center>Pilihan</center></b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><center>1</center></td>
                <td>Jagung Manis</td>
                <td>Rp. 1.000.000</td>
                <td><center>1</center></td>
                <td><button class="btn btn-sm btn-success">Batal</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="box" style="border:none;width:100%;height:100%;">
          <div style="padding-top:2px;">
            <center><h4 style="color:red;">Pembayaran <span class="fa fa-cart-arrow-down"></span></h4></center>
          </div>
          <table class="table table-striped">
            <tr>
              <td>Total</td>
              <td>:</td>
              <td>Rp. 1.000.000</td>
            </tr>
            <tr>
              <td>Diskon</td>
              <td>:</td>
              <td>10 %</td>
            </tr>
            <tr>
              <td>Total Bayar</td>
              <td>:</td>
              <td>Rp. 900.000</td>
            </tr>
          </table>
          <center><button type="submit" class="btn btn-success" style="margin:2px;">Pesan</button></center>
          
        </div>
      </div>
    {{ csrf_field() }}
    <!-- /.box-footer -->
  </form>
</div>
  </div>
</div>

@endsection