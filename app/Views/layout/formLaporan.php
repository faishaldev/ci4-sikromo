<script>
    $("select").on("change", function() {
        $('#' + $(this).val()).show('form').siblings('form').hide();
    })
</script>

<script>
    $(document).on("change", "#inputPeriode", function() {
        if ($(this).val() == 'bulanan') {
            $("#harian").hide();
            $("#bulanan").show();
        } else if ($(this).val() == 'harian') {
            $("#harian").show();
            $("#bulanan").hide();
        } else {
            $("#harian").hide();
            $("#bulanan").hide();
        }
    });
</script>