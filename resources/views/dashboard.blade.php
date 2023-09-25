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
  <link rel="stylesheet" href="dist/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="dist/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="dist/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
<aside>
      <!-- /.sidebar-menu -->
      @include('adminlteextend.nav')
      
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
    <!-- Control sidebar content goes here -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->

  
</div>@include('adminlteextend.footer')
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
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="dist/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="dist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="dist/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="dist/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="dist/plugins/jszip/jszip.min.js"></script>
<script src="dist/plugins/pdfmake/pdfmake.min.js"></script>
<script src="dist/plugins/pdfmake/vfs_fonts.js"></script>
<script src="dist/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="dist/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="dist/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
</html>
