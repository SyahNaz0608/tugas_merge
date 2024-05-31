<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'pesatmerge_10';
$con = mysqli_connect($host, $userdb, $passdb, $db);

if(mysqli_connect_error()){
    echo "Koneksi Gagal" . mysqli_connect_error();
    exit();
}