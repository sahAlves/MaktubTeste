<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title> Maktub Seguros - Suporte</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" href="https://www.maktubseguros.com.br/wp-content/uploads/2020/01/cropped-simbolo-192x192.png">
    </head>

    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm p-3 mb-5 bg-white rounded">

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
                    <li class="nav-item active font-weight-bold" style="color:#14ccc6;">
                        <a class="nav-link" href="suporte.php">Suporte</a>
                    </li>
                </ul>
            </div>
            </div>

        </nav>

        <section id="section-suporte">
            <div style="width: inherit; height: inherit;  background-color: rgba(0,0,0,0.5); padding-top:130px;padding-bottom: 50px;">
            <div class="container">
                <h1 style="margin-bottom: 40px; color:#14ccc6;">Suporte</h1>
                <div class="row" style="margin-bottom: 50px;">
                    <div class="col-md-12 d-flex justify-content-center">
                            <form class="form-inline my-12 my-lg-0" action="#" method="POST">
                                <input class="form-control mr-sm-2" name="txt_search" id="search" type="search" placeholder="Pesquisar..." aria-label="Pesquisar">
                                <div id="cont-img">
                                    <img src="imgs/iconSearch.png" alt="Procurar" id="img-search">
                                </div>
                                <button name="btn_pesquisar" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: #1450a4;color:#14ccc6;border: solid 0.5px #1450a4;">Pesquisar</button>
                            </form>
                    </div>
                </div>

                <?php

        if(isset($_POST['btn_pesquisar'])){

            require_once('bd/conexao.php');


            $conexao = conexaoMysql();

            $pesquisa = $_POST['txt_search'];

            $sql = "select * from tbl_suporte where pergunta like '%".$pesquisa."%'";

            $select = mysqli_query($conexao, $sql);

            while($rsSuporte = mysqli_fetch_array($select)){

                ?>

                <!-- Perguntas e Respostas -->
                
                <div class="row mgb-suporte">
                    <div class="col-md-12">
                        <div class="card card-bg">
                            <div class="card-header font-weight-bold" style="color:white;">
                                Pergunta: <?=$rsSuporte['pergunta']?>
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="color:white;">R: <?=$rsSuporte['resposta']?></p>
                            </div>
                        </div>
                    </div>
                </div>


            <?php    

            }
        }else{
            require_once('bd/conexao.php');


            $conexao = conexaoMysql();

            $sql = "select * from tbl_suporte";

            $select = mysqli_query($conexao, $sql);

            while($rsSuporte = mysqli_fetch_array($select)){

                ?>

                <!-- Perguntas e Respostas -->
                
                <div class="row mgb-suporte">
                    <div class="col-md-12">
                        <div class="card card-bg shadow p-3 mb-5 rounded">
                            <div class="card-header font-weight-bold" style="color:white;">
                                Pergunta: <?=$rsSuporte['pergunta']?>
                            </div>
                            <div class="card-body">
                                <p class="card-text" style="color:white;">R: <?=$rsSuporte['resposta']?></p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php    

            }    

        }   


        ?>

                
                
            </div>
            </div>
        </section>



        <!-- Rodapé -->

        <footer>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>