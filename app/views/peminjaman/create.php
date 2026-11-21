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
      <form role="form" action="<?= base_url; ?>/peminjaman/simpanPeminjaman" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>No. Peminjaman</label>
            <input type="text" class="form-control" name="no_peminjaman" placeholder="Masukkan nomor peminjaman..." required>
          </div>
          <div class="form-group">
            <label>ID Peminjam</label>
            <input type="text" class="form-control" name="id_peminjam" placeholder="Masukkan ID Peminjam..." required>
          </div>
          <div class="form-group">
            <label>Tanggal Pinjam</label>
            <input type="date" class="form-control" name="tanggal_pinjam" value="<?= date('Y-m-d'); ?>" required>
          </div>
          <div class="form-group">
            <label>Tanggal Rencana Kembali</label>
            <input type="date" class="form-control" name="tanggal_rencana_kembali" required>
          </div>
          <div class="form-group">
            <label>Tanggal Kembali Aktual</label>
            <input type="date" class="form-control" name="tanggal_kembali_aktual">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
              <option value="dipinjam">dipinjam</option>
              <option value="kembali">kembali</option>
              <option value="terlambat">terlambat</option>
              <option value="hilang">hilang</option>
            </select>
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
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>