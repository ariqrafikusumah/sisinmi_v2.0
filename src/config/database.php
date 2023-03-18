<?php
$host = "localhost"; // ganti dengan nama host Anda
$user = "root"; // ganti dengan username Anda
$pass = ""; // ganti dengan password Anda
$db = "sisinmi_v2"; // ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>