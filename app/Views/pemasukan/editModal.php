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
                    <form action="/pemasukan/update/<?= $pem["id_pemasukan"]; ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="inputTanggal" class="">Tanggal :</label>
                            <input type="date" id="inputTanggal" class="form-control" name="tgl_pemasukan" value="<?= $pem['tgl_pemasukan']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputJumlah" class="">Jumlah :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" id="inputJumlah" class="form-control" name="jumlah" value="<?= $pem['jumlah']; ?>" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSumber" class="">Sumber :</label>
                            <input type="text" id="inputSumber" class="form-control" name="sumber" value="<?= $pem['sumber']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputKeterangan" class="">Keterangan :</label>
                            <input type="text" id="inputKeterangan" class="form-control" name="keterangan" value="<?= $pem['keterangan']; ?>" required autofocus>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                    </form>
                    <form action="pemasukan/delete/<?= $pem['id_pemasukan']; ?>" method="post">
                        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <!-- Akhir Form Edit Pemasukan -->

            </div>
        </div>
    </div>
    </div>
<?php endforeach; ?>
<!-- Akhir Modal -->