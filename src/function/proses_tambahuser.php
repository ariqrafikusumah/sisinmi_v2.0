<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/database.php';
if (isset($_POST['tambah'])) {
// menangkap data yang dikirim dari form save user
$id_karyawan = $_POST['id_karyawan'];
$role = $_POST['role'];

// query untuk mendapatkan email dan password dari karyawan
$query = "SELECT email, password FROM karyawan WHERE id_karyawan = '$id_karyawan'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
$email = $data['email'];
$password = $data['password'];

// query untuk save user
$query = "INSERT INTO user (id_karyawan, email, password, role) VALUES ('$id_karyawan', '$email', '$password', '$role')";
$hasil_query = mysqli_query($koneksi, $query);

// cek apakah query berhasil dijalankan
if ($hasil_query) {
  // jika berhasil, redirect ke halaman daftar user
  header("location:../pages/admin/_table-admin.php?alert=success&pesan=Data berhasil ditambahkan.");
  } else {
  // jika gagal, tampilkan pesan error
  echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
}
// tutup koneksi database
mysqli_close($koneksi);
