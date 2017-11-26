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
      <div class="col-sm-7 col-sm-offset-1 col-md-7 col-lg-7 col-xs-12">
        <div class="box" style="border:none;width:100%;height:100%;">
          <table class="table table-striped" style="position:relative;display:block;overflow-x:auto">
            <thead>
              <tr>
                <td width="1%"><b><center>No</center></b></td>
                <td><b><center>Nama Barang</center></b></td>
                <td><b><center>Harga</center></b></td>
                <td><b><center>Jumlah Barang</center></b></td>
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
      <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
        <div class="box" style="border:none;width:100%;height:100%;">
          <div>
            <center><h4 style="color:red;">Pembayaran <span class="fa fa-cart-arrow-down"></span></h4></center>
          </div>
          <table class="table table-striped" style="display:block;overflow-x:auto">
            <tr>
              <td>Total Belanja</td>
              <td>:</td>
              <td>Rp. {{number_format(Auth::user()->totalKeranjangKu(),0,'.','.')}}</td>
            </tr>
          </table>
          <center><button type="submit" class="btn btn-success" style="margin:2px;">Pesan</button></center>

        </div>
      </div>
    {{ csrf_field() }}
    <!-- /.box-footer -->
  </form>
</div>

<div class="row" style="margin-top:50px;">
  <div class="col-sm-4 col-sm-offset-1 col-md-4 col-lg-4 col-xs-12">
    <div class="box">
      <table border="2">
        <tr>
          <td>
          <h5 style="color:green;margin:5px;">Untuk pembayaran via Agriniaga Silahkan Kirimkan Pembayaran Anda ke Nomor Rekening Agriniaga xxxxxxxxxxxxxxxxxxx atas nama Agriniaga</h5></td>
        </tr>
      </table>
    </div>
  </div>
</div>

</div>

@endsection
