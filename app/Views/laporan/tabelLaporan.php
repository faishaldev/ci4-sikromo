<!-- Tabel Laporan -->
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
        <tbody>
            <?php $i = 1;
            foreach ($pemasukan as $pem) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $pem['tgl_pemasukan']; ?></td>
                    <td><?= $pem['jumlah']; ?></td>
                    <td>0</td>
                    <td>1000000</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <th class="bg-light" colspan="2">Total</th>
            <th></th>
            <th></th>
            <th></th>
        </tfoot>
    </table>
</div>
<!-- Akhir Tabel Laporan -->