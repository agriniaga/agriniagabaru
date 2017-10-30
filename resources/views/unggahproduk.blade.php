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

      <div class="col-sm-5 col-sm-offset-2">
        <div class="row">
          <label for="nama_produk" class="col-sm-3 control-label">Nama Produk</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" style="width:80%" required>     
          </div>
        </div>
        <div class="row">
          <label for="harga" class="col-sm-3 control-label">Harga</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="harga" name="harga" style="width:80%" required>     
          </div>
        </div>
        <div class="row">
          <label for="kontak" class="col-sm-3 control-label">Kontak</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="kontak" name="kontak" style="width:80%" required>     
          </div>
        </div>
        <div class="row">
          <label for="kategori" class="col-sm-3 control-label">Kategori</label>
          <div class="col-sm-8">
            <select id="kategori" class="form-control" style="width:80%">
              <option value="pertanian">Pertanian</option>
            </select>   
          </div>
        </div>
        <div class="row">
          <label for="provinsi" class="col-sm-3 control-label">Provinsi</label>
          <div class="col-sm-8">
            <select id="provinsi" class="form-control" style="width:80%">
              <option value="Sumatera Barat">Sumatera Barat</option>
            </select>   
          </div>
        </div>
        <div class="row">
          <label for="kategori" class="col-sm-3 control-label">Deskripsi</label>
          <div class="col-sm-8">
            <textarea class="form-control" style="width:80%"></textarea> 
          </div>
        </div><br>
        <div class="row">
          <button type="submit" name="submit" class="btn btn-success pull-left col-sm-2 col-sm-offset-4">Selesai</button>          
        </div>
      </div>
      <div class="col-sm-2">
        <div class="box">
          <img src="" style="height:200px">
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

@endsection