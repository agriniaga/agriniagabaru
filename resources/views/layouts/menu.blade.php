
    <div class="col-sm-9 col-md-offset-2 col-md-9 col-xs-12 col-lg-9" style="font-size:100%;">
      <b style="color:green;" class="pull-right">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:green;">
              Akun
            </a>
            <ul class="dropdown-menu" style="left:0px">
              <li class="header"><a href="{{url('/profil')}}">Profil</a></li>
              <li><a href="{{url('/produk')}}">Produk Saya</a></li>
              <li><a href="{{url('/bukatoko')}}">Buka Toko</a></li>
              <li>
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Keluar
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{url('/homepage')}}" style="color:green;">
              Home
            </a>
          </li>
          <li>
            <a href="{{url('/unggahproduk')}}" style="color:green;">
              Unggah Produk
            </a>
          </li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:green;">
              Belanja
              <span class="pull-right-container"><small class="label pull-right bg-red">{{count(Auth::user()->keranjangKu())}}</small></span>
            </a>
            <ul class="dropdown-menu" style="left:0px">
              <li class="header"><a href="{{url('/belanja')}}">Keranjang</a></li>
              <li><a href="{{url('/pembelian')}}">Pembelian</a></li>
            </ul>
          </li>
          <li>
            <a href="{{url('/pemesanan')}}" style="color:green;">
              Pemesanan
              <span class="pull-right-container"><small class="label pull-right bg-red">2</small></span>
            </a>
          </li>
          <li>
            <a href="{{url('/manajemenakun')}}" style="color:green;">
              Manajemen Akun
            </a>
          </li>

        </ul>
      </div>
      </b>
    </div>
