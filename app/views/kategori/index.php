<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="card-category">Halaman kategori</h5>
                            <h2 class="card-title"><?= $data['title'] ?></h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="<?= base_url; ?>/kategori/tambah" class="btn btn-success btn-sm">Tambah Kategori</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter " id="">
                            <thead class="text-primary">
                                <tr>
                                    <th style="width: 20%">#</th>
                                    <th style="width: 40%">Kategori</th>
                                    <th style="width: 40%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data['kategori'] as $row) : ?>
                                    <tr>
                                        <td>
                                            <?= $no; ?>
                                        </td>
                                        <td>
                                            <?= $row['nama_kategori']; ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?= base_url; ?>/kategori/edit/<?= $row['id'] ?>" class="badge badge-info mr-2">Edit</a> <a href="<?= base_url; ?>/kategori/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>