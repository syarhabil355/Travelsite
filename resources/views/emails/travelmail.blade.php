<!DOCTYPE html>
<html>
<head>
    <title>travelsite.com</title>
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
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <hr>
    @foreach ($transaksi = DB::table('transaksi')
    ->join('carabayar','transaksi.id_bayar','=','carabayar.id_bayar')
    ->select('transaksi.id_perjalanan','carabayar.carabayar','isPaid','nama_penumpang','notelp','transaksi.created_at','transaksi.isDeleted','transaksi.id_transaksi','transaksi.id_bayar','nama_pemesan','email_pemesan','nomor_perjalanan','alamat')
    ->where('id_transaksi',$details['id_transaksi'])
    ->get(); as $transaksi)
    

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
                <div class="col-4">Jam : {{ $perjalanan->jam }}</div>
                <div class="col-4">Metode Pembayaran : {{ $transaksi->carabayar }}</div>
              </div>
              <div class="row">
                <div class="col-4">Lokasi Berangkat : {{ $perjalanan->berangkat }}</div>
                <div class="col-4">Lokasi Tujuan : {{ $perjalanan->tujuan }}</div>
              </div>
              
            <div class="row mt-4">
              <div class="col-4">Nama Penumpang : {{ $transaksi->nama_penumpang }}</div>
              <div class="col-4">Nomor Telepon : {{ $transaksi->notelp }}</div>
              <div class="col-4">Tiket Dibuat : {{ $transaksi->created_at }}</div>

              <div class="col-4">Nama Pemesan : {{ $transaksi->nama_pemesan }}</div>
              <div class="col-4">Email : {{ $transaksi->email_pemesan }}</div>
              <div class="col-4"></div>

              <div class="col-4">
                <h4>Unit : {{ $perjalanan->merk }}</h4>
              </div>
              <div class="col-4">
                <h4>{{ $perjalanan->plat }}</h4>
              </div>
              <div class="col-4"><h4>Harga = Rp. {{ $perjalanan->harga }},-</h4></div>
            </div>
            <div class="row">
              <div class="col-6">
                <h1>ID Ticket : {{ $transaksi->id_transaksi }}</h1>
              </div>
              <div class="col-6">
                <h1>ID Perjalanan : {{ $transaksi->nomor_perjalanan }}</h1>
              </div>
            </div>
            </div>
        </div>
        </section>
        @endforeach
        @endforeach
    <hr>
    <p>Terima Kasih Telah Menggunakan Jasa Kami</p>
</body>
</html>