<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('karyawan/create'); ?>

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
                    <div class="col-md-3 card-header text-center">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#karyawanModal">
                            <span data-feather="plus"></span>
                            Tambah Karyawan
                        </button>
                    </div>
                    <!-- Akhir Tombol Karyawan -->

                    <!-- Notifikasi Perubahan -->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Notifikasi Perubahan -->

                </div>

                <!-- Tabel Karyawan -->
                <div class="table-responsive pt-2">
                    <table class="table table-striped table-sm">
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
                                    <td scope="row"><?= $i++; ?></td>
                                    <td><?= $k['nama']; ?></td>
                                    <td><?= $k['umur']; ?></td>
                                    <td><?= $k['posisi']; ?></td>
                                    <td><?= $k['kontak']; ?></td>
                                    <td><?= $k['alamat']; ?></td>
                                    <td>
                                        <form action="karyawan/delete/<?= $k['id_karyawan']; ?>" method="post">
                                            <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
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