<table id="example2" class="display nowrap" style="width: 100%;">
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
                    <button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#modal-edit-<?php echo $row['id_karyawan']; ?>'><i class='fa-solid fa-pen-to-square'></i></button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-edit-<?php echo $row['id_karyawan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Karyawan - <?php echo $row['id_karyawan']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Karyawan - <?php echo $row['id_karyawan']; ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="../../function/Proses_Updatekaryawan.php?id_karyawan=<?php echo $row['id_karyawan']; ?>">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="id_karyawan" class="form-label">ID Karyawan</label>
                                                    <input type="text" id="id_karyawan" name="id_karyawan" class="form-control" value="<?php echo $row['id_karyawan']; ?>" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                    <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Enter Nama Lengkap" value="<?php echo $row['nama_lengkap']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nip" class="form-label">NIP</label>
                                                    <input id="nip" name="nip" type="text" class="form-control" placeholder="Enter NIP" value="<?php echo $row['nip']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                    <input id="tanggal_lahir" name="tanggal_lahir" type="date" class="form-control" placeholder="Enter Tanggal Lahir" value="<?php echo $row['tanggal_lahir']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input id="email" name="email" type="email" class="form-control" placeholder="example@example.ac.id" value="<?php echo $row['email']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input id="password" name="password" type="text" class="form-control" placeholder="Enter Password" value="<?php echo $row['password']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="role" class="form-label">Role</label>
                                                    <select name="role" id="role" class="form-select">
                                                        <option value="<?php echo $row['role']; ?>"><?php echo $row['role']; ?></option>
                                                        <option value="admin">admin</option>
                                                        <option value="dosen">dosen</option>
                                                        <option value="baak">baak</option>
                                                        <option value="kaprodi">kaprodi</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="no_handphone" class="form-label">No Handphone</label>
                                                    <input id="no_handphone" name="no_handphone" type="text" class="form-control" placeholder="Enter 628xxx" value="<?php echo $row['no_handphone']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <textarea id="alamat" name="alamat" type="text" class="form-control" cols="30" rows="5" placeholder="Enter Alamat" value=""><?php echo $row['alamat']; ?></textarea>
                                                </div>
                                                <input type="text" id="id_karyawan" name="id_karyawan" value="<?php echo $row['id_karyawan']; ?>" hidden>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary bg-gray-500" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary bg-blue-500">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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