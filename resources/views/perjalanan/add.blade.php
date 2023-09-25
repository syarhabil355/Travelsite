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
              <li class="breadcrumb-item"><a href="/client">Perjalanan</a></li>
              <li class="breadcrumb-item">Add Data</li>
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
                <h3 class="card-title">Add Perjalanan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="addPerjalananPost">
                {{ csrf_field() }}
                {{-- <input type="hidden" name="id_lokasi" class="form-control" id="inputText4" > --}}
                <div class="card-body">

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Hari</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <select name="hari" id="" class="form-control">
                        <option value="">-- Select Day --</option>
                        <option value="SENIN">Senin</option>
                        <option value="SELASA">Selasa</option>
                        <option value="RABU">Rabu</option>
                        <option value="KAMIS">Kamis</option>
                        <option value="JUMAT">Jum'at</option>
                        <option value="SABTU">Sabtu</option>
                        <option value="MINGGU">Minggu</option>
                      </select>
                      
                    </div>
                  </div>
                
                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Lokasi Berangkat & Tujuan</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->

                      <select name="id_lok_berangkat" id="" class="form-control">
                        <option value="">-- Select Departure Location --</option>
                        @foreach ($collection = DB::table('lokasi')->get(); as $item)
                        @if ( $item->isDeleted  == "N")
                            <option value="{{ $item->id_lokasi }}">{{ $item->namalokasi }}</option>
                        @endif
                        @endforeach
                      </select>

                      <select name="id_lok_tujuan" id="" class="form-control">
                        <option value="">-- Select Arrival Location --</option>
                        
                        @foreach ($collection = DB::table('lokasi')->get(); as $item)
                        @if ( $item->isDeleted  == "N")
                        <option value="{{ $item->id_lokasi }}">{{ $item->namalokasi }}</option>
                        @endif
                        @endforeach
                      </select>
                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Jam Berangkat</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      <input type="time" name="jam" class="form-control" id="inputGroupFile01" required>
                      
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Harga</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      
                      <input type="number" class="form-control" name="harga">
                    </div>
                  </div>

                  <div class="col-12 form-group row">
                    <label for="inputText2" class="col-sm-12 col-form-label">Select Unit</label>
                    <div class="input-group mb-3 col-12">
                      <!-- <label class="input-group-text" for="inputGroupFile01">Upload</label> -->
                      
                      <select name="id_unit" id="" class="form-control">
                        <option value="">-- Select Unit --</option>
                        @foreach ($collection = DB::table('unit')->get(); as $item)
                        @if ( $item->isDeleted  == "N")
                        <option value="{{ $item->id_unit }}">{{ $item->codename }} = {{ $item->plat }} // {{ $item->merk }}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>
                  </div>


                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" style="width:10%;">Tambah</button>
                </div>
                <!-- /.card-footer -->
                </div>
              </form>
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