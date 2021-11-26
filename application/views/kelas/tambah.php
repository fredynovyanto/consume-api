<div class="container">

    <div class="row mt-3">
        <div class="col-md-10">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Kelas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas">
                            <small class="form-text text-danger"><?= form_error('nama_kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_guru">Id Guru</label>
                            <select class="form-control" id="id_guru" name="id_guru">
                                <option value="1">Bambang Waluyo</option>
                                <option value="2">Nia Rahmawati</option>
                                <option value="3">Siti Maesaroh</option>
                                <option value="4">Solikhin</option>
                                <option value="6">Muhammad Ahmadi</option>
                                <option value="7">Nur Khanafi</option>
                                <option value="8">Sinta Damayanti</option>
                                <option value="9">Suhanto</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jml_siswa">Jumlah Siswa</label>
                            <input type="text" name="jml_siswa" class="form-control" id="jml_siswa">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>