<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard | Table - BAAK</title>
    <!-- 
        DataTables
    -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- 
        Fontawesome
    -->
    <script src="https://kit.fontawesome.com/331247cafb.js" crossorigin="anonymous"></script>
    <!-- 
        Tailwind CSS 
    -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../assets/css/output.css" rel="stylesheet">
    <!-- 
        Bootsrap CDN link    
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] == "") {
        header("location:../../../index.php?alert=failed&pesan=Anda Harus Login.");
    }
    ?>
    <div class="mb-5">
        <?php require_once("components/Navbar.php")  ?>
    </div>
    <div class="container mt-5 p-5">
        <div class="font-bold text-lg mb-3 mt-5">
            Data Mahasiswa
        </div>
        <div class="border-4 border-gray-200 shadow-lg p-2 rounded-lg">
            <?php require_once("components/Table-mahasiswa.php") ?>
        </div>

        <div class="font-bold text-lg mb-3 mt-5">
            Data Matakuliah
        </div>
        <div class="border-4 border-gray-200 shadow-lg p-2 rounded-lg">
            <?php require_once("components/Table-matakuliah.php") ?>
        </div>

        <div class="font-bold text-lg mb-3 mt-5">
            Data Absensi
        </div>
        <div class="border-4 border-gray-200 shadow-lg p-2 rounded-lg">
            <?php require_once("components/Table-absensi.php") ?>
        </div>
    </div>

    <!-- 
        DataTables CDN Script
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        $(document).ready(function() {
            $('#example2').DataTable();
        });
        $(document).ready(function() {
            $('#example3').DataTable();
        });
    </script>
    <!-- 
        JS Bootstrap CDN
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>