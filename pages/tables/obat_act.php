<?php
include '../../koneksi.php';

if (isset($_POST['tgl_masuk'],$_POST['kode_obat'], $_POST['nama_obat'], $_POST['satuan'],$_POST['penyimpanan'], $_POST['harga_beli'], $_POST['harga_jual'], $_POST['kadaluwarsa'], $_POST['min_stock'], $_POST['stock'])) {
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

    $tgl_masuk = mysqli_real_escape_string($koneksi, $tgl_masuk);
    $kode_obat = mysqli_real_escape_string($koneksi, $kode_obat);
    $nama_obat = mysqli_real_escape_string($koneksi, $nama_obat);
    $satuan = mysqli_real_escape_string($koneksi, $satuan);
    $penyimpanan = mysqli_real_escape_string($koneksi, $penyimpanan);
    $harga_beli = mysqli_real_escape_string($koneksi, $harga_beli);
    $harga_jual = mysqli_real_escape_string($koneksi, $harga_jual);
    $kadaluwarsa = mysqli_real_escape_string($koneksi, $kadaluwarsa);
    $min_stock = mysqli_real_escape_string($koneksi, $min_stock);
    $stock = mysqli_real_escape_string($koneksi, $stock);

    $checkQuery = "SELECT id_obat FROM dataobat WHERE kode_obat = '$kode_obat'";
    $checkResult = mysqli_query($koneksi, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>alert('Kode obat sudah tersedia.');</script>";
        echo "<script>window.location.href='obat_tambah.php';</script>";
        exit; // Menghentikan eksekusi kode selanjutnya
    } else {
        $insertQuery = "INSERT INTO dataobat (tgl_masuk, kode_obat, nama_obat, satuan,penyimpanan, harga_beli, harga_jual, kadaluwarsa, min_stock, stock) VALUES ('$kode_obat', '$nama_obat', '$satuan', '$harga_beli', '$harga_jual', '$kadaluwarsa', '$min_stock', '$stock')";
        $insertResult = mysqli_query($koneksi, $insertQuery);

        if ($insertResult) {
            header("location:dataobat.php");
        } else {
            echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($koneksi);
        }
    }
} else {
    echo "Data yang diperlukan tidak tersedia.";
}

?>
