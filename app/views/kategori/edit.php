<!-- Main content -->
<section class="content">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"><?= $data['title']; ?></h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="<?= base_url; ?>/kategori/updateKategori" method="POST" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?= $data['kategori']['id']; ?>">
      <div class="card-body">
        <div class="form-group">
          <label>Nama Kategori</label>
          <input type="text" class="form-control" placeholder="masukkan kategori..." name="nama_kategori" value="<?= $data['kategori']['nama_kategori']; ?>">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
  </div>


</section>
<!-- /.content -->