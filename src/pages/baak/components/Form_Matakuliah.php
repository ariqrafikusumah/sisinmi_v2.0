<form action="../../function/Proses_TambahMatakuliah.php" method="post">
    <div class="bg-orange-200 p-2 rounded-xl">
        <div class="mb-3">
            <label for="kode_matakuliah" class="form-label">Kode Matakuliah</label>
            <input id="kode_matakuliah" name="kode_matakuliah" class="form-control" type="number" placeholder="Enter Kode Matakuliah">
        </div>
        <div class="mb-3">
            <label for="nama_matakuliah" class="form-label">Nama Matakuliah</label>
            <input id="nama_matakuliah" name="nama_matakuliah" class="form-control" type="text" placeholder="Enter your Matakuliah">
        </div>
        <div class="mb-3">
            <label for="program_studi" class="form-label">Program Studi</label>
            <select class="form-select" name="program_studi" id="program_studi">
                <option selected disabled>- Pilih Program Studi -</option>
                <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="sks" class="form-label">Sks</label>
            <input id="sks" name="sks" class="form-control" type="number" placeholder="Enter Jumlah Sks">
        </div>
        <button type="reset" class="btn btn-danger bg-red-500">Reset</button>
        <button type="submit" class="btn btn-primary bg-blue-500">Save</button>
    </div>
    </div>
</form>