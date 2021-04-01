<!-- Modal -->
<?php foreach ($pengeluaran as $pen) : ?>
    <div class="modal fade" id="editPengeluaranModal<?= $pen['id_pengeluaran']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Judul -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pengeluaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <!-- Akhir Judul -->

                <!-- Form Edit Pengeluaran -->
                <div class="modal-body">
                    <form action="/pengeluaran/update/<?= $pen['id_pengeluaran']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="inputTanggal" class="">Tanggal :</label>
                            <input type="date" id="inputTanggal" class="form-control" name="tgl_pengeluaran" value="<?= $pen['tgl_pengeluaran']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputJumlah" class="">Jumlah :</label>
                            <input type="number" id="inputJumlah" class="form-control" name="jumlah" value="<?= $pen['jumlah']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputSumber" class="">Sumber :</label>
                            <input type="text" id="inputSumber" class="form-control" name="sumber" value="<?= $pen['sumber']; ?>" required autofocus>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                    </form>
                    <form action="pengeluaran/delete/<?= $pen['id_pengeluaran']; ?>" method="post">
                        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
        <!-- Akhir Form Edit Pengeluaran -->

    </div>
    </div>
    <!-- Akhir Modal -->
<?php endforeach; ?>