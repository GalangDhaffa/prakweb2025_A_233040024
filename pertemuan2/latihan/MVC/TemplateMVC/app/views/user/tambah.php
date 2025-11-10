<div class="container mt-4">
  <h3 class="mb-3">Tambah Data User</h3>
  <form action="<?= BASEURL; ?>/user/simpan" method="post" class="w-50">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" id="nama" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea class="form-control" name="alamat" id="alamat" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= BASEURL; ?>/user" class="btn btn-secondary">Batal</a>
  </form>
</div>
