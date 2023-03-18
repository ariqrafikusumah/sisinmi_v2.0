<?php

// Memanggil file koneksi.php
require_once('../config/database.php');

// Mengecek apakah form telah disubmit
if (isset($_POST['nama_lengkap']) && isset($_POST['nip']) && isset($_POST['tanggal_lahir'])&& isset($_POST['email'])&& isset($_POST['password'])&& isset($_POST['role'])&& isset($_POST['no_handphone'])&& isset($_POST['alamat'])) {
    // Mengambil data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $nip = $_POST['nip'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $no_handphone = $_POST['no_handphone'];
    $alamat = $_POST['alamat'];

    // Membuat query SQL untuk menambahkan data user ke dalam tabel
    $sql = "INSERT INTO karyawan (nama_lengkap, nip, tanggal_lahir, email, password, role, no_handphone, alamat ) VALUES ('$nama_lengkap', '$nip', '$tanggal_lahir', '$email', '$password','$role', '$no_handphone', '$alamat')";
    $result = mysqli_query($koneksi, $sql);

    // Mengecek apakah data berhasil ditambahkan
    if ($result) {
        echo "Data berhasil ditambahkan";
        header('location: ../pages/admin/_table-admin.php');
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
