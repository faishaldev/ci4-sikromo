<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('pengeluaran/create'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Pengeluaran</h1>
            </div>
            <!-- Akhir Judul -->

            <div class="card">

                <!-- Sumber Pengeluaran -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Sumber Pengeluaran</h6>
                </div>
                <div class="card-body">
                </div>
                <!-- Akhir Sumber Pengeluaran -->

            </div>

            <div class="card mt-4">
                <div class="row">

                    <!-- Daftar Transaksi Masuk -->
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold">Daftar Transaksi Keluar</h6>
                    </div>
                    <!-- Akhir Daftar Transaksi Masuk -->

                    <!-- Tombol Tambah Pengeluaran -->
                    <div class="col-md-3 card-header text-center">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#pengeluaranModal">
                            <span data-feather="plus"></span>
                            Tambah Pengeluaran
                        </button>
                    </div>
                    <!-- Akhir Tombol Pengeluaran -->

                    <!-- Notifikasi Perubahan -->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Notifikasi Perubahan -->

                </div>

                <!-- Tabel Daftar Transaksi Keluar -->
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
                            <?php foreach ($pengeluaran as $pen) : ?>
                                <tr>
                                    <td><?= $pen['tgl_pengeluaran']; ?></td>
                                    <td>Rp<?= number_format($pen['jumlah'], 2, ',', '.'); ?></td>
                                    <td><?= $pen['id_sumber']; ?></td>
                                    <td>
                                        <form action="pengeluaran/delete/<?= $pen['id_pengeluaran']; ?>" method="post">
                                            <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="fa fa-trash btn btn-danger"></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- Akhir Tabel Daftar Transaksi Keluar -->

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>