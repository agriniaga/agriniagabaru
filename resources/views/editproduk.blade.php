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
      <div class="col-sm-9 col-sm-offset-2 col-md-9 col-lg-9 col-xs-12">
        <div class="box" style="border:none;"> 
          <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
              <div class="box" style="border:none">
                <div style="padding:10px;">
                  <div class="row">
                    <center><h4><b>Edit Produk</b></h4></center>
                  </div>
                    <hr style="margin-top: 0px;">
                  <div class="row" style="margin-bottom: 5px;">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-4 control-label">Nama Produk</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-8">
                      <input type="text" class="form-control" id="nama_produk" name="nama_produk" style="width:100%;border:none;" required>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 5px;">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-4 control-label">Harga</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-8">
                      <input type="text" class="form-control" id="harga" name="harga" style="width:100%;border:none;" required>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 5px;">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-4 control-label">Kategori</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-8">
                      <select id="kategori2" name="kategori2" class="form-control" style="width:100%;border:none;" required>
                        <option value="pertanian">Pertanian</option>
                      </select>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 5px;">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-4 control-label">Provinsi</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-8">
                      <select id="provinsi2" name="provinsi2" class="form-control" style="width:100%;border:none;" required>
                        <option value="sumbar">Sumatera Barat</option>
                      </select>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 5px;">
                    <label class="col-sm-2 col-md-2 col-lg-2 col-xs-4 control-label">Deskripsi</label>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xs-8">
                      <textarea class="form-control" id="deskripsi" name="deskripsi" style="width:100%;border:none;" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>   

            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-11 ">
              <div class="box" style="height:200px;width:95%;border:none;margin:5%;">
                <div class="row" style="margin-top: 10px;">
                  <img src="{{url('image/background.JPEG')}}" style="height:180px;width:80%;margin:5%;margin-left:10%">
                </div>
              </div>
              <div class="row" style="color:green;margin-left:5%;">
                <input type="file" id="exampleInputFile">
              </div> 
            </div>

          </div> 
          <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xs-7 col-md-offset-5 col-xs-offset-5">
              <button type="submit" name="submit" class="btn btn-success" style="margin-bottom:5%;align:center;">Save</button>               
            </div>           
          </div>   
          
        </div>
        
      </div>
    {{ csrf_field() }}
    <!-- /.box-footer -->
    </form>

  </div>
</div>

@endsection
