<!-- Script Datatables -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.tables1').DataTable({
            columnDefs: [{
                targets: 2,
                render: $.fn.DataTable.render.number('.', ',', 2, 'Rp')
            }]
        });
    });
</script>
<!-- Akhir Script Datatables -->