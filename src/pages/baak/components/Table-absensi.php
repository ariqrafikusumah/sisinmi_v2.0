<table id="example3" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Absensi ID</th>
            <th>NPM</th>
            <th>Kode Matakuliah</th>
            <th>Tanggal</th>
            <th>Jumlah Hadir</th>
            <th>Nilai</th>
            <th>Bobot</th>
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
        $select = mysqli_query($koneksi, "SELECT * FROM absensi");

        //melooping(perulangan) dengan menggunakan while
        while ($row = mysqli_fetch_array($select)) {
        ?>
            <tr>
                <!-- menampilkan data dengan menggunakan array  -->
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['absensi_id']; ?></td>
                <td><?php echo $row['npm']; ?></td>
                <td><?php echo $row['kode_matakuliah']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['jumlah_hadir']; ?></td>
                <td><?php echo $row['nilai']; ?></td>
                <td><?php echo $row['nilai_bobot']; ?></td>
                <td>
                    <a href='' type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#exampleModal<?php echo $row['absensi_id']; ?>'><i class='fa-solid fa-pen-to-square'></i></a>

                    <?php require_once("Modal-edit-absensi.php") ?>

                </td>
                <td>
                    <a href="../../function/proses_deleteabsensi.php?absensi_id=<?php echo $row['absensi_id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class='btn btn-danger bg-red-500'><i class='fa-solid fa-trash'></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Absensi ID</th>
            <th>NPM</th>
            <th>Kode Matakuliah</th>
            <th>Tanggal</th>
            <th>Jumlah Hadir</th>
            <th>Nilai</th>
            <th>Bobot</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </tfoot>
</table>