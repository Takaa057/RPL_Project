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
      <form role="form" action="<?= base_url; ?>/barangkeluar/simpanBarangKeluar" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>No. Transaksi</label>
            <input type="text" class="form-control" name="no_transaksi" placeholder="Masukkan nomor transaksi..." required>
          </div>
          <div class="form-group">
            <label>Tanggal Keluar</label>
            <input type="date" class="form-control" name="tanggal_keluar" value="<?= date('Y-m-d'); ?>" required>
          </div>
          <div class="form-group">
            <label>Penerima</label>
            <input type="text" class="form-control" name="penerima" placeholder="Masukkan nama penerima..." required>
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <select name="id_lokasi" class="form-control" required>
              <option value="">-- Pilih Lokasi --</option>
              <?php foreach ($data['lokasi'] as $l): ?>
                <option value="<?= $l['id_lokasi'] ?>"><?= $l['nama_lokasi'] ?></option>
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