<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('pemasukan/create'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Pemasukan</h1>
            </div>
            <!-- Akhir Judul -->

            <div class="card">

                <!-- Sumber Pendapatan -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Sumber Pendapatan</h6>
                </div>
                <div class="card-body">
                </div>
                <!-- Akhir Sumber Pendapatan -->

            </div>

            <div class="card mt-4">
                <div class="row">

                    <!-- Daftar Transaksi Masuk -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold">Daftar Transaksi Masuk</h6>
                    </div>
                    <!-- Akhir Daftar Transaksi Masuk -->

                    <!-- Tombol Tambah Pemasukan -->
                    <div class="col-md-3 card-header text-center">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#pemasukanModal">
                            <span data-feather="plus"></span>
                            Tambah Pemasukan
                        </button>
                    </div>
                    <!-- Akhir Tombok Button Tambah -->

                    <!-- Notifikasi Perubahan -->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Notifikasi Perubahan -->

                </div>

                <!-- Tabel Daftar Transaksi Masuk -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
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
                                    <td>Rp<?= number_format($pem['jumlah'], 2, ',', '.'); ?></td>
                                    <td><?= $pem['id_sumber']; ?></td>
                                    <td>
                                        <form action="pemasukan/delete/<?= $pem['id_pemasukan']; ?>" method="post">
                                            <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="fa fa-trash btn btn-danger"></button>
                                        </form>
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