
// let url = 'https://startlaw-api.herokuapp.com/';
let url = 'http://localhost:3000/';

$(document).ready( function () {

  $("#BtnLogout").click(function(e) {
    e.preventDefault();
    localStorage.removeItem('user');
    window.location = '/StartLaw/web/';
  })
  
} );

function BuscarUserLogado(){
    let user = JSON.parse(localStorage.getItem('user'));
    if(!user){
        window.location = '/StartLaw/web/';
    }
    return user;
}

filterInt = function (value) {
    if(/^(\-|\+)?([0-9]+|Infinity)$/.test(value))
      return Number(value);
    return NaN;
}

function dataFormatada(obj){
  var data = new Date(obj),
      dia  = data.getDate().toString(),
      diaF = (dia.length == 1) ? '0'+dia : dia,
      mes  = (data.getMonth()+1).toString(), //+1 pois no getMonth Janeiro começa com zero.
      mesF = (mes.length == 1) ? '0'+mes : mes,
      anoF = data.getFullYear();
  return diaF+"/"+mesF+"/"+anoF;
}

function dataFormatadaEUA(obj){
  var data = new Date(obj),
      dia  = data.getDate().toString(),
      diaF = (dia.length == 1) ? '0'+dia : dia,
      mes  = (data.getMonth()+1).toString(), //+1 pois no getMonth Janeiro começa com zero.
      mesF = (mes.length == 1) ? '0'+mes : mes,
      anoF = data.getFullYear();
  return anoF+"-"+mesF+"-"+diaF;
}