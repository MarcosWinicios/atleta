<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesquisar Atleta</title>
    </head>
    <body>
        <h1>Pesquisar Atleta</h1>
        
        <form action="pesquisarAtleta.php" method="get">
            <label for="nome">Nome:</label>
            <input type="search" name="nome" placeholder="Digite o nome do atleta" id="nome">
            <input type="submit" value="Pesquisar">
        </form>

        <br><br>

        <?php 

            require_once "../db/conexao.php";
            require_once "../model/atleta.php";
            require_once "../model/atletaDao.php";
            require_once "../utils/resultadoPesquisa.php";

            $conexao = new Conexao();
            $atletaDao = new AtletaDao($conexao);
            $resultado = new Recursos();

            $nome = $_GET['nome'];

            if($nome != ""){

                $atletas = $atletaDao->pesquisarNomeAprox($nome);
                $resultado->tabelaAtletas($atletas);
            }
          

        ?>
        <p><a href="inicio.php">Home</a></p>
        <p><a href="cadastrarAtleta.php">Inserir novo Atleta</a></p>
    </body>
</html>