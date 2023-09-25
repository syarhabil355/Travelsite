<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="dist/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../dist/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../dist/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
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
              <li class="breadcrumb-item"><a href="#">Perjalanan</a></li>
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
          <div class="col-lg-6">


          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">

          </div>
          <h3 style="margin-left:40px; margin-bottom:20px;">Perjalanan</h3>
          <section class="content"style="width:100%;">
      <div class="container-fluid">
        <div class="row">

        
          <div class="col-12">

            <!-- /.card -->
            <div class="card">
              <div class="card-header" >
                <h3 class="card-title" ><button type="button" class="btn btn-primary"><a href="addPerjalanan"style="color:white;text-decoration:none;">Tambah Data</a></button></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   
                  <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Lokasi Berangkat</th>
                    <th>Lokasi Tujuan</th>
                    <th>Jam Berangkat</th>
                    <th>Unit</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=0; ?>
                @foreach($perjalanan as $p)
                
                @if ($p->isDeleted == 'N')
                
                <?php $no++?>
                  <tr> 
                    <td>{{ $no }}</td>
                    <td style="width: 10%">{{ $p->hari }}</td>    
                    <td style="width: 15%">{{ $p->berangkat }}</td> 
                    <td style="width: 15%">{{ $p->tujuan }}</td>
                    <td style="width: 20%">{{ $p->jam }}</td>
                    <td style="width: 10%">{{ $p->codename }}</td> 
                    <td style="width: 10%">{{ $p->harga }}</td> 
                    <td>
                       <button type="button" class="btn btn-warning"><a href="editPerjalanan/{{ $p->id_perjalanan }}"style="color:white;text-decoration:none;">Edit</a></button>
                       <button type="button" class="btn btn-danger "><a href="deletePerjalanan/{{ $p->id_perjalanan }}"style="color:white;text-decoration:none;">Hapus</a></button>
                       <button type="button" class="btn btn-primary"><a href="detailPerjalanan/{{ $p->id_perjalanan }}"style="color:white;text-decoration:none;">Detail</a></button>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
              <!-- /.card-body -->
            
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
    <!-- Control sidebar content goes here -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->

  @include('adminlteextend.footer')
</div>
<!-- ./wrapper -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="../../dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../dist/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../dist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../dist/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../dist/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../dist/plugins/jszip/jszip.min.js"></script>
<script src="../../dist/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../dist/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../dist/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../dist/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../dist/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
</html>

<script>
    $(document).ready(function () {
        $('.delete').click(function (e) {
            if (confirm('Are you sure?')) {
                $(this).siblings('form').submit();
            }

            return false;
        });
    });

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>