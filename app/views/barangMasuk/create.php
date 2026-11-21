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
      <form role="form" action="<?= base_url; ?>/barangmasuk/simpanBarangMasuk" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>No. Transaksi</label>
            <input type="text" class="form-control" name="no_transaksi" placeholder="Masukkan nomor transaksi..." required>
          </div>
          <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" class="form-control" name="tanggal_masuk" value="<?= date('Y-m-d'); ?>" required>
          </div>
          <div class="form-group">
              <label>Supplier</label>
              <select name="id_supplier" class="form-control" required>
                  <option value="">-- Pilih Supplier --</option>
                  <?php foreach ($data['supplier'] as $s): ?>
                <option value="<?= $s['id_supplier'] ?>"><?= $s['nama_supplier'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukkan catatan tambahan..."></textarea>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>