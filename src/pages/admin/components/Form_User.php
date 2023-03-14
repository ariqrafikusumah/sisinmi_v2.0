<form action="../../function/proses_tambahuser.php" method="post">
    <div class="bg-orange-200 p-2 rounded-xl">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" class="form-control" type="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" class="form-control" type="password" placeholder="Enter Password">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select id="role" name="role" class="form-select" aria-label="Default select example">
                <option selected disabled>- Select Role -</option>
                <option value="admin">admin</option>
                <option value="dosen">dosen</option>
                <option value="baak">baak</option>
                <option value="kaprodi">kaprodi</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="reset" class="btn btn-danger bg-red-500 hover:bg-red-600">Reset</button>
            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-600">Save</button>
        </div>
    </div>
</form>