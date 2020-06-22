// const $zero_dezoito = document.getElementById('inlineCheckbox1');
// const $dezenove_vintetres = document.getElementById('inlineCheckbox2');
// const $vintequatro_vinteoito = document.getElementById('inlineCheckbox3');
// const $vintenove_trintatres = document.getElementById('inlineCheckbox4');
// const $trintaquatro_trintaoito = document.getElementById('inlineCheckbox5');
// const $trintanove_quarentatres = document.getElementById('inlineCheckbox6');
// const $quarentaquatro_quarentaoito = document.getElementById('inlineCheckbox7');
// const $quarentanove_cinquentatres = document.getElementById('inlineCheckbox8');
// const $cinquentaquatro_cinquentaoito = document.getElementById('inlineCheckbox9');
// const $cinquentanove = document.getElementById('inlineCheckbox10');

// const $btnIdade = document.getElementById('btn_idade');

// if($zero_dezoito.value == null && $dezenove_vintetres.value == null && $vintequatro_vinteoito.value == null && $vintenove_trintatres.value == null && $trintaquatro_trintaoito.value == null && $trintanove_quarentatres.value == null&& $quarentaquatro_quarentaoito.value == null && $quarentanove_cinquentatres.value == null && $cinquentaquatro_cinquentaoito.value == null && $cinquentanove.value == null){
//     alert('Selecione pelo menos um campo.');
// }

// $btnIdade.addEventListener("click", );


//Função para bloquear entrada de letra ou número
function validarEntrada(caracter, typeBlock){

    var tipo = typeBlock;
    
    if(window.event)
        var asc = caracter.charCode;
    else
        var asc = caracter.which;
    
    
    if (tipo == "numeric"){
        
        if(asc >=48 && asc <=57){
           return false;
        }
        
    }
    else if(tipo == "string"){
            if(asc < 48 || asc > 57){
                return false;
            }    
    }
    
}


//Função para fazer mascara do telefone (99) 9999-9999
function mascaraFone(obj,caracter){
    
    if (validarEntrada(caracter, 'string') == false)
        return false;
    
    var input = obj.value;
    var id = obj.id;
    var resultado = input;
    
    if(input.length == 0)
        resultado = "(";
    else if(input.length == 3)
        resultado += ") ";
    else if(input.length == 9)
        resultado += "-";
    else if(input.length == 14)
        return false;
    
    
    document.getElementById(id).value = resultado;
    
}

//Função para fazer mascara do celular (99) 9-9999-9999
function mascaraCel(obj,caracter){
    
    if (validarEntrada(caracter, 'string') == false)
        return false;
    
    var input = obj.value;
    var id = obj.id;
    var resultado = input;

    
    if(input.length == 0)
        resultado = "(";
    else if(input.length == 3)
        resultado += ") ";
    else if(input.length == 16)
        return false;


  document.getElementById(id).value = resultado;

}


//Função para fazer mascara da data dd/mm/aaaa
function mascaraData(obj,caracter){
    
    if (validarEntrada(caracter, 'string') == false)
        return false
    
    
    var input = obj.value;
    var id = obj.id;
    var resultado = input;
    
    if(input.length == 2)
        resultado += "/";
    else if(input.length == 5)
        resultado += "/";
    else if(input.length == 10)
        return false;
    
    document.getElementById(id).value = resultado;
    
}