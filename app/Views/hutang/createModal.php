<!-- Modal -->
<div class="modal fade" id="hutangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Judul -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hutang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <!-- Akhir Judul -->

            <!-- Form Tambah Hutang -->
            <div class="modal-body">
                <form action="/hutang/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputTanggal" class="">Tanggal :</label>
                        <input type="date" id="inputTanggal" class="form-control" name="tgl_hutang" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputPenghutang" class="">Penghutang :</label>
                        <input type="text" id="inputPenghutang" class="form-control" name="penghutang" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputJumlah" class="">Jumlah :</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" id="inputJumlah" class="form-control" name="jumlah" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputKeterangan" class="">Keterangan :</label>
                        <input type="text" id="inputKeterangan" class="form-control" name="keterangan" required autofocus>
                    </div>
                    <div class="form-group pt-4" style="display: none;">
                        <select name="status" id="inputStatus" class="form-select">
                            <option value="">Status</option>
                            <option value="Lunas">Lunas</option>
                            <option value="Belum Lunas" selected="selected">Belum Lunas</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
            <!-- Akhir Form Tambah Hutang -->

        </div>
    </div>
</div>
<!-- Akhir Modal -->