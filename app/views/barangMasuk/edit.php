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
      <form role="form" action="<?= base_url; ?>/barangmasuk/updateBarangMasuk" method="POST">
        <input type="hidden" name="id_masuk" value="<?= $data['barang_masuk']['id_masuk']; ?>">
        <div class="card-body">
          <div class="form-group">
            <label>No. Transaksi</label>
            <input type="text" class="form-control" name="no_transaksi" value="<?= $data['barang_masuk']['no_transaksi']; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk" value="<?= $data['barang_masuk']['tanggal_masuk']; ?>" required>
          </div>
          <div class="form-group">
            <label>Supplier</label>
            <select name="id_supplier" class="form-control" required>
              <option value="">-- Pilih Supplier --</option>
              <?php foreach ($data['supplier'] as $s): ?>
                <option value="<?= $s['id_supplier'] ?>" <?= ($s['id_supplier'] == $data['barang_masuk']['id_supplier']) ? 'selected' : ''; ?>>
                  <?= $s['nama_supplier'] ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3"><?= $data['barang_masuk']['keterangan']; ?></textarea>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>