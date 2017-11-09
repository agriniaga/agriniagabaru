@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div style="width:100%;text-align:center">
        <img src="{{url('image/nama.png')}}" style="width: 20%;height: 20%;position:relative;">
    </div>
    <div style="width:100%;text-align:center">
        <img src="{{url('image/jargon.png')}}" style="width: 30%;height: 30%;position:relative;">
    </div>
    <hr style="width:80%; background-color: green; height: 1px; border: 0;position:relative;">
  </div>
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-5"></div>
    <div class="col-sm-3" style="font-size:20px;">
      <b style="color:green;">
        <a href="{{url('/')}}" style="color:green;">Agriniaga</a> |
        <a href="{{url('/register')}}" style="color:black;">Daftar</a> |
        <a href="{{url('/login')}}" style="color:green;">Masuk</a></b>
    </div>
  </div>
	<div class="row" style="padding-top:60px">
		<div div class="col-sm-3"></div>
		<div div class="col-sm-5">
      <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" style="width:50%;" required>
        </div>
      </div>
      <div class="form-group" style="margin-top:40px;">
                <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name="username" style="width:50%;" required>
        </div>
      </div>
      <div class="form-group" style="padding-top:40px;">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" style="width:50%;" required>
        </div>
      </div><br><br>
      <div><center>
        <button class="btn btn-success btn-sm">DAFTAR</button></center>
      </div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>

  <div class="row" style="margin-top:150px;">
    @include('layouts.app2')
  </div>

@endsection
