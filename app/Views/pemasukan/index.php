<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('pemasukan/createModal'); ?>
        <?= $this->include('pemasukan/editModal'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Pemasukan</h1>
            </div>
            <!-- Akhir Judul -->

            <?= $this->include('pemasukan/sumberPemasukan'); ?>

            <div class="card mt-4">
                <div class="row">

                    <!-- Daftar Transaksi Masuk -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold">Daftar Transaksi Masuk</h6>
                    </div>
                    <!-- Akhir Daftar Transaksi Masuk -->

                    <!-- Tombol Tambah Pemasukan -->
                    <div class="col card-header">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#pemasukanModal" id="tomboltambah">
                            <span data-feather="plus"></span>
                            Tambah Pemasukan
                        </button>
                    </div>
                    <!-- Akhir Tombok Button Tambah -->

                    <?= $this->include('layout/messages'); ?>

                </div>

                <!-- Tabel Daftar Transaksi Masuk -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="tables">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Sumber</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pemasukan as $pem) : ?>
                                <tr>
                                    <td><?= $pem['tgl_pemasukan']; ?></td>
                                    <td><?= $pem['jumlah']; ?></td>
                                    <td><?= $pem['id_sumber']; ?></td>
                                    <td>
                                        <button type="button" class="fa fa-edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPemasukanModal<?= $pem['id_pemasukan']; ?>" id="btn-edit"></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Akhir Tabel Daftar Transaksi Masuk -->

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>