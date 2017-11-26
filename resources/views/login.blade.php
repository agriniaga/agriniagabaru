@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div style="width:100%;text-align:center">
        <a href="{{url('/')}}"><img src="{{url('image/nama2.png')}}" style="width: 30%;height: 20%;position:relative;"></a>
    </div>
    <hr style="width:80%; background-color: green; height: 1px; border: 0;position:relative;">
  </div>
  <div class="row">
    <div class="col-sm-9 col-sm-offset-2 col-md-9 col-xs-11 col-lg-9"style="font-size:100%;">
      <b style="color:green;" class="pull-right">
        <a href="{{url('/')}}" style="color:green;">Agriniaga</a> |
        <a href="{{url('/register')}}" style="color:green;">Daftar</a> |
        <a href="{{url('/login')}}" style="color:black;">Masuk</a></b>
    </div>
  </div>
  <div class="row" style="padding-top:20px;">
    <div div class="col-sm-6 col-sm-offset-3 col-md-5 col-lg-5 col-xs-12">
      <div class="box">
        <div class="form-group col-xs-12" style="margin-top:40px;">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
            <label for="username" class=" control-label">Nama Pengguna</label>          
          </div>
          <div class="col-sm-7 col-md-7 col-lg-7 col-xs-8">
            <input type="text" class="form-control" id="username" name="username" style="width:80%;" required>
          </div>
        </div>
        <div class="form-group col-xs-12">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
            <label for="password" class="control-label">Password</label>          
          </div>
          <div class="col-sm-7 col-md-7 col-lg-7 col-xs-8">
            <input type="password" class="form-control" id="password" name="password" style="width:80%;" required>
          </div>
        </div><br><br>
        <div><center>
          <button class="btn btn-success btn-sm" style="margin-bottom:1%;">MASUK</button></center>
        </div>        
      </div>
    </div>
  </div>
</div>

  <div class="row" style="margin-top:150px;">
    @include('layouts.app2')
  </div>

@endsection
