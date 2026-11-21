<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $data['title']; ?></h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-sm-12"><?php Flasher::Message(); ?></div>
    </div>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?= $data['title']; ?></h3>
        <a href="<?= base_url; ?>/barangkeluar/tambah" class="btn float-right btn-xs btn-primary">Tambah Barang Keluar</a>
      </div>
      <div class="card-body">
        <form action="<?= base_url; ?>/barangkeluar/cari" method="post">
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" name="key" placeholder="Cari transaksi...">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                  <a class="btn btn-outline-danger" href="<?= base_url; ?>/barangkeluar">Reset</a>
                </div>
              </div>
            </div>
          </div>
        </form>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>No Transaksi</th>
              <th>Tanggal Keluar</th>
              <th>Penerima</th>
              <th>Nama Lokasi</th>
              <th>Keterangan</th>
              <th style="width:150px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($data['barang_keluar'] as $row): ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['no_transaksi']; ?></td>
                <td><?= $row['tanggal_keluar']; ?></td>
                <td><?= $row['penerima']; ?></td>
                <td><?= $row['nama_lokasi']; ?></td>
                <td><?= $row['keterangan']; ?></td>
                <td>
                  <a href="<?= base_url; ?>/barangkeluar/edit/<?= $row['id_keluar'] ?>" class="badge badge-info">Edit</a>
                  <a href="<?= base_url; ?>/barangkeluar/hapus/<?= $row['id_keluar'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>