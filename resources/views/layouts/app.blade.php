<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
  <link rel="stylesheet" href="{{ url('/dist/css/skins/_all-skins.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('/plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ url('/plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ url('/plugins/datepicker/datepicker3.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ url('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

  <link rel="stylesheet" href="{{ url('/plugins/select2/select2.min.css') }}">
=======
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
>>>>>>> ba3aa178c512ec0a7898a371dd98931292a87345
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<<<<<<< HEAD
<img src="{{url('image/background.JPEG')}}" style="no-repeat center center fixed;position: fixed;width: 100%;height: 100%;background-size: cover;-webkit-filter: blur(2px);">
<header class="main-header"> 
</header>
@yield('content')
<footer class="main-footer">
</footer>
=======
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
>>>>>>> ba3aa178c512ec0a7898a371dd98931292a87345

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

<<<<<<< HEAD
<script src="{{ url('/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ url('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/dist/js/demo.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


<script src="{{ url('/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ url('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ url('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/plugins/knob/jquery.knob.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- Select2 -->
<script src="{{ url('/plugins/select2/select2.full.min.js') }}"></script>
=======
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
>>>>>>> ba3aa178c512ec0a7898a371dd98931292a87345
</body>
</html>
