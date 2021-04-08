<!-- Bar Chart -->
<div class="col-md-8">
    <div class="card">
        <div class="row">

            <!-- Judul -->
            <div class="col card-header py-3">
                <h6 class="m-0 font-weight-bold">Grafik Per Bulan</h6>
            </div>
            <!-- Akhir Judul -->

            <!-- Tombol Tahun -->
            <div class="col card-header">
                <form method="POST" action="#">
                    <select name="tahunBar" class="btn btn-sm btn-outline-secondary dropdown-toggle" onchange="this.form.submit()" id="tombolwaktu">

                        <?php
                        $tahun_sekarang = date('Y');
                        $tahun_session = @$_SESSION['tahunBar'];
                        $tahun_post = @$_POST['tahunBar'];

                        if ($tahun_post) {
                            $tahun_filter = $tahun_post;
                            $_SESSION['tahunBar'] = $tahun_post;
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

            <!-- Grafik Batang -->
            <canvas class="my-4 w-100" id="BarChart" width="900" height="380"></canvas>
            <!-- Akhir Grafik Batang -->

        </div>
    </div>
</div>
<!-- Akhir Bar Chart -->