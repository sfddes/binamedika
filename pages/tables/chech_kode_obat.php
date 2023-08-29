<?php
include '../../koneksi.php';
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Memeriksa kode obat yang dikirim melalui AJAX
if (isset($_POST['kode_obat'])) {
    $kodeObat = $_POST['kode_obat'];

    // Query untuk memeriksa apakah kode obat sudah ada di database
    $sql = "SELECT kode_obat FROM nama_tabel WHERE kode_obat = '$kodeObat'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Kode obat sudah ada
        echo 'exists';
    } else {
        // Kode obat belum ada
        echo 'not_exists';
    }
}

$conn->close();
?>
