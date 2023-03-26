<?php

require_once('function/GetAbsensi.php');
?>

<form action="../../function/Proses_TambahBAP.php" method="post">
    <div class="bg-orange-200 p-2 rounded-xl">
        <div class="mb-3">
            <input type="number" id="bap_id" name="bap_id" class="form-control" hidden>
        </div>
        <div class="mb-3">
            <label for="jumlah_hadir">Jumlah Hadir Mahasiswa</label>
            <input class="form-control" type="text" id="jumlah_hadir" name="jumlah_hadir">
        </div>
        <?php

        require_once('function/GetKaryawan.php');
        ?>
        <div class="mb-3">
            <label for="id_karyawan">Dosen</label>
            <select name="id_karyawan" class="form-control">
                <?php while ($row_karyawan = mysqli_fetch_array($result_karyawan)) { ?>
                    <option value="<?= $row_karyawan['id_karyawan'] ?>"><?= $row_karyawan['nama_lengkap'] ?></option>
                <?php } ?>
            </select>
        </div>
        <?php
        require_once('function/GetMatakuliah.php');
        ?>
        <div class="mb-3">
            <label for="nama_matakuliah">Matakuliah</label>
            <select name="nama_matakuliah" class="form-control">
                <?php while ($row_matakuliah = mysqli_fetch_array($result_matakuliah)) { ?>
                    <option value="<?= $row_matakuliah['nama_matakuliah'] ?>"><?= $row_matakuliah['nama_matakuliah'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal</label>
            <input class="form-control" type="date" id="tanggal" name="tanggal">
        </div>
        <div class="mb-3">
            <label for="jam_mulai">Jam Mulai</label>
            <input class="form-control" type="time" id="jam_mulai" name="jam_mulai">
        </div>
        <div class="mb-3">
            <label for="jam_selesai">Jam Selesai</label>
            <input class="form-control" type="time" id="jam_selesai" name="jam_selesai">
        </div>
        <div class="mb-3">
            <label for="topik">Topik</label>
            <textarea class="form-control" name="topik" id="topik" cols="30" rows="5" placeholder="Enter Your Topik"></textarea>
        </div>
        <div class="mb-3">
            <label for="hasil_pembelajran">Hasil Pembelajaran</label>
            <textarea class="form-control" name="hasil_pembelajran" id="hasil_pembelajran" cols="30" rows="5" placeholder="Enter Your Hasil"></textarea>
        </div>
        <div>
            <button type="reset" class="btn btn-danger bg-red-500">Reset</button>
            <button type="submit" class="btn btn-primary bg-blue-500">Save</button>
        </div>
    </div>
</form>