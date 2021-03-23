<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Hutang</h1>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning plus text-light" data-bs-toggle="modal" data-bs-target="#hutangModal">
                <span data-feather="plus"></span>
                Tambah Hutang
            </button>

            <!-- Modal -->
            <div class="modal fade" id="hutangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Hutang</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="form-signin">

                                    <form>
                                        <div class="form-group">
                                            <label for="inputTanggal" class="">Tanggal :</label>
                                            <input type="date" id="inputTanggal" class="form-control" name="tgl_hutang" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputJumlah" class="">Jumlah :</label>
                                            <input type="number" id="inputJumlah" class="form-control" name="jumlah" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPenghutang" class="">Penghutang :</label>
                                            <input type="text" id="inputPenghutang" class="form-control" name="penghutang" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAlasan" class="">Alasan :</label>
                                            <input type="text" id="inputAlasan" class="form-control" name="alasan" required autofocus>
                                        </div>
                                    </form>

                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning text-light">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
    </div>
    <div class="card mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Daftar Hutang</h6>
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
                    <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>placeholder</td>
                        <td>irrelevant</td>
                        <td>visual</td>
                        <td>layout</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>data</td>
                        <td>rich</td>
                        <td>dashboard</td>
                        <td>tabular</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>information</td>
                        <td>placeholder</td>
                        <td>illustrative</td>
                        <td>data</td>
                    </tr>
                    <tr>
                        <td>1,004</td>
                        <td>text</td>
                        <td>random</td>
                        <td>layout</td>
                        <td>dashboard</td>
                    </tr>
                    <tr>
                        <td>1,005</td>
                        <td>dashboard</td>
                        <td>irrelevant</td>
                        <td>text</td>
                        <td>placeholder</td>
                    </tr>
                    <tr>
                        <td>1,006</td>
                        <td>dashboard</td>
                        <td>illustrative</td>
                        <td>rich</td>
                        <td>data</td>
                    </tr>
                    <tr>
                        <td>1,007</td>
                        <td>placeholder</td>
                        <td>tabular</td>
                        <td>information</td>
                        <td>irrelevant</td>
                    </tr>
                    <tr>
                        <td>1,008</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                    </tr>
                    <tr>
                        <td>1,009</td>
                        <td>placeholder</td>
                        <td>irrelevant</td>
                        <td>visual</td>
                        <td>layout</td>
                    </tr>
                    <tr>
                        <td>1,010</td>
                        <td>data</td>
                        <td>rich</td>
                        <td>dashboard</td>
                        <td>tabular</td>
                    </tr>
                    <tr>
                        <td>1,011</td>
                        <td>information</td>
                        <td>placeholder</td>
                        <td>illustrative</td>
                        <td>data</td>
                    </tr>
                    <tr>
                        <td>1,012</td>
                        <td>text</td>
                        <td>placeholder</td>
                        <td>layout</td>
                        <td>dashboard</td>
                    </tr>
                    <tr>
                        <td>1,013</td>
                        <td>dashboard</td>
                        <td>irrelevant</td>
                        <td>text</td>
                        <td>visual</td>
                    </tr>
                    <tr>
                        <td>1,014</td>
                        <td>dashboard</td>
                        <td>illustrative</td>
                        <td>rich</td>
                        <td>data</td>
                    </tr>
                    <tr>
                        <td>1,015</td>
                        <td>random</td>
                        <td>tabular</td>
                        <td>information</td>
                        <td>text</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>
</div>
</div>
<?= $this->endSection(); ?>