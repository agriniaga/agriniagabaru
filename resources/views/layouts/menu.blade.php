
    <div class="col-sm-6 col-sm-offset-5" style="font-size:20px;">
      <b style="color:green;" class="pull-right">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:green;">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li class="header"><a href="">Profil</a></li>
              <li><a href="">Produk Saya</a></li>
              <li><a href="">Pengaturan</a></li>
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
            <a href="#" style="color:green;">
              Belanja
            </a>
          </li>

        </ul>
      </div>
      </b>
    </div>