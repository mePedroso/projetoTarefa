<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/form_atualizar_dois.css">
</head>

<body>

    <div class="container">
        <div class="subtitulo_confirmacao">
            <h2> Altere os dados e clique Atualizar </h2>
        </div>

        <div class="form_container">
            <form name="dados" action="../php/exec_atualizar.php" method="POST">

                <input type="hidden" name="cod" value="<?php if (isset($_GET['cod'])) echo $_GET['cod'] ?>" />

                <!-- class -> texto_tarefa_e_nome_tarefa  -->
                <p class="texto_nome_da_tarefa_e_tarefa">Nome da tarefa</p>

                <input class="caixa_de_texto_tarefa" type="text" name="nomeDaTarefa" value="<?php if (isset($_GET['nomeDaTarefa'])) echo $_GET['nomeDaTarefa'] ?>" />

                <br>

                <p class="texto_nome_da_tarefa_e_tarefa">Tarefa</p>
                <input class="caixa_de_texto_tarefa" type="text" name="tarefa" value="<?php if (isset($_GET['tarefa'])) echo $_GET['tarefa'] ?>" />

                <br><br>

                <input class="botao_de_confirmacao" type="submit" name="sub" value="Atualizar"> <!-- action button -->
            </form>
        </div>

        <br>

        <div class="container_botoes">
            <a href="form_cadastrar.php"><button class="link_cadastrar">Cadastrar Tarefa</button></a> <!-- link button -->
        </div>

        <br>

        <div class="container_botoes">
            <a href="form_excluir.php"><button class="link_excluir">Excluir Tarefa</button></a> <!-- link button -->
        </div>



        <?php
        if (isset($_GET['retorno'])) {
            $msg = $_GET['retorno'];
            echo "<br />";
            echo "<font face='Arial' size='6' color='#38B6FF'>"; //style
            echo $msg;
            $msg = "";
            echo "</font>";
        }
        ?>

    </div> <!-- end container -->
</body>

</html>