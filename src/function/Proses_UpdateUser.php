<?php
session_start();

// pastikan id_user telah dikirimkan melalui parameter GET
if (!isset($_GET['id_user'])) {
    header("Location: ../pages/admin/_table-admin.php");
    exit;
}

require_once('../config/database.php');

$id_user = mysqli_real_escape_string($conn, $_GET['id_user']);

// ambil data user dari database berdasarkan id_user
$sql = "SELECT * FROM user WHERE id_user = '$id_user'";
$result = mysqli_query($conn, $sql);

// jika tidak ditemukan user dengan id_user yang dimaksud, kembalikan ke halaman index
if (mysqli_num_rows($result) < 1) {
    header("Location: ../pages/admin/_table-admin.php");
    exit;
}

$user = mysqli_fetch_assoc($result);

// proses update data user
if (isset($_POST['save'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    // jika password tidak diisi, gunakan password lama
    if (empty($password)) {
        $password = $user['password'];
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    }

    $sql = "UPDATE user SET email = '$email', password = '$password', role = '$role' WHERE id_user = '$id_user'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "User berhasil diupdate";
        mysqli_close($conn);
        header("Location: ../pages/admin/_table-admin.php");
        exit;
    } else {
        $_SESSION['error'] = "Terjadi kesalahan saat mengupdate user";
        mysqli_close($conn);
        header("Location: ../pages/admin/_table-admin.php");
        exit;
    }
}

?>

<!-- Masukkan kode untuk form edit user di sini -->

<!-- Tambahkan alert ketika berhasil update data -->
<?php
if (isset($_SESSION['success'])) {
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";
    unset($_SESSION['success']);
} elseif (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']);
}
?>
