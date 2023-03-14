<form action="../../function/proses_tambahmahasiswa.php" method="post">
    <div class="bg-orange-200 p-2 rounded-xl">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input id="nama" name="nama" type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input id="nim" name="nim" type="number" class="form-control" placeholder="Enter NIM">
        </div>
        <div class="mb-3">
            <label for="program_studi" class="form-label">Program Studi</label>
            <select class="form-select" name="program_studi" id="program_studi">
                <option selected disabled>- Select Program Studi -</option>
                <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="telpon" class="form-label">Telepon</label>
            <input id="telpon" name="telpon" type="number" class="form-control" placeholder="628xxx">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea type="text" class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
        </div>
        <div>
            <button type="reset" class="btn btn-danger bg-red-500">Reset</button>
            <button type="submit" class="btn btn-primary bg-blue-500">Save</button>
        </div>
    </div>
</form>