<form action="" method="post">
    <div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" class="form-control" type="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" class="form-control" type="password" placeholder="Enter Password">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Password</label>
            <select name="role" id="role" name="role" class="form-select" aria-label="Default select example">
                <option selected>- Select Role -</option>
                <option value="admin">admin</option>
                <option value="dosen">dosen</option>
                <option value="baak">baak</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="reset" class="btn btn-danger bg-red-500 hover:bg-red-600">Reset</button>
            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-600">Reset</button>
        </div>
    </div>
</form>