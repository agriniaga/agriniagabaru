
    <div class="col-sm-9 col-sm-offset-2" style="font-size:20px;">
      <b style="color:green;" class="pull-right">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:green;">
              Akun
            </a>
            <ul class="dropdown-menu">
              <li class="header"><a href="{{url('/profil')}}">Profil</a></li>
              <li><a href="{{url('/produk')}}">Produk Saya</a></li>
              @if(Auth::user()->role==0)
              <li><a href="#myModal" data-toggle="modal">Buka Toko</a></li>
              @endif
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
          @if(Auth::user()->role==1)
          <li>
            <a href="{{url('/unggahproduk')}}" style="color:green;">
              Unggah Produk
            </a>
          </li>
          @endif
          <li>
            <a href="{{url('/belanja')}}" style="color:green;">
              Belanja
              <span class="pull-right-container"><small class="label pull-right bg-red">{{count(Auth::user()->keranjangKu()) }}</small></span>
            </a>
          </li>
          <li>
            <a href="{{url('/pemesanan')}}" style="color:green;">
              Pemesanan
              <span class="pull-right-container"><small class="label pull-right bg-red">2</small></span>
            </a>
          </li>
          @if(Auth::user()->role ==2)
          <li>
            <a href="{{url('/manajemenakun')}}" style="color:green;">
              Manajemen Akun
            </a>
          </li>
          @endif
        </ul>
      </div>
      </b>
    </div>

    <div id="myModal" class="modal fade modal-success" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Buka Toko</center></h4>
                </div>
                <!-- body modal -->
                <form action="" method="post" class="form-horizontal">
                    <div class="modal-body">
                            <table class="table">
                                <tr>
                                    <td width="30%">Nama Toko</td>
                                    <td width="2%">:</td>
                                    <td><input type="text" class="form-control" id="nama_toko" name="nama_toko"></td>
                                </tr>
                                <tr>
                                    <td>Alamat Toko</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" id="alamat_toko" name="alamat_toko"></textarea>
                                </tr>
                                <tr>
                                    <td>NPWP</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="npwp" name="npwp"></td>
                                </tr>
                                <tr>
                                    <td>No KTP Pemilik</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="ktp" name="ktp"></td>
                                </tr>
                                <tr>
                                    <td>No Telp</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="telp" name="telp"></td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" id="hp" name="hp"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="email" class="form-control" id="email" name="email"></td>
                                </tr>
                                <tr>
                                    <td>Kategori Toko</td>
                                    <td>:</td>
                                    <td>
                                      <select class="form-control" id="toko" name="toko">
                                        <option>Ruko</option>
                                        <option>Warteg</option>
                                      </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>:</td>
                                    <td>
                                    <div>
                                      <img src="{{url('image/background.JPEG')}}" style="width:200px;">
                                    </div><br>
                                    <div>
                                      <input type="file" class="form-control">
                                    </div>
                                    </td>
                                </tr>
                            </table>
                    </div>
                <!-- footer modal -->
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-default pull-right">Kirim</button>
                    </div>
                        {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
