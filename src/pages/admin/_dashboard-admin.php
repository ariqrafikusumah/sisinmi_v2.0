<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard | Admin</title>

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
        <?php require_once("components/Navbar.php") ?>
    </div>
    <div class="p-2">
        <div class="p-2.5 mt-5">
            <!-- <div>
                <img class="w-full h-auto rounded-xl mb-3" src="https://www.posindonesia.co.id/en/artikel/image/Umrq07UinRfsf5i5.jpg" alt="">
            </div> -->
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-2">
                <a href="_table-admin.php">
                    <div class="rounded-lg bg-orange-200 hover:bg-orange-500 p-4 text-lg font-bold">
                        <i class="fa-solid fa-database"></i> Table Karyawan
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- 
        JS Bootstrap CDN
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>