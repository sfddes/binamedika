<?php
date_default_timezone_set('Asia/Jakarta');

$seminggu = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$hari_ini = date("w");
$hari = $seminggu[$hari_ini];

$tgl_sekarang = date("Ymd");
$tgl_skrg = date("d");
$bln_sekarang = date("m");
$thn_sekarang = date("Y");
$jam_sekarang = date("H:i:s");

$nama_bln = array(
    1 => "Januari", "Februari", "Maret", "April", "Mei",
    "Juni", "Juli", "Agustus", "September",
    "Oktober", "November", "Desember"
);

function format_angka($angka)
{
    if ($angka > 1) {
        $hasil = number_format($angka, 0, ",", ".");
    } else {
        $hasil = 0;
    }
    return $hasil;
}

function tgl_indo($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = ambilbulan(substr($tgl, 5, 2)); // konversi menjadi nama bulan bahasa indonesia
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}

function buatKode($tabel, $inisial)
{
    $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");
    $struktur = mysqli_query($koneksi, "SELECT * FROM $tabel");
    $field = mysqli_field_name($struktur, 0);
    $panjang = mysqli_field_len($struktur, 0);

    $qry = mysqli_query($koneksi, "SELECT MAX(" . $field . ") FROM " . $tabel);
    $row = mysqli_fetch_array($qry);
    if ($row[0] == "") {
        $angka = 0;
    } else {
        $angka = substr($row[0], strlen($inisial));
    }

    $angka++;
    $angka = strval($angka);
    $tmp = "";
    for ($i = 1; $i <= ($panjang - strlen($inisial) - strlen($angka)); $i++) {
        $tmp = $tmp . "0";
    }
    return $inisial . $tmp . $angka;
}

function getBulan($bln)
{
    switch ($bln) {
        case 1:
            return "Jan";
            break;
        case 2:
            return "Feb";
            break;
        case 3:
            return "Mar";
            break;
        case 4:
            return "Apr";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Jun";
            break;
        case 7:
            return "Jul";
            break;
        case 8:
            return "Agu";
            break;
        case 9:
            return "Sep";
            break;
        case 10:
            return "Okt";
            break;
        case 11:
            return "Nov";
            break;
        case 12:
            return "Des";
            break;
    }
}

function InggrisTgl($tanggal)
{
    $tgl = substr($tanggal, 0, 2);
    $bln = substr($tanggal, 3, 2);
    $thn = substr($tanggal, 6, 4);
    $awal = "$thn-$bln-$tgl";
    return $awal;
}

function IndonesiaTgl($tanggal)
{
    $tgl = substr($tanggal, 8, 2);
    $bln = substr($tanggal, 5, 2);
    $thn = substr($tanggal, 0, 4);
    $awal = "$tgl-$bln-$thn";
    return $awal;
}
?>
