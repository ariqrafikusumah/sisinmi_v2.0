<table id="example2" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Dosen</th>
            <th>Nama Matakuliah</th>
            <th>Jumlah Hadir Mahasiswa</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Topik</th>
            <th>Hasil Pempelajaran</th>
            <th>Status</th>
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
        $select = mysqli_query($koneksi, "SELECT * FROM berita_acara");

        //melooping(perulangan) dengan menggunakan while
        while ($row = mysqli_fetch_array($select)) {
        ?>
            <tr>
                <!-- menampilkan data dengan menggunakan array  -->
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['id_karyawan']; ?></td>
                <td><?php echo $row['nama_matakuliah']; ?></td>
                <td><?php echo $row['jumlah_hadir']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['jam_mulai']; ?></td>
                <td><?php echo $row['jam_selesai']; ?></td>
                <td><?php echo $row['topik']; ?></td>
                <td><?php echo $row['hasil_pembelajran']; ?></td>
                <td>
                    <?php if ($row['status'] == 'Cancel') : ?>
                        <div class="bg-red-500 p-2 rounded-xl text-white"><?php echo $row['status']; ?></div>
                    <?php elseif ($row['status'] == 'Pending') : ?>
                        <div class="bg-yellow-500 p-2 rounded-xl text-white"><?php echo $row['status']; ?></div>
                    <?php elseif ($row['status'] == 'Approved') : ?>
                        <div class="bg-green-500 p-2 rounded-xl text-white"><?php echo $row['status']; ?></div>
                    <?php endif; ?>
                </td>
                <td>
                    <button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#modal-edit-<?php echo $row['bap_id']; ?>'><i class='fa-solid fa-pen-to-square'></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-edit-<?php echo $row['bap_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit BAP - <?php echo $row['bap_id']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="../../function/Proses_.php?bap_id=<?php echo $row['bap_id']; ?>">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input id="bap_id" name="bap_id" class="form-control" type="text" placeholder="Enter BAP ID" value="<?php echo $row['bap_id']; ?>" hidden>
                                            <div class="mb-3">
                                                <label for="id_karyawan" class="form-label">Dosen</label>
                                                <input id="id_karyawan" name="id_karyawan" class="form-control" type="text" placeholder="Enter your BAP" value="<?php echo $row['id_karyawan']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama_matakuliah" class="form-label">Nama Matakuliah</label>
                                                <input id="nama_matakuliah" name="nama_matakuliah" class="form-control" type="text" placeholder="Enter your BAP" value="<?php echo $row['nama_matakuliah']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Jumlah Hadir Mahasiswa</label>
                                                <input type="number" class="form-control" id="jumlah_hadir" name="jumlah_hadir" value="<?php echo $row['jumlah_hadir'] ?>" placeholder="Enter Jumlah Hadir">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal">Tanggal</label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $row['tanggal'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jam_mulai">Jam Mulai</label>
                                                <input type="time" class="form-control" id="jam_mulai" name="jam_selesai" value="<?php echo $row['jam_mulai'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jam_selesai">Jam Selesai</label>
                                                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" value="<?php echo $row['jam_selesai'] ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="topik">Topik</label>
                                                <textarea name="topik" id="topik" class="form-control" cols="30" rows="5"><?php echo $row['topik'] ?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="hasil_pembelajran">Hasil Pembelajaran</label>
                                                <textarea name="hasil_pembelajran" id="hasil_pembelajran" class="form-control" cols="30" rows="5"><?php echo $row['hasil_pembelajran'] ?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <input id="status" name="status" class="form-control" type="text" placeholder="Enter your Status" value="<?php echo $row['status'] ?>" hidden>
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
                    <a href="../../function/Proses_DeleteBAP.php?bap_id=<?php echo $row['bap_id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class='btn btn-danger bg-red-500'><i class='fa-solid fa-trash'></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Dosen</th>
            <th>Matakuliah</th>
            <th>Jumlah Hadir Mahasiswa</th>
            <th>Tanggal</th>
            <th>Jam Mulai</th>
            <th>Jam Selesai</th>
            <th>Topik</th>
            <th>Hasil Pempelajaran</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </tfoot>
</table>