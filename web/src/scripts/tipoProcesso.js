let table ;


$(document).ready( function () {


    $("#BtnBuscarTipoProcesso").click(function(e) {
        e.preventDefault();
        atualizarTabelaTipoProcesso();
    })
    $("#BtnSalvar").click(function(e) {
        e.preventDefault();
        let user = BuscarUserLogado();
        let DataForm = $("#TipoProcessoForm").serializeArray();
        let acao = $("#acao").val();
        
        let complemento = '';

        if(acao == "editar"){
            complemento += "/atualizar/"+$('#id').val();
        }

        DataForm.push({name:'criadoPor', value: user.id})
        try {
            $.post(url+"tipo-processo"+complemento, DataForm, function( data ) {
                if(data.error){
                    alert("Erro na requisição");
                    return
                }
                if(acao == "editar")
                    alert("Atualizado com sucesso")
                else
                    alert("Cadastrado com sucesso")

                    // bootbox.alert("Cadastrado com sucesso", function(){ 
                    //     window.location = "/StartLaw/web/src/views/indexTipoProcesso.php";

                    // });
    
                window.location = "/StartLaw/web/src/views/indexTipoProcesso.php";
            });
        }
        catch(err) {
            alert("Erro na requisição")
        }
       
    })
    
} );

function atualizarTabelaTipoProcesso(){
    // if(table)
    //     table.destroy();

    let user = BuscarUserLogado();
    
    let DataForm = $("#buscaTipoProcessoForm").serializeArray();
    $.post(url+"tipo-processo/firma/"+user.firmaID, DataForm,function( data ) {
        montarTable(data)
    });
    
    function montarTable(data){
        table = $('#TableTipoProcesso').DataTable({
            scrollCollapse: false,
            paging: true,
            "searching": false,
            data: data,
            destroy: true,
            columns: [
                { data: 'nome' },
                { data: 'descricao' },
                { 
                    data: 'id',
                    render: function ( data ) {
                        linha = "<span class='grow flex space-x-6'>";
                        linha += "<button class='text-yellow-500 hover:text-yellow-600' onclick='EditarTipoProcesso("+data+")'>Editar</button>"
                        linha += "<button class='text-red-500 hover:text-red-600' onclick='RemoverTipoProcesso("+data+")'>Remover</button>"
                        linha += "</span>"
                        return linha;
                    } 
                
                }
            ]
        });
    }

    
}

function EditarTipoProcesso(tipoProcessoID){
    window.location = '/StartLaw/web/src/views/tipoProcesso.php?ID='+tipoProcessoID;
}

function RemoverTipoProcesso(tipoProcessoID){
    // bootbox.confirm("Deseja excluir esse Tipo de Processo?", function(result){ 
    //     let user = BuscarUserLogado();        
    //     $.post(url+'tipo-processo/deletar/'+tipoProcessoID+"/"+user.id,function( data ) {
    //         if(data.error){
    //             alert("Erro na requisição")
    //             return
    //         }
    //         atualizarTabelaTipoProcesso();
    //     });
    // });
    
    var resultado = confirm("Deseja excluir esse Tipo de Processo?");
    
    if(resultado == true){
        
        let user = BuscarUserLogado();        
        $.post(url+'processo/deletar/'+tipoProcessoID+"/"+user.id,function( data ) {
            if(data.error){
                alert("Erro na requisição")
                return
            }
            atualizarTabelaTipoProcesso();
        });
    }
}
function EditarTipoProcessoDados(){
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('ID');
    
    if(id){
        $('#acao').val("editar")
        $('#id').val(id)
        $.get(url+"tipo-processo/"+id,function( data ) {
            
            $('#id').val(data.id)
            $('#nome').val(data.nome)
            $('#descricao').val(data.descricao)
            $('#DivLancamento').show()
        });
    }
}
