let table ;

$(document).ready( function () {
    table = $('#TableCliente').DataTable({
        // scrollY: '53vh',
        scrollCollapse: false,
        paging: true,
        "searching": false
    });
} );