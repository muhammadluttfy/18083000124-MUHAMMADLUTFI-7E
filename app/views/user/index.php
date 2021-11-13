<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-sm-12">
      <?php
      Flasher::Message();
      ?>
    </div>
  </div>
  <!-- Default box -->

  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col-sm-6">
          <h5 class="card-category">Halaman User</h5>
          <h2 class="card-title"><?= $data['title'] ?></h2>
        </div>
        <div class="col-sm-6">
          <a href="<?= base_url; ?>/user/tambah" class="btn float-sm-right btn-sm btn btn-success">Tambah User</a>
        </div>
      </div>
    </div>
    <div class="card-body">

      <form action="<?= base_url; ?>/user/cari" method="post">
        <div class="row mb-3">
          <div class="col-lg-6">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="key">
              <div style="margin-top: -4px;">
                <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                <a class="btn btn-outline-danger" href="<?= base_url; ?>/user">Reset</a>
              </div>
            </div>

          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table tablesorter " id="">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Nama</th>
              <th>Username</th>
              <th style="width: 150px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['user'] as $row) : ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['username']; ?></td>
                <td>
                  <a href="<?= base_url; ?>/user/edit/<?= $row['id'] ?>" class="badge badge-info ">Edit</a> <a href="<?= base_url; ?>/user/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                </td>
              </tr>
            <?php $no++;
            endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->