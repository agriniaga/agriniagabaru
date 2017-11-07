@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    @include('layouts.head')
  </div>
  <div class="row">
    @include('layouts.menu')
  </div>
  <div class="row" style="margin-top:20px;">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="box">
        <div class="row">
          <h4><center>Daftar Pemesanan Produk</center></h4>
        </div>
        <div class="row">
          <table class="table table-striped" style="margin-left:20px;width:940px;">
            <thead>
              <tr>
                <td width="1%" rowspan="2"><center><b>No</b></td>
                <td rowspan="2"><center><b>Pelanggan</b></td>
                <td colspan="3"><center><b>Produk</b></td>
                <td rowspan="2"><center><b>Waktu Pesan</b></td>
                <td rowspan="2" width="1%"><center><b>Pilihan</b></td>
              </tr>
              <tr>
                <td><center><b>Jenis</b></td>
                <td width="1%"><center><b>Jumlah</b></td>
                <td width="1%"><center><b>Status</b></td>
              </tr>
            </thead>
            <tbody>
              @php($no=1)
              @foreach($pesan as $key)
                @php($cart = Auth::user()->showOrder($key->id_pembeli,$key->no))
                <tr>
                  <td><center>{{$no++}}</td>
                  <td><a href="#pelanggan" style="color:green;" onclick="showUser(this)" data-toggle="modal" data-nama="{{App\User::find($key->id_pembeli)->name}}" data-email="{{App\User::find($key->id_pembeli)->email}}" data-hp="{{App\User::find($key->id_pembeli)->wa}}">{{$cart[0]->name}}</a></td>
                  <td>
                    @foreach($cart as $c)
                    {{$c->nama}}<br>
                    @endforeach
                  </td>
                  <td>
                    @foreach($cart as $c)
                    {{$c->jumlah}}<br>
                    @endforeach
                  </td>
                  <td>
                    @foreach($cart as $c)
                      @if($c->status==1)
                        Menunggu<br>
                      @elseif($c->status==2)
                        Selesai<br>
                      @endif
                    @endforeach
                  </td>
                  <td><center>{{$cart[0]->tanggal}}</td>
                  <td>
                    @if($cart[0]->status==1)
                    <a href="#status" class="btn btn-success" onclick="confirmOrder(this)" data-id="{{$key->id_pembeli}}" data-no="{{$key->no}}" data-toggle="modal">Selesai</a></td>
                    @endif
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


    <div id="pelanggan" class="modal fade modal-success" role="dialog">
        <div class="modal-dialog" style="width:25%;">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><center>Info Pelanggan</center></h4>
                </div>
                <!-- body modal -->
                    <div class="modal-body">
                      <table class="table">
                        <tr>
                          <td width="30%">Nama</td>
                          <td width="1%">:</td>
                          <td id="namaUser">John</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>:</td>
                          <td id="emailUser">John@gmail.com</td>
                        </tr>
                        <tr>
                          <td>No HP</td>
                          <td>:</td>
                          <td id="hpUser">08XXXXXXXXXX</td>
                        </tr>
                      </table>
                    </div>
                <!-- footer modal -->
                <div class="modal-footer">
                  <button type="button" name="button" data-dismiss="modal" class="btn btn-default">Kembali</button>
                </div>
            </div>
        </div>
    </div>

        <div id="status" class="modal fade modal-success" role="dialog">
            <div class="modal-dialog" style="width:25%;">
                <!-- konten modal-->
                <div class="modal-content">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><center>Status Pesanan</center></h4>
                    </div>
                    <!-- body modal -->
                        <div class="modal-body">
                          <h5>Pesanan Telah Selesai ?</h5>
                        </div>
                    <!-- footer modal -->
                    <div class="modal-footer">
                      <form method="post" action="{{url('confirmorder')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_pembeli" id="id_pembeli">
                        <input type="hidden" name="no" id="no">
                          <button type="button" name="button" data-dismiss="modal" class="btn btn-default pull-left">Kembali</button>
                          <button type="submit" name="submit" class="btn btn-success pull-right">Ya</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>

</div>

<script type="text/javascript">
function showUser(user) {
    var name = user.getAttribute('data-nama');
    var email = user.getAttribute('data-email');
    var hp = user.getAttribute('data-hp');
    document.getElementById('namaUser').innerHTML = name;
    document.getElementById('emailUser').innerHTML = email;
    document.getElementById('hpUser').innerHTML = hp;
  }

  function confirmOrder(cart) {
    var id_pembeli = cart.getAttribute('data-id');
    var no = cart.getAttribute('data-no');
    document.getElementById('id_pembeli').value = id_pembeli;
    document.getElementById('no').value = no;
  }
</script>
@endsection
