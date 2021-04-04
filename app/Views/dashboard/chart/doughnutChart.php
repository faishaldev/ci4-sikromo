<!-- Doughnut Chart -->
<div class="col-md-4">
    <div class="card">
        <div class="row">

            <!-- Judul -->
            <div class="col card-header py-3">
                <h6 class="m-0 font-weight-bold">Grafik Per Tahun</h6>
            </div>
            <!-- Akhir Judul -->

            <!-- Tombol Tahun -->
            <div class="col card-header">
                <form method="POST" action="#">
                    <select name="tahunDoughnut" class="btn btn-sm btn-outline-secondary dropdown-toggle" onchange="this.form.submit()" id="tombolwaktu">
                        <?php
                        $tahun_sekarang = date('Y');
                        $tahun_session = @$_SESSION['tahunDoughnut'];
                        $tahun_post = @$_POST['tahunDoughnut'];

                        if ($tahun_post) {
                            $tahun_filter = $tahun_post;
                            $_SESSION['tahunDoughnut'] = $tahun_post;
                        } else if ($tahun_session) {
                            $tahun_filter = $tahun_session;
                        } else {
                            $tahun_filter = $tahun_sekarang;
                        }

                        for ($i = ($tahun_sekarang - 5); $i <= $tahun_sekarang; $i++) {
                            $selected = ($i == $tahun_filter ? 'selected' : '');
                            echo '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
                        }
                        ?>
                    </select>
                </form>
            </div>
            <!-- Akhir Tombol Tahun -->

            <!-- Grafik Lingkaran -->
            <canvas class="my-4 w-100" id="DoughnutChart" width="437" height="380"></canvas>
            <!-- Grafik Lingkaran -->

        </div>
    </div>
</div>
<!-- Akhir Doughnut Chart -->