<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid"><h1><?= $data['title']; ?></h1></div>
  </section>

  <section class="content">
    <div class="card card-primary">
      <div class="card-header"><h3 class="card-title"><?= $data['title']; ?></h3></div>
      <form role="form" action="<?= base_url; ?>/lokasi/updateLokasi" method="POST">
        <input type="hidden" name="id_lokasi" value="<?= $data['lokasi']['id_lokasi']; ?>">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Lokasi</label>
            <input type="text" class="form-control" name="nama_lokasi" value="<?= $data['lokasi']['nama_lokasi']; ?>" required>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </section>
</div>