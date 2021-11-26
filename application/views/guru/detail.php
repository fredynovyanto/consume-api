<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama_siswa']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nis']; ?></h6>
                    <p class="card-text"><?= $mahasiswa['alamat']; ?></p>
                    <p class="card-text"><?= $mahasiswa['tgl_lahir']; ?></p>
                    <p class="card-text"><?= $mahasiswa['id_kelamin']; ?></p>
                    <p class="card-text"><?= $mahasiswa['telp']; ?></p>
                    <p class="card-text"><?= $mahasiswa['id_kelas']; ?></p>
                    <p class="card-text"><?= $mahasiswa['id_siswa']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>