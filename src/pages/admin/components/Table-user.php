<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
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
        $sql = "SELECT * FROM user";
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
            echo "<td>".$row['user_id']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['role']."</td>";
            echo "<td>";
            echo "<button class='btn btn-primary'>Edit</button>";
            echo "<button class='btn btn-danger'>Delete</button>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
