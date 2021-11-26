<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

<!--    <div class="row mt-3">
        <div class="col-md-10">
            <h3>Daftar Mahasiswa</h3>
            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                data mahasiswa tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                <li class="list-group-item">
                    <?= $mhs['nama_siswa']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id_siswa']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id_siswa']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id_siswa']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>-->

    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Siswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-6 col-auto">
                                            <div id="dataTable_filter" class="dataTables_filter">
                                                <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                    <div class="col-sm-12">
                                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"style="width: 61px;">NIS</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending"style="width: 57px;">Nama</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 49px;">Alamat</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 31px;">Tanggal Lahir</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 68px;">Kelamin</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 67px;">Telepon</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 67px;">Kelas</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th rowspan="1" colspan="1">NIS</th>
                                        <th rowspan="1" colspan="1">Nama</th>
                                        <th rowspan="1" colspan="1">Alamat</th>
                                        <th rowspan="1" colspan="1">Tanggal Lahir</th>
                                        <th rowspan="1" colspan="1">Kelamin</th>
                                        <th rowspan="1" colspan="1">Telepon</th>
                                        <th rowspan="1" colspan="1">Kelas</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($siswa as $mhs) : ?>
                                    <tr class="odd">
                                        <td><?= $mhs['nis']; ?></td>
                                        <td><?= $mhs['nama_siswa']; ?></td>
                                        <td><?= $mhs['alamat']; ?></td>
                                        <td><?= $mhs['tgl_lahir']; ?></td>
                                        <td><?= $mhs['id_kelamin']; ?></td>
                                        <td><?= $mhs['telp']; ?></td>
                                        <td><?= $mhs['id_kelas']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table></div></div></div>
                            </div>
                        </div>
                    </div>

</div>