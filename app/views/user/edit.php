<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid"><h1><?= $data['title']; ?></h1></div>
  </section>

  <section class="content">
    <div class="card card-primary">
      <div class="card-header"><h3 class="card-title"><?= $data['title']; ?></h3></div>
      <form role="form" action="<?= base_url; ?>/user/updateUser" method="POST">
        <input type="hidden" name="id_user" value="<?= $data['user']['id_user']; ?>">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" value="<?= $data['user']['nama_lengkap']; ?>" required>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" value="<?= $data['user']['username']; ?>" required>
          </div>
          <div class="form-group">
            <label>Password (Kosongkan jika tidak ingin mengubah)</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan password baru jika ingin diubah">
          </div>
          <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role" required>
              <option value="Admin" <?= $data['user']['role'] == 'Admin' ? 'selected' : ''; ?>>Admin</option>
              <option value="User" <?= $data['user']['role'] == 'Petugas' ? 'selected' : ''; ?>>Petugas</option>
              <option value="User" <?= $data['user']['role'] == 'Pimpinan' ? 'selected' : ''; ?>>Pimpinan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Status Aktif</label>
            <select class="form-control" name="is_active" required>
              <option value="1" <?= $data['user']['is_active'] == '1' ? 'selected' : ''; ?>>Aktif</option>
              <option value="0" <?= $data['user']['is_active'] == '0' ? 'selected' : ''; ?>>Tidak Aktif</option>
            </select>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>