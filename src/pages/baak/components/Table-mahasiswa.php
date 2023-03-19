<table id="example" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>No Handphone</th>
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
        $select = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

        //melooping(perulangan) dengan menggunakan while
        while ($row = mysqli_fetch_array($select)) {
        ?>
            <tr>
                <!-- menampilkan data dengan menggunakan array  -->
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['npm']; ?></td>
                <td><?php echo $row['nama_lengkap']; ?></td>
                <td><?php echo $row['program_studi']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['no_handphone']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td>
                    <a href='' type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#exampleModal<?php echo $row['npm']; ?>'><i class='fa-solid fa-pen-to-square'></i></a>

                    <?php require_once("Modal-edit-mahasiswa.php") ?>

                </td>
                <td>
                    <a href="../../function/proses_deletemahasiswa.php?npm=<?php echo $row['npm'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class='btn btn-danger bg-red-500'><i class='fa-solid fa-trash'></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama Lengkap</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Alamat</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </tfoot>
</table>