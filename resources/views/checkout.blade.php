<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cek Jadwal Perjalanan</title>
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
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Cek Jadwal <i class="fa fa-chevron-right"></i></span> CheckOut</p>
          	<h1>Isi Data Lengkap & Check Out Tiket!</h1>
          </div>
        </div>
      </div>
    </section>
		
	
    @foreach ($perjalanan as $perjalanan)
        @if ($perjalanan->isDeleted == 'N')
        <form action="{{ url('cekoutPost') }}" method="post">
            {{ csrf_field() }}
        <input type="hidden" name="harga" value="{{ $perjalanan->harga }}">
        <input type="hidden" name="id_perjalanan" value="{{ $perjalanan->id_perjalanan }}">
        <section class="bg-light p-3">
          <div class="container card">
            <div class="card-body">
              <h4 class="card-title">Ticket Available</h4>
              <hr>
              <div class="row">
                <div class="col-4">Hari : {{ $perjalanan->hari }}</div>
                <div class="col-4">Jam : {{ $perjalanan->jam }}</div>
                <div class="col-4">Harga : Rp. {{ $perjalanan->harga }},-</div>
              </div>
              <div class="row">
                <div class="col-4">Lokasi Berangkat : {{ $perjalanan->berangkat }}</div>
                <div class="col-4">Lokasi Tujuan : {{ $perjalanan->tujuan }}</div>
              </div>

              <hr>
            <div class="row mt-4">
              <div class="col-6">
                <label for="nama_Pemesan">Nama Pemesan</label>
                <input type="text" class="iptfull" name="nama_pemesan" required>
              </div>  
            </div>

            <div class="row mt-4">
              <div class="col-6">
                <label for="email_pemesan">E-mail Pemesan</label>
                <input type="email" class="iptfull" name="email_pemesan" required>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-6">
                <label for="nama_penumpang">Nama Penumpang</label>
                <input type="text" class="iptfull" name="nama_penumpang" required>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-6">
                <label for="notelp">Nomor Telepon</label>
                <input type="number" class="iptfull" name="notelp" required>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-6">
                <label for="alamat">Alamat Pemesan</label>
                <textarea class="iptfull" name="alamat" id="" rows="3" required></textarea>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-6">
                <label for="id_bayar">Metode Pembayaran</label>
                <br>
                  @foreach ($collection = DB::table('carabayar')->get(); as $item)
                  @if ( $item->isDeleted  === 'N')
                      <input type="radio" name="id_bayar" id="" value="{{ $item->id_bayar }}"> {{ $item->carabayar }} <br>
                  @endif
                  @endforeach
                </select>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-12">
                <input type="submit" value="Pesan Tiket!" style="float: right" class="btn btn-warning">
              </div>
            </div>
            </form>
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