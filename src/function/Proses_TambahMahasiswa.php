<?php

// Memanggil file koneksi.php
require_once('../config/database.php');

// Mengecek apakah form telah disubmit
if (isset($_POST['npm']) && isset($_POST['nama_lengkap']) && isset($_POST['program_studi']) && isset($_POST['email']) && isset($_POST['no_handphone']) && isset($_POST['alamat'])) {
    // Mengambil data dari form
    $npm = $_POST['npm'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $program_studi = $_POST['program_studi'];
    $email = $_POST['email'];
    $no_handphone = $_POST['no_handphone'];
    $alamat = $_POST['alamat'];

    // Membuat query SQL untuk menambahkan data user ke dalam tabel
    $sql = "INSERT INTO mahasiswa (npm, nama_lengkap, program_studi, email, no_handphone, alamat ) VALUES ('$npm','$nama_lengkap', '$program_studi', '$email', '$no_handphone', '$alamat')";
    $result = mysqli_query($koneksi, $sql);

    // Mengecek apakah data berhasil ditambahkan
    if ($result) {
        echo "Data berhasil ditambahkan";
        header('location: ../pages/baak/_table-baak.php');
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
