<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= site_url('Anggota/tambah') ?>" class="btn btn-primary">Tambah data Anggota</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Anggota</h3>
            <ul class="list-group mt-3">
                <?php foreach ($anggota as $ang) : ?>
                    <li class="list-group-item"><?php echo $ang['nama'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>