<?php
include_once '../../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Obat</title>

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
        <a href="../../index.html" class="nav-link" style="background-color:#69D4D4; border-color:gray; color:white">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link" style="background-color:#69D4D4;border-color:gray; color:white">Logout</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
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
    <a href="../../index.html" class="brand-link" style="background-color:#69D4D4; border-color:white; color:white">
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
            <a href="index.html" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                DASHBOARD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="datapasien.php" class="nav-link" >
              <i class="nav-icon fas fa-book"></i>
              <p>
                DATA PASIEN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="pages/tables/dataobat.php" class="nav-link active" style="background-color:#69D4D4; border-color:gray; color:white">
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
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <small>Tambah Data Obat Baru</small>
      </h1>
    </section>
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" >Data Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
        
      <div class="modal-body">
        <div class="container">
          <?php 
          $id_obat = $_GET['id_obat'];
          $data = mysqli_query($koneksi,"select * from dataobat where id_obat='$id_obat'");
          while($d = mysqli_fetch_array($data)){
          ?>
            <form action="obat_update.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Tgl Masuk Obat</label>
                  <input type="date" class="form-control" name="tgl_masuk" value="<?php echo $d['tgl_masuk'] ?>">
                </div>
                <div class="form-group">
                  <label>Kode Obat</label>
                  <input type="hidden" name="id_obat" value="<?php echo $d['id_obat']; ?>">
                  <input type="text" class="form-control" name="kode_obat" required="required" value="<?php echo $d['kode_obat']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama Obat</label>
                  <input type="text" class="form-control" name="nama_obat" value="<?php echo $d['nama_obat']?>">
                </div>
                <div class="form-group">
                  <label>Satuan</label>
                  <select type="text" class="form-control" name="satuan" value="<?php echo $d['satuan'] ?>">
                    <option disable selected>NONE</option>
                    <option value="etalase1">BOX</option>
                    <option value="etalase2">BOTOL</option>
                    <option value="etalase3">TABLET</option>
                    <option value="etalase4">KAPSUL/PIL</option>
                    <option value="etalase1">OBAT OLES</option>
                    <option value="etalase2">SERBUK</option>
                    <option value="etalase3">OBAT TETES</option>
                    <option value="etalase4">INJEKSI</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Penyimpanan</label>
                    <select type="text" class="form-control" name="penyimpanan" value="<?php echo $d['penyimpanan'] ?>">
                    <option disable selected>GUDANG</option>
                    <option value="etalase1">ETALASE 1</option>
                    <option value="etalase2">ETALASE 2</option>
                    <option value="etalase3">ETALASE 3</option>
                    <option value="etalase4">ETALASE 4</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Harga Beli</label>
                  <input type="text" class="form-control" name="harga_beli" value="<?php echo $d['harga_beli'] ?>">
                </div>
                <div class="form-group">
                  <label>Harga Jual</label>
                  <input type="text" class="form-control" name="harga_jual" value="<?php echo $d['harga_jual'] ?>">
                </div>
                <div class="form-group">
                  <label>Tgl.Kadaluwarsa</label>
                  <input type="date" class="form-control" name="kadaluwarsa" value="<?php echo $d['kadaluwarsa'] ?>">
                </div>
                <div class="form-group">
                  <label>Sisa Stock</label>
                  <input type="text" class="form-control" name="min_stock" value="<?php echo $d['min_stock'] ?>">
                </div>
                <div class="form-group">
                  <label>Stock</label>
                  <input type="text" class="form-control" name="stock" value="<?php echo $d['stock'] ?>">
                </div>
              <div class="modal-footer">
                  <button style="background-color:#00ffff; border-color:gray; color:white" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button style="background-color:#00ffff; border-color:gray; color:white" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <?php 
          }
          ?>
        </div>
      </div>
    </div>
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
<!-- Page specific script -->
<script>
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
</body>
</html>

