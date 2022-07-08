let table ;
let tableLancamento ;
let user ;

// $(document).ready( function () {
//     user = BuscarUserLogado();

//     table = $('#TableProcesso').DataTable({
//         // scrollY: '53vh',
//         scrollCollapse: false,
//         paging: true,
//         "searching": false
//     });
//     tableLancamento = $('#TableLancamento').DataTable({
//         // scrollY: '53vh',
//         scrollCollapse: false,
//         paging: true,
//         "searching": false
//     });
    
// } );



$(document).ready( function () {
    user = BuscarUserLogado();
    BuscarTiposProcessos();
    BuscarClientes();
    BuscarStatus();

    $("#BtnBuscarProcesso").click(function(e) {
        e.preventDefault();
        atualizarTabelaProcesso();
    })
    
    $("#BtnAdicionarLancamento").click(function(e) {
        e.preventDefault();
        AdicionarLancamento($("#id").val());
    })

    $("#BtnSalvar").click(function(e) {
        e.preventDefault();
        let user = BuscarUserLogado();
        let DataForm = $("#ProcessoForm").serializeArray();
        let acao = $("#acao").val();
        
        let complemento = '';

        if(acao == "editar"){
            complemento += "/atualizar/"+$('#id').val();
        }

        DataForm.push({name:'criadoPor', value: user.id})
        try {
            $.post(url+"processo"+complemento, DataForm, function( data ) {
                if(data.error){
                    alert("Erro na requisição")
                    return
                }
                if(acao == "editar")
                    alert("Atualizado com sucesso")
                else
                    alert("Cadastrado com sucesso")
    
                window.location = "/StartLaw/web/src/views/indexProcessos.php";
            });
        }
        catch(err) {
            alert("Erro na requisição")
        }
       
    })
    
} );

function atualizarTabelaProcesso(){
    // if(table)
    //     table.destroy();
    // let url = 'https://startlaw-api.herokuapp.com/';
    let user = BuscarUserLogado();
    
    let DataForm = $("#buscaProcessoForm").serializeArray();
    $.post(url+"processo/firma/"+user.firmaID, DataForm,function( data ) {
        console.log(data)
        
        montarTable(data)
    });
    
    function montarTable(data){
        table = $('#TableProcesso').DataTable({
            scrollCollapse: false,
            paging: true,
            "searching": false,
            data: data,
            destroy: true,
            columns: [
                { data: 'id' },
                { data: 'nome' },
                { 
                    data: 'cliente',
                    render: function ( data ) {
                        return data.nome;
                    }  
                
                },
                { 
                    data: 'tipoProcesso',
                    render: function ( data ) {
                        return data.nome;
                    }  
                },
                { 
                    data: 'status',
                    render: function ( data ) {
                        return data.nome;
                    }  
                 },
                { 
                    data: 'prazo',
                    render: function ( data ) {
                        return dataFormatada(data);
                    }
                },
                { 
                    data: 'criadoEm',
                    render: function ( data ) {
                        return dataFormatada(data);
                    }
                 },
                { 
                    data: 'id',
                    render: function ( data ) {
                        linha = "<span class='grow flex space-x-6'>";
                        linha += "<button class='text-yellow-500 hover:text-yellow-600' onclick='EditarProcesso("+data+")'>Editar</button>"
                        linha += "<button class='text-red-500 hover:text-red-600' onclick='RemoverProcesso("+data+")'>Remover</button>"
                        linha += "</span>"
                        return linha;
                    } 
                
                }
            ]
        });
    }

    
}

function atualizarTabelaLancamento(){
    let user = BuscarUserLogado();

    $.post(url+"lancamento-processo/processo/"+$('#id').val(),function( data ) {
        console.log(data)
        montarTableLancamento(data)
    });
    
    function montarTableLancamento(data){
        table = $('#TableLancamento').DataTable({
            scrollCollapse: false,
            paging: true,
            "searching": false,
            data: data,
            destroy: true,
            columns: [
                { 
                    data: 'criadoEm',
                    render: function ( data ) {
                        return dataFormatada(data);
                    }
                },
                { 
                    data: 'prazo',
                    render: function ( data ) {
                        return dataFormatada(data);
                    }
                },
                { 
                    data: 'status',
                    render: function ( data ) {
                        return data.nome;
                    }  
                 },
                { data: 'descricao' },
                { 
                    data: 'userCriador',
                    render: function ( data ) {
                        return data.nome;
                    }  
                
                },
                { 
                    data: 'id',
                    render: function ( data ) {
                        linha = "<span class='grow flex space-x-6'>";
                        linha += "<button class='text-yellow-500 hover:text-yellow-600' onclick='VizualizarLancamento("+data+")'>Visualizar</button>"
                        // linha += "<button class='text-red-500 hover:text-red-600' onclick='RemoverProcesso("+data+")'>Remover</button>"
                        linha += "</span>"
                        return linha;
                    } 
                
                }
            ]
        });
    }

    
}

function EditarProcesso(ProcessoID){
    window.location = '/StartLaw/web/src/views/processo.php?ID='+ProcessoID;
}

function VizualizarLancamento(ID){
    window.location = '/StartLaw/web/src/views/lancamento.php?ID='+ID;
}


function AdicionarLancamento(ProcessoID){
    window.location = '/StartLaw/web/src/views/lancamento.php?ProcessoID='+ProcessoID;
}

function RemoverProcesso(ProcessoID){
    var resultado = confirm("Deseja excluir esse Processo?");
    if(resultado == true){
        
        let user = BuscarUserLogado();
        
        $.post(url+"processo/deletar/"+ProcessoID+"/"+user.id,function( data ) {
            if(data.error){
                alert("Erro na requisição")
                return
            }
            atualizarTabelaProcesso();
        });
    }
}
function EditarProcessoDados(){
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('ID');
    
    if(id){
        $('#acao').val("editar")
        $('#id').val(id)
        $.get(url+"processo/"+id,function( data ) {
            $('#id').val(data.id)
            $('#nome').val(data.nome)
            $('#prazo').val(dataFormatadaEUA(data.prazo))
            $('#descricao').val(data.descricao)
            $('#observacao').val(data.observacao)
            $('#clienteID').val(data.clienteID)
            $('#statusID').val(data.statusID)
            $('#statusID').prop("disabled", true)
            $('#tipoProcessoID').val(data.tipoProcessoID)
            $('#DivLancamento').show()
        });
        atualizarTabelaLancamento();
    }
}


function BuscarTiposProcessos(){

    $.post(url+"tipo-processo/firma/"+user.firmaID,function( obj ) {
        if (obj != null) {
            var data = obj;
            var selectbox = $('#tipoProcessoID');
            selectbox.find('option').remove();
            $('<option>').val(0).text("Selecione um Tipo").appendTo(selectbox);
            $.each(data, function (i, d) {
                $('<option>').val(d.id).text(d.nome).appendTo(selectbox);
            });
        }
    });
}


function BuscarClientes(){

    $.post(url+"cliente/firma/"+user.firmaID,function( obj ) {
        if (obj != null) {
            var data = obj;
            var selectbox = $('#clienteID');
            selectbox.find('option').remove();
            $('<option>').val(0).text("Selecione um Cliente").appendTo(selectbox);
            $.each(data, function (i, d) {
                $('<option>').val(d.id).text(d.nome).appendTo(selectbox);
            });
        }
    });
}

function BuscarStatus(){

    $.get(url+"status",function( obj ) {
        if (obj != null) {
            var data = obj;
            var selectbox = $('#statusID');
            selectbox.find('option').remove();
            $('<option>').val(0).text("Selecione um Status").appendTo(selectbox);
            $.each(data, function (i, d) {
                $('<option>').val(d.id).text(d.nome).appendTo(selectbox);
            });
        }
    });
}