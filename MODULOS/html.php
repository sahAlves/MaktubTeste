<?php


    $card_faixa_etaria = "<div class='row justify-content-center'>
    <div class='col-md-7'>
        <div class='card'>
            <div class='card-header font-weight-bold'>
                Selecione as faixas de idade de quem utilizará o plano
            </div>
            <div class='card-body' style='padding-top: 30px;'>
                
            <form method='POST' action='MODULOS/inserir.php' name='frm_idades' id='form_checks'>
                    <div class='form-check form-check-inline'>
                        <input name='check_dezoito' class='form-check-input' type='checkbox' id='inlineCheckbox1' value='1'>
                        <label class='form-check-label' for='inlineCheckbox1'>00-18</label>
                    </div>
                    <div class='form-check form-check-inline'>
                        <input name='check_dezenove_vintetres' class='form-check-input' type='checkbox' id='inlineCheckbox2' value='1'>
                        <label class='form-check-label' for='inlineCheckbox2'>19-23</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input name='check_vintequatro_vinteoito' class='form-check-input' type='checkbox' id='inlineCheckbox3' value='1'>
                            <label class='form-check-label' for='inlineCheckbox3'>24-28</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input name='check_vintenove_trintatres' class='form-check-input' type='checkbox' id='inlineCheckbox4' value='1'>
                            <label class='form-check-label' for='inlineCheckbox4'>29-33</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input name='check_trintaquatro_trintaoito' class='form-check-input' type='checkbox' id='inlineCheckbox5' value='1'>
                            <label class='form-check-label' for='inlineCheckbox5'>34-38</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input name='check_trintanove_quarentatres' class='form-check-input' type='checkbox' id='inlineCheckbox6' value='1'>
                            <label class='form-check-label' for='inlineCheckbox6'>39-43</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input name='check_quarentaquatro_quarentaoito' class='form-check-input' type='checkbox' id='inlineCheckbox7' value='1'>
                            <label class='form-check-label' for='inlineCheckbox7'>44-48</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input name='check_quarentanove_cinquentatres' class='form-check-input' type='checkbox' id='inlineCheckbox8' value='1'>
                            <label class='form-check-label' for='inlineCheckbox8'>49-53</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input name='check_cinquentaquatro_cinquentaoito' class='form-check-input' type='checkbox' id='inlineCheckbox9' value='1'>
                            <label class='form-check-label' for='inlineCheckbox9'>54-58</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input name='check_cinquentanove' class='form-check-input' type='checkbox' id='inlineCheckbox10' value='1'>
                            <label class='form-check-label' for='inlineCheckbox10'>59 +</label>
                    </div>
                    <br>
                    <button name='btnIdade' id='btn_idade' type='submit' class='btn btn-primary btn-proximos'>Próximo</button>
                </form>
                
            </div>
        </div>
    </div>
</div>";


    $card_modalidades = "<div class='row justify-content-center'>
    <div class='col-md-7'>
        <div class='card'>
            <div class='card-header font-weight-bold'>
                Selecione qual modalidade você prefere
            </div>
            <div class='card-body' style='padding-top: 50px;'>
                
                <form action='MODULOS/inserir.php' method='POST'>
                    <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='checkbox' name='check_enfermaria' id='inlineCheckbox9' value='enfermaria'>
                            <label class='form-check-label' for='inlineCheckbox9'>Enfermaria</label>
                    </div>
                    <div class='form-check form-check-inline'>
                            <input class='form-check-input' type='checkbox' name='check_apartamento' id='inlineCheckbox10' value='apartamento'>
                            <label class='form-check-label' for='inlineCheckbox10'>Apartamento</label>
                    </div>
                    <br>
                    <button type='submit' name='btn_modalidades' class='btn btn-primary btn-proximos'>Próximo</button>
                </form>
                
            </div>
        </div>
    </div>
</div>";



$card_dados_usuario = "<div class='row justify-content-center'>
<div class='col-md-7'>
    <div class='card'>
        <div class='card-header font-weight-bold'>
           Insira seus dados
        </div>
        <div class='card-body' style='padding-top: 50px;'>
            
            <form action='MODULOS/inserir.php' method='POST'>
                    <div class='form-group'>
                        <input type='text' id='nome' name='txt_nome' class='form-control' placeholder='Nome' onkeypress='return validarEntrada(event,'numeric');' required>
                    </div>
                    <div class='form-group'>
                        <input type='text' id='cel_tel' name='txt_telefone_celular' class='form-control' placeholder='Telefone/Celular' onkeypress='return mascaraCel(this,event);' required>
                    </div>
                <button type='submit' name='btnDados' class='btn btn-primary btn-proximos' data-toggle='modal' data-target='#ExemploModalCentralizado'>Enviar</button>
            </form>
            
        </div>
    </div>
</div>
</div>

<!-- Modal -->

<div class='modal fade' id='ExemploModalCentralizado' tabindex='-1' role='dialog' aria-labelledby='TituloModalCentralizado' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
    <div class='modal-header'>
        <h5 class='modal-title' id='TituloModalCentralizado'>Parabéns pela escolha!</h5>
        <a href='simulacao.php'><button type='button' class='close' data-dismiss='modal' aria-label='Fechar'></a>
        <span aria-hidden='true'>&times;</span>
        </button>
    </div>
    <div class='modal-body'>
        <p class='text-center'>
            Em breve um de nossos corretores entrará em contato.
        </p>
    </div>
    <div class='modal-footer'>
    <a href='simulacao.php'><button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button></a>
    </div>
    </div>
</div>
</div>";

?>