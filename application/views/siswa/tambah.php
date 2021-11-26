<div class="container">

    <div class="row mt-3">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Siswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" class="form-control" id="nis">
                            <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" id="nama_siswa">
                            <small class="form-text text-danger"><?= form_error('nama_siswa'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="id_kelamin">Kelamin</label>
                            <select class="form-control" id="id_kelamin" name="id_kelamin">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telepon</label>
                            <input type="text" name="telp" class="form-control" id="telp">
                        </div>
                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                            <select class="form-control" id="id_kelas" name="id_kelas">
                                <option value="1">X IPA 1</option>
                                <option value="2">X IPA 2</option>
                                <option value="3">X IPA 3</option>
                                <option value="4">X IPA 4</option>
                                <option value="5">X IPS 1</option>
                                <option value="6">X IPS 2</option>
                                <option value="7">X IPS 3</option>
                                <option value="8">X IPS 4</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>