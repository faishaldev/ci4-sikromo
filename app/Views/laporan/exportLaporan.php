<!-- Export Laporan -->
<form action="laporan/export" method="GET">
    <input type="hidden" name="mulai_tanggal" value="<?= isset($_GET['mulai_tanggal']) ? $_GET['mulai_tanggal'] : '' ?>">
    <input type="hidden" name="sampai_tanggal" value="<?= isset($_GET['sampai_tanggal']) ? $_GET['sampai_tanggal'] : '' ?>">
    <div class="table-responsive mt-3">
        <table class="table table-bordered table-sm text-center tables3">
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
                foreach ($income as $dr => $value) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?php echo $value['tanggal']; ?></td>
                        <td><?php echo $value['total_pemasukan']; ?></td>
                        <td><?php echo $value['total_pengeluaran']; ?></td>
                        <td><?php echo $value['total_pemasukan'] - $value['total_pengeluaran']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <th class="bg-light" colspan="2">Total</th>
                <th>Rp<?= number_format($totalPemasukanPerRange, 2, ',', '.'); ?></th>
                <th>Rp<?= number_format($totalPengeluaranPerRange, 2, ',', '.'); ?></th>
                <th>Rp<?= number_format(($totalPemasukanPerRange - $totalPengeluaranPerRange), 2, ',', '.'); ?></th>
            </tfoot>
        </table>
    </div>
</form>
<!-- Akhir Export Laporan -->