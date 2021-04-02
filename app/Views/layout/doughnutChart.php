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
            cutoutPercentage: 75
        }
    });
</script>
<!-- Akhir Script Doughnut Bar Chart -->