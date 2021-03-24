<!-- Modal -->
<div class="modal fade" id="hutangModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hutang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>

            <div class="modal-body">
                <form action="/hutang/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="inputTanggal" class="">Tanggal :</label>
                        <input type="date" id="inputTanggal" class="form-control" name="tgl_hutang" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputJumlah" class="">Jumlah :</label>
                        <input type="number" id="inputJumlah" class="form-control" name="jumlah" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputPenghutang" class="">Penghutang :</label>
                        <input type="text" id="inputPenghutang" class="form-control" name="penghutang" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputAlasan" class="">Alasan :</label>
                        <input type="text" id="inputAlasan" class="form-control" name="alasan" required autofocus>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>