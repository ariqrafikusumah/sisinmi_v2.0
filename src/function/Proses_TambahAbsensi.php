<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // menangkap data yang dikirim dari form save user
    $npm = $_POST['npm'];
    $kode_matakuliah = $_POST['kode_matakuliah'];
    $tanggal = $_POST['tanggal'];
    $jumlah_hadir = $_POST['jumlah_hadir'];
    $nilai = $_POST['nilai'];
    $nilai_bobot = $_POST['nilai_bobot'];

    // query untuk mendapatkan email dan password dari karyawan
    $query = "SELECT npm FROM mahasiswa WHERE npm = '$npm'";
    $result1 = mysqli_query($koneksi, $query);
    $data_npm = mysqli_fetch_assoc($result1);
    $npm = $data_npm['npm'];

    // query untuk mendapatkan email dan password dari karyawan
    $query2 = "SELECT kode_matakuliah FROM matakuliah WHERE kode_matakuliah = '$kode_matakuliah'";
    $result2 = mysqli_query($koneksi, $query2);
    $data_matakuliah = mysqli_fetch_assoc($result2);
    $kode_matakuliah = $data_matakuliah['kode_matakuliah'];

    // query untuk save user
    $query = "INSERT INTO absensi (npm, kode_matakuliah, tanggal, jumlah_hadir, nilai, nilai_bobot) VALUES ('$npm', '$kode_matakuliah', '$tanggal', '$jumlah_hadir', '$nilai', '$nilai_bobot')";
    $hasil_query = mysqli_query($koneksi, $query);

    // cek apakah query berhasil dijalankan
    if ($hasil_query) {
        // jika berhasil, redirect ke halaman daftar user
        header("location:../pages/baak/_table-baak.php?alert=success&pesan=Data berhasil ditambahkan.");
    } else {
        // jika gagal, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
// tutup koneksi database
mysqli_close($koneksi);
