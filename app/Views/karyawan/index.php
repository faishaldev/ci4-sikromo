<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('karyawan/createModal'); ?>
        <?= $this->include('karyawan/editModal'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Karyawan</h1>
            </div>
            <!-- Akhir Judul -->

            <div class="card mt-2">
                <div class="row">

                    <!-- Daftar Karyawan -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Daftar Karyawan</h6>
                    </div>
                    <!-- Akhir Daftar Karyawan -->

                    <!-- Tombol Tambah Karyawan -->
                    <div class="col card-header">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#karyawanModal" id="tomboltambah">
                            <span data-feather="plus"></span>
                            Tambah Karyawan
                        </button>
                    </div>
                    <!-- Akhir Tombol Karyawan -->

                    <?= $this->include('layout/messages'); ?>

                </div>

                <!-- Tabel Karyawan -->
                <div class="table-responsive pt-2">
                    <table class="table table-striped table-sm" id="tables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Posisi</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($karyawan as $k) : ?>
                                <tr>
                                    <td scope="row"><?= $i; ?></td>
                                    <td><?= $k['nama']; ?></td>
                                    <td><?= $k['umur']; ?></td>
                                    <td><?= $k['posisi']; ?></td>
                                    <td><?= $k['kontak']; ?></td>
                                    <td><?= $k['alamat']; ?></td>
                                    <td>
                                        <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editKaryawanModal<?= $k['id_karyawan']; ?>" id="btn-edit"></button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Akhir Tabel Karyawan -->

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>