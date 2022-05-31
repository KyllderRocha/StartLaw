let table ;
let tableProcesso ;

$(document).ready( function () {
    table = $('#TableCliente').DataTable({
        // scrollY: '53vh',
        scrollCollapse: false,
        paging: true,
        "searching": false
    });
    tableProcesso = $('#TableProcessosClientes').DataTable({
        // scrollY: '53vh',
        scrollCollapse: false,
        paging: true,
        "searching": false
    });
} );