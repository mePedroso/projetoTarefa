<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

    <div class="container">

        <div class="container_titulo">
            <h1 class="titulo_principal"> Cadastre uma nova tarefa! </h1>
        </div> <!-- end container_titulo -->

        <div class="form_container">
            <form name="dados" action="../php/exec_cadastrar.php" method="POST" enctype="multipart/form-data">

                <p class="texto_nome_da_tarefa_e_tarefa">Nome da Tarefa</p>
                <input class="caixa_de_texto_tarefa" type="text" name="nomeDaTarefa" placeholder="   Nome do projeto" /> <br /> <br />

                <p class="texto_nome_da_tarefa_e_tarefa">Tarefa</p>
                <input class="caixa_de_texto_tarefa" type="text" name="tarefa" placeholder="   Digite aqui" /> <br /> <br />

                <!-- botao_de_confirmacao = action button -->
                <input class="botao_de_confirmacao" type="submit" name="btn" value="Cadastrar" />
            </form>
        </div> <!-- end form_container -->
        <br>

        <!-- Links de navegação para a aba Atualizar e Excluir -->
        <div class="container_botoes">
            <a href="form_atualizar.php"><button class="link_atualizar">Atualizar Tarefa</button></a>
        </div>
        <br>
        <div class="container_botoes">
            <a href="form_excluir.php"><button class="link_excluir">Excluir Tarefa</button></a>
        </div> <!-- end container_botoes -->



        <!-- PHP source -->
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