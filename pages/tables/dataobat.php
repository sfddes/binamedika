<?php
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DATA OBAT BINA MEDIKA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Tambahkan link CSS DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Tambahkan script DataTables -->
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  <!-- Tambahkan script DataTables Buttons -->
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <title>Data Obat Klinik Bina Medika</title>
  <style>
        @media print {
            /* Sembunyikan elemen yang tidak perlu dicetak */
            .no-print {
                display: none;
            }
        }
    </style>
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
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../logout.php" class="nav-link" style="background-color:#69D4D4; border-color:gray; color:white">Logout</a>
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
    <a href="../../index.php" class="brand-link" style="background-color:#69D4D4; border-color:white; color:white">
      <span class="brand-text font-weight-light">KLNIK BINA MEDIKA</span>
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
          <li class="nav-item ">
            <a href="datapasien.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                DATA PASIEN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="dataobat.php" class="nav-link active" style="background-color:#69D4D4; border-color:gray; color:white">
              <i class="nav-icon fas fa-table"></i>
              <p>
                DATA OBAT
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="riwayatobat.php" class="nav-link">
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
            <h1>Data Obat Klinik Bina Medika</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">Data obat</li>
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
              <a href="obat_tambah.php" class="btn btn-info btn-sm pull-right" style="background-color:#00FFF; border-color:gray; color:white">
                <i class="fa fa-plus"></i> &nbsp Tambah Data Baru
              </a>  
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <div style="overflow-x: auto;">
                <table id="example1" class="table table-bordered table-striped custom-table">
                <style>
                .custom-table {
                  width: 300px; /* Atur lebar tabel sesuai kebutuhan */
                }
                </style>
                  <!-- <colgroup>
                    <col style="width: 60px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                    <col style="width: 110px;">
                  </colgroup> -->
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tgl Masuk Obat</th>
                      <th>Kode Obat</th>
                      <th>Nama Obat</th>
                      <th>Satuan</th>
                      <th>Tempat Penyimpanan</th>
                      <th>Harga Beli</th>
                      <th>Harga jual</th>
                      <th>tgl Kadaluwarsa</th>
                      <th>Sisa Stock</th>
                      <th>Stock</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    include '../../koneksi.php';
                    $no=1;
                    $data = mysqli_query($koneksi,"SELECT * FROM dataobat");
                    while($d = mysqli_fetch_array($data)){
                      ?>
                          <tr>
                              <td><?php echo  $no++ ?></td>
                              <td><?php echo $d['tgl_masuk'] ?></td>
                              <td><?php echo $d['kode_obat'] ?></td>
                              <td><?php echo $d['nama_obat'] ?></td>
                              <td><?php echo $d['satuan'] ?></td>
                              <td><?php echo $d['penyimpanan'] ?></td>
                              <td><?php echo $d['harga_beli'] ?></td>
                              <td><?php echo $d['harga_jual'] ?></td>
                              <td><?php echo $d['kadaluwarsa'] ?></td>
                              <td><?php echo $d['min_stock'] ?></td>
                              <td><?php echo $d['stock'] ?></td>
                              <td>
                                <a class="btn btn-warning btn-sm" href="obat_edit.php?id_obat=<?php echo $d['id_obat'] ?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger btn-sm" href="obat_hapus.php?id_obat=<?php echo $d['id_obat']; ?>" onclick="return confirmDelete()"><i class="fa fa-trash"></i></a>
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
    <style>
  
  .custom-table .btn-sm {
    padding: 0.15rem 0.3rem; /* Atur padding tombol sesuai kebutuhan */
    font-size: 0.500rem; /* Atur ukuran font tombol sesuai kebutuhan */
  }

  
  .table-responsive {
    overflow-x: auto;
  }
  .table {
    table-layout: auto;
    width: 100%;
  }
  .custom-table {
    width: 100%; /* Atur lebar tabel sesuai kebutuhan */
  }

  .custom-table th {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  
  .table th {
    white-space: nowrap; /* Menghindari pemotongan teks */
    overflow: hidden; /* Memotong teks yang terlalu panjang */
    text-overflow: ellipsis; /* Menampilkan tanda elipsis (...) */
    font-size: 12px; /* Mengurangi ukuran font */
  }
  .table td {
    font-size: 10px; /* Atur ukuran font untuk seluruh sel dalam tabel */
    text-align: center; /* Pusatkan teks dalam sel */
    vertical-align: middle; /* Tengahkan konten vertikal dalam sel */
  
  }

  /* Penyesuaian lebar kolom */
  .table col:nth-child(0) {
    width: 60px;
  }
  .table col:nth-child(1) {
    width: 60px;
  }

  .table col:nth-child(2) {
    width: 100px;
  }
  .table col:nth-child(3) {
    width: 100;
  }

  .table col:nth-child(4) {
    width: 100px;
  }
  .table col:nth-child(5) {
    width: 10px;
  }

  .table col:nth-child(6) {
    width: 100px;
  }
  .table col:nth-child(7) {
    width: 110px;
  }

  .table col:nth-child(8) {
    width: 110px;
  }
  .table col:nth-child(9) {
    width: 110px;
  }

  .table col:nth-child(10) {
    width: 110px;
  }

</style>
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
<!-- <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> -->
<!-- <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> -->
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

<!-- <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- Page specific script -->
<style>
  .table-row-height {
    height: 10px; /* Atur tinggi baris sesuai kebutuhan */
  }
  /* /* .table-row-width {
    height: 10px; /* Atur tinggi baris sesuai kebutuhan */
   */
</style>
<script>
  
  $(document).ready(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": true,
      "dom": 'Bfrtip',
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "initComplete": function() {
        if ($("#example1 tbody tr").length === 0) {
          $(".dt-buttons").show();
        } else {
          $(".dt-buttons").show();
        }
      },
      "columnDefs": [
        { "width": "60px", "targets": [0,1, 2, 3, 4]},
        { "width": "100px", "targets": [ 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ]},

        // Setel lebar untuk setiap kolom sesuai kebutuhan Anda
      ],
      "scrollX": true // Pengguliran horizontal diaktifkan
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      // Tambahkan kelas CSS pada baris yang ingin memiliki tinggi khusus
      $("#example1 tbody tr").addClass("table-row-height");
      // $("#example1 tbody tr").addClass("table-row-width");
      
  });
  
  function confirmDelete() {
  var confirmation = confirm("Apakah Anda yakin ingin menghapus data obat ini?");
  if (confirmation) {
    // Mengambil URL hapus obat
    var deleteURL = event.currentTarget.href;
    
    // Melakukan request AJAX untuk menghapus isi tabel
    $.ajax({
      url: deleteURL,
      type: 'GET',
      success: function(response) {
        // Menampilkan notifikasi setelah berhasil menghapus data obat
        showNotification("Notifikasi: Data obat berhasil dihapus!");

        // Delay 3 detik sebelum mengarahkan kembali ke halaman data obat
        setTimeout(function() {
          window.location.href = "dataobat.php";
        }, 3000);
      },
      error: function(xhr, status, error) {
        // Menampilkan pesan error jika terjadi kesalahan pada request AJAX
        console.log(xhr.responseText);
        alert("Terjadi kesalahan saat menghapus data obat.");
      }
    });
  }

  return false;
}
function showNotification(message) {
  var overlay = document.createElement("div");
  overlay.style.position = "fixed";
  overlay.style.top = "0";
  overlay.style.left = "0";
  overlay.style.width = "100%";
  overlay.style.height = "100%";
  overlay.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
  overlay.style.zIndex = "9999";
  overlay.style.display = "flex";
  overlay.style.justifyContent = "center";
  overlay.style.alignItems = "center";

  var notification = document.createElement("div");
  notification.innerText = message;
  notification.style.backgroundColor = "#fff";
  notification.style.padding = "20px";
  notification.style.borderRadius = "5px";

  overlay.appendChild(notification);
  document.body.appendChild(overlay);
}
</script>
<style>
  .table-responsive {
  overflow-x: auto;
}

.table-wrapper {
  width: max-content;
}

.table-scroll {
  overflow-x: scroll;
  max-width: 100%;
}

</style>
</body>
</html>
