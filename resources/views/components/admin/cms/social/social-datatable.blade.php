<script>
    $(document).ready(function() {
        var datatableUrl = "{{ route('admin.socials.index') }}";
        //alert(datatableUrl);
        var table = $('#dataTable').DataTable( {
            lengthChange: false,
            bInfo: false,
            bFilter:false,
            pageLength: 10,
            serverSide: true,
            processing: true,
            //dom : 'Bfrtip',
            order: [[2, 'desc']],
            paging: true,
            language: {
                processing: '<div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>'
                //processing: '<div class="spinner-border text-primary" role="status"> <span class="visually-hidden">Loading...</span></div>'
            },
            buttons: [ 'copy', 'excel', 'pdf', 'print','colvis'],
            ajax: {
                url: datatableUrl,
                data: function (d) {
                    d.status = $('#filter_status').val(),
                    d.search = $('#searchbox').val()
                }
            },
            fnDrawCallback: function(oSettings) {
                if (oSettings._iDisplayLength > oSettings.fnRecordsDisplay()) {
                    $(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
                } else {
                    $(oSettings.nTableWrapper).find('.dataTables_paginate').show();
                }
            },
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false,visible:false },
                { data: "name", name: "name" },
                { data: "status", name: "status" },
                { data: "action", orderable: false, searchable: false, responsivePriority:2},
            ]
        } );

        table.buttons().container().appendTo("#dataTable_button");
        var info = table.page.info();
        
        $('#filter_status').change(function(){
            table.draw();
        });

        $("#searchbox").keyup(function(){
            table.draw();
        });

        document.getElementById("searchbox").addEventListener("search", function(event) {
            table.draw();
        });
    } );
</script>