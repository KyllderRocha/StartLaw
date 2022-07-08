let table ;

$(document).ready( function () {
    
    $('#telefone').mask('(00) 00000-0000');
    $('#cpf').mask('000.000.000-00');
    $('#cep').mask('00000-000');

    $("#BtnBuscarUser").click(function(e) {
        e.preventDefault();
        atualizarTabelaUsuarios();
    })
    $("#BtnSalvar").click(function(e) {
        e.preventDefault();
        let user = BuscarUserLogado();
        let DataForm = $("#UsuarioForm").serializeArray();
        let acao = $("#acao").val();
        // let url = 'https://startlaw-api.herokuapp.com/endereco';
        
        let complemento = '';

        if(acao == "editar"){
            complemento += "/atualizar/"+$('#id').val();
        }else{
            if($('#senha').val() != $('#repetirSenha').val())
                alert("Senhas diferentes")
        }
       
        DataForm.push({name:'firmaID', value: user.firmaID})
        DataForm.push({name:'criadoPor', value: user.id})

        $.post(url+"usuario"+complemento, DataForm, function( data ) {
            if(data.error){
                alert("Erro na requisição")
                return
            }
            if(acao == "editar")
                alert("Atualizado com sucesso")
            else
                alert("Cadastrado com sucesso")

            window.location = "/StartLaw/web/src/views/indexUsuario.php";
        });
    })
    
} );

function atualizarTabelaUsuarios(){
    // if(table)
    //     table.destroy();
    
    let user = BuscarUserLogado();
    
    let DataForm = $("#buscaUserForm").serializeArray();
    
    $.post(url+"usuario/firma/"+user.firmaID, DataForm,function( data ) {
        montarTable(data)
    });
    
    function montarTable(data){
        table = $('#TableUsuario').DataTable({
            scrollCollapse: false,
            paging: true,
            "searching": false,
            data: data,
            destroy: true,
            columns: [
                { data: 'nome' },
                { data: 'email' },
                { data: 'login' },
                { data: 'cpf' },
                { data: 'rg' },
                { data: 'cargo' },
                { data: 'telefone' },
                { 
                    data: 'id',
                    render: function ( data ) {
                        linha = "<span class='grow flex space-x-6'>";
                        linha += "<button class='text-yellow-500 hover:text-yellow-600' onclick='EditarUsuario("+data+")'>Editar</button>"
                        linha += "<button class='text-red-500 hover:text-red-600' onclick='RemoverUsuario("+data+")'>Remover</button>"
                        linha += "</span>"
                        return linha;
                    } 
                
                }
            ]
        });
    }

    
}

function EditarUsuario(usuarioID){
    window.location = '/StartLaw/web/src/views/usuario.php?ID='+usuarioID;
}

function RemoverUsuario(usuarioID){
    var resultado = confirm("Deseja excluir esse usuario?");
    if(resultado == true){
        
        let user = BuscarUserLogado();
                
        $.post(url+'usuario/deletar/'+usuarioID+"/"+user.id,function( data ) {
            if(data.error){
                alert("Erro na requisição")
                return
            }
            atualizarTabelaUsuarios();
        });
    }
}

function EditarUsuarioDados(){
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('ID');
    
    if(id){
        $('#acao').val("editar")
        $('#id').val(id)
        $.get(url+"usuario/"+id,function( data ) {
            
            $('#id').val(data.id)
            $('#nome').val(data.nome)
            $('#email').val(data.email)
            $('#login').val(data.login)
            $('#cpf').val(data.cpf)
            $('#rg').val(data.rg)
            $('#cargo').val(data.cargo)
            $('#telefone').val(data.telefone)
            $('#divSenha').hide()
            $('#divRepetirSenha').hide()

            $('#cep').val(data.cep)
            $('#bairro').val(data.bairro)
            $('#rua').val(data.rua)
            $('#numero').val(data.numero)
            $('#estado').val(data.estado)
            $('#cidade').val(data.cidade)
        });
    }
}
