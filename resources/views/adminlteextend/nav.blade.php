<link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
<script src="https://kit.fontawesome.com/fbc65d9e88.js" crossorigin="anonymous"></script>
  <!-- Theme style -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="box-shadow:0 4px 8px 0 grey;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link {{ ($title === "dashboard") ? 'active' : ''  }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
            <li class="nav-item" >
                <a href="adminHome" class="nav-link {{ ($title === "home") ? 'active' : ''  }}">
                  <i class="far fa-circle nav-icon" ></i>
                  <p>Home</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="adminlokasi" class="nav-link {{ ($title === "lokasi") ? 'active' : ''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lokasi</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="adminworks" class="nav-link {{ ($title === "works") ? 'active' : ''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Works</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="adminteam" class="nav-link {{ ($title === "team") ? 'active' : ''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="admincustomers" class="nav-link {{ ($title === "customers") ? 'active' : ''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customers</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="adminproject" class="nav-link {{ ($title === "project") ? 'active' : ''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="admincontact" class="nav-link {{ ($title === "contact") ? 'active' : ''  }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>

        </ul>

        <li class="nav-item menu-open">
          <a href="#" class="nav-link {{ ($title === "perjalanan") ? 'active' : ''  }}">
            <i class="nav-icon fas fa-van-shuttle"></i>
            <p>
              Perjalanan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview ">
            <li class="nav-item">
              <a href="adminperjalanan" class="nav-link {{ ($title === "perjalanan") ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Jadwal Perjalanan</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="adminunit" class="nav-link {{ ($title === "unit") ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Daftar Unit</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item menu-open">
          <a href="#" class="nav-link {{ ($title === "transaksi") ? 'active' : ''  }}">
            <i class="nav-icon fas fa-dollar"></i>
            <p>
              Transaksi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview ">
            <li class="nav-item">
              <a href="admincarabayar" class="nav-link {{ ($title === "carabayar") ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Cara Bayar</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="admintransaksi" class="nav-link {{ ($title === "transaksional") ? 'active' : ''  }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Transaksional</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="fa-solid fa-right-from-bracket fa-lg nav-icon" id="logout"></i>
              <p style="color:#007bff;">
                  Log Out
              </p>
            </a>
          </li>
      </nav>
      <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>
      <script>
        $('#logout').hover(
       function(){ $(this).toggleClass('fa-spin'); }
)
      </script>

