<div class=" container mt-4">
  <h3 class="mb-3">Edit Data User</h3>
  <form action="<?= BASEURL; ?>/user/update" method="post" class="w-50">
    <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['user']['nama']; ?>" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" value="<?= $data['user']['email']; ?>" required>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea class="form-control" name="alamat" id="alamat" required><?= $data['user']['alamat']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
    <a href="<?= BASEURL; ?>/user" class="btn btn-danger">Batal</a>
  </form>
</div>