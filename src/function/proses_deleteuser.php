<?php
// Memanggil file koneksi.php
require_once('../config/database.php');

// Memeriksa apakah parameter id_user telah diterima dari halaman sebelumnya
if (isset($_GET['id_user']) && !empty($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
} else {
    echo "Parameter id_user tidak ditemukan atau kosong.";
    exit();
}

// Membuat query SQL untuk menghapus data user dengan id_user tertentu
$sql = "DELETE FROM user WHERE id_user=$id_user";

// Menjalankan query SQL untuk menghapus data user dengan id_user tertentu
if (mysqli_query($koneksi, $sql)) {
  header("location:../pages/admin/_table-admin.php?alert=success&pesan=Data berhasil dihapus.");
} else {
    echo "Terjadi kesalahan saat menghapus data user: " . mysqli_error($koneksi);
}

// Menutup koneksi ke database
mysqli_close($koneksi);
?>