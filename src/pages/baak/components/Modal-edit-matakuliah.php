<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['kode_matakuliah']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Matakuliah - <?php echo $row['kode_matakuliah']; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="kode_matakuliah" class="form-label">Kode Matakuliah</label>
                    <input id="kode_matakuliah" name="kode_matakuliah" class="form-control" type="number" placeholder="Enter kode_matakuliah" value="<?php echo $row['kode_matakuliah']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="nama_matakuliah" class="form-label">Nama Matakuliah</label>
                    <input id="nama_matakuliah" name="nama_matakuliah" class="form-control" type="text" placeholder="Enter your Matakuliah" value="<?php echo $row['nama_matakuliah']; ?>">
                </div>
                <div class="mb-3">
                    <label for="program_studi" class="form-label">Program Studi</label>
                    <select class="form-select" name="program_studi" id="program_studi">
                        <option selected disabled><?php echo $row['program_studi']; ?></option>
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
                <button type="button" class="btn btn-primary bg-blue-500">Save changes</button>
            </div>
        </div>
    </div>
</div>