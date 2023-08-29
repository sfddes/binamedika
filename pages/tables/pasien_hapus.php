<?php 
include '../../koneksi.php';
$id_pasien = $_GET['id_pasien'];
$data = mysqli_query($koneksi, "select * from datapasien where id_pasien='$id_pasien'");
$d = mysqli_fetch_assoc($data);
// $foto1 = $d['file_skembis'];

// unlink("../gambar/$foto1");

mysqli_query($koneksi, "delete from datapasien where id_pasien='$id_pasien'");
header("location:datapasien.php");


?>

