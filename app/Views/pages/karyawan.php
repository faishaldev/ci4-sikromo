<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/navbar'); ?>

<div class="container-fluid">
    <div class="row">

        <?= $this->include('layout/sidebar'); ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Karyawan</h1>
            </div>
            <a href="" class="btn btn-success plus">
                <span data-feather="plus"></span>
                Tambah Karyawan
            </a>
            <div class="card mt-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Daftar Karyawan</h6>
                </div>
                <div class="table-responsive pt-2">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                                <th>Kontak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td>1,001</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                                <td>
                                    <a href="" class="btn btn-primary">Ubah</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,002</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,003</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,003</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,004</td>
                                <td>text</td>
                                <td>random</td>
                                <td>layout</td>
                                <td>dashboard</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,005</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,006</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,007</td>
                                <td>placeholder</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>irrelevant</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,008</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,009</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,010</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,011</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,012</td>
                                <td>text</td>
                                <td>placeholder</td>
                                <td>layout</td>
                                <td>dashboard</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,013</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>visual</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,014</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>#</td>
                                <td>1,015</td>
                                <td>random</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>text</td>
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