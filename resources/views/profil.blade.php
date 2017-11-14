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
      <div class="col-sm-5 col-sm-offset-2">
      <div class="box" style="border:none">
        <div style="padding:10px;">
          <div class="row">
            <center><h4><b>Profil</b></h4></center>
          </div>
            <hr style="margin-top: 0px;">
          <div class="row" style="margin-bottom: 5px;">
            <label for="nama2" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama2" name="nama2" style="width:100%;border:none;" required>
            </div>
          </div>
          <div class="row" style="margin-bottom: 5px;">
            <label for="alamat2" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat2" name="alamat2" style="width:100%;border:none;" required>
            </div>
          </div>
          <div class="row" style="margin-bottom: 5px;">
            <label for="email2" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email2" name="email2" style="width:100%;border:none;" required>
            </div>
          </div>
          <div class="row" style="margin-bottom: 5px;">
            <label for="no_hp2" class="col-sm-2 control-label">No Hp</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="no_hp2" name="no_hp2" style="width:100%;border:none;" required>
            </div>
          </div>
          <div class="row" style="margin-bottom: 5px;">
            <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" style="width:100%;border:none;" required>
            </div>
          </div><br>
          <div class="row" style="margin-bottom: 5px;">
            <button type="submit" name="submit" class="btn btn-success pull-left col-sm-2 col-sm-offset-5">Save</button>
          </div>

        </div>
      </div>
      </div>
      <div class="col-sm-3">
        <div class="box" style="height:200px;width:200px;border:none;margin-left:1px;">
          <div class="row">
            <img src="{{url('image/background.JPEG')}}" style="height:180px;width:180px;margin-left:25px;margin-top:10px;">
          </div>
        </div>
        <div class="row" style="color:green;margin-left:1px;">
          <input type="file" id="exampleInputFile">
        </div>
      </div>
    {{ csrf_field() }}
    <!-- /.box-footer -->
    </form>

  </div>
  </div>
</div>

@endsection
