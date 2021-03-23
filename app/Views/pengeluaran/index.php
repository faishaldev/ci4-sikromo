<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Pengeluaran</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                </div>
            </div>

            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Sumber Pengeluaran</h6>
                </div>
                <div class="card-body">
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="pengeluaranModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="form-pengeluaran">

                                    <form>
                                        <div class="form-group">
                                            <label for="inputTanggal" class="">Tanggal :</label>
                                            <input type="date" id="inputTanggal" class="form-control" name="tgl_pengeluaran" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputJumlah" class="">Jumlah :</label>
                                            <input type="number" id="inputJumlah" class="form-control" name="jumlah" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSumber" class="">Sumber :</label>
                                            <select id="inputSumber" class="form-control" name="sumber" required autofocus>
                                                <option value="1">1. Pemerintah Daerah Kota Tegal</option>
                                                <option value="2">2. Back BCA Kota Tegal</option>
                                            </select>
                                        </div>
                                    </form>

                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="row">
                <div class="col card-header py-3">
                    <h6 class="m-0 font-weight-bold">Daftar Transaksi Keluar</h6>
                </div>
                <!-- Button trigger modal -->
                <div class="col-md-3 card-header text-center">
                    <button type="button" class="btn btn-success plus" data-bs-toggle="modal" data-bs-target="#pengeluaranModal">
                        <span data-feather="plus"></span>
                        Tambah Pengeluaran
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
                        <?php foreach ($pengeluaran as $pen) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td><?= $pen['tgl_pengeluaran']; ?></td>
                                <td><?= $pen['jumlah']; ?></td>
                                <td><?= $pen['id_sumber']; ?></td>
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