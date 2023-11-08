
<?php 
    require_once('conectar.php');

    $cod=  $_POST['cod'];
    $nomeDaTarefa=  $_POST['nomeDaTarefa'];

    $sql="DELETE FROM cadastro WHERE codigo = '$cod'";

    mysqli_query($conexao, $sql) or die(mysqli_connect_error());

    $msg = urlencode("Tarefa excluída com sucesso!!");

    header("location:../php/form_excluir.php?retorno=$msg");
?> 