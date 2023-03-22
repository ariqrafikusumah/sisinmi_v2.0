<form action="../../function/Proses_TambahBAP.php" method="post">
    <div class="bg-orange-200 p-2 rounded-xl">
        <div class="mb-3">
            <input type="number" id="bap_id" name="bap_id" class="form-control" hidden>
        </div>
        <div class="mb-3">
            <label for="absensi_id">NPM</label>
            <select class="form-select" name="" id="">
                <option value="#get dari absensi">#get dari absensi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="id_karyawan">Dosen</label>
            <select class="form-select" name="id_karyawan" id="id_karyawan">
                <option value="#get dari karyawan">#get dari karyawan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kode_matakuliah">Kode Matakuliah</label>
            <select class="form-select" name="kode_matakuliah" id="kode_matakuliah">
                <option value="#get dari matakuliah">#get dari matakuliah</option>
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
            <label for="jam_selesai">Jam Mulai</label>
            <input class="form-control" type="time" id="jam_selesai" name="jam_selesai">
        </div>
        <div class="mb-3">
            <label for="topik">Topik</label>
            <textarea class="form-control" name="topik" id="topik" cols="30" rows="5" placeholder="Enter Your Topik"></textarea>
        </div>
        <div class="mb-3">
            <label for="hasil_pembeljran">Hasil Pembelajaran</label>
            <textarea class="form-control" name="hasil_pembeljran" id="hasil_pembeljran" cols="30" rows="5" placeholder="Enter Your Hasil"></textarea>
        </div>
        <div>
            <button type="reset" class="btn btn-danger bg-red-500">Reset</button>
            <button type="submit" class="btn btn-primary bg-blue-500">Save</button>
        </div>
    </div>
</form>