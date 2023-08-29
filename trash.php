<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A2P Domestik</title>

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
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.html" class="brand-link">
      <img src="../../gambar/telkom.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DAMABIS</span>
    </a>>

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
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                DASHBOARD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                DATA SKEMA BISNIS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/tables/skembisA2Pdomestik.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>A2P Domestik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>A2P Internasional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>P2A</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>P2P</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PNV</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSU DSU</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Hubber</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Interaktif</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                DATA RATE
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/tables/rateA2Pdomestik.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>A2P Domestik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>A2P Internasional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>P2A</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>P2P</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PNV</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSU DSU</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Hubber</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Interaktif</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                IMPORT DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/forms/import.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                HISTORY UPLOAD
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/tables/histori.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>History</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Skema Bisnis A2P domestik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">skembis A2P domestik</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Barang</h1>
          <div class="section-header-breadcrumb">
            <!-- <button class="btn btn-primary triger-sukses" onclick="sukses()">Launch</button> -->
              <button class="btn btn-primary btn-icon icon-left" data-toggle="modal" data-target="#AddStok"><i class="fas fa-plus"></i> Tambah Barang</button>
          </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                        <?php 
                                    if($error){
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="far fa-check-circle"></i> <?php echo htmlentities($error); ?> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php } 
                                    else if($msg){
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert"><i class="far fa-check-circle"></i> <?php echo htmlentities($msg); ?> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php }?>
                            <style>
                                table.table-bordered.dataTable tbody th,table.table-bordered.dataTable tbody td{border-bottom-width:1px}
                            </style>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sender</th>
                                        <th>Nama SKEMBIS</th>
                                        <th>Valid form</th>
                                        <th>valid until</th>
                                        <th>file SKEMBIS</th>
                                        <!-- <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Satuan</th>
                                        <th>Harga Pokok</th>
                                        <th>Harga (Eceran)</th>
                                        <th>Harga (Grosir)</th>
                                        <th>Stok</th>
                                        <th>Min Stok</th>
                                        <th>Kategori</th>
                                        <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                            // function rupiah($angka){
                                            
                                            //     $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                                            //     return $hasil_rupiah;
                                            
                                            // }
                                            // $sql = "SELECT * from tbl_barang JOIN tbl_kategori ON tbl_barang.barang_kategori_id=tbl_kategori.kategori_id";
                                            // $query = $dbh -> prepare($sql);
                                            // $query->execute();
                                            // $results=$query->fetchAll(PDO::FETCH_OBJ);
                                            // $nmr=1;
                                            // $ket = array();
                                            // if($query->rowCount() > 0){
                                            //     foreach($results as $res){                  
                                        ?>
                                    <tr>
                                                
                                        <td><?php echo htmlentities($nmr);?></td>
                                        <td><?php echo htmlentities($res->id);?></td>
                                        <td><?php echo htmlentities($res->sender);?></td>
                                        <td><?php echo htmlentities($res->nama_skembis);?></td>
                                        <td><?php echo htmlentities($res->valid_from);?></td>
                                        <td><?php echo htmlentities($res->valid_until);?></td>
                                        <td><?php echo htmlentities($res->file_skembis);?></td>
                                     
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#MyModal<?php echo $res->id;?>"><i class="fas fa-edit"></i></button>
                                            <a href="skembisA2Pdomestik.php?del=<?php echo $res->id;?>" onclick="return confirm('Do you want to delete');" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="MyModal<?php echo $res->id;?>">
                                        <div class="modal-dialog" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Update Barang</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="">
                                                            <div class="form-group">
                                                                <label for="">Sender</label>
                                                                <input type="hidden" name="id" value="<?php echo $res->barang_id;?>" class="form-control" required>
                                                                <input type="text" name="sender" value="<?php echo $res->sender;?>" class="form-control" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Nama SKEMBIS</label>
                                                                <select name="nama_skembis" class="form-control" required>
                                                                    <!-- <option value="<?= $res->nama_skembis?>">--<?= $res->nama_skembis?>--</option> -->
                                                                    <?php 
                                                                        // $sql1 = "select * from a2pdomestik";
                                                                        // $query1 = $dbh -> prepare($sql1);
                                                                        // $query1->execute();
                                                                        // $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                                                                        // if($query1->rowCount() > 0){
                                                                        //     foreach($results1 as $res1){
                                                                    ?>
                                                                    <!-- <option value="<?= $res1->kategori_id?>"><?= $res1->kategori_name?></option> -->
                                                                    <?php?>
                                                                </select>  
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Valid from</label>
                                                                <input type="date" name="valid_from" class="form-control" value="<?php echo $res->valid_from;?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Valid until</label>
                                                                <input type="date" name="valid_until" class="form-control" value="<?php echo $res->valid_until;?>" required>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="">File SKEMBIS</label>
                                                                        <input type="" name="file_skembis" class="form-control" value="<?php echo $res->file_skembis;?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button Type="submit" name="update" class="btn btn-primary mt-4">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </div>
                                        <!-- /.modal -->
                                    <?php $nmr=$nmr+1; } } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
         <div class="modal fade" id="AddStok">
            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Barang</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="">
                                <div class="form-group">
                                    <label for="">Sender</label>
                                    <input type="text" name="sender" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama SKEMBIS</label>
                                    <select name="nama_skembis" class="form-control" required>
                                        <?php 
                                            // $sql1 = "select * from tbl_kategori";
                                            // $query1 = $dbh -> prepare($sql1);
                                            // $query1->execute();
                                            // $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                                            // if($query1->rowCount() > 0){
                                            //     foreach($results1 as $res1){
                                        ?>
                                        <!-- <option value="<?= $res1->kategori_id?>"><?= $res1->kategori_name?></option> -->
                                        <?php }}?>
                                    </select>  
                                </div>
                                <div class="form-group">
                                    <label for="">Valid from</label>
                                    <input type="date" name="valid_from" class="form-control" placeholder="dd/mm/yy" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Valid until</label>
                                    <input type="date" name="valid_until" class="form-control" placeholder="dd/mm/yy" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">File SKEMBIS</label>
                                            <input type="number" name="file_skembis" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <button Type="submit" name="tambah" class="btn btn-primary mt-4">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Main content -->
    <!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body"> -->
                <!-- <form action ="" method="post"> -->
                <!-- <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Sender</th>
                    <th>Nama SKEMBIS</th>
                    <th>Valid form</th>
                    <th>valid until</th>
                    <th>file SKEMBIS</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  </tbody>
                  


                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Sender</th>
                    <th>Nama SKEMBIS</th>
                    <th>Valid form</th>
                    <th>valid until</th> -->
                    <!-- <th>file SKEMBIS</th> -->
                  <!-- </tr>
                  </tfoot>
                </table>
              </div> -->
              <!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->
          <!-- </div> -->
          <!-- /.col -->
        <!-- </div> -->
        <!-- /.row -->
      <!-- </div> -->
      <!-- /.container-fluid -->
    <!-- </section> -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="">Skema Bisnis Produk Signalling</a>.</strong>
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
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
