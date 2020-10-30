<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista Completa</title>
    </head>
    <body>
        <h1>Lista completa de atlestas</h1>
            <?php 
                require_once "../model/atletaDao.php";
                require_once "../model/atleta.php";
                require_once "../db/conexao.php";
                require_once "../utils/resultadoPesquisa.php";

                $conexao = new Conexao();
                $atletaDao = new AtletaDao($conexao);
                $resultado = new Recursos();

                $atletas = $atletaDao->listarTudo();
                $resultado->tabelaAtletas($atletas);                
            ?>
            
        </table>
    </body>
</html>