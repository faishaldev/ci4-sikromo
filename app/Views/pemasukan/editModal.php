<!-- Modal -->
<?php foreach ($pemasukan as $pem) : ?>
    <div class="modal fade" id="editPemasukanModal<?= $pem['id_pemasukan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Judul -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pemasukan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <!-- Akhir Judul -->

                <!-- Form Edit Pemasukan -->
                <div class="modal-body">
                    <form action="/pemasukan/update/<?= $pem['id_pemasukan']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="inputTanggal" class="">Tanggal :</label>
                            <input type="date" id="inputTanggal" class="form-control" name="tgl_pemasukan" value="<?= $pem['tgl_pemasukan']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputJumlah" class="">Jumlah :</label>
                            <input type="number" id="inputJumlah" class="form-control" name="jumlah" value="<?= $pem['jumlah']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputSumber" class="">Sumber :</label>
                            <select id="inputSumber" class="form-select" name="id_sumber" required autofocus>
                                <option value="">--Pilih sumber pemasukan--</option>
                                <?php foreach ($sumberPemasukan as $sPem) : ?>
                                    <option value="<?= $sPem['id_sumber_pemasukan']; ?>"><?= $sPem['id_sumber_pemasukan'] . '. ' . $sPem['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class=" modal-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                    </form>
                    <form action="pemasukan/delete/<?= $pem['id_pemasukan']; ?>" method="post">
                        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
            <!-- Akhir Form Edit Pemasukan -->

        </div>
    </div>
    </div>
<?php endforeach; ?>
<!-- Akhir Modal -->