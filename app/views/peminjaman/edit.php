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
      <form role="form" action="<?= base_url; ?>/peminjaman/updatePeminjaman" method="POST">
        <input type="hidden" name="id_peminjaman" value="<?= $data['peminjaman']['id_peminjaman']; ?>">
        <div class="card-body">
          <div class="form-group">
            <label>No. Peminjaman</label>
            <input type="text" class="form-control" name="no_peminjaman" value="<?= $data['peminjaman']['no_peminjaman']; ?>" required>
          </div>
          <div class="form-group">
            <label>ID Peminjam</label>
            <input type="text" class="form-control" name="id_peminjam" value="<?= $data['peminjaman']['id_peminjam']; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Pinjam</label>
            <input type="date" class="form-control" name="tanggal_pinjam" value="<?= $data['peminjaman']['tanggal_pinjam']; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Rencana Kembali</label>
            <input type="date" class="form-control" name="tanggal_rencana_kembali" value="<?= $data['peminjaman']['tanggal_rencana_kembali']; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Kembali Aktual</label>
            <input type="date" class="form-control" name="tanggal_kembali_aktual" value="<?= $data['peminjaman']['tanggal_kembali_aktual']; ?>">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
              <option value="dipinjam" <?= ($data['peminjaman']['status'] == 'dipinjam') ? 'selected' : ''; ?>>dipinjam</option>
              <option value="kembali" <?= ($data['peminjaman']['status'] == 'kembali') ? 'selected' : ''; ?>>kembali</option>
              <option value="terlambat" <?= ($data['peminjaman']['status'] == 'terlambat') ? 'selected' : ''; ?>>terlambat</option>
              <option value="hilang" <?= ($data['peminjaman']['status'] == 'hilang') ? 'selected' : ''; ?>>hilang</option>
            </select>
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <select name="id_lokasi" class="form-control" required>
              <option value="">-- Pilih Lokasi --</option>
              <?php foreach ($data['lokasi'] as $l): ?>
                <option value="<?= $l['id_lokasi'] ?>" <?= ($l['id_lokasi'] == $data['peminjaman']['id_lokasi']) ? 'selected' : ''; ?>>
                  <?= $l['nama_lokasi'] ?>
                </option>
              <?php endforeach; ?>
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