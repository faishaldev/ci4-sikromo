<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>
        <?= $this->include('pemasukan/create'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Pemasukan</h1>
            </div>

            <!-- Project Card Example -->
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Sumber Pendapatan</h6>
                </div>
                <div class="card-body">
                </div>
            </div>

            <div class="card mt-4">
                <div class="row pemasukan">
                    <div class="col card-header py-3">
                        <h6 class="m-0 font-weight-bold">Daftar Transaksi Masuk</h6>
                    </div>
                    <!-- Button trigger modal -->
                    <div class="col-md-3 card-header text-center">
                        <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#pemasukanModal">
                            <span data-feather="plus"></span>
                            Tambah Pemasukan
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Sumber</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pemasukan as $pem) : ?>
                                <tr>
                                    <td scope="row"><?= $i++; ?></td>
                                    <td><?= $pem['tgl_pemasukan']; ?></td>
                                    <td>Rp<?= number_format($pem['jumlah'], 2, ',', '.'); ?></td>
                                    <td><?= $pem['id_sumber']; ?></td>
                                    <td>
                                        <a href="" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>