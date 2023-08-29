<?php 
include '../../koneksi.php';
$id_obat= $_POST['id_obat'];
$tgl_masuk = $_POST['tgl_masuk'];
$kode_obat = $_POST['kode_obat'];
$nama_obat = $_POST['nama_obat'];
$satuan = $_POST['satuan'];
$penyimpanan = $_POST['penyimpanan'];
$harga_beli = $_POST['harga_beli'];
$harga_jual = $_POST['harga_jual'];
$kadaluwarsa = $_POST['kadaluwarsa'];
$min_stock = $_POST['min_stock'];
$stock = $_POST['stock'];



mysqli_query($koneksi, "update dataobat set tgl_masuk='$tgl_masuk', kode_obat='$kode_obat', nama_obat='$nama_obat', satuan='$satuan', penyimpanan='$penyimpanan', harga_beli='$harga_beli',harga_jual='$harga_jual', kadaluwarsa='$kadaluwarsa', min_stock='$min_stock', stock='$stock' where id_obat='$id_obat'");

header("location:dataobat.php");
?>