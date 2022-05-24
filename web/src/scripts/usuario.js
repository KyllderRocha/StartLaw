let table ;

$(document).ready( function () {
    table = $('#TableUsuario').DataTable({
        // scrollY: '53vh',
        scrollCollapse: false,
        paging: true,
        "searching": false
    });
} );