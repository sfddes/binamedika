<?php 
include '../../koneksi.php';
$nama_lengkap  = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$tgl_lahir = $_POST['tgl_lahir'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO datapasien (nama_lengkap,jenis_kelamin,umur,tgl_lahir,no_hp,alamat) VALUES ('$nama_lengkap','$jenis_kelamin','$umur','$tgl_lahir','$no_hp','$alamat')";
$query = mysqli_query($koneksi, $sql);
header("location:datapasien.php");
// $rand = rand();
// $allowed =  array('gif','png','jpg','jpeg');

// $filename1 = $_FILES['foto1']['name'];
// $filename2 = $_FILES['foto2']['name'];
// $filename3 = $_FILES['foto3']['name'];

// mysqli_query($koneksi, "insert into datapasien values (NULL,'$nama_lengkap','$jenis_kelamin','$umur','$tgl_lahir','$alamat','')");


// $last_id = mysqli_insert_id($koneksi);


// if($filename1 != ""){
// 	$ext = pathinfo($filename1, PATHINFO_EXTENSION);

// 	if(in_array($ext,$allowed) ) {
// 		move_uploaded_file($_FILES['foto1']['tmp_name'], '../gambar/'.$rand.'_'.$filename1);
// 		$file_gambar = $rand.'_'.$filename1;

// 		mysqli_query($koneksi,"update a2pdomestik set file_skembis='$file_gambar' where id='$last_id'");
// 	}
// }

?>