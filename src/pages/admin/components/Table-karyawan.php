<table id="example2" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Karyawan</th>
            <th>Nama Lengkap</th>
            <th>NIP</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>

            <th>Role</th>
            <th>Nomor Handphone</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Memanggil file koneksi.php
        require_once('../../config/database.php');

        //membuat variabel angka
        $no = 1;

        //mengambil data dari tabel barang
        $select = mysqli_query($koneksi, "SELECT * FROM karyawan");

        //melooping(perulangan) dengan menggunakan while
        while ($row = mysqli_fetch_array($select)) {
        ?>
            <tr>
                <!-- menampilkan data dengan menggunakan array  -->
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['id_karyawan']; ?></td>
                <td><?php echo $row['nama_lengkap']; ?></td>
                <td><?php echo $row['nip']; ?></td>
                <td><?php echo $row['tanggal_lahir']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td><?php echo $row['no_handphone']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td>
                    <a href='' type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#exampleModal2<?php echo $row['id_karyawan']; ?>'><i class='fa-solid fa-pen-to-square'></i></a>

                    <?php require_once("Modal-edit-karyawan.php") ?>

                </td>
                <td>
                    <a href="../../function/proses_deletedosen.php?id_karyawan=<?php echo $row['id_karyawan'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class='btn btn-danger bg-red-500'><i class='fa-solid fa-trash'></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>ID Karyawan</th>
            <th>Nama Lengkap</th>
            <th>NIP</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>role</th>
            <th>Nomor Handphone</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </tr>
    </tfoot>
</table>