<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <!-- Judul -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn btn-sm btn-outline-secondary">
                    <span data-feather="calendar"></span>
                    <?php date_default_timezone_set("Asia/Bangkok");
                    echo date('l, d F Y'); ?>
                </div>
            </div>
            <!-- Akhir Judul -->

            <div class="row">

                <?= $this->include('dashboard/card pemasukan/pemasukanHariIni'); ?>
                <?= $this->include('dashboard/card pemasukan/pemasukanBulanIni'); ?>
                <?= $this->include('dashboard/card pemasukan/pemasukanTahunIni'); ?>
                <?= $this->include('dashboard/card pemasukan/seluruhPemasukan'); ?>

            </div>
            <div class="row">

                <?= $this->include('dashboard/card pengeluaran/pengeluaranHariIni'); ?>
                <?= $this->include('dashboard/card pengeluaran/pengeluaranBulanIni'); ?>
                <?= $this->include('dashboard/card pengeluaran/pengeluaranTahunIni'); ?>
                <?= $this->include('dashboard/card pengeluaran/seluruhPengeluaran'); ?>

            </div>
            <div class="row mb-4">

                <?= $this->include('dashboard/chart/barChart'); ?>
                <?= $this->include('dashboard/chart/doughnutChart'); ?>
                <?= $this->include('dashboard/editStatusModal'); ?>

            </div>

            <div class="row">
                <div class="col" <?= empty($hutangBelumLunas) ? 'style="display: none;"' : ''; ?>>
                    <div class="card radius">

                        <!-- Judul -->
                        <div class="card-header" style="border-top-left-radius: 25px; border-top-right-radius: 25px">
                            <h6 class="m-0 font-weight-bold">Daftar Hutang Belum Lunas</h6>
                        </div>
                        <!-- Akhir Judul -->

                        <!-- Tabel Hutang Belum Lunas -->
                        <div class="table-responsive">
                            <table class="table table-striped table-sm text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Penghutang</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($hutangBelumLunas as $h) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= date('d/m/Y', strtotime($h['tgl_hutang'])); ?></td>
                                            <td>Rp<?= number_format($h['jumlah'], 2, ',', '.'); ?></td>
                                            <td><?= $h['penghutang']; ?></td>
                                            <td><?= $h['keterangan']; ?></td>
                                            <td>
                                                <button type="button" class="<?= $h['status'] == "Lunas" ? "btn btn-success" : "btn btn-danger"; ?>" data-bs-toggle="modal" data-bs-target="#editStatusModal<?= $h['id_hutang']; ?>" id="btn-edit"><?= $h['status']; ?></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Akhir Tabel Hutang Belum Lunas -->

            </div>
        </main>
    </div>
</div>

<?= $this->endSection(); ?>