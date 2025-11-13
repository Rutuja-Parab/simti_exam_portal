<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/sb-1.2.2/sp-1.4.0/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#data-table').DataTable({
            "aaSorting": [],
            "language": {
                "searchPlaceholder": "Search...",
                "decimal": "",
                "emptyTable": "No records found",
                "info": "",
                "infoEmpty": "",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Show _MENU_ per page",
                "loadingRecords": "Loading...",
                "processing": "Processing...",
                "search": "",
                "zeroRecords": "No matching records found",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "Next",
                    "previous": "Previous"
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
            },
            responsive: true
        });
    });
</script>
