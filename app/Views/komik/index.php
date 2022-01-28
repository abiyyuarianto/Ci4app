<?= $this->extend('templates/index') ?>

<?= $this->section('page-content');?>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="d-flex justify-content-between align-items-center my-2">
                    <h1 class="h3 text-gray-800">Daftar Komik</h1>
                    <a href="<?= base_url('komik/create'); ?>" class="btn btn-primary">Tambah Data Komik</a>
                </div>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sampul</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($komik as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="img-fluid rounded-start" style="width: 90px;"></td>
                                <td><?= $k['judul']; ?></td>
                                <td>
                                    <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>