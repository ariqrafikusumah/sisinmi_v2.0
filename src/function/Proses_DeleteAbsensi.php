<?php
// koneksi ke database
include '../config/database.php';

// cek apakah parameter id telah diterima
if (isset($_GET['absensi_id'])) {
    $id = $_GET['absensi_id'];

    // query untuk menghapus data pengguna berdasarkan id
    $query1 = "DELETE FROM absensi WHERE absensi_id = $id";
    $result1 = mysqli_query($koneksi, $query1);

    // check apakah query1 berhasil
    if (!$result1) {
        die("Query error: " . mysqli_error($koneksi));
    }

    // query untuk menghapus data karyawan berdasarkan id
    $query2 = "DELETE FROM absensi WHERE absensi_id = $id";
    $result2 = mysqli_query($koneksi, $query2);

    // check apakah query2 berhasil
    if (!$result2) {
        die("Query error: " . mysqli_error($koneksi));
    }

    // arahkan kembali ke halaman utama
    header("Location: ../pages/baak/_table-baak.php");
    exit;
}
