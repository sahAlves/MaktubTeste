<?php

    //Importando conexão com o banco de dados
    require_once('bd/conexao.php');
    require_once('MODULOS/html.php');


    $precoModalidade = (double) 0.00;

    if(!isset($_SESSION))
        session_start();

$status = (int) 0;
    if(isset($_GET['status'])){
        $status = $_GET['status'];
    }
    

?>


<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title> Maktub Seguros - Simulação</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" href="https://www.maktubseguros.com.br/wp-content/uploads/2020/01/cropped-simbolo-192x192.png">
        <script src="Jquery/jquery.js" type="text/javascript"></script>


        <script type="text/javascript">
            $(document).ready(function(){

                $('#btn_idade').click(function(){
                    
                    let isChecked = false;

                    $('.form-check-input').each(function(){

                        if($(this).is(':checked')){
                            isChecked = true;
                        }

                    });

                    if(!isChecked){
                       alert('Selecione pelo menos uma faixa etária!'); 
                    }else{
                        $('#form_checks').submit();
                    }   

                });

                $('#btnModalidades').click(function(){
                    
                    let checados = 0;

                    $('.form-check-input').each(function(){

                        if($(this).is(':checked')){
                            checados += 1;
                        }

                    });

                    if(checados == 0){
                       alert('Selecione uma modalidade!'); 
                    }else if(checados == 2){
                        alert('Selecione apenas uma modalidade!'); 
                    }else{
                        $('#form_mods').submit();
                    }

                });

                $('#form_final').submit(function(e){
                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'MODULOS/inserir.php',
                        data: new FormData($('#form_final')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        async: true,
                        success: function(data){
                            $('#container_modal_lazarus').fadeIn(1000);
                            $('#ExemploModalCentralizado').removeClass('modal_lazarus');
                            $('#ExemploModalCentralizado').addClass('modal_block show');
                        }
                    });
                });

                $('#fechar_modal').click(function(){
                    $('#container_modal_lazarus').fadeOut(1000);
                });

                $('#btn_modal').click(function(){
                    $('#container_modal_lazarus').fadeOut(1000);
                });

                $('#container_modal_lazarus').click(function(){
                    $('#container_modal_lazarus').fadeOut(1000);
                });


            });
        </script>


    </head>

    <body>

    
            
<div id="container_modal_lazarus">

<!-- Modal -->

<div class="modal_lazarus fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado" style="color:#177cb3;">Parabéns pela escolha!</h5>
        <a href="index.php"><button type="button" id="fechar_modal" class="close" data-dismiss="modal" aria-label="Fechar"></a>
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <p class="text-center">
            Em breve um de nossos corretores entrará em contato.
        </p>
    </div>
    <div class="modal-footer">
    <a href="index.php"><button type="button" id="btn_modal" class="btn btn-secondary" data-dismiss="modal">Fechar</button></a>
    </div>
    </div>
</div>
</div>


