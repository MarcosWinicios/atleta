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
            <input type="search" name="nome" required placeholder="Digite o nome do atleta" id="nome">
            <input type="submit" value="Pesquisar">
        </form>

        <br><br>

        <?php 
            if(isset($_GET['nome'])){
                require_once "../db/conexao.php";
                require_once "../model/atletaDao.php";
                
                $conexao = new Conexao();
                $atletaDao = new AtletaDao($conexao);
                
                $atletas = $atletaDao->pesquisarNomeAprox($_GET['nome']);                
                ?>
        <h4>Resultados:</h4>
        <table border="2">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Deletar</th>
            </tr>
            <?php 
                foreach($atletas as $key => $atleta){
                    echo "<tr>";
                    echo "<td>" . $atleta->__get('id') . "</td>";
                    echo "<td>" . $atleta->__get('nome') . "</td>";
                    echo "<td>" . $atleta->__get('idade') . "</td>";
                    echo "<td>" . $atleta->__get('altura') . "</td>";
                    echo "<td>" . $atleta->__get('peso') . "</td>";
                    ?>
                        <td><a href="deletarAtleta.php?id=<?= $atleta->__get('id') ?>"><strong>X</strong></></td>
                        <?php 

                echo "</tr>";
                }
                ?>
            
        </table>
        
        <?php 
            }
        ?>
        
        <p><a href="index.php">Home</a></p>
        <p><a href="cadastrarAtleta.php">Inserir novo Atleta</a></p>
    </body>
    </html>