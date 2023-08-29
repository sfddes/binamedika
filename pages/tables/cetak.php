<?php 
session_start();

include_once "../../config/koneksi.php";
include_once "../../config/library.php";

$awal = $_GET['awal']; 
$tawal = IndonesiaTgl($awal);

$akhir = $_GET['akhir'];
$takhir = IndonesiaTgl($akhir);

$tglAwal = isset($_GET['awal']) ? $_GET['awal'] : "01-" . date('m-Y');
$tglAkhir = isset($_GET['akhir']) ? $_GET['akhir'] : date('d-m-Y');
$SqlPeriode = " WHERE dataobat.tgl_masuk BETWEEN '$awal' AND '$akhir'";

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>KLINIK BINA MEDIKA</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap4.min.css">
</head>

<body onload="print()">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="frmedit">

        <?php if (!empty($tglAwal)) { ?>
            <center>
                <h2>DAFTAR LAPORAN PERSEDIAAN OBAT</h2>
                <hr>
				<br></h4>PERIODE PEMESANAN <b><?php echo IndonesiaTgl($awal); ?> s/d <?php echo IndonesiaTgl($akhir); ?></b>
                <br /> 
            </center>
        <?php } else { ?>
            <center>
                <h2>DAFTAR LAPORAN OBAT</h2>
            </center>
            <hr>
        <?php } ?>

        <table class="table my-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tgl Masuk Obat</th>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Satuan</th>
                    <th>Tempat Penyimpanan</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Tgl Kadaluwarsa</th>
                    <th>Sisa Stock</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php
					$Sql = "SELECT * FROM dataobat $SqlPeriode";

					$myQry = mysqli_query($mysqli, $Sql) or die("Query salah: " . mysqli_error($mysqli));
		
					while ($myData = mysqli_fetch_array($myQry)) {
						$nomor++;
						// Lakukan operasi lain dengan data yang diperoleh
										
                ?>
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $myData['tgl_masuk']; ?></td>
                            <td><?php echo $myData['kode_obat']; ?></td>
                            <td><?php echo $myData['nama_obat']; ?></td>
                            <td><?php echo $myData['satuan']; ?></td>
                            <td><?php echo $myData['penyimpanan']; ?></td>
                            <td><?php echo $myData['harga_beli']; ?></td>
                            <td><?php echo $myData['harga_jual']; ?></td>
                            <td><?php echo $myData['kadaluwarsa']; ?></td>
                            <td><?php echo $myData['min_stock']; ?></td>
                            <td><?php echo $myData['stock']; ?></td>
                        </tr>
                <?php
				};  
                ?>
            </tbody>
        </table>

    </form>

    <script src="assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/chart.min.js"></script>
    <script src="../../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../../assets/js/theme.js"></script>

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
