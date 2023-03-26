<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard | Table - Admin</title>
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
    <style>
        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Set the background color to semi-transparent black */
            display: flex;
            align-items: center;
            justify-content: center;
            /* Center the spinner vertically and horizontally */
            z-index: 9999;
            /* Set a high z-index to make sure the loading overlay is on top of everything */
        }
    </style>
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] != "admin") {
        header("location:../../../index.php?alert=failed&pesan=Anda Harus Login.");
    }


    ?>
    <div class="mb-5">
        <div class="mb-5">
            <?php require_once("components/Navbar.php")  ?>
        </div>

        <div id="loading-overlay">
            <div class="grid grid-rows-1 gap-2">
                <div>
                    <img class="animate-bounce" src="https://blogger.googleusercontent.com/img/a/AVvXsEh6RdTrvRK4cMK-CDcOmQwijvo5hXf_F0JckS-zC-dE1fxhBzUCHx0jwlixxOLo5K1TMRcYLSd9-JstM2KxiYOJww-sOy9s_VWCCqwAq_9DdzVFs4iBgBlW_lwMr3VZUXmJmmgHEgQCrKHxjsT1RTmFL48xetOc_lIpEFLBIaRhbXVYS8GK4Nl0CFgBqw=w180" alt="">
                </div>
                <div class="text-white text-xl animate-pulse">
                    Loading page ...
                </div>
            </div>
        </div>

        <div class="container pt-6">
            <div class="font-bold text-lg mb-3 mt-5">
                Data Karyawan
            </div>
            <div class="border-4 border-gray-200 shadow-lg p-2 rounded-lg overscroll-x-auto">
                <?php require_once("components/Table-karyawan.php") ?>
            </div>
        </div>
        <?php
        if (isset($_GET['alert']) && isset($_GET['pesan'])) {
            $alert = $_GET['alert'];
            $pesan = $_GET['pesan'];
            if ($alert == "success") {
        ?>
                <div class="alert alert-success">
                    <?= $pesan ?>
                </div>
        <?php
            }
        }
        ?>
        <div class="container mt-3 ">
            <div class="font-bold text-lg mb-3 mt-3">
                Data User
            </div>
            <div class="border-4 border-gray-200 shadow-lg p-2 rounded-lg overscroll-x-auto">
                <?php require_once("components/Table-user.php") ?>
            </div>
        </div>
    </div>

    <div>
        <?php require_once('components/Footer.php') ?>
    </div>

    <script>
        window.onload = function() {
            // Hide the loading overlay
            document.getElementById("loading-overlay").style.display = "none";
        };

        function showLoading() {
            // Show the loading overlay
            document.getElementById("loading-overlay").style.display = "block";
        }
    </script>


    <!-- 
        DataTables CDN Script
    -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true,
            });
        });
        $(document).ready(function() {
            $('#example2').DataTable({
                scrollX: true,
            });
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