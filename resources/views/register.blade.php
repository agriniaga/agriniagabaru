@extends('layouts.layout')

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
      <b style="color:green;"><a href="{{url('/register')}}" style="color:black;">Daftar</a> | <a href="{{url('/login')}}" style="color:green;">Masuk</a></b>
    </div>
  </div> 
	<div class="row" style="padding-top:60px">
		<div div class="col-sm-3"></div>
		<div div class="col-sm-5">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="margin-top:40px;">       
          <label for="Name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" style="width:50%;" required>                                                  
            @if ($errors->has('name'))
            <script type="text/javascript">
              alert('{{ $errors->first('name') }}')
            </script>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}" style="margin-top:40px;">				
          <label for="username" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" style="width:50%;" required>                                                  
            @if ($errors->has('username'))
              <script type="text/javascript">
                  alert('{{ $errors->first('username') }}')
              </script>
            @endif
          </div>
		    </div>

			  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="padding-top:40px;">			
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" style="width:50%;" required>                                                  
				    @if ($errors->has('password'))
               <script>alert('{{ $errors->first('password') }}')</script>
            @endif
          </div>
			  </div><br><br>
			  <div>
          <center><button class="btn btn-success btn-sm">DAFTAR</button></center>
			  </div>
      </form>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>

@endsection