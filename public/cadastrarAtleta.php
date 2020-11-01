<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastar</title>
    </head>
    <body>
        <h1>Cadastro de Atletas</h1>
        <section class=form>
            <form action="cadastrarAtleta.php" method=GET>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade">
                <label for="peso">Peso:</label>
                <input type="text" name="peso" id="peso">
                <label for="altura">Altura</label>
                <input type="text" name="altura" id="altura">

                <input type="submit" value="Cadastrar">
            </form>
        </section>

        <?php 
            require_once "../model/atleta.php";
            require_once "../model/atletaDao.php";
            require_once "../db/conexao.php";
            require_once "../utils/resultadoPesquisa.php";

            $conexao = new Conexao();
            $atletaDao = new AtletaDao($conexao);
            $listaCompleta = new Recursos();

            $nome = $_GET['nome'];
            $idade = $_GET['idade'];
            $peso = $_GET['peso'];
            $altura = $_GET['altura'];



            $atleta = new Atleta($nome, $idade, $altura, $peso);
            

            $atletaDao->cadastrar($atleta);

            $atletas = $atletaDao->listarTudo();
            $listaCompleta->tabelaAtletas($atletas);
            
            // echo "<pre>";
            // print_r($atletas);
            // echo "</pre>";


        ?>

    </body>
</html>