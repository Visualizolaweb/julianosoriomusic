$.extend( true, $.fn.dataTable.defaults, {
    "ordering": false,
    "lengthChange": false,
    "info": false
});

$(document).ready(function(){
    $('#table').DataTable({
        "language": {
            "responsive" : true,
            "search" : "Buscar",
            "zeroRecords": "No se encontró ningún resultado",
            "paginate" : {
                "first" : "<<",
                "last" : ">>",
                "next" : "<i class='material-icons'>navigate_next</i>",
                "previous" : "<i class='material-icons'>navigate_before</i>"
            }
        }
    });
});
