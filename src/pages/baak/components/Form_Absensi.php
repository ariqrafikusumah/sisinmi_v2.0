<form action="../../function/proses_tambahmahabsensi.php" method="post">
    <div class="bg-orange-200 p-2 rounded-xl">
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <select class="form-select" name="npm" id="npm">
                <option value="Get Dari Tabel mahasiswa">Get Dari Tabel mahasiswa</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kode_matakuliah" class="form-label">Kode Matakuliah</label>
            <select class="form-select" name="kode_matakuliah" id="kode_matakuliah">
                <option value="Get Dari Tabel Matakuliah">Get Dari Tabel Matakuliah</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah_hadir" class="form-label">Jumlah hadir</label>
            <input id="jumlah_hadir" name="jumlah_hadir" type="number" class="form-control" placeholder="Enter Jumlah hadir">
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
            <input id="nilai_bobot" name="nilai_bobot" type="text" class="form-control" placeholder="Enter Bobot">
        </div>
        <div>
            <button type="reset" class="btn btn-danger bg-red-500">Reset</button>
            <button type="submit" class="btn btn-primary bg-blue-500">Save</button>
        </div>
    </div>
</form>