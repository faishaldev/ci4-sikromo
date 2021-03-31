<!-- Tabel Daftar Transaksi Masuk -->
<div class="table-responsive">
    <table class="table table-striped table-sm tables1">
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
</div>
<!-- Akhir Tabel Daftar Transaksi Masuk -->