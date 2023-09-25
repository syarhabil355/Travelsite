<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dasboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../dist/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->

      <!-- /.sidebar-menu -->
      @include('adminlteextend.nav')
      {{-- @include('sweetalert::alert') --}}
      
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admintransaksi">transaksi</a></li>
              <li class="breadcrumb-item">Detail Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 m-auto">
          <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail transaksi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                @foreach ($transaksi as $transaksi)
                @foreach ($perjalanan = DB::table('perjalanan')
                ->join('lokasi','lokasi.id_lokasi','=','perjalanan.id_lok_tujuan')
                ->join('lokasi as tujuan','tujuan.id_lokasi','=','perjalanan.id_lok_berangkat')
                ->join('unit','unit.id_unit','=','perjalanan.id_unit')
                ->select('tujuan.namalokasi as berangkat', 'lokasi.namalokasi as tujuan','merk','plat', 'codename','perjalanan.isDeleted','hari','jam','perjalanan.id_perjalanan','perjalanan.isDeleted','harga')
                ->where('id_perjalanan',$transaksi->id_perjalanan)
                ->get(); as $perjalanan)
                @foreach ($user = DB::table('users')->where('id',$transaksi->id_user)->get(); as $user)
                


                <div class="card-body">
                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Nama Penumpang</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="namalokasi" class="form-control" id="inputGroupFile01" required value="{{ $transaksi->nama_penumpang }}" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Nomor Telepon</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="namalokasi" class="form-control" id="inputGroupFile01" required value="{{ $transaksi->notelp }}" readonly>                      
                    </div>
                  </div>
                
                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Nama Pemesan</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="{{ $transaksi->nama_pemesan }}" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Lokasi Berangkat & Tujuan</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="Dari : {{ $perjalanan->berangkat }} // Ke : {{ $perjalanan->tujuan }}" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Hari & Jam Berangkat</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="Hari : {{ $perjalanan->hari }} // Jam : {{ $perjalanan->jam }} WIB" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Harga Tiket</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="Rp. {{ $perjalanan->harga }},-" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Merk Mobil & Plat Nomor</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="{{ $perjalanan->merk }} // {{ $perjalanan->plat }}" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Status Pembayaran</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="{{ $transaksi->isPaid }}" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Metode Pembayaran</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="{{ $transaksi->carabayar }}" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Bukti Pembayaran</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <img src="{{ url('images/buktibayar')."/".$transaksi->img_bukti }}" alt="Bayar Di Tempat" width="200" height="200">
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Email Pemesan</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="{{ $transaksi->email_pemesan }}" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Account Username</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="{{ $transaksi->created_by }}" readonly>                     
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Account Email</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="{{ $user->email }}" readonly>                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Created At</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="text" name="ket" class="form-control" id="inputGroupFile01" required value="{{ $transaksi->created_at }}" readonly> 
                    </div>
                  </div>


                <!-- /.card-body -->
                <!-- /.card-footer -->
                </div>
                @endforeach
                @endforeach
                @endforeach
                
</div>
</div>
</div>
</div>
</div>
</div>
@include('adminlteextend.footer')
</div>
  
</div>
<!-- ./wrapper -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
<!-- REQUIRED SCRIPTS -->


</body>
</html>
<!-- jQuery -->
<script src="../../dist/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->


<script>
$(function () {
  bsCustomFileInput.init();
});
</script>