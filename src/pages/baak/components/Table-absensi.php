<table id="example3" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>No</th>
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
                <td><?php echo $row['npm']; ?></td>
                <td><?php echo $row['kode_matakuliah']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['jumlah_hadir']; ?></td>
                <td><?php echo $row['nilai']; ?></td>
                <td><?php echo $row['nilai_bobot']; ?></td>
                <td>
                    <button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#modal-edit-<?php echo $row['absensi_id']; ?>'><i class='fa-solid fa-pen-to-square'></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-edit-<?php echo $row['absensi_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Absensi - <?php echo $row['npm']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="../../function/Proses_UpdateAbsensi.php?absensi_id=<?php echo $row['absensi_id']; ?>">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input class="form-control" name="absensi_id" id="absensi_id" value="<?php echo $row['absensi_id']; ?>" hidden>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" name="npm" id="npm" value="<?php echo $row['npm']; ?>" hidden>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" value="<?php echo $row['kode_matakuliah']; ?>" hidden>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kode_matakuliah" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $row['tanggal']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah_hadir" class="form-label">Jumlah hadir</label>
                                            <input id="jumlah_hadir" name="jumlah_hadir" type="text" class="form-control" placeholder="Enter Jumlah hadir" value="<?php echo $row['jumlah_hadir']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai" class="form-label">Nilai</label>
                                            <select class="form-select" name="nilai" id="nilai">
                                                <option selected disabled>- Nilai -</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nilai_bobot" class="form-label">Bobot</label>
                                            <input id="nilai_bobot" name="nilai_bobot" type="text" class="form-control" placeholder="Enter Bobot" value="<?php echo $row['nilai_bobot']; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary bg-gray-500" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="save" class="btn btn-primary bg-blue-500">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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