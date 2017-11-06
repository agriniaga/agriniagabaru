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
      <div class="col-sm-4 col-sm-offset-2">
        <div class="row">
          <label for="nama_produk" class="col-sm-4 control-label">Nama Produk</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" style="width:100%" required>
          </div>
        </div>
        <div class="row">
          <label for="harga" class="col-sm-4 control-label">Harga</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="harga" name="harga" style="width:100%" required>
          </div>
        </div>
        <div class="row">
          <label for="harga" class="col-sm-4 control-label">Diskon (%)</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="diskon" name="diskon" style="width:100%" required>
          </div>
        </div>
        <div class="row">
          <label for="wa" class="col-sm-4 control-label">WA</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="wa" name="wa" style="width:100%" required>
          </div>
        </div>
        <div class="row">
          <label for="bbm" class="col-sm-4 control-label">BBM</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="bbm" name="bbm" style="width:100%" required>
          </div>
        </div>
        <div class="row">
          <label for="kategori" class="col-sm-4 control-label">Kategori</label>
          <div class="col-sm-7">
            <select id="kategori" class="form-control" style="width:100%">
              <option value="pertanian">Pertanian</option>
            </select>
          </div>
        </div>
        <div class="row">
          <label for="provinsi" class="col-sm-4 control-label">Provinsi</label>
          <div class="col-sm-7">
            <select id="provinsi" class="form-control" style="width:100%">
              <option value="Sumatera Barat">Sumatera Barat</option>
            </select>
          </div>
        </div>
        <div class="row">
          <label for="kategori" class="col-sm-4 control-label">Deskripsi</label>
          <div class="col-sm-7">
            <textarea class="form-control" style="width:100%"></textarea>
          </div>
        </div><br>
        <div class="row">
          <button type="submit" name="submit" class="btn btn-success pull-left col-sm-2 col-sm-offset-4">Selesai</button>
        </div>
      </div>
      <div class="col-sm-2">
          <div class="row" style="color:green;margin-left:1px;">
            <input type="file" id="exampleInputFile">
          </div>
        <div class="box" style="height:200px;width:300px;border:none;margin-left:1px;">
          <div class="row">
            <img src="{{url('image/background.JPEG')}}" style="height:180px;width:280px;margin-left:25px;margin-top:10px;">
          </div>
        </div>
      </div>
    {{ csrf_field() }}
    <!-- /.box-footer -->
  </form>

</div>
  </div>
</div>

<div class="row" style="margin-top:150px;">
    @include('layouts.app2')
</div>