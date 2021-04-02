<!-- Script Doughnut Bar Chart -->
<script>
    var ctx = document.getElementById('DoughnutChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data = {
            labels: ['Pemasukan', 'Pengeluaran'],
            datasets: [{
                data: [10000, 5000],
                backgroundColor: ['#4e73df', '#e74a3b'],
                hoverBackgroundColor: ['#2e59d9', '#e74a3b'],
                hoverBorderColor: "rgba(234, 236, 244, 1)"
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
<!-- Akhir Script Doughnut Bar Chart -->