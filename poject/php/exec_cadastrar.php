<?php
    require_once('./conectar.php');

    $varTarefa = $_POST['tarefa'];
    $varNomeDaTarefa = $_POST['nomeDaTarefa'];

    $sql= "INSERT INTO cadastro (tarefa, nomeDaTarefa) VALUES ('$varTarefa','$varNomeDaTarefa')";

    mysqli_query($conexao, $sql) or die (mysqli_connect_error());

    $ultimocod=mysqli_insert_id($conexao);
 
    $msg= urlencode('Tarefa Cadastrada com Sucesso!');

    header("location:./form_cadastrar.php?retorno=$msg");
?>
