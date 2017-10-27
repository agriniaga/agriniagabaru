<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'SIM Aset') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ url('/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/font-awesome/4.5.0/css/font-awesome.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('/plugins/datatables/dataTables.bootstrap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="{{ url('/dist/css/skins/_all-skins.min.css') }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
	<title></title>
</head>
<body>
<img src="{{url('image/background.JPEG')}}" style="no-repeat center center fixed;position: fixed;width: 100%;height: 100%;background-size: cover;">
<header class="main-header">
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
      <b style="color:green;"><a href="" style="color:green;">Daftar</a> | <a href="" style="color:black;">Masuk</a></b>
    </div>
  </div>  
</header>
@yield('content')
<footer class="main-footer">
  <div class="row" style="margin-top:100px;">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <div class="col-sm-6">
        <div>
          <a href="" style="color:green;">Tips Jual Beli</a>
        </div>
        <div>
          <a href="" style="color:green;">Pasang Iklan</a>
        </div>
        <div>
          <a href="" style="color:green;">Sarat dan Ketentuan</a>
        </div>        
      </div>
      <div class="col-sm-6">
        <div>
          <a href="" style="color:green;">Tentang Kami</a>
        </div>
        <div>
          <a href="" style="color:green;">Customer Care</a>
        </div>        
      </div>
    </div>
    <div class="col-sm-1">
    </div>
    <div class="col-sm-4">
      <div class="col-sm-6">
        <div>
          <img src="{{url('image/ig.png')}}" width="20px" height="20px"> | <a href="" style="color:black;">agriniaga</a>
        </div>
        <div>
          <img src="{{url('image/twitter.png')}}" width="20px" height="20px"> | <a href="" style="color:black;">@agriniaga01</a>
        </div>      
      </div>
      <div class="col-sm-6">
        <div>
          <img src="{{url('image/fb.png')}}" width="20px" height="20px"> | <a href="" style="color:black;">Agriniaga</a>
        </div>
        <div>
          <img src="{{url('image/youtube.png')}}" width="20px" height="20px"> | <a href="" style="color:black;">Agriniaga</a>
        </div>        
      </div>      
    </div>
    <div class="col-sm-2"></div>
  </div>  
</footer>


<script src="{{ url('/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/dist/js/demo.js') }}"></script>

</body>
</html>