<?php 
include 'koneksi.php';

session_start();

// Periksa status login, jika belum login, arahkan ke halaman login
if (!isset($_SESSION['status']) || $_SESSION['status'] !== 'loggedin') {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KLINIK BINA MEDIKA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
    /* .notification:not(:first-child) {
      margin-top: 10px;
    } */
    .notification-box h4 {
      font-size: 18px; /* Ukuran font */
      color: #333; /* Warna teks */
      margin: 10px; /* Menghapus margin atas dan bawah */
      padding: 10px 0; /* Padding atas dan bawah */
      text-align: center; /* Pusatkan teks */
      border-bottom: 1px solid #ccc; /* Garis bawah */
      font-family: "Arial", sans-serif; /* Ganti dengan gaya font yang diinginkan */
    }

    .notification-container {
      
      border: 3px solid #ccc;
      padding: 10px;
      margin-bottom: 1px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
    }
    
    .notification {
      display: flex;
      align-items: center;
      padding: 7px;
      margin-bottom: 10px;
      font-size: 15px;
      /* font-family: "Arial"; */
      font-weight: bold;
    }
    .notification-stock {
      display: flex;
      align-items: center;
      padding: 3px;
      margin-bottom: 10px;
      font-size: 15px;
      /* font-family: "Arial"; */
      font-weight: bold;
      
    }
    /* .notification:nth-child(odd) {
      float: right;
    }   

    .notification:nth-child(even) {
      float: left;
    } */
    .notification-kadaluwarsa {
      justify-content: flex-end;
    }

    .notification-akan-kadaluwarsa {
      justify-content: flex-start;
    }
    .notification-kadaluwarsa {
      float: right;
    }

    .notification-akan-kadaluwarsa  {
      float: left;
    }
    .notification-stock-hampir-habis{
      justify-content: flex-start;
    }
    .notification-stock-habis{
      justify-content: flex-end;
    }
    .notification-stock-hampir-habis {
      float: left;
    }
    .notification-stock-habis {
      float: right; 
    }



    .notification .obat-status {
      font-weight: bold;
      margin-left: 10px;
    }
    .notification .obat-status-stock {
      font-weight: bold;
      margin-left: 10px;
      
    }



    .notification-kadaluwarsa .obat-status {
      color: red;
      font-size: 10px;
      /* background-color: #828282; */
      
      padding: 3px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      justify-content: center; /* Menengahkan teks horizontal */
    }
    .notification-akan-kadaluwarsa .obat-status {
      color: #FFC700;
      font-size: 10px;
      /* background-color: #828282; */
      padding: 3px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      justify-content: center; /* Menengahkan teks horizontal */
    }
    .notification-stock-hampir-habis .obat-status-stock {
      color: #FFC700;
      font-size: 10px;
      /* background-color: #828282; */
      padding: 3px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      justify-content: center; /* Menengahkan teks horizontal */
    }
    .notification-stock-habis .obat-status-stock {
      color: red;
      font-size: 10px;
      /* background-color: #828282; */
      padding: 3px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      justify-content: center; /* Menengahkan teks horizontal */
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#69D4D4; border-color:gray; color:white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="background-color:#69D4D4; border-color:gray; color:white"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link" style="background-color:#69D4D4; border-color:gray; color:white">Home</a>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="logout.php" class="nav-link" style="background-color:#69D4D4; border-color:gray; color:white">Logout</a>
        </li>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item"style="background-color:#69D4D4; border-color:gray; color:white">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="background-color:#69D4D4; border-color:gray; color:white">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link"style="background-color: #69D4D4; border-color:white; color:white">
      <!-- <img src="gambar/telkom.png" class="brand-image img-circle elevation-3"> -->
      <span class="brand-text font-weight-light">KLINIK BINA MEDIKA</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
      <br></br>
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active" style="background-color:#69D4D4; border-color:gray; color:white">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                DASHBOARD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/tables/datapasien.php" class="nav-link" >
              <i class="nav-icon fas fa-book"></i>
              <p>
                DATA PASIEN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/tables/dataobat.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                DATA OBAT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/tables/riwayatobat.php" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                 RIWAYAT OBAT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="laporan_obat.php" class="nav-link" style="background-color:#C5EEF0; border-color:gray; color:white">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                LAPORAN
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/laporan_obat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LAPORAN OBAT</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3 data-feather="file-text"></h3>
              <p>DATA PASIEN</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="pages/tables/datapasien.php" class="small-box-footer" style="background-color:#7ADFF5; border-color:gray; color:white">Click here <i class="fas fa-arrow-circle-right" ></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3 data-feather="file-text"></h3>
              <p>DATA OBAT</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="pages/tables/dataobat.php" class="small-box-footer" style="background-color:#8EED61; border-color:gray; color:white">Click here<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3 data-feather="file-text"></h3>
              <p>RIWAYAT OBAT</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="pages/tables/riwayatobat.php" class="small-box-footer" style="background-color:#7ADFF5; border-color:gray; color:white">Click here <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3 data-feather="file-text"></h3>
              <p>Import</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="pages/tables/import.php" class="small-box-footer" style="background-color:#8EED61; border-color:gray; color:white">Click here <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="notification-container" style="height: 100%;">
            <div class="row">
              <div class="col-lg-12">
                <div class="notification-container" style="height: 100%;" >
                  <div class="notification-box">
                  <h4>Pemberitahuan Obat</h4>
                      <?php
                      $dataObat = mysqli_query($koneksi, "SELECT * FROM dataobat");
                      while ($d = mysqli_fetch_array($dataObat)) {
                          // Calculate notification date (e.g., 5 days before expiration)
                          $kadaluwarsa = strtotime($d['kadaluwarsa']);
                          $pemberitahuan = strtotime('-5 days', $kadaluwarsa);
                          $today = strtotime(date('Y-m-d'));
                      
                          // Check if the drug is still far from expiration date
                          if ($pemberitahuan > $today) {
                              continue; // Skip to the next iteration if the drug is still far from expiration
                          }
                        
                          // Check if the drug has already expired
                          if ($kadaluwarsa < $today) {
                              $status = 'Kadaluwarsa';
                              $class = 'notification-kadaluwarsa';
                          } elseif ($pemberitahuan <= $today && $today < $kadaluwarsa) {
                              $status = 'Akan Kadaluwarsa';
                              $class = 'notification-akan-kadaluwarsa';
                          } else {
                              continue; // Skip to the next iteration if the drug is safe (not expired or about to expire)
                          }
                        
                          echo "<div class='notification {$class}'>";
                          echo "<span class='obat-nama'>{$d['nama_obat']}</span>";
                          echo "<span class='obat-status'>{$status}</span>";
                          echo "</div>";
                      }
                      ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="notification-container" style="height: 100%;">
          <div class="row">
              <div class="col-lg-12">
                <div class="notification-container" style="height: 100%;">
                  <div class="notification-box">
                        <h4>Pemberitahuan Stock Obat</h4>
                        <?php
                            $dataobat = mysqli_query($koneksi, "SELECT * FROM dataobat");
                            while ($s = mysqli_fetch_array($dataobat)) {
                              $stockSisa = $s['min_stock'];

                              // Check if the stock quantity is running low
                              if ($stockSisa < 10 && $stockSisa > 0) {
                                $statusStock = 'Stock Hampir Habis';
                                $classStock = 'notification-stock-hampir-habis';
                              } elseif ($stockSisa == 0) {
                                $statusStock = 'Stock Habis';
                                $classStock = 'notification-stock-habis';
                              } else {
                                continue; // Skip to the next iteration if the stock quantity is sufficient
                              }

                              echo "<div class='notification-stock {$classStock}'>";
                              echo "<span class='obat-nama-stock'>{$s['nama_obat']}</span>";
                              echo "<span class='obat-status-stock'>{$statusStock}</span>";
                              echo "</div>";
                            }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="">Skema Bisnis Produk Signalling</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>DSFD</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

</body>
</html>
