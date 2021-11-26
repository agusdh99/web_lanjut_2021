<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= site_url('anggota/index') ?>" class="btn btn-info">Semua Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Anggota
                </div>
                <div class="card-body">
                    <form action="<?= site_url('anggota/prosesTambah') ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" class="form-controler" id="nama" name="txtnama" placeholder="Masukkan nama anda">
                        </div>
                        <div class="form-group">
                            <label for="tlpn">Nomor Handhone</label>
                            <input type="text" class="form-controler" id="tlpn" name="txttlpn" placeholder="Masukkan Nomor Telpon">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-controler" id="jurusan" name="txtjurusan" placeholder="Masukkan nama anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-controler" id="email" name="txtemail">
                        </div>
                        <div>
                            <input type="submit" name="submit" value="simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>