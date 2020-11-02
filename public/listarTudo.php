<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista Completa</title>
    </head>
    <body>
        <h1>Lista completa de atletas</h1>
        <table border="2px">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Altura</th>
                <th>Peso</th>
                <th>Deletar</th>
            </tr>
            <?php 
                require_once "../model/atletaDao.php";
                require_once "../model/atleta.php";
                require_once "../db/conexao.php";

                $conexao = new Conexao();
                $atletaDao = new AtletaDao($conexao);

                $atletas = $atletaDao->listarTudo();
                foreach($atletas as $key => $atleta){
                    echo "<tr>";
                    echo "<td>" . $atleta->__get('id') . "</td>";
                    echo "<td>" . $atleta->__get('nome') . "</td>";
                    echo "<td>" . $atleta->__get('idade') . "</td>";
                    echo "<td>" . $atleta->__get('altura') . "</td>";
                    echo "<td>" . $atleta->__get('peso') . "</td>";
                ?>
                    <td><a href="deletarAtleta.php?id=<?= $atleta->__get('id')?>"><strong>X</strong></a></td>
                <?php
                    echo "</tr>";
                }
            ?>
        </table>
       
        <p><a href="inicio.php">Home</a></p>
        <p><a href="cadastrarAtleta.php">Inserir novo Atleta</a></p>
    </body>
</html>