<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php foreach ($lengkap as $as) : ?>
                <ul>
                    <li><?= $as['tipe']; ?></li>
                    <li><?= $as['alamat']; ?></li>
                    <li><?= $as['Kota']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>