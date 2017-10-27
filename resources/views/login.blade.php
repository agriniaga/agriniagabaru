@extends('layouts.app')

@section('content')
<div class="container" style="padding-top:80px;margin-top:80px;">
	<div class="row" >
		<div div class="col-sm-3"></div>
		<div div class="col-sm-5">
			<div class="form-group">				
              	<label for="nama" class="col-sm-2 control-label">Nama</label>
              	<div class="col-sm-10">
                	<input type="text" class="form-control" id="nama" name="nama" style="width:50%;" required>                                                  
				</div>
			</div>
			<div class="form-group" style="margin-top:40px;">				
              	<label for="no_hp" class="col-sm-2 control-label">No. HP</label>
              	<div class="col-sm-10">
                	<input type="text" class="form-control" id="no_hp" name="no_hp" style="width:50%;" required>                                                  
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

@endsection