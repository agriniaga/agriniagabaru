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
          <table class="table table-striped" style="margin-left:20px;width:940px;">
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
              <td><a href="#pelanggan" style="color:green;" data-toggle="modal">John</a></td>
              <td>Jagung Manis<br>Jagung Palembang</td>
              <td><center>1<br>1</td>
              <td>Menunggu <br>Menunggu</td>
              <td><center>04-11-2017</td>
              <td><a href="#status" class="btn btn-success" data-toggle="modal">Selesai</a></td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


    <div id="pelanggan" class="modal fade modal-success" role="dialog">
        <div class="modal-dialog" style="width:25%;">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Info Pelanggan</center></h4>
                </div>
                <!-- body modal -->
                    <div class="modal-body">
                      <table class="table">
                        <tr>
                          <td width="30%">Nama</td>
                          <td width="1%">:</td>
                          <td>John</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:</td>
                          <td>John@gmail.com</td>
                        </tr>
                        <tr>
                          <td>No HP</td>
                          <td>:</td>
                          <td>08XXXXXXXXXX</td>
                        </tr>
                      </table>
                    </div>
                <!-- footer modal -->
                <div class="modal-footer">
                  <button type="button" name="button" data-dismiss="modal" class="btn btn-default">Kembali</button>
                </div>
            </div>
        </div>
    </div>

        <div id="status" class="modal fade modal-success" role="dialog">
            <div class="modal-dialog" style="width:25%;">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><center>Status Pesanan</center></h4>
                    </div>
                    <!-- body modal -->
                        <div class="modal-body">
                          <h5>Pesanan Telah Selesai ?</h5>
                        </div>
                    <!-- footer modal -->
                    <div class="modal-footer">
                      <button type="button" name="button" data-dismiss="modal" class="btn btn-default pull-left">Kembali</button>
                      <button type="button" name="button" class="btn btn-success pull-right">Ya</button>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection
