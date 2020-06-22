<?php

    function conexaoMysql(){
        $server = (string) "localhost";
        $user = (string) "root";
        $password = (string) "bcd127";
        $database = (string) "db_maktub_seguros";

        $conexao = mysqli_connect($server, $user, $password, $database);

        return $conexao;
    }


?>