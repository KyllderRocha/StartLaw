let table ;
let tableLancamento ;
let user ;

$(document).ready( function () {
    user = BuscarUserLogado();
    
    BuscarClientes();
    BuscarStatus();

    $("#BtnVoltar").click(function(e) {
        e.preventDefault();
        window.location = '/StartLaw/web/src/views/processo.php?ID='+$('#processoID').val();
    })

    $("#BtnSalvar").click(function(e) {
        e.preventDefault();
        let user = BuscarUserLogado();
        let DataForm = $("#LancamentoForm").serializeArray();
        let acao = $("#acao").val();
        
        let complemento = '';

        if(acao == "editar"){
            complemento += "/atualizar/"+$('#id').val();
        }else{ 
            const urlParams = new URLSearchParams(window.location.search);
            const id = urlParams.get('ProcessoID');
            $('#processoID').val(id)
            DataForm.push({name:'processoID', value: id})
        }

        DataForm.push({name:'criadoPor', value: user.id})
        try {
            $.post(url+"lancamento-processo"+complemento, DataForm, function( data ) {
                if(data.error){
                    alert("Erro na requisição")
                    return
                }
                if(acao == "editar")
                    alert("Atualizado com sucesso")
                else
                    alert("Cadastrado com sucesso")
    
                window.location = '/StartLaw/web/src/views/processo.php?ID='+$('#processoID').val();
            });
        }
        catch(err) {
            alert("Erro na requisição")
        }
       
    })
    
} );

function BuscarDados(){
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('ID');
    
    if(id){
        $('#acao').val("editar")
        $('#id').val(id)
        $.get(url+"lancamento-processo/"+id,function( data ) {
            $('#id').val(data.id)
            $('#nome').val(data.nome)
            $('#prazo').val(dataFormatadaEUA(data.prazo))
            $('#descricao').val(data.descricao)
            $('#statusID').val(data.statusID)
            $('#statusID').prop("disabled", true)
            $('#descricao').prop("disabled", true)
            $('#prazo').prop("disabled", true)
            $('#nome').prop("disabled", true)
            $('#BtnSalvar').hide()
            $('#processoID').val(data.processoID)
        });
    }
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