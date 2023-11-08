<?php

    //Declarando variaveis 
    $ip='localhost';
    $usuario='root';
    $senha=''; //vazio, pois não tem senha
    $bd='tarefas';

    // comando pra conectar o banco mysql
    $conexao = mysqli_connect("$ip", "$usuario", "$senha", "$bd");
    mysqli_query($conexao, "set NAMES utf8;");

?>
