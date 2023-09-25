<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Riwayat Transaksi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      .iptfull{
        width: 100%;
      }
    </style>
  </head>
  <body>
	<script src="https://kit.fontawesome.com/fbc65d9e88.js" crossorigin="anonymous"></script>
		@include('nav.nav')
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/transpo3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cek Jadwal <i class="fa fa-chevron-right"></i></span> <span>CheckOut <i class="fa fa-chevron-right"></i></span> </p>
          	<h1>Tiket Berhasil</h1>
          </div>
        </div>
      </div>
    </section>
	
    <section class="bg-light p-3">
      <div class="container text-center card">
        <h1>Riwayat Transaksi</h1>
      </div>
    </section>


    @foreach ($transaksi = DB::table('transaksi')
    ->join('carabayar','transaksi.id_bayar','=','carabayar.id_bayar')
    ->where('id_user',Auth::user()->id)
    ->select('transaksi.id_perjalanan','carabayar.carabayar','isPaid','nama_penumpang','notelp','transaksi.created_at','transaksi.isDeleted','transaksi.id_transaksi','transaksi.id_bayar','nama_pemesan','email_pemesan','alamat')
    ->orderBy('id_transaksi','desc')
    ->get(); as $transaksi)
        @if ($transaksi->isDeleted === 'N')


        @foreach ($perjalanan = DB::table('perjalanan')
        ->join('lokasi','lokasi.id_lokasi','=','perjalanan.id_lok_tujuan')
        ->join('lokasi as tujuan','tujuan.id_lokasi','=','perjalanan.id_lok_berangkat')
        ->join('unit','unit.id_unit','=','perjalanan.id_unit')
        ->select('tujuan.namalokasi as berangkat', 'lokasi.namalokasi as tujuan','plat', 'merk','perjalanan.isDeleted','hari','jam','perjalanan.id_perjalanan','perjalanan.isDeleted','harga')
        ->where('id_perjalanan',$transaksi->id_perjalanan)
        ->get(); as $perjalanan)
            
        <section class="bg-light p-3">
          <div class="container card">
            <div class="card-body">
              <h4 class="card-title">Ticket Success!</h4>

              <hr>
              <div class="row">
                <div class="col-4">Hari : {{ $perjalanan->hari }}</div>
                <div class="col-4"></div>
                <div class="col-4">Metode Pembayaran : {{ $transaksi->carabayar }}</div>
              </div>
              <div class="row">
                <div class="col-4">Lokasi Berangkat : {{ $perjalanan->berangkat }}</div>
                <div class="col-4"></div>
                @switch($transaksi->isPaid)
                    @case('N')
                        <div class="col-4">Status Transaksi : BELUM DIBAYAR</div>
                        @break
                    @case('W')
                        <div class="col-4">Status Transaksi : Menunggu Konfirmasi</div>
                        @break
                    @default
                        <div class="col-4">Status Transaksi : Selesai</div>
                @endswitch
              </div>
              @endforeach
              <div class="row">
                <div class="col-4">Lokasi Tujuan : {{ $perjalanan->tujuan }}</div>
              </div>
              <div class="row">
                <div class="col-4">Jam : {{ $perjalanan->jam }}</div>
              </div>

            <hr>
            <div class="row mt-4">
              <div class="col-4">Nama Penumpang : {{ $transaksi->nama_penumpang }}</div>
              <div class="col-4"></div>
              <div class="col-4">
                <h4>Unit : {{ $perjalanan->merk }}</h4>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-4">Nomor Telepon : {{ $transaksi->notelp }}</div>
            </div>
            <div class="row">
              <div class="col-4">Tiket Dibuat : {{ $transaksi->created_at }}</div>
              <div class="col-4"></div>
              <div class="col-4">
                <h4>{{ $perjalanan->plat }}</h4>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-4">Nama Pemesan : {{ $transaksi->nama_pemesan }}</div>
            </div>
            <div class="row">
              <div class="col-4">Email : {{ $transaksi->email_pemesan }}</div>
              <div class="col-4"></div>
              <div class="col-4"><h4>Harga = Rp. {{ $perjalanan->harga }},-</h4></div>
            </div>
            <div class="row">
              <div class="col-4">Alamat : {{ $transaksi->alamat }}</div>
            </div>
            <hr>
            <div class="row">
              <div class="col-6">
                <h1>ID Ticket : {{ $transaksi->id_transaksi }}</h1>
              </div>
            </div>
            <hr>
            <div class="row">
              
              @if ($transaksi->isPaid  == 'N')
                @if ($transaksi->id_bayar  == '1')
                  <div class="col-6">
                    <h3>Bayar Di Tempat Anda Berangkat!</h3>
                  </div>
                @else
            </div>
                  <div class="row">
                    <div class="col-6">
                      <h4>Kirimkan Ke Nomor Rekening : 12345678910</h4>
                    </div>
                  
                  <form action="buktibayarPost" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_transaksi" value="{{ $transaksi->id_transaksi }}">
                    
                  <div class="row">
                    <div class="col-6">
                      <input type="file" name="img_bukti" id="" placeholder="Upload Bukti Pembayaran">
                    </div>
                    <div class="col-6">
                      <input type="submit" value="Kirim Bukti Pembayaran" class="btn btn-warning">
                    </div>
                  </div>
                  
                    
                  </form>
                @endif
                </div>
              @elseif($transaksi->isPaid  == 'W')
                <div class="col-6"><h3>Menunggu Konfirmasi Pembayaran</h3></div>
              @else
                  <div class="col-6"><h3>Pembayaran Telah Berhasil! Nikmati Perjalanan Anda</h3></div>
              @endif
            
          </div>
            </div>
            
          
        </section>
        @endif
    @endforeach

    @include('nav.footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>