<html>

<head>
    <meta charset="UTF-8">
    <title>Tarefas</title>

    <link rel="stylesheet" type="text/css" href="../css/form_atualizar.css">
</head>

    <body>
        <div class="container">
                
            <div class="container_titulo">
                <h1 class="titulo_principal">Atualizar Tarefas</h1>
            </div>

            <div class="phpS"> 
            <?php 
            require_once('./conectar.php');

            $sql = "SELECT * FROM cadastro";
            $res = mysqli_query($conexao, $sql) or die(mysqli_connect_error());
            $num = mysqli_num_rows($res);

            while ($linha = mysqli_fetch_row($res)) {
                $cod = $linha[0];
                echo "Nome da Tarefa:" . $linha[2] . ' - ';
                echo "Tarefa: " . $linha[1] . ' - ';
                echo "<a class='link_atualizar_action' href='form_atualizar_dois.php? cod=$cod && tarefa=$linha[1] && nomeDaTarefa=$linha[2]'> Atualizar <br></a> ";
                echo "<br />";
            } ?>
            </div>

            <div class="container_botoes">
            <a href="form_cadastrar.php"><button class="link_cadastrar">Cadastrar Tarefa</button></a> <!-- link button -->
        </div>

        <br>

        <div class="container_botoes">
            <a href="form_excluir.php"><button class="link_excluir">Excluir Tarefa</button></a> <!-- link button -->
        </div>
    </body>
</html>