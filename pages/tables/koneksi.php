<?php
class koneksi
{
    var $conn;
    function __construct()
    {
        session_start();
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "klinik_db";
        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    }

}

    
?>