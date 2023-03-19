<form action="../../function/Proses_TambahKaryawan.php" method="post">
    <div class="bg-orange-200 p-2 rounded-xl">
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Enter Nama Lengkap">
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input id="nip" name="nip" type="number" class="form-control" placeholder="Enter NIP">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input id="tanggal_lahir" name="tanggal_lahir" type="date" class="form-control" placeholder="Enter Tanggal Lahir">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="example@example.ac.id">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="text" class="form-control" placeholder="Enter Password" value="ulbi123">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">role</label>
            <select name="role" id="role" class="form-select">
                <option selected disabled>- Select Role -</option>
                <option value="admin">admin</option>
                <option value="dosen">dosen</option>
                <option value="baak">baak</option>
                <option value="kaprodi">kaprodi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="no_handphone" class="form-label">No Handphone</label>
            <input id="no_handphone" name="no_handphone" type="no_handphone" class="form-control" placeholder="Enter 628xxx">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea id="alamat" name="alamat" type="text" class="form-control" placeholder="Enter Alamat"></textarea>
        </div>
        <div class="mb-3">
            <button type="reset" class="btn btn-danger bg-red-500 hover:bg-red-600">Reset</button>
            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-600">Save</button>
        </div>
    </div>
</form>