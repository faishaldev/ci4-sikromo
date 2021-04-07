<!-- Tabel Laporan -->
<div class="container text-center">
    <button type="button" class="btn btn-success">Save</button>
    <button type="button" class="btn btn-primary">Cetak</button>
</div>
<div class="table-responsive mt-3">
    <table class="table table-bordered table-sm text-center">
        <thead class="bg-light">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <?php $i = 1;
        foreach ($pemasukanPerRange as $pemPeRan) : ?>
            <tbody>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $pemPeRan['tgl_pemasukan']; ?></td>
                    <td><?= $pemPeRan['jumlah']; ?></td>
                    <td>0</td>
                    <td>1000000</td>
                </tr>
            </tbody>
        <?php endforeach; ?>
        <tfoot>
            <th class="bg-light" colspan="2">Total</th>
            <th></th>
            <th></th>
            <th></th>
        </tfoot>
    </table>
</div>
<!-- Akhir Tabel Laporan -->