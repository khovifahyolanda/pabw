<?php
Function koneksiAkademik(){
$server = "localhost";
$username = "root";
$password = "";
$dbname = "akademik";
$koneksi = mysqli_connect($server, $username, $password,$dbname);
// Cekkoneksi
if (!$koneksi) {
die("Koneksigagal: " . mysqli_connect_error());
}
return $koneksi;
}
?>