<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Dosen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input id="nama_lengkap" name="nama_lengkap" class="form-control" type="text" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input id="nip" name="nip" class="form-control" type="number" placeholder="Enter NIP">
                </div>
                <div class="mb-3">
                    <label for="program_studi" class="form-label">Program Studi</label>
                    <select class="form-select" name="program_studi" id="program_studi">
                        <option selected disabled>#get edit program studi</option>
                        <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                        <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" class="form-control" type="email" placeholder="Enter Email">
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input id="telepon" name="telepon" class="form-control" type="number" placeholder="628xxx">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-gray-500" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary bg-blue-500">Save changes</button>
            </div>
        </div>
    </div>
</div>