// let table ;
// let tableProcesso ;

// $(document).ready( function () {
//     table = $('#TableCliente').DataTable({
//         // scrollY: '53vh',
//         scrollCollapse: false,
//         paging: true,
//         "searching": false
//     });
//     tableProcesso = $('#TableProcessosClientes').DataTable({
//         // scrollY: '53vh',
//         scrollCollapse: false,
//         paging: true,
//         "searching": false
//     });
// } );

let table ;
let tableProcesso ;


$(document).ready( function () {
    
    $('#telefone').mask('(00) 00000-0000');
    $('#cpf').mask('000.000.000-00');
    $('#cep').mask('00000-000');
    $('#DivProcessos').hide();


    $("#BtnBuscarCliente").click(function(e) {
        e.preventDefault();
        atualizarTabelaClientes();
    })
    $("#BtnSalvar").click(function(e) {
        e.preventDefault();
        let user = BuscarUserLogado();
        let DataForm = $("#CLienteForm").serializeArray();
        let acao = $("#acao").val();

        let complemento = '';

        if(acao == "editar"){
            complemento += "/atualizar/"+$('#id').val();
        }

        DataForm.push({name:'criadoPor', value: user.id})
        try {
            $.post(url+"cliente"+complemento, DataForm, function( data ) {
                if(data.error){
                    alert("Erro na requisição")
                    return
                }
                if(acao == "editar")
                    alert("Atualizado com sucesso")
                else
                    alert("Cadastrado com sucesso")
    
                window.location = "/StartLaw/web/src/views/indexCliente.php";
            });
        }
        catch(err) {
            alert("Erro na requisição")
        }
       
    })
    
} );

function atualizarTabelaClientes(){
    // if(table)
    //     table.destroy();

    let user = BuscarUserLogado();
    
    let DataForm = $("#buscaClienteForm").serializeArray();
    $.post(url+"cliente/firma/"+user.firmaID, DataForm,function( data ) {
        console.log(data)
        montarTable(data)
    });
    
    function montarTable(data){
        table = $('#TableCliente').DataTable({
            scrollCollapse: false,
            paging: true,
            "searching": false,
            data: data,
            destroy: true,
            columns: [
                { data: 'nome' },
                { data: 'email' },
                { data: 'cpf' },
                { data: 'rg' },
                { data: 'cnpj' },
                { data: 'telefone' },
                { 
                    data: 'id',
                    render: function ( data ) {
                        linha = "<span class='grow flex space-x-6'>";
                        linha += "<button class='text-yellow-500 hover:text-yellow-600' onclick='EditarCliente("+data+")'>Editar</button>"
                        linha += "<button class='text-red-500 hover:text-red-600' onclick='RemoverCliente("+data+")'>Remover</button>"
                        linha += "</span>"
                        return linha;
                    } 
                
                }
            ]
        });
    }

    
}

function EditarCliente(clienteID){
    window.location = '/StartLaw/web/src/views/cliente.php?ID='+clienteID;
}

function RemoverCliente(clienteID){
    var resultado = confirm("Deseja excluir esse cliente?");
    if(resultado == true){
        
        let user = BuscarUserLogado();
        
        $.post(url+'cliente/deletar/'+clienteID+"/"+user.id,function( data ) {
            if(data.error){
                alert("Erro na requisição")
                return
            }
            atualizarTabelaClientes();
        });
    }
}

function EditarClienteDados(){
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('ID');
    
    if(id){
        $('#acao').val("editar")
        $('#id').val(id)
        $('#DivProcessos').show();

        $.get(url+"cliente/"+id,function( data ) {
            
            $('#id').val(data.id)
            $('#nome').val(data.nome)
            $('#email').val(data.email)
            $('#cpf').val(data.cpf)
            $('#rg').val(data.rg)
            $('#cnpj').val(data.cnpj)
            $('#telefone').val(data.telefone)

            $('#cep').val(data.cep)
            $('#bairro').val(data.bairro)
            $('#rua').val(data.rua)
            $('#numero').val(data.numero)
            $('#estado').val(data.estado)
            $('#cidade').val(data.cidade)
        });
    }
}
