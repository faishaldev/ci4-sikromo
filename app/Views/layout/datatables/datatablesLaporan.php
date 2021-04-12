<!-- Script Datatables -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.tables3').DataTable({
            columnDefs: [{
                targets: [2, 3, 4],
                render: $.fn.DataTable.render.number('.', ',', 2, 'Rp')
            }]
        });
    });
</script>
<!-- Akhir Script Datatables -->