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
                    <button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#modal-edit-<?php echo $row['npm']; ?>'><i class='fa-solid fa-pen-to-square'></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-edit-<?php echo $row['npm']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Mahasiswa - <?php echo $row['npm']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="../../function/Proses_UpdateMahasiswa.php?npm=<?php echo $row['npm']; ?>">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="npm" class="form-label">NPM</label>
                                            <input id="npm" name="npm" class="form-control" type="text" placeholder="Enter npm" value="<?php echo $row['npm']; ?>" hidden>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                            <input id="nama_lengkap" name="nama_lengkap" class="form-control" type="text" placeholder="Enter your name" value="<?php echo $row['nama_lengkap']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="program_studi" class="form-label">Program Studi</label>
                                            <select class="form-select" name="program_studi" id="program_studi">
                                                <option><?php echo $row['program_studi']; ?></option>
                                                <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" name="email" class="form-control" type="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_handphone" class="form-label">No Handphone</label>
                                            <input id="no_handphone" name="no_handphone" class="form-control" type="number" placeholder="628xxx" value="<?php echo $row['no_handphone']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" value=""><?php echo $row['alamat']; ?></textarea>
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
                    <a href="../../function/Proses_DeleteMahasiswa.php?npm=<?php echo $row['npm'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class='btn btn-danger bg-red-500'><i class='fa-solid fa-trash'></i></a>
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