<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // menangkap data yang dikirim dari form save user
    $jumlah_hadir = $_POST['jumlah_hadir'];
    $id_karyawan = $_POST['id_karyawan'];
    $nama_matakuliah = $_POST['nama_matakuliah'];
    $tanggal = $_POST['tanggal'];
    $jam_mulai = isset($_POST['jam_mulai']) ? $_POST['jam_mulai'] : "";
    $jam_selesai = isset($_POST['jam_selesai']) ? $_POST['jam_selesai'] : "";
    $topik = $_POST['topik'];
    $hasil_pembelajran = isset($_POST['hasil_pembelajran']) ? $_POST['hasil_pembelajran'] : "";

    // validasi input jam mulai dan jam selesai
    if (empty($jam_mulai) || empty($jam_selesai)) {
        header("location:../pages/dosen/_form-berita-acara.php?alert=error&pesan=Jam mulai dan jam selesai harus diisi.");
        exit();
    }

    // query untuk mendapatkan karyawan berdasarkan id_karyawan
    $query2 = "SELECT id_karyawan FROM karyawan WHERE id_karyawan = '$id_karyawan'";
    $result2 = mysqli_query($koneksi, $query2);
    $data_id_karyawan = mysqli_fetch_assoc($result2);
    $id_karyawan = $data_id_karyawan['id_karyawan'];

    // query untuk mendapatkan matakuliah berdasarkan nama_matakuliah
    $query3 = "SELECT nama_matakuliah FROM matakuliah WHERE nama_matakuliah = '$nama_matakuliah'";
    $result3 = mysqli_query($koneksi, $query3);
    $data_nama_matakuliah = mysqli_fetch_assoc($result3);
    $nama_matakuliah = $data_nama_matakuliah['nama_matakuliah'];

    // query untuk save berita acara
    $query4 = "INSERT INTO berita_acara (jumlah_hadir, id_karyawan, nama_matakuliah, tanggal, jam_mulai, jam_selesai, topik, hasil_pembelajran) VALUES ('$jumlah_hadir', '$id_karyawan', '$nama_matakuliah', '$tanggal', '$jam_mulai', '$jam_selesai', '$topik', '$hasil_pembelajran')";
    $hasil_query = mysqli_query($koneksi, $query4);

    // cek apakah query berhasil dijalankan
    if ($hasil_query) {
        // jika berhasil, redirect ke halaman daftar user
        header("location:../pages/dosen/_table-dosen.php?alert=success&pesan=Data berhasil ditambahkan.");
    } else {
        // jika gagal, tampilkan pesan error
        echo "Error: " . $query4 . "<br>" . mysqli_error($koneksi);
    }
}

// tutup koneksi database
mysqli_close($koneksi);
