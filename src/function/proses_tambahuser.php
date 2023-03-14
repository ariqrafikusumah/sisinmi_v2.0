<?php

// Memanggil file koneksi.php
require_once('../config/database.php');

// Mengecek apakah form telah disubmit
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
    // Mengambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Membuat query SQL untuk menambahkan data user ke dalam tabel
    $sql = "INSERT INTO user (email, password, role) VALUES ('$email', '$password', '$role')";
    $result = mysqli_query($koneksi, $sql);

    // Mengecek apakah data berhasil ditambahkan
    if ($result) {
        echo "Data berhasil ditambahkan";
        header('location: ../pages/admin/_table-admin.php');
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

?>