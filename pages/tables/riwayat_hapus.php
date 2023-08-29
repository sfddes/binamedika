<?php 
include '../../koneksi.php';
$id_riwayat= $_GET['id_riwayat'];
$data = mysqli_query($koneksi, "select * from riwayatobat where id_riwayat='$id_riwayat'");
$d = mysqli_fetch_assoc($data);
// $foto1 = $d['file_skembis'];

// unlink("../gambar/skembisdomestik/$foto1");

mysqli_query($koneksi, "delete from riwayatobat where id_riwayat='$id_riwayat'");

header("location:riwayatobat.php");
?>

