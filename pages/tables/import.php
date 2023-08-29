
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
            <a href="../../index.php" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Import Data Obat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">import</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header" style="background-color:#69D4D4; border-color:gray; color:white">
                    <h3 class="card-title">Import data</h3>
                  </div>
              <!-- form start -->

                  <form method="post" enctype="multipart/form-data" name="myForm" id="myForm" onSubmit="return validateForm()" action="import.php">
                    <div class="card-body">
                      <div class="form-group">
                        <label class="form-control" id="exampleInputEmail1" placeholder="Enter email">Pastikan extensi yang digunakan excel (.xlsx) 
                          <tr><tr> file maximum 10MB </tr></label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" id="file" class="form-control" name="file" accept=".xls, .xlsx" required />
                          </div>
                          <div class="input-group-append">
                            <input style="background-color:#8EED61; border-color:gray; color:white" type="submit" name="submit" class="btn btn-sm btn-success" value="Import" /><br/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                      <?php

                        // require "excel_reader.php";
                        require __DIR__ . '/../../vendor/autoload.php';
                        use PhpOffice\PhpSpreadsheet\IOFactory;
                        
                        class ImportKoneksi
                        {
                            private $conn;
                          
                            public function __construct()
                            {
                                $dbhost = "localhost";
                                $dbuser = "root";
                                $dbpass = "";
                                $dbname = "klinik_db";
                            
                                $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                                if (!$this->conn) {
                                    die("Koneksi database gagal: " . mysqli_connect_error());
                                }
                            }
                          
                            public function importData($uploadedFile)
                            {
                                $filePath = '../../pages/tables/file/' . $uploadedFile['name'];
                          
                                // Simpan file yang diunggah ke lokasi tujuan
                                move_uploaded_file($uploadedFile['tmp_name'], $filePath);
                                $nama_file = $uploadedFile['name'];
                          
                                $spreadsheet = IOFactory::load($filePath);
                                $worksheet = $spreadsheet->getActiveSheet();
                                $highestRow = $worksheet->getHighestRow();
                                $highestColumn = $worksheet->getHighestColumn();
                                $highestRow = $worksheet->getHighestRow();
                                echo "Jumlah baris dalam file Excel: " . $highestRow . "<br>"; // Tambahkan ini untuk melacak jumlah baris yang terdeteksi
                                $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
                          
                                $jumlah_baris_import = 0; // Deklarasi awal variabel jumlah_baris_import
                          
                                for ($row = 2; $row <= $highestRow; $row++) {
                                    $rowData = $worksheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, null, true, false)[0];
                                    // Mengecek jika semua kolom dalam baris kosong
                                    if (empty(array_filter($rowData))) {
                                        continue; // Skip baris ini dan lanjut ke baris berikutnya
                                    }
                                    $no = $rowData[0];
                                    $kode_obat = $rowData[1];
                                    $nama_obat = $rowData[2];
                                    $satuan = $rowData[3];
                                    $harga_beli = $rowData[4];
                                    $harga_jual = $rowData[5];
                                    $kadaluwarsa = $rowData[6];
                                    $min_stock = $rowData[7];
                                    $stock =$rowData[8];
                                    
                                    
                                    // Konversi format tanggal dari "1-sep-2021" menjadi "yyyy/mm/dd"
                                    if (!empty($kadaluwarsa)) {
                                        $kadaluwarsa = date('Y/m/d', strtotime($kadaluwarsa));
                                    } else {
                                        $kadaluwarsa = NULL; // Set nilai kosong jika Valid From kosong
                                    }
                                    
                                    // if (!empty($valid_to)) {
                                    //     $valid_to = date('Y/m/d', strtotime($valid_to));
                                    // } else {
                                    //     $valid_to = NULL; // Set nilai kosong jika Valid To kosong
                                    // }
                        
                                    // $jumlah_baris_import++;

                                    $sql = "INSERT INTO dataobat(kode_obat, nama_obat, satuan,harga_beli, harga_jual,kadaluwarsa, min_stock, stock) 
                                    VALUES ('$kode_obat','$nama_obat','$satuan','$harga_beli','$harga_jual','$kadaluwarsa','$min_stock','$stock')";

                          
                                    // $sql = "INSERT INTO tb_ratedomestik (skembis_id,service_type_id,service_type,account_tier_tarif_id,program_code,account_name,
                                    // p_customer_sc,partner_id_cust,p_currency,inv_currency, olo, low_unit, up_unit, special_tarif, normal_tarif,rate, group_oa ,
                                    // tiering, currency, tarif_type,volume_group, valid_from, valid_to, nama_skembis) VALUES (''$skembis_id','$service_type_id',
                                    // '$service_type','$account_tier_tarif_id','$program_code' ,'$account_name','$p_customer_sc','$partner_id_cust','$p_currency',
                                    // '$inv_currency',  '$olo' ,'$low_unit' ,'$up_unit', '$special_tarif', '$normal_tarif','$rate','$group_oa','$tiering',
                                    // '$currency' ,'$tarif_type','$volume_group','$valid_from','$valid_to','$nama_skembis',)";
                                    $result = mysqli_query($this->conn, $sql);
                                    if (!$result) {
                                        die("Gagal menyimpan data: " . mysqli_error($this->conn));
                                    }
                                }
                                
                                // Simpan informasi waktu akses dan jumlah baris yang diimpor ke tabel 'progress'
                                date_default_timezone_set('Asia/Jakarta');
                                $waktu_akses = date('Y-m-d H:i:s');
                                $sqlProgress = "INSERT INTO progress (nama_file, waktu_akses, jmlh_baris_import) VALUES ('$nama_file', '$waktu_akses', '$jumlah_baris_import')";
                                $resultProgress = mysqli_query($this->conn, $sqlProgress);
                                if (!$resultProgress) {
                                    die("Gagal menyimpan informasi progres: " . mysqli_error($this->conn));
                                }
                                
                                echo "Impor data selesai. <br>";
                                echo "Waktu akses: " . $waktu_akses . "<br>";
                                echo "Jumlah baris diimpor: " . $jumlah_baris_import . "<br>";
                            }
                        }
                        
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
                                $koneksi = new ImportKoneksi();
                                $koneksi->importData($_FILES['file']);
                            } else {
                                echo "Terjadi kesalahan dalam mengunggah file.";
                            }
                        }
                        
                        ?>                                              


                        <script type="text/javascript">
                        //    validasi form (hanya file .xls yang diijinkan)
                            function validateForm()
                                function hasExtension(inputID, exts) {
                                    var fileName = document.getElementById(inputID).value;
                                    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
                                }
                              
                                if(!hasExtension('file', ['.xlsx .xls'])){
                                    alert("Hanya file .xls .xlsx yang diijinkan.");
                                    return false;
                                }
                        </script>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
