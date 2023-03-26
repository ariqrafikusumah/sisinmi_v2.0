<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard | Login</title>
    <!-- 
        Sweatalert 2
    -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- 
        Fontawesome
    -->
    <script src="https://kit.fontawesome.com/331247cafb.js" crossorigin="anonymous"></script>
    <!-- 
        Tailwind CSS 
    -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="dist/output.css" rel="stylesheet">
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
            z-index: 9999;
            display: none;
        }

        #loading-spinner {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        #animation1 {
            position: relative;
            width: 100%;
            height: 100%;
            display: none;
            left: -50px;
        }

        #animation2 {
            position: relative;
            width: 100%;
            height: 100%;
            display: none;
            right: -50px;
        }
    </style>
</head>

<body onload="myMove()">
    <?php
    if (isset($_GET['alert']) && isset($_GET['pesan'])) {
        $alert = $_GET['alert'];
        $pesan = $_GET['pesan'];
        if ($alert == "failed") {
    ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: '<img class="mx-auto pr-5 w-32" src="https://media.tenor.com/ErMabcdfIgUAAAAi/dm4uz3-foekoe.gif" alt="">',
                    text: '<?= $pesan ?>',
                })
            </script>
    <?php
        }
    }
    ?>

    <?php
    if (isset($_GET['alert']) && isset($_GET['pesan'])) {
        $alert = $_GET['alert'];
        $pesan = $_GET['pesan'];
        if ($alert == "login") {
    ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: '<img class="mx-auto pr-5 w-32" src="https://media.tenor.com/20fD7u6tVxMAAAAi/sad-cry.gif" alt="">',
                    text: '<?= $pesan ?>',
                })
            </script>
    <?php
        }
    }
    ?>

    <?php
    if (isset($_GET['alert']) && isset($_GET['pesan'])) {
        $alert = $_GET['alert'];
        $pesan = $_GET['pesan'];
        if ($alert == "logout") {
    ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '<img class="mx-auto pr-5 w-32" src="https://media.tenor.com/20fD7u6tVxMAAAAi/sad-cry.gif" alt="">',
                    text: '<?= $pesan ?>',
                })
            </script>
    <?php
        }
    }
    ?>
    <div class="p-3 shadow-xl bg-orange-400">
        <marquee class="text-2xl font-bold text-white italic" behavior="" direction="">Sekolah Vokasi Universitas Logistik & Bisnis Internasional - D3 Manajemen Informatika</marquee>
    </div>

    <!-- Loading animation -->
    <div id="loading-overlay">
        <div id="loading-spinner"></div>
    </div>


    <div class="pt-5 pb-3">
        <?php require_once("src/auth/_login.php") ?>
    </div>
    <div class="bg-gray-900">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 text-white p-3">
            <div class="">
                <div class="mb-2 p-3">
                    <img class="animate-bounce" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhxUKD8dWFGeileea_ZnFbMP2zEMCNFgmi42EebUD1FbLtnVewoeJgEOwiMqO_YJJJhLh8yGL3BCEhu5AyybvPzROBdCe9oh7sIvi9vzjR6-nRKNeIME1YJUtFq_GtFcp84mgaDmGDLZbfgWoGzFF8Om7imrBASMnqwLBdh02Xk_fNQIuHgJydVQTAE/s0/logoULBI_footer.png" alt="">
                </div>
                <div class="text-sm text-justify p-3">
                    ULBI adalah institusi pendidikan tinggi yang didirikan oleh Yayasan Pendidikan Bhakti Pos Indonesia (YPBPI), ULBI memiliki visi menjadi perguruan tinggi vokasi yang unggul secara Nasional dalam bidang Logistik dan Manajemen Rantai Pasok
                </div>
            </div>
            <div>
                <div class="font-bold mb-2">Lokasi</div>
                <div class="text-sm mb-3">
                    Yayasan Pendidikan Bhakti Pos Indonesia (​YPBPI)
                    Jalan Sariasih No. 54 Sarijadi Bandung, 40151, Jawa Barat Indonesia
                </div>
                <div class="font-bold mb-2">Kontak</div>
                <div class="text-sm mb-3">
                    <li>Sekretariat</li>
                    <li>HUMAS</li>
                    <li>Admission</li>
                </div>
                <div class="font-bold mb-2">Email</div>
                <div class="text-sm mb-3">
                    <li>info@ulbi.ac.id</li>
                    <li>humas@ulbi.ac.id</li>
                </div>
            </div>
            <div>
                <div class="font-bold mb02">Link Terkait</div>
                <div class="text-sm mb-3">
                    <li>Penerimaan Mahasiswa Baru (Admission)</li>
                    <li>Sistem Informasi Akademik (SIP)</li>
                    <li>Sistem Informasi Sumberdaya Terintegrasi</li>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-3 px-3 bg-orange-400">
        <div class="text-sm text-white">
            © 2023 ‧ Development - Universitas Logistik dan Bisnis Internasional (ULBI). All rights reserved.
        </div>
    </footer>

    <!-- JavaScript code -->
    <script>
        function showLoading() {
            // Show loading overlay
            document.getElementById("loading-overlay").style.display = "block";

            // Hide form
            document.getElementById("login-form").style.display = "none";
            // Wait for 5 seconds
            setTimeout(function() {
                // Redirect to new page
                window.location.href = "new_page.php";
            }, 5000);
        }
    </script>
    <script>
        function myMove() {
            let id1 = null;
            let id2 = null;
            const elem1 = document.getElementById("animation1");
            const elem2 = document.getElementById("animation2");
            elem1.style.display = "block";
            elem2.style.display = "block";
            let pos1 = -50;
            let pos2 = -50;
            clearInterval(id1);
            id1 = setInterval(frame, 5);
            clearInterval(id2);
            id2 = setInterval(frame2, 5);

            function frame() {
                if (pos1 == 0) {
                    clearInterval(id1);
                } else {
                    pos1++;
                    elem1.style.left = pos1 + "px";
                }
            }

            function frame2() {
                if (pos2 == 0) {
                    clearInterval(id2);
                } else {
                    pos2++;
                    elem2.style.right = pos2 + "px";
                }
            }
        }
    </script>

    <!-- 
        JS Bootstrap CDN
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>