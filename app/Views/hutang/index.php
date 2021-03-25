<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('hutang/create'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Hutang</h1>
            </div>
            <!-- Akhir Judul -->

            <div class="card mt-2">
                <div class="row">

                    <!-- Daftar Hutang -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold">Daftar Hutang</h6>
                    </div>
                    <!-- Akhir Daftar Hutang -->

                    <!-- Tombol Tambah Hutang -->
                    <div class="col-md-3 card-header text-center">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#hutangModal">
                            <span data-feather="plus"></span>
                            Tambah Hutang
                        </button>
                    </div>
                    <!-- Akhir Tombol Tambah Hutang -->

                    <!-- Notifikasi Perubahan -->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Notifikasi Perubahan -->

                </div>

                <!-- Tabel Hutang -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Penghutang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Alasan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($hutang as $h) : ?>
                                <tr>
                                    <td scope="row"><?= $i++; ?></td>
                                    <td><?= $h['tgl_hutang']; ?></td>
                                    <td><?= $h['penghutang']; ?></td>
                                    <td>Rp<?= number_format($h['jumlah'], 2, ',', '.'); ?></td>
                                    <td><?= $h['alasan']; ?></td>
                                    <td>
                                        <form action="hutang/delete/<?= $h['id_hutang']; ?>" method="post">
                                            <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Akhir Tabel Hutang -->

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>