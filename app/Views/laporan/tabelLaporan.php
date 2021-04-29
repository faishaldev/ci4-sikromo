<!-- Sub Judul -->
<div class="no-gutters align-items-center text-center">
    <div class="mr-2">
        <div class="text-md font-weight-bold text-uppercase mb-1">Income Statement</div>
    </div>
    <hr>
</div>
<!-- Akhir Sub Judul -->

<!-- Tabel Laporan -->
<form action="laporan/export" method="GET">
    <input type="hidden" name="mulai_tanggal" value="<?= isset($_GET['mulai_tanggal']) ? $_GET['mulai_tanggal'] : '' ?>">
    <input type="hidden" name="sampai_tanggal" value="<?= isset($_GET['sampai_tanggal']) ? $_GET['sampai_tanggal'] : '' ?>">
    <input type="hidden" name="mulai_bulan" value="<?= isset($_GET['mulai_bulan']) ? $_GET['mulai_bulan'] : '' ?>">
    <input type="hidden" name="sampai_bulan" value="<?= isset($_GET['sampai_bulan']) ? $_GET['sampai_bulan'] : '' ?>">
    <div class="table-responsive mt-3">
        <table class="table table-bordered table-sm text-center tables3">
            <thead class="bg-light">
                <tr>
                    <th>No</th>
                    <th>Tanggal/Bulan</th>
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

    <hr>

    <!-- Tombol -->
    <div class="container text-center">
        <button type="submit" class="btn btn-success">Save</button>
        <button type="submit" class="btn btn-primary" formaction="laporan/print" formtarget="_blank">Print</button>
    </div>
    <!-- Akhir Tombol -->

</form>
<!-- Akhir Tabel Laporan -->