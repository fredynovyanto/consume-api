<div class="container">

    <div class="row mt-3">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik">
                            <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_karyawan">Nama Karyawan</label>
                            <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan">
                            <small class="form-text text-danger"><?= form_error('nama_karyawan'); ?></small>
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
                            <label for="kelamin">Kelamin</label>
                            <select class="form-control" id="kelamin" name="kelamin">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telepon</label>
                            <input type="text" name="telp" class="form-control" id="telp">
                        </div>
                        <div class="form-group">
                            <label for="kode_jabatan">Kelas</label>
                            <select class="form-control" id="kode_jabatan" name="kode_jabatan">
                                <option value="1">Tukang Kebun</option>
                                <option value="2">Security</option>
                                <option value="3">Office Boy</option>
                                <option value="4">Kesiswaan</option>
                                <option value="5">Bimbingan Konseling</option>
                                <option value="6">Pustakawan</option>
                                <option value="7">Pengelola Laboratorium</option>
                                <option value="8">Tata Usaha</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>