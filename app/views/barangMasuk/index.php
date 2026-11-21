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
        <a href="<?= base_url; ?>/barangmasuk/tambah" class="btn float-right btn-xs btn-primary">Tambah Barang Masuk</a>
      </div>
      <div class="card-body">
        <form action="<?= base_url; ?>/barangmasuk/cari" method="post">
          <div class="row mb-3">
            <div class="col-lg-6">
              <div class="input-group">
                <input type="text" class="form-control" name="key" placeholder="Cari transaksi...">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                  <a class="btn btn-outline-danger" href="<?= base_url; ?>/barangmasuk">Reset</a>
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
              <th>Tanggal Masuk</th>
              <th>Nama Supplier</th>
              <th>Keterangan</th>
              <th style="width:150px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($data['barang_masuk'] as $row): ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['no_transaksi']; ?></td>
                <td><?= $row['tanggal_masuk']; ?></td>
                <td><?= $row['nama_supplier']; ?></td>
                <td><?= $row['keterangan']; ?></td>
                <td>
                  <a href="<?= base_url; ?>/barangmasuk/edit/<?= $row['id_masuk'] ?>" class="badge badge-info">Edit</a>
                  <a href="<?= base_url; ?>/barangmasuk/hapus/<?= $row['id_masuk'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>