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
    <h4><center><b>Buka Toko</b></center></h4>
  </div>
  <div class="row">
    <form method="">
      <div class="col-sm-10 col-sm-offset-1 col-md-10 col-lg-10 col-xs-12">
        <div class="box" style="border:none;width:100%">
          <div class="row">
            <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
              <div class="box" style="border:none;margin:5%">
                <div class="row">
                  <label class="col-sm-3 col-md-3 col-lg-3 col-xs-4 control-label">Nama Toko</label>
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xs-7">
                    <input type="text" class="form-control" id="nama_toko" name="nama_toko" style="width:100%" required>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-md-3 col-lg-3 col-xs-4 control-label">Alamat Toko</label>
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xs-7">
                    <input type="text" class="form-control" id="alamat_toko" name="alamat_toko" style="width:100%" required>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-md-3 col-lg-3 col-xs-4 control-label">NPWP</label>
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xs-7">
                    <input type="text" class="form-control" id="npwp" name="npwp" style="width:100%" required>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-md-3 col-lg-3 col-xs-4 control-label">No. KTP</label>
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xs-7">
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" style="width:100%" required>
                  </div>
                </div>
                <div class="row">
                  <label for="kategori" class="col-sm-3 col-md-3 col-lg-3 col-xs-4 control-label">Kategori Toko</label>
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xs-7">
                    <select id="kategori_toko" class="form-control" style="width:100%">
                      <option value="pertanian">Ruko</option>
                    </select>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-11">
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
              <button type="submit" name="submit" class="btn btn-success" style="margin-bottom:5%;align:center;">Buka Toko</button>               
            </div>             
          </div>
        </div>
      </div>
    {{ csrf_field() }}
    <!-- /.box-footer -->
  </form>

</div>
  </div>
</div>

@endsection
