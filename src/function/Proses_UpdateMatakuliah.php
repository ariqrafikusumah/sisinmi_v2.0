<?php
// koneksi database
include "../config/database.php";

// ambil data yang di-post dari form modal
$kode_matakuliah = $_GET['kode_matakuliah'];
$nama_matakuliah = $_POST['nama_matakuliah'];
$sks = $_POST['sks'];
$program_studi = $_POST['program_studi'];

// update data matakuliah
$query = "UPDATE matakuliah SET 
    nama_matakuliah='$nama_matakuliah',
    sks='$sks',
    program_studi='$program_studi'
    WHERE kode_matakuliah='$kode_matakuliah'";

if (mysqli_query($koneksi, $query)) {
    // jika berhasil, kembalikan ke halaman sebelumnya
    echo "<script>alert('Data matakuliah berhasil diupdate.');window.location='../pages/baak/_table-baak.php';</script>";
} else {
    // jika gagal, tampilkan pesan error
    echo "<script>alert('Terjadi kesalahan saat mengupdate data matakuliah: " . mysqli_error($koneksi) . "');window.location='../pages/baak/_table-baak.php';</script>";
}
mysqli_close($koneksi);
