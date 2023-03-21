<?php
// koneksi database
include "../config/database.php";

// ambil data yang di-post dari form modal
$npm = $_GET['npm'];
$nama_lengkap = $_POST['nama_lengkap'];
$program_studi = $_POST['program_studi'];
$email = $_POST['email'];
$no_handphone = $_POST['no_handphone'];
$alamat = $_POST['alamat'];

// update data mahasiswa
$query = "UPDATE mahasiswa SET 
    nama_lengkap='$nama_lengkap',
    program_studi='$program_studi',
    email='$email',
    no_handphone='$no_handphone',
    alamat='$alamat'
    WHERE npm='$npm'";

if (mysqli_query($koneksi, $query)) {
    // jika berhasil, kembalikan ke halaman sebelumnya
    echo "<script>alert('Data mahasiswa berhasil diupdate.');window.location='../pages/baak/_table-baak.php';</script>";
} else {
    // jika gagal, tampilkan pesan error
    echo "<script>alert('Terjadi kesalahan saat mengupdate data mahasiswa: " . mysqli_error($koneksi) . "');window.location='../pages/baak/_table-baak.php';</script>";
}
mysqli_close($koneksi);
