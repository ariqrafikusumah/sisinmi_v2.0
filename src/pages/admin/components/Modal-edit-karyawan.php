<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Karyawan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-gray-500" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary bg-blue-500">Save changes</button>
            </div>
        </div>
    </div>
</div>