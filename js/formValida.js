
//De acordo com a suite escolhida o hospede já tem marcados as refeições

var suiteEscolha = [document.forms[0].elements], document.forms[0].elements[1],
[document.forms[0].elements], document.forms[0].elements[2];

for(var i = [0]; i < suiteEscolha.length; i++) {
    suiteEscolha[i].addEventListener('change', function(){
        var almoco = document.forms[0].elements[11];
        var almoco = document.forms[0].elements[12];
        
        almoco.checked = false;
        janta.cheked = false;

        if(suiteEscolha[0].checked){
            almoco.checked = true;
            janta.checked = true;
        }
        if(suiteEscolha[1].checked){
            almoco.checked = true;
        }

//Nome Completo
nome = document.getElementById('nome');

function verficaNome() {
    var expNome = /^([0-9]){3,50}$/g;
    var nomeVerificado = expNome.exec (nome.value);
    var msgNome = '';

    if (!nomeVerificado){
        msgNome = 'O nome precisa ser completp e sem números';
    }
    nome.setCustomValidity(msgNome);
}

//E-mail
email = document.queryCommandSelector ('#email');
email =addEventListener('blur',validaEmail(),false);
function validaEmail() {
var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z]){3,6}$/g;
    var nomeVerificado = expEmail.exec (email.value);
    var msgEmail ='';
    
    if

//Tratando do CPF
cpf= document.querySelector('#cpf');
cpf.addEventListener('blur',(evento)=>{
    verificarCpf(evento.target);
})
function verificarCpf(input){
var expCpf= /(\d{3})(\d{3})(\d{3})(\d{2})/g;
var verificadocpf = expCpf.exec(input.value);
var msgCpf ='';
 
if(!verificadocpf){
     msgCpf = 'Digite apenas números';
      }
      var cpfFormatado = valorCpf.value.replace(cpfExp,
         function (vrvalorRegex,p1,p2,p3,p4){
        return p1 + '.' + p2 + '.' + p3 + '.' + p4 + '-';
        })
        cpfCompleto.setCustomValidity(msgCpf);
        cpf.value.cpfFormatado;
    })

//Data de Nascimento - Uma outra forma de declarar eventos, utilizando Arrow Functions



//Telefone



//Senha



//Mostra Senha


//Termos de Privacidade


//Botão de Envio sem termo exibe caixa de alerta
