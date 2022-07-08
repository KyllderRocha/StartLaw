
$(document).ready( function () {
    $("#BtnEntrar").click(function(e) {
        e.preventDefault();
        let DataForm = $("#formLogin").serialize();
        
        $.post(url+"usuario/login", DataForm,function( data ) {
            if(!data.nome){
                alert("Erro login")
                return
            }
            localStorage.setItem('user', JSON.stringify({
                nome: data.nome,
                email: data.email,
                id: data.id,
                firmaID: data.firmaID
            }));
            window.location = "/StartLaw/web/src/views/indexProcessos.php";
        });
    });
    
} );