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
      <form role="form" action="<?= base_url; ?>/supplier/simpanSupplier" method="POST">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Supplier</label>
            <input type="text" class="form-control" name="nama_supplier" placeholder="Masukkan nama supplier..." required>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan alamat..."></textarea>
          </div>
          <div class="form-group">
            <label>No. HP / Telepon</label>
            <input type="text" class="form-control" name="hp" placeholder="Masukkan nomor HP/telepon...">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Masukkan email...">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>