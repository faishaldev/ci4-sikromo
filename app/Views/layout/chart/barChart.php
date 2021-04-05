<!-- Script Clustered Bar Chart -->
<script>
    function addCommas(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        let rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
    var ctx = document.getElementById('BarChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                    label: 'Pemasukan',
                    data: [<?php foreach ($pemasukanPerBulan as $pemPerBul) {
                                echo "'" . $pemPerBul['total'] . "', ";
                            } ?>],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Pengeluaran',
                    data: [<?php foreach ($pengeluaranPerBulan as $penPerBul) {
                                echo "'" . $penPerBul['total'] . "', ";
                            } ?>],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fontSize: 10,
                        callback: function(value, index, values) {
                            return addCommas(value);
                        }
                    }
                }]
            }
        }
    });
</script>
<!-- Akhir Script Clustered Bar Chart -->