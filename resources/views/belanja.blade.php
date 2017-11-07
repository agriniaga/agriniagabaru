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
      <div class="col-sm-7 col-sm-offset-1">
        <div class="box" style="border:none;width:100%;height:100%;">
          <table class="table table-striped">
            <thead>
              <tr>
                <td width="1%"><b><center>No</center></b></td>
                <td><b><center>Nama Barang</center></b></td>
                <td><b><center>Harga</center></b></td>
                <td><b><center>Jumlah Barang</center></b></td>
                <td><b><center>Diskon</center></b></td>
                <td><b><center>Total</center></b></td>
                <td width="1%"><b><center>Pilihan</center></b></td>
              </tr>
            </thead>
            <tbody>
              @php($no=1)
              @foreach($keranjang as $k)
              <tr>
                <td><center>{{$no++}}</center></td>
                <td>{{$k->joinProduk->nama}}</td>
                <td>Rp. {{number_format($k->joinProduk->harga,0,'.','.')}}</td>
              <td><center>{{$k->jumlah}}</center></td>
                <td><center>{{$k->joinProduk->diskon}}%</center></td>
                <td>Rp. {{number_format($k->hargaBayar(),0,'.','.')}}</td>
                <td>
                  <form method="post" action="{{url('batalpesan')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$k->id}}">
                    <button type="submit" class="btn btn-sm btn-danger">Batal</button>
                  </form>
                </td>
              </tr>
              @endforeach
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
              <td>Total Belanja</td>
              <td>:</td>
              <td>Rp. {{number_format(Auth::user()->totalKeranjangKu(),0,'.','.')}}</td>
            </tr>
          </table>
          <center>
            <form method="post" action="{{url('order')}}">
              {{ csrf_field() }}
              <button type="submit" class="btn btn-success" style="margin:2px;">Pesan</button>
            </form>
          </center>

        </div>
      </div>
    {{ csrf_field() }}
    <!-- /.box-footer -->
  </form>
</div>
  </div>
</div>

@endsection
