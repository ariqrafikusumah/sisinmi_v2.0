<table id="example" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th></th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Delete</th>
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
        $sql = "SELECT * FROM mahasiswa";
        $result = mysqli_query($koneksi, $sql);

        // Membuat array kosong untuk menampung data user
        $data = array();

        // Mengambil data user dari hasil query dan menyimpannya ke dalam array
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        // Menampilkan data user dalam bentuk tabel
        $no = 1;
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" .$no++. "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['nim'] . "</td>";
            echo "<td>" . $row['program_studi'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telpon'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>";
            echo "<button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#exampleModal2'><i class='fa-solid fa-pen-to-square'></i></button>";
            echo "</td>";
            echo "<td>";
            echo "<a href='../../function/proses_deletemahasiswa.php?mahasiswa_id=".$row['mahasiswa_id']."' class='btn btn-danger bg-red-500' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><i class='fa-solid fa-trash'></i></a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th></th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </tfoot>
</table>