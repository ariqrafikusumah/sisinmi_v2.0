<?php 
require_once('function/Get_karyawan.php')
?>
<form action="../../function/proses_tambahuser.php" method="post">
    <div class="bg-orange-200 p-2 rounded-xl">
        <div class="mb-3">
            <label for="id_karyawan" class="form-label">Nama Karyawan</label>
            <select name="id_karyawan" class="form-control">
                <?php while ($row_karyawan = mysqli_fetch_array($result_karyawan)) { ?>
                    <option value="<?= $row_karyawan['id_karyawan'] ?>"><?= $row_karyawan['nama_lengkap'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" class="form-control">
                <option selected disable>- Pilih Role -</option>
                <option value="admin">admin</option>
                <option value="dosen">dosen</option>
                <option value="baak">baak</option>
                <option value="kaprodi">kaprodi</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="reset" class="btn btn-danger bg-red-500 hover:bg-red-600">Reset</button>
            <button type="submit" name="tambah" class="btn btn-primary bg-blue-500 hover:bg-blue-600">Save</button>
        </div>
    </div>
</form>

