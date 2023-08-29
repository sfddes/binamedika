<?php 
include '../../koneksi.php';
$id_riwayat= $_POST['id_riwayat'];
$nama_pasien = $_POST['nama_pasien'];
$jenis_pasien = $_POST['jenis_pasien'];
$nama_dokter = $_POST['nama_dokter'];
$diagnosa = $_POST['diagnosa'];
$nama_obat = $_POST['nama_obat'];
$jmlh_obat = $_POST['jmlh_obat'];
$aturan_pakai = $_POST['aturan_pakai'];
$tgl_periksa = $_POST['tgl_periksa'];
$tot_adm = $_POST['tot_adm'];

// $rand = rand();
// $allowed =  array('gif','png','jpg','jpeg');

// $filename1 = $_FILES['foto1']['name'];

mysqli_query($koneksi, "update riwayatobat set nama_pasien='$nama_pasien', jenis_pasien='$jenis_pasien', nama_dokter='$nama_dokter', diagnosa='$diagnosa', nama_obat='$nama_obat', jmlh_obat='$jmlh_obat', aturan_pakai='$aturan_pakai' ,tgl_periksa='$tgl_periksa', tot_adm='$tot_adm' where id_riwayat='$id_riwayat'");


// if($filename1 != ""){
// 	$ext = pathinfo($filename1, PATHINFO_EXTENSION);

// 	if(in_array($ext,$allowed) ) {
// 		move_uploaded_file($_FILES['foto1']['file_skembis'], '../gambar/skembisdomestik/'.$rand.'_'.$filename1);
// 		$file_gambar = $rand.'_'.$filename1;

// 		// hapus foto lama
// 		$lama = mysqli_query($koneksi, "select * from a2pdomestik where id='$id'");
// 		$l = mysqli_fetch_assoc($lama);
// 		$foto = $l['file_skembis'];
// 		unlink("../gambar/skembisdomestik/$foto");

// 		mysqli_query($koneksi,"update a2pdomestik set file_skembis='$file_gambar' where id='$id'");
// 	}
// }
header("location:riwayatobat.php");
?>