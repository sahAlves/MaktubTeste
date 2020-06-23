<?php


//Iniciando todas as variaveis de sessão
if(!isset($_SESSION))
session_start();


$status = (int) 0;
$precoUm = (double) 0.00;
$precoDois = (double) 0.00;
$precoTres = (double) 0.00;
$precoQuatro = (double) 0.00;
$precoCinco = (double) 0.00;
$precoSeis = (double) 0.00;
$precoSete = (double) 0.00;
$precoOito = (double) 0.00;
$precoNove = (double) 0.00;
$precoDez = (double) 0.00;
$precoIdades = (double) 0.00;
$precoModalidade = (double) 0.00;
$precoTotal = (double) 0.00;


    //Página de contato
    if(isset($_POST['btnContato'])){

        require_once('../bd/conexao.php');


        $conexao = conexaoMysql();

        $nome = $_POST['txt_nome'];
        $email = $_POST['txt_email'];
        $telefone_celular = $_POST['txt_telefone_celular'];
        $obs = $_POST['txt_obs'];

        $sql = "insert into tbl_contato(nome,email,telefone_celular,observacao) values ('".$nome."', '".$email."','".$telefone_celular."','".$obs."')";


        if(mysqli_query($conexao,$sql))
            header('location:../contato.php');
        else
            echo("Erro ao executar o script no banco");


    }


    //Pagina de simulação
    if(isset($_POST['idades'])){
        

        
        require_once('../bd/conexao.php');


        $conexao = conexaoMysql();

        

        //Checkbox

        if(array_key_exists('check_dezoito', $_POST)) {
            $zero_dezoito = 1;
        } else {
            $zero_dezoito = 0;
        }

        if(array_key_exists('check_dezenove_vintetres', $_POST)) {
            $dezenove_vintetres = 1;
        } else {
            $dezenove_vintetres = 0;
        }

        if(array_key_exists('check_vintequatro_vinteoito', $_POST)) {
            $vintequatro_vinteoito = 1;
        } else {
            $vintequatro_vinteoito = 0;
        }
        
        if(array_key_exists('check_vintenove_trintatres', $_POST)) {
            $vintenove_trintatres = 1;
        } else {
            $vintenove_trintatres = 0;
        }

        if(array_key_exists('check_trintaquatro_trintaoito', $_POST)) {
            $trintaquatro_trintaoito = 1;
        } else {
            $trintaquatro_trintaoito = 0;
        }

        if(array_key_exists('check_trintanove_quarentatres', $_POST)) {
            $trintanove_quarentatres = 1;
        } else {
            $trintanove_quarentatres = 0;
        }

        if(array_key_exists('check_quarentaquatro_quarentaoito', $_POST)) {
            $quarentaquatro_quarentaoito = 1;
        } else {
            $quarentaquatro_quarentaoito = 0;
        }

        if(array_key_exists('check_quarentanove_cinquentatres', $_POST)) {
            $quarentanove_cinquentatres = 1;
        } else {
            $quarentanove_cinquentatres = 0;
        }

        if(array_key_exists('check_cinquentaquatro_cinquentaoito', $_POST)) {
            $cinquentaquatro_cinquentaoito = 1;
        } else {
            $cinquentaquatro_cinquentaoito = 0;
        }
        
        if(array_key_exists('check_cinquentanove', $_POST)) {
            $cinquentanove = 1;
        } else {
            $cinquentanove = 0;
        }
        
            $oi = 'teste';
            if($zero_dezoito == 1){
                
                $sql = "select * from tbl_faixa_etaria where idade ='0-18'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoUm = $rsIdades['preco'];
            }
            if($dezenove_vintetres == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='19-23'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoDois = $rsIdades['preco'];
            }
            if($vintequatro_vinteoito == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='24-28'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoTres = $rsIdades['preco'];
            }
            if($vintenove_trintatres == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='29-33'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoQuatro= $rsIdades['preco'];
            }
            if($trintaquatro_trintaoito == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='34-38'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoCinco = $rsIdades['preco'];
            }
            if($trintanove_quarentatres == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='39-43'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoSeis = $rsIdades['preco'];
            }
            if($quarentaquatro_quarentaoito == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='44-48'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoSete= $rsIdades['preco'];
            }
            if($quarentanove_cinquentatres == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='49-53'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoOito = $rsIdades['preco'];
            }
            if($cinquentaquatro_cinquentaoito == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='54-58'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoNove = $rsIdades['preco'];
            }
            if($cinquentanove == 1){
                $sql = "select * from tbl_faixa_etaria where idade ='59 +'";

                $select = mysqli_query($conexao, $sql);

                $rsIdades = mysqli_fetch_array($select);

                $precoDez = $rsIdades['preco'];
            }

            $precoIdades = $precoUm + $precoDois + $precoTres + $precoQuatro + $precoCinco + $precoSeis + $precoSete + $precoOito + $precoNove + $precoDez;
            $_SESSION['precoIdades'] = $precoIdades;
            
            echo($_SESSION['precoIdades']);

            $status = 1;

            header('location:../simulacao.php?status=1');

        


    }



    if(isset($_POST['modalidade'])){
        require_once('../bd/conexao.php');


        $conexao = conexaoMysql();

        if(array_key_exists('check_enfermaria', $_POST)) {
            $enfermaria = 1;
        } else {
            $enfermaria = 0;
        }

        if(array_key_exists('check_apartamento', $_POST)) {
            $apartamento = 1;
        } else {
            $apartamento = 0;
        }

        if($enfermaria == 1){
            $_SESSION['modalidade'] = "Enfermaria";
        }else if($apartamento == 1){
            $_SESSION['modalidade'] = "Apartamento";
        }


        $status=2;
        header('location:../simulacao.php?status=2');


    }

    if(isset($_GET['operadora'])){
        if(isset($_GET['preco'])){
            $_SESSION['operadora'] = $_GET['operadora'];
            $_SESSION['preco'] = $_GET['preco'];


            header('location:../simulacao.php?status=3');

        }
    }

    $qlqr = $_POST;
    var_dump($_POST);

    if(isset($_POST['txt_nome_final'])){

        $qlqr = "true";

        require_once('../bd/conexao.php');

        // header('location:../index.php?');

        echo('<script>console.log("entrou");</script>');

        $conexao = conexaoMysql();


        $nome = $_POST['txt_nome_final'];
        $telefone_celular = $_POST['txt_telefone_celular'];

        $sql="insert into tbl_simulacao (nome, telefone_celular, operadora, modalidade, preco) values ('".$nome."','".$telefone_celular."','".$_SESSION['operadora']."','".$_SESSION['modalidade']."',".$_SESSION['preco'].")";

        echo($sql);

        if(mysqli_query($conexao,$sql)){
            session_destroy();
            header('location:../index.php');
        }   
        else{
            echo("Erro ao executar o script no banco");
        }
    }

    


?>