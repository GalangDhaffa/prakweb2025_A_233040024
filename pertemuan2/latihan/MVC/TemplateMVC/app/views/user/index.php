<div class="container mt-4">
<h3 class="mb-3">Daftar User</h3>
<a href="<?= BASEURL; ?>/user/tambah" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-dark table-striped">
  <thead class="table-dark">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; foreach($data['users'] as $user): ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $user['nama']; ?></td>
      <td><?= $user['email']; ?></td>
      <td><?= $user['alamat']; ?></td>
      <td>
        <a href="<?= BASEURL; ?>/user/edit/<?= $user['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="<?= BASEURL; ?>/user/hapus/<?= $user['id']; ?>" onclick="return confirm('Yakin?')" class="btn btn-sm btn-danger">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>