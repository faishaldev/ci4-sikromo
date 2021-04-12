<!-- Script Doughnut Bar Chart -->
<script>
    var ctx = document.getElementById("DoughnutChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Pemasukan", "Pengeluaran"],
            datasets: [{
                data: [<?= $pemasukanPerTahun; ?>, <?= $pengeluaranPerTahun; ?>],
                backgroundColor: ['rgba(54, 162, 235, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                borderColor: ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)'],
                borderWidth: 1
            }],
        },
        options: {
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataLabel = data.labels[tooltipItem.index];
                        var value = ': ' + 'Rp' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index].toLocaleString();
                        if (Chart.helpers.isArray(dataLabel)) {
                            dataLabel = dataLabel.slice();
                            dataLabel[0] += value;
                        } else {
                            dataLabel += value;
                        }
                        return dataLabel;
                    }
                }
            },
            cutoutPercentage: 75
        }
    });
</script>
<!-- Akhir Script Doughnut Bar Chart -->