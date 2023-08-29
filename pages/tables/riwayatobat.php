<?php
include_once '../../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DATA PASIEN BINA MEDIKA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#69D4D4; border-color:gray; color:white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="background-color:#69D4D4; border-color:gray; color:white"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link" style="background-color:#69D4D4; border-color:gray; color:white">Home</a>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../logout.php" class="nav-link" style="background-color:#69D4D4; border-color:gray; color:white">Logout</a>
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
    <a href="../../index.php" class="brand-link"style="background-color: #69D4D4; border-color:white; color:white">
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
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                DASHBOARD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.php" class="nav-link" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="datapasien.php" class="nav-link " >
              <i class="nav-icon fas fa-book"></i>
              <p>
                DATA PASIEN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dataobat.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                DATA OBAT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="riwayatobat.php" class="nav-link active" style="background-color:#69D4D4; border-color:gray; color:white">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Riwayat Data Obat Pasien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Obat Pasien</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <a href="riwayat_tambah.php" class="btn btn-info btn-sm pull-right" style="background-color:#00FFF; border-color:gray; color:white"><i class="fa fa-plus"></i> &nbsp Tambah Data Baru</a>  
                <!-- <a href="ratedomestik_tambah.php" class="btn btn-info btn-sm pull-right" style="background-color:red; border-color:gray; color:white"><i class="fa fa-plus"></i> &nbsp Tambah Data Baru</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Pasien</th>
                    <th>Nama Dokter</th>
                    <th>Diagnosa</th>
                    <th>Nama Obat</th>
                    <th>Jumlah Obat</th>
                    <th>Aturan Pakai</th>
                    <th>Tgl Periksa</th>
                    <th>Total adm</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <div id="laporan-template" style="display: none;">
    <!-- Struktur HTML dan gaya CSS untuk tabel laporan -->
    <!-- ... -->
  </div>
                  <?php
                    include '../../koneksi.php';
                    $no=1;
                    $data = mysqli_query($koneksi,"SELECT * FROM riwayatobat");
                    while($d = mysqli_fetch_array($data)){
                      ?>
                          <tr>
                              <td><?php echo  $no++ ?></td>
                              <td><?php echo $d['nama_pasien'] ?></td>
                              <td><?php echo $d['jenis_pasien'] ?></td>
                              <td><?php echo $d['nama_dokter'] ?></td>
                              <td><?php echo $d['diagnosa'] ?></td>
                              <td><?php echo $d['nama_obat'] ?></td>
                              <td><?php echo $d['jmlh_obat'] ?></td>
                              <td><?php echo $d['aturan_pakai'] ?></td>
                              <td><?php echo $d['tgl_periksa'] ?></td>
                              <td><?php echo $d['tot_adm'] ?></td>
                              <td>
                                <button class="btn btn-primary btn-sm view-button" data-table-id="<?php echo $d['id_riwayat'] ?>"><i class="fa fa-eye"></i> Lihat</button>
                                <!-- <a class="btn btn-warning btn-sm" href="riwayat_edit.php?id_riwayat=<?php echo $d['id_riwayat'] ?>"><i class="fa fa-edit"></i></a> 
                                 <a class="btn btn-danger btn-sm" href="riwayat_hapus.php?id_riwayat=<?php echo $d['id_riwayat'] ?>"><i class="fa fa-trash"></i></a>  -->
                              </td>
                          </tr>
                          <?php 
                      }
                      ?>
                  </tbody> 
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="">Klinik Bina Medika Baleendah</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Destiny</b> 3.2.0
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  // Tangani peristiwa klik pada tombol "Lihat"
  var viewButtons = document.getElementsByClassName('view-button');
  for (var i = 0; i < viewButtons.length; i++) {
    viewButtons[i].addEventListener('click', function() {
      // Ambil ID tabel terkait dari atribut data
      var tableId = this.getAttribute('data-table-id');

      // Tampilkan template tabel laporan yang sesuai
      var laporanTemplate = document.getElementById('laporan-template').innerHTML;
      // Manipulasi template tabel laporan sesuai dengan ID tabel yang dipilih
      var laporanData = // Manipulasi template laporan dengan ID tabel yang dipilih

      // Buka jendela cetak baru dengan tampilan tabel laporan
      var printWindow = window.open('', '_blank');
      printWindow.document.open();
      printWindow.document.write(laporanData);
      printWindow.document.close();
    });
  }

  });
</script>
<style>
  /* CSS untuk laporan */
  .laporan-container {
    font-family: Arial, sans-serif;
    margin: 30px;
    padding: 20px;
    border: 1px solid #ccc;
  }

  .laporan-logo {
    text-align: left;
    margin-bottom: 20px;
  }

  .laporan-logo img {
    max-width: 200px;
    height: auto;
  }

  .laporan-tabel {
    width: 100%;
    border-collapse: collapse;
  }

  .laporan-tabel th, .laporan-tabel td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
  }
</style>

</body>
</html>