</div>

        <!-- Navbar -->
        <nav class="navbar zindex navbar-expand-lg navbar-light fixed-top shadow-sm p-3 mb-5 bg-white rounded">

            <div class="container">
                <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_360,h_120/https://www.maktubseguros.com.br/wp-content/uploads/2020/01/cropped-0404-Logo-1.png" width="200" height="60" alt="Maktub Seguros" loading="lazy">
            </a>

            <!-- Menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item font-weight-bold" style="color:#14ccc6;">
                    <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item font-weight-bold" style="color:#14ccc6;">
                    <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item font-weight-bold" style="color:#14ccc6;">
                    <a class="nav-link" href="sobrenos.php">Sobre Nós</a>
                    </li>
                    <li class="nav-item font-weight-bold" style="color:#14ccc6;">
                        <a class="nav-link" href="suporte.php">Suporte</a>
                    </li>
                </ul>
            </div>
            </div>

        </nav>


        <!-- titulo -->

        <section id="section_simulacao">
            <div class="container">
                <h1 style="margin-bottom: 50px;">Simulação do seu plano</h1>
                
                    <?php
                        if($status == 0){
                    ?>
                    <?=$card_faixa_etaria?>

                    <?php
                        }
                        if($status == 1){
                    ?>        
                    <?=$card_modalidades?>

                    <?php
                        }
                        if($status == 2){
                    ?>              
                        <div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header font-weight-bold">
                Selecione um plano
            </div>
            <div class="card-body d-flex flex-row flex-wrap" style="padding-top: 50px;">
                <?php
                
                $conexao = conexaoMysql();

                $sql = "select * from tbl_operadora";
             
                $select = mysqli_query($conexao, $sql);
    
                while($rsPlanos = mysqli_fetch_array($select)){


                    if($_SESSION['modalidade'] == "Enfermaria"){
                        $precoModalidade = $rsPlanos['preco_enfermaria'];
                    }else if($_SESSION['modalidade'] == "Apartamento"){
                        $precoModalidade = $rsPlanos['preco_apartamento'];
                    }
    

                    $precoTotal = $_SESSION['precoIdades'] + $precoModalidade;
    
                
                ?>
                    <div class="card bg-light card-planos">
                            <img class="card-img-top" src="imgs/<?=$rsPlanos['nome']?>.png" alt="<?=$rsPlanos['nome']?>">
                            <ul class="list-group list-group-flush" style="margin-top: 30px;">
                              <li class="list-group-item"><?=$_SESSION['modalidade']?></li>
                            </ul>
                            <div class="card-body">

                                <?php
                                    $_SESSION['operadora'] = $rsPlanos['nome'];
                                    $_SESSION['preco'] = $precoTotal;
                                ?>

                                <a href="MODULOS/inserir.php?status=3&operadora=<?=$rsPlanos['nome']?>&preco=<?=$precoTotal?>"><button type="submit" class="btn btn-primary btn-planos">R$<?=$precoTotal?></button></a>
                            </div>
                    </div>

                    <?php

                        }
                    ?>

                          
                
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        if($status == 3){
                    ?>   
                    <?=$card_dados_usuario?>  
                    <?php
                        }
                    ?>     

                
            </div>
        </section>


                <!-- Rodapé -->

                <footer class="zindex">
            <div class="container h-100">
                <div class="row h-100">
                    <!-- Menus -->
                    <div class="col-md-4">
                            <div class="row d-flex justify-content-center" style="padding-top: 30px;">
                                <div class="col-4 d-flex justify-content-center">
                                    <a href="contato.php">
                                    <p class="font-weight-bold" style="color: black;">Contato</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-4 d-flex justify-content-center">
                                <a href="sobrenos.php">
                                    <p class="font-weight-bold" style="color: black;">Sobre Nós</p>
                                    </a>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-4 d-flex justify-content-center">
                                <a href="suporte.php">
                                    <p class="font-weight-bold" style="color: black;">Suporte</p>
                                    </a>
                                </div>
                            </div>    
                    </div>
                    <!-- Contatos -->
                    <div class="col-md-4" style="padding-top: 30px;">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 col-lg-2 col-xl-2 d-flex justify-content-center">
                                        <img src="imgs/iconPhone.png" alt="Telefone" class="icon-footer">
                                </div>
                                <div class="col-md-10 col-sm-12 col-lg-10 col-xl-10 d-flex justify-content-center">
                                        <p class="text-center">(11) 3619-3309</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 d-flex justify-content-center">
                                    <img src="imgs/iconEmail.png" alt="Email" class="icon-footer">
                                </div>
                                <div class="col-md-10 text-nowrap d-flex justify-content-center">
                                    <p class="text-center"><small>contato@maktubseguros.com.br</small></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 d-flex justify-content-center" style="padding-top: 10px;">
                                    <img src="imgs/iconEndereco.png" alt="Endereço" class="icon-footer">
                                </div>
                                <div class="col-md-10 d-flex justify-content-center">
                                    <p class="text-center"><small>Rua Robert Bosch, 544 - Parque Industrial Tomas Edson, São Paulo - SP, 01141-010</small></p>
                                </div>
                            </div>      
                    </div>
                    <!-- Redes Sociais -->
                    <div class="col-md-4" style="padding-top: 80px;">
                            <div class="row" style="padding-left: 50px; padding-right: 50px;">
                                <div class="col-md-3 d-flex justify-content-center" id="row-sociais">
                                    <a href="https://www.facebook.com/maktubseguro/">
                                    <img src="imgs/iconFb.png" alt="Facebook" class="icon-sociais">
                                    </a>    
                                </div>
                                <div class="col-md-3 d-flex justify-content-center" id="row-sociais">
                                    <a href="https://www.instagram.com/maktubseguros/">
                                    <img src="imgs/iconInsta.png" alt="Instagram" class="icon-sociais">
                                    </a>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center" id="row-sociais">
                                     <a href="https://api.whatsapp.com/send?phone=5511992059207&text=Ol%C3%A1,%20gostaria%20de%20falar%20com%20um%20consultor">
                                     <img src="imgs/iconWpp.png" alt="Whatsapp" class="icon-sociais" >
                                     </a>   
                                </div>
                                <div class="col-md-3 d-flex justify-content-center" id="row-sociais">
                                     <a href="https://www.linkedin.com/company/maktub-seguros/about/">
                                     <img src="imgs/iconLinkedin.png" alt="Linkedin" class="icon-sociais">
                                     </a>   
                                </div>
                            </div>
                    </div>    
                </div>
            </div>
        </footer>


        <!--JS Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/maktub.js"></script>
    </body>

</html>