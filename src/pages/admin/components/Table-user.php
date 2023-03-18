<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php

// Memanggil file koneksi.php
require_once('../../config/database.php');

// Membuat query SQL untuk menampilkan data user
$sql = "SELECT * FROM user";
$result = mysqli_query($koneksi, $sql);

// Membuat array kosong untuk menampung data user
$data = array();

// Mengambil data user dari hasil query dan menyimpannya ke dalam array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>" . $row['id_user'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['role'] . "</td>";
    echo "<td><button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#exampleModal' data-id='" . $row['id_user'] . "'><i class='fa-solid fa-pen-to-square'></i></button></td>";
    echo "<td><a href='../../function/proses_deleteuser.php?id_user=" . $row['id_user'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus user ini?\")' class='btn btn-danger bg-red-500'><i class='fa-solid fa-trash'></i></a>
    </td>";
    echo "</tr>";
}
?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </tfoot>
</table>