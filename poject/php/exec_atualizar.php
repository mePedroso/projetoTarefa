<?php 
    require_once('./conectar.php');

    $cod=  $_POST['cod'];
    $tarefa=  $_POST['tarefa'];
    $nomeDaTarefa=  $_POST['nomeDaTarefa'];

    $sql="UPDATE cadastro SET tarefa = '$tarefa', nomeDaTarefa = '$nomeDaTarefa' WHERE codigo = '$cod'";

    mysqli_query($conexao, $sql) or die(mysqli_connect_error());

    $msg = urlencode("Registro atualizado com sucesso!!");

    header("location:../php/form_atualizar_dois.php?retorno=$msg");
