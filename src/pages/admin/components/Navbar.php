<nav class="navbar  bg-white shadow-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="_dashboard-admin.php"><img class="w-32" src="../../assets/img/logo.png" alt=""> Dashboad Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"> Welcome <?php echo $_SESSION['email']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item hover:bg-gray-200 p-2">
                        <a class="nav-link active" aria-current="page" href="_dashboard-admin.php"><i class="fa-solid fa-house-chimney"></i> Home</a>
                    </li>
                    <li class="nav-item hover:bg-gray-200 p-2">
                        <a class="nav-link" href="_table-admin.php"><i class="fa-solid fa-table"></i> Table</a>
                    </li>
                    <li class="nav-item hover:bg-gray-200 p-2">
                        <a class="nav-link" href="_form-input-karyawan.php"><i class="fa-solid fa-pen-to-square"></i> Input Karyawan</a>
                    </li>
                    <li class="nav-item hover:bg-gray-200 p-2">
                        <a class="nav-link" href="_form-input-user.php"><i class="fa-solid fa-pen-to-square"></i> Input user</a>
                    </li>
                    <li class="nav-item hover:bg-gray-200 p-2">
                        <a class="nav-link text-red-500" href="../../auth/_logout.php"><i class="fa-solid fa-power-off"></i> Log-out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>