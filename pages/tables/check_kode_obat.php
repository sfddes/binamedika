<?php
include '../../koneksi.php';

if (isset($_POST['kode_obat'])) {
    $kode_obat = $_POST['kode_obat'];

    $kode_obat = mysqli_real_escape_string($koneksi, $kode_obat);

    $checkQuery = "SELECT id_obat FROM dataobat WHERE kode_obat = '$kode_obat'";
    $checkResult = mysqli_query($koneksi, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "exists";
    } else {
        echo "not_exists";
    }
}
?>
