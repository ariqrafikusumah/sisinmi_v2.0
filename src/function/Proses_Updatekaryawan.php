<?php
// koneksi database
include "../config/database.php";

// ambil data yang di-post dari form modal
$id_karyawan = $_GET['id_karyawan'];
$nama_lengkap = $_POST['nama_lengkap'];
$nip = $_POST['nip'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
$no_handphone = $_POST['no_handphone'];
$alamat = $_POST['alamat'];

// update data karyawan
$query = "UPDATE karyawan SET 
    nama_lengkap='$nama_lengkap',
    nip='$nip',
    tanggal_lahir='$tanggal_lahir',
    email='$email',
    password='$password',
    role='$role',
    no_handphone='$no_handphone',
    alamat='$alamat'
    WHERE id_karyawan='$id_karyawan'";

if (mysqli_query($koneksi, $query)) {
    // jika berhasil, kembalikan ke halaman sebelumnya
    echo "<script>alert('Data karyawan berhasil diupdate.');window.location='../pages/admin/_table-admin.php';</script>";
} else {
    // jika gagal, tampilkan pesan error
    echo "<script>alert('Terjadi kesalahan saat mengupdate data karyawan: " . mysqli_error($koneksi) . "');window.location='../pages/admin/_table-admin.php';</script>";
}
mysqli_close($koneksi);
