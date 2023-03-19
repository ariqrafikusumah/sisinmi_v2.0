<?php

// Memanggil file koneksi.php
require_once('../config/database.php');

// Mengecek apakah form telah disubmit
if (isset($_POST['nama_lengkap']) && isset($_POST['nip']) && isset($_POST['program_studi'])&& isset($_POST['email'])&& isset($_POST['telepon'])&& isset($_POST['alamat'])) {
    // Mengambil data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $nip = $_POST['nip'];
    $program_studi = $_POST['program_studi'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    // Membuat query SQL untuk menambahkan data user ke dalam tabel
    $sql = "INSERT INTO dosen (nama_lengkap, nip, program_studi, email, telepon, alamat ) VALUES ('$nama_lengkap', '$nip', '$program_studi', '$email', '$telepon', '$alamat')";
    $result = mysqli_query($koneksi, $sql);

    // Mengecek apakah data berhasil ditambahkan
    if ($result) {
        echo "Data berhasil ditambahkan";
        header('location: ../pages/admin/_table-admin.php');
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
