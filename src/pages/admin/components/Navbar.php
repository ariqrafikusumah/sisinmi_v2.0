<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dashboad Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dashboard</h5>
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
                        <a class="nav-link" href="_form-input-user.php"><i class="fa-solid fa-pen-to-square"></i> Input User</a>
                    </li>
                    <li class="nav-item hover:bg-gray-200 p-2">
                        <a class="nav-link" href="#"><i class="fa-solid fa-pen-to-square"></i> Input Dosen</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>