<?php
// koneksi ke database
include '../config/database.php';

// cek apakah parameter id telah diterima
if (isset($_GET['user_id'])) {
  $id = $_GET['user_id'];

  // query untuk menghapus data pengguna berdasarkan id
  $query = "DELETE FROM user WHERE user_id = $id";
  $result = mysqli_query($koneksi, $query);

  // check apakah query berhasil
  if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
  }

  // arahkan kembali ke halaman utama
  header("Location: ../pages/admin/_table-admin.php");
  exit;
}
?>
