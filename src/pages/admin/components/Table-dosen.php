<table id="example2" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID Dosen</th>
            <th>Nama Lengkap</th>
            <th>NIP</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Koneksi database

        $host = "localhost"; // ganti dengan nama host Anda
        $user = "root"; // ganti dengan username Anda
        $pass = ""; // ganti dengan password Anda
        $db = "sisinmi"; // ganti dengan nama database Anda

        $koneksi = mysqli_connect($host, $user, $pass, $db);

        if (!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }


        // Membuat query untuk menampilkan data user
        $sql = "SELECT * FROM dosen";
        $result = mysqli_query($koneksi, $sql);

        // Membuat array kosong untuk menampung data user
        $data = array();

        // Mengambil data user dari hasil query dan menyimpannya ke dalam array
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        // Menampilkan data user dalam bentuk tabel
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td class='text-center'>" . $row['dosen_id'] . "</td>";
            echo "<td>" . $row['nama_lengkap'] . "</td>";
            echo "<td>" . $row['nip'] . "</td>";
            echo "<td>" . $row['program_studi'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telepon'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>";
            echo "<div class='flex'";
                echo "<div>";
                    echo "<button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Edit</button>";
                echo "</div>";
                echo "<div>";
                    echo "<button type='button' class='btn btn-danger bg-red-500'>Delete</button>";
                echo "</div>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>ID Dosen</th>
            <th>Nama Lengkao</th>
            <th>NIP</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>