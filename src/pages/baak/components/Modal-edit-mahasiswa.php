<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['npm']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Mahasiswa - <?php echo $row['npm']; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input id="npm" name="npm" class="form-control" type="number" placeholder="Enter npm" value="<?php echo $row['npm']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input id="nama_lengkap" name="nama_lengkap" class="form-control" type="text" placeholder="Enter your name" value="<?php echo $row['nama_lengkap']; ?>">
                </div>
                <div class="mb-3">
                    <label for="program_studi" class="form-label">Program Studi</label>
                    <select class="form-select" name="program_studi" id="program_studi">
                        <option selected disabled><?php echo $row['program_studi']; ?></option>
                        <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" class="form-control" type="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input id="telepon" name="telepon" class="form-control" type="number" placeholder="628xxx" value="<?php echo $row['no_handphone']; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" value=""><?php echo $row['alamat']; ?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-gray-500" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary bg-blue-500">Save changes</button>
            </div>
        </div>
    </div>
</div>