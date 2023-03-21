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
                    <button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#modal-edit-<?php echo $row['kode_matakuliah']; ?>'><i class='fa-solid fa-pen-to-square'></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-edit-<?php echo $row['kode_matakuliah']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Matakuliah - <?php echo $row['kode_matakuliah']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="../../function/Proses_UpdateMatakuliah.php?kode_matakuliah=<?php echo $row['kode_matakuliah']; ?>">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="kode_matakuliah" class="form-label">Kode Matakuliah</label>
                                            <input id="kode_matakuliah" name="kode_matakuliah" class="form-control" type="text" placeholder="Enter kode matakuliah" value="<?php echo $row['kode_matakuliah']; ?>" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_matakuliah" class="form-label">Nama Matakuliah</label>
                                            <input id="nama_matakuliah" name="nama_matakuliah" class="form-control" type="text" placeholder="Enter your Matakuliah" value="<?php echo $row['nama_matakuliah']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="program_studi" class="form-label">Program Studi</label>
                                            <select class="form-select" name="program_studi" id="program_studi">
                                                <option value="<?php echo $row['program_studi']; ?>"><?php echo $row['program_studi']; ?></option>
                                                <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                                                <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="sks" class="form-label">Sks</label>
                                            <input id="sks" name="sks" class="form-control" type="number" placeholder="Enter Email" value="<?php echo $row['sks']; ?>">
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