<table id="example2" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>Sks</th>
            <th>Program Studi</th>
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
        $select = mysqli_query($koneksi, "SELECT * FROM matakuliah");

        //melooping(perulangan) dengan menggunakan while
        while ($row = mysqli_fetch_array($select)) {
        ?>
            <tr>
                <!-- menampilkan data dengan menggunakan array  -->
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['kode_matakuliah']; ?></td>
                <td><?php echo $row['nama_matakuliah']; ?></td>
                <td><?php echo $row['sks']; ?></td>
                <td><?php echo $row['program_studi']; ?></td>
                <td>
                    <a href='' type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#exampleModal<?php echo $row['kode_matakuliah']; ?>'><i class='fa-solid fa-pen-to-square'></i></a>

                    <?php require_once("Modal-edit-matakuliah.php") ?>

                </td>
                <td>
                    <a href="../../function/proses_deletematakuliah.php?kode_matakuliah=<?php echo $row['kode_matakuliah'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class='btn btn-danger bg-red-500'><i class='fa-solid fa-trash'></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>Sks</th>
            <th>Program Studi</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </tfoot>
</table>