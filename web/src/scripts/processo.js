let table ;
let tableLancamento ;

$(document).ready( function () {
    table = $('#TableProcesso').DataTable({
        // scrollY: '53vh',
        scrollCollapse: false,
        paging: true,
        "searching": false
    });
    tableLancamento = $('#TableLancamento').DataTable({
        // scrollY: '53vh',
        scrollCollapse: false,
        paging: true,
        "searching": false
    });
} );