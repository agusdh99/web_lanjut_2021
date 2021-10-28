<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Anggota</h3>
            <ul class="list-group">
                <?php foreach ($anggota as $ang) : ?>
                    <li class="list-group-item"><?= $ang['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>