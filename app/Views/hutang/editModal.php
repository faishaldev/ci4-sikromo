<!-- Modal -->
<?php foreach ($hutang as $h) : ?>
    <div class="modal fade" id="editHutangModal<?= $h['id_hutang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Judul -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Hutang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <!-- Akhir Judul -->

                <!-- Form Tambah Hutang -->
                <div class="modal-body">
                    <form action="/hutang/update/<?= $h['id_hutang']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id_hutang" value="<?= $h['id_hutang']; ?>">
                        <div class=" form-group">
                            <label for="inputTanggal" class="">Tanggal :</label>
                            <input type="date" id="inputTanggal" class="form-control" name="tgl_hutang" value="<?= $h['tgl_hutang']; ?>" required autofocus>
                        </div>
                        <div class=" form-group">
                            <label for="inputPenghutang" class="">Penghutang :</label>
                            <input type="text" id="inputPenghutang" class="form-control" name="penghutang" value="<?= $h['penghutang']; ?>" required autofocus>
                        </div>
                        <div class=" form-group">
                            <label for="inputJumlah" class="">Jumlah :</label>
                            <input type="number" id="inputJumlah" class="form-control" name="jumlah" value="<?= $h['jumlah']; ?>" required autofocus>
                        </div>
                        <div class=" form-group">
                            <label for="inputAlasan" class="">Alasan :</label>
                            <input type="text" id="inputAlasan" class="form-control" name="alasan" value="<?= $h['alasan']; ?>" required autofocus>
                        </div>
                        <div class=" modal-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                    </form>
                    <form action="hutang/delete/<?= $h['id_hutang']; ?>" method="post">
                        <button type="submit" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Hapus</button>
                    </form>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <!-- Akhir Form Tambah Hutang -->

            </div>
        </div>
    </div>
    </div>
<?php endforeach; ?>
<!-- Akhir Modal -->