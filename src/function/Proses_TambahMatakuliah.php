<?php

// Memanggil file koneksi.php
require_once('../config/database.php');

// Mengecek apakah form telah disubmit
if (isset($_POST['kode_matakuliah']) && isset($_POST['nama_matakuliah']) && isset($_POST['program_studi']) && isset($_POST['sks'])) {
    // Mengambil data dari form
    $kode_matakuliah = $_POST['kode_matakuliah'];
    $nama_matakuliah = $_POST['nama_matakuliah'];
    $program_studi = $_POST['program_studi'];
    $sks = $_POST['sks'];


    // Membuat query SQL untuk menambahkan data user ke dalam tabel
    $sql = "INSERT INTO matakuliah (kode_matakuliah, nama_matakuliah, program_studi, sks ) VALUES ('$kode_matakuliah','$nama_matakuliah', '$program_studi','$sks')";
    $result = mysqli_query($koneksi, $sql);

    // Mengecek apakah data berhasil ditambahkan
    if ($result) {
        echo "Data berhasil ditambahkan";
        header('location: ../pages/baak/_table-baak.php');
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
