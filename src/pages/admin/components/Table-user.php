<table id="example" class="display nowrap" style="width:100%">
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

        //membuat variabel angka
        $no = 1;

        //mengambil data dari tabel barang
        $select = mysqli_query($koneksi, "SELECT * FROM user");

        //melooping(perulangan) dengan menggunakan while
        while ($row = mysqli_fetch_array($select)) {
        ?>
            <tr>
                <!-- menampilkan data dengan menggunakan array  -->
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td>
                    <button type='button' class='btn btn-primary bg-blue-500' data-bs-toggle='modal' data-bs-target='#exampleModal<?php echo $row['id_user']; ?>'><i class='fa-solid fa-pen-to-square'></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $row['id_user']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User - <?php echo $row['id_user']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="post" action="../../function/Proses_UpdateUser.php">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Enter Email" value="<?php echo $row['email']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password" value="<?php echo $row['password']; ?>">
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
                                            <input type="text" name="id_user" value="<?php echo $row['id_user']; ?>" hidden>
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
                    <a href="../../function/proses_deleteuser.php?id_user=<?php echo $row['id_user'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')" class='btn btn-danger bg-red-500'><i class='fa-solid fa-trash'></i></a>
                </td>
            </tr>
        <?php } ?>
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