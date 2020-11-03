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
            <form action="inserirAtleta.php" method=post>
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
        <p><a href="index.php">Home</a></p>
       
    </body>
</html>