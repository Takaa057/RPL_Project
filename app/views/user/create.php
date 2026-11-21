<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <h1><?= $data['title']; ?></h1>
    </div>
  </section>

  <section class="content">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><?= $data['title']; ?></h3>
      </div>
      <form role="form" action="<?= base_url; ?>/user/simpanUser" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap..." required>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" placeholder="Masukkan username..." required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Masukkan password..." required>
          </div>
          <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role" required>
              <option value="">-- Pilih Role --</option>
              <option value="Admin">Admin</option>
              <option value="Petugas">Petugas</option>
              <option value="Pimpinan">Pimpinan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Status Aktif</label>
            <select class="form-control" name="is_active" required>
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option>
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