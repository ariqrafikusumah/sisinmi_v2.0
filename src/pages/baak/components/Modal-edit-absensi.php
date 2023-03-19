<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['absensi_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Absensi - <?php echo $row['absensi_id']; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="absensi_id" class="form-label">Absensi id</label>
                    <input class="form-control" name="absensi_id" id="absensi_id" value="<?php echo $row['absensi_id']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input class="form-control" name="npm" id="npm" value="<?php echo $row['npm']; ?>" disabled>
                </div>
                <div class="mb-3">
                    <label for="kode_matakuliah" class="form-label">Kode Matakuliah</label>
                    <input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" value="<?php echo $row['kode_matakuliah']; ?>" disabled>
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
                <button type="button" class="btn btn-primary bg-blue-500">Save changes</button>
            </div>
        </div>
    </div>
</div>