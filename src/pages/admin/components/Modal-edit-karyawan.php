    <!-- Modal -->
    <div class="modal fade" id="exampleModal2<?php echo $row['id_karyawan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Karyawan - <?php echo $row['id_karyawan']; ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="../../function/Proses_Updatekaryawan.php?id_karyawan=<?php echo $row['id_karyawan']; ?>">
                    <div class="modal-body">
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
                                <option selected disabled><?php echo $row['role']; ?></option>
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
                            <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Enter Alamat" value="<?php echo $row['alamat']; ?>"></input>
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