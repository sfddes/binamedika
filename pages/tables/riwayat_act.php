<?php 
include '../../koneksi.php';
$nama_pasien = $_POST['nama_pasien'];
$jenis_pasien = $_POST['jenis_pasien'];
$nama_dokter = $_POST['nama_dokter'];
$diagnosa = $_POST['diagnosa'];
$nama_obat = $_POST['nama_obat'];
$jmlh_obat = $_POST['jmlh_obat'];
$aturan_pakai = $_POST['aturan_pakai'];
$tgl_periksa = $_POST['tgl_periksa'];
$tot_adm = $_POST['tot_adm'];

$sql = "INSERT INTO riwayatobat (nama_pasien, jenis_pasien, nama_dokter, diagnosa, nama_obat, jmlh_obat, aturan_pakai, tgl_periksa, tot_adm) VALUES ('$nama_pasien', '$jenis_pasien' , '$nama_dokter' ,'$diagnosa' ,'$nama_obat','$jmlh_obat','$aturan_pakai','$tgl_periksa','$tot_adm')";
$query = mysqli_query($koneksi, $sql);

header("location:riwayatobat.php");
?>