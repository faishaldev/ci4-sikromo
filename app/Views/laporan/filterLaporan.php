<div class="col mb-4">
    <div class="card border-left-success h-100 py-2 filtertanggal">
        <div class="card-body">

            <!-- Sub Judul -->
            <div class="no-gutters align-items-center text-center">
                <div class="mr-2">
                    <div class="text-md font-weight-bold text-uppercase mb-1">Filter Laporan</div>
                </div>
                <hr>
            </div>
            <!-- Akhir Sub Judul -->

            <?php
            $filter_tipe = @$_GET['periode'];
            $mulai_bulan = @$_GET['mulai_bulan'];
            $sampai_bulan = @$_GET['sampai_bulan'];
            $mulai_tanggal = @$_GET['mulai_tanggal'];
            $sampai_tanggal = @$_GET['sampai_tanggal'];
            ?>

            <!-- Filter Laporan -->
            <div class="container align-items-center">
                <form action="laporan" method="GET">
                    <div class="row">
                        <div class="col form-group">
                            <select name="periode" id="inputPeriode" class="form-select" required>
                                <option value="">--Pilih Periode--</option>
                                <option value="harian" <?php echo ($filter_tipe == 'harian' ? 'selected' : ''); ?>>Harian</option>
                                <option value="bulanan" <?php echo ($filter_tipe == 'bulanan' ? 'selected' : ''); ?>>Bulanan</option>
                            </select>
                        </div>
                    </div>
                    <div id="harian" style="<?php echo ($filter_tipe == 'harian' ? 'display: block;' : 'display: none;'); ?>">
                        <div class="row">
                            <div class="col form-group">
                                <label for="inputMulaiTanggal" class="font-weight-bold">Mulai Tanggal :</label>
                                <input type="date" id="inputMulaiTanggal" class="form-control" name="mulai_tanggal" value="<?php echo $mulai_tanggal ?>">
                            </div>
                            <div class="col form-group">
                                <label for="inputSampaiTanggal" class="font-weight-bold">Sampai Tanggal :</label>
                                <input type="date" id="inputSampaiTanggal" class="form-control" name="sampai_tanggal" value="<?php echo $sampai_tanggal ?>">
                            </div>
                            <button type="submit" class="col btn btn-success mt-3">Tampilkan</button>
                        </div>
                    </div>
                    <div id="bulanan" style="<?php echo ($filter_tipe == 'bulanan' ? 'display: block;' : 'display: none;'); ?>">
                        <div class="row">
                            <div class="col form-group">
                                <label for="inputMulaiBulan" class="font-weight-bold">Mulai Bulan :</label>
                                <input type="month" id="inputMulaiBulan" class="form-control" name="mulai_bulan" value="<?php echo $mulai_bulan ?>">
                            </div>
                            <div class="col form-group">
                                <label for="inputSampaiTanggal" class="font-weight-bold">Sampai Bulan :</label>
                                <input type="month" id="inputSampaiBulan" class="form-control" name="sampai_bulan" value="<?php echo $sampai_bulan ?>">
                            </div>
                            <button type="submit" class="col btn btn-success mt-3">Tampilkan</button>
                        </div>
                    </div>
                </form>
                <!-- Akhir Filter Laporan -->

            </div>
        </div>
    </div>
</div>