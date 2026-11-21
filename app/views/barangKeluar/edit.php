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
      <form role="form" action="<?= base_url; ?>/barangkeluar/updateBarangKeluar" method="POST">
        <input type="hidden" name="id_keluar" value="<?= $data['barang_keluar']['id_keluar']; ?>">
        <div class="card-body">
          <div class="form-group">
            <label>No. Transaksi</label>
            <input type="text" class="form-control" name="no_transaksi" value="<?= $data['barang_keluar']['no_transaksi']; ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Keluar</label>
            <input type="date" class="form-control" name="tanggal_keluar" value="<?= $data['barang_keluar']['tanggal_keluar']; ?>" required>
          </div>
          <div class="form-group">
            <label>Penerima</label>
            <input type="text" class="form-control" name="penerima" value="<?= $data['barang_keluar']['penerima']; ?>" required>
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <select name="id_lokasi" class="form-control" required>
              <option value="">-- Pilih Lokasi --</option>
              <?php foreach ($data['lokasi'] as $l): ?>
                <option value="<?= $l['id_lokasi'] ?>" <?= ($l['id_lokasi'] == $data['barang_keluar']['id_lokasi']) ? 'selected' : ''; ?>>
                  <?= $l['nama_lokasi'] ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3"><?= $data['barang_keluar']['keterangan']; ?></textarea>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>