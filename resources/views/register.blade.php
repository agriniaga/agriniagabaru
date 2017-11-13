@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div style="width:100%;text-align:center">
        <img src="{{url('image/nama2.png')}}" style="width: 30%;height: 20%;position:relative;">
    </div>
    <hr style="width:80%; background-color: green; height: 1px; border: 0;position:relative;">
  </div>
  <div class="row">
    <div class="col-sm-9 col-sm-offset-2" style="font-size:20px;">
      <b style="color:green;" class="pull-right">
        <a href="{{url('/')}}" style="color:green;">Agriniaga</a> |
        <a href="{{url('/register')}}" style="color:black;">Daftar</a> |
        <a href="{{url('/login')}}" style="color:green;">Masuk</a></b>
    </div>
  </div>
	<div class="row" style="padding-top:60px">
		<div div class="col-sm-3"></div>
		<div div class="col-sm-5">
			<div class="form-group" style="margin-top:40px;">
              	<label for="username" class="col-sm-4 control-label">Nama Pengguna</label>
              	<div class="col-sm-7">
                	<input type="text" class="form-control" id="username" name="username" style="width:80%;" required>
				</div>
			</div>
			<div class="form-group" style="padding-top:40px;">
              	<label for="password" class="col-sm-4 control-label">Password</label>
              	<div class="col-sm-7">
                	<input type="password" class="form-control" id="password" name="password" style="width:80%;" required>
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
