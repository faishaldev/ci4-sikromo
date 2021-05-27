<!-- Modal -->
<?php foreach ($hutangBelumLunas as $h) : ?>
    <div class="modal fade" id="editStatusModal<?= $h['id_hutang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Judul -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Status Hutang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <!-- Akhir Judul -->

                <!-- Form Edit Status Hutang -->
                <div class="modal-body">
                    <form action="/dashboard/update/<?= $h['id_hutang']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id_hutang" value="<?= $h['id_hutang']; ?>">
                        <div class=" form-group" style="display: none;">
                            <label for="inputTanggal" class="">Tanggal :</label>
                            <input type="date" id="inputTanggal" class="form-control" name="tgl_hutang" value="<?= $h['tgl_hutang']; ?>" required autofocus>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="inputPenghutang" class="">Penghutang :</label>
                            <input type="text" id="inputPenghutang" class="form-control" name="penghutang" value="<?= $h['penghutang']; ?>" required autofocus>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="inputJumlah" class="">Jumlah :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" id="inputJumlah" class="form-control" name="jumlah" value="<?= $h['jumlah']; ?>" required autofocus>
                            </div>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="inputKeterangan" class="">Keterangan :</label>
                            <input type="text" id="inputKeterangan" class="form-control" name="keterangan" value="<?= $h['keterangan']; ?>" required autofocus>
                        </div>
                        <div class="form-group">
                            <select name="status" id="inputStatus" class="form-select">
                                <option value="">--Status--</option>
                                <option value="Lunas" <?= $h['status'] == "Lunas" ? 'selected="selected"' : ''; ?>>Lunas</option>
                                <option value="Belum Lunas" <?= $h['status'] == "Belum Lunas" ? 'selected="selected"' : ''; ?>>Belum Lunas</option>
                            </select>
                        </div>
                        <div class=" modal-footer">
                            <button type="submit" class="btn btn-success">Ubah</button>
                    </form>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <!-- Akhir Form Edit Status Hutang -->

            </div>
        </div>
    </div>
    </div>
<?php endforeach; ?>
<!-- Akhir Modal -->