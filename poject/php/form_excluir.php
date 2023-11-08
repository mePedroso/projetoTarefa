<html>

<head>
    <meta charset="UTF-8">
    <title>Tarefas</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="container">

        <div class="container_titulo">
            <h1 class="titulo_principal"> Excluir Tarefas </h1>
        </div>

        <div class="class phpS">
            <!-- PHP source -->
            <?php
            require_once('conectar.php');

            $sql = "SELECT * FROM cadastro";
            $res = mysqli_query($conexao, $sql) or die(mysqli_connect_error());

            while ($linha = mysqli_fetch_row($res)) {
                $cod = $linha[0];
                echo "Nome da Tarefa: " . $linha[2] . ' - '; //mostra a tarefa
                echo "<a class='link_atualizar_action' href='form_excluir.php?cod=$cod&&tarefa=$linha[2]'> Excluir <br></a> ";
                echo "<br />";
                echo "<br />";
            }
            ?>
        </div>


        <div class="form_container">
            <form name="dados" action="../php/exec_excluir.php" method="POST">

                <input type="hidden" name="cod" value="<?php if (isset($_GET['cod'])) echo $_GET['cod'] ?>" />

                <p class="texto_nome_da_tarefa_e_tarefa">Confirma exclusão do registro ?</p> <input class="caixa_de_texto_tarefa" type="text" name="tarefa" readonly value="<?php if (isset($_GET['tarefa'])) echo $_GET['tarefa'] ?>" />

                <br /> <br />

                <input class="botao_de_confirmacao" type="submit" name="excluir" value="Excluir" />
            </form>
        </div>

        <br>

        <div class="container_botoes">
            <a href="form_atualizar.php"><button class="link_atualizar">Atualizar</button></a>
        </div>

        <br>

        <div class="container_botoes">
            <a href="form_cadastrar.php"><button class="link_cadastrar">Cadastrar</button></a>
        </div>

        <!-- PHP source -->
        <?php

        if (isset($_GET['retorno'])) {
            $msg = $_GET['retorno'];
            echo "<br />";
            echo "<font face='Arial' size='6' color='#38B6FF'>";
            echo $msg;
            $msg = "";
            echo "</font>";
        }
        ?>
    </div>
</body>

</html>