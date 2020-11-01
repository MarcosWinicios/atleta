<?php 
    require_once "../model/atleta.php";
    require_once "../model/atletaDao.php";
    require_once "../db/conexao.php";

    $conexao = new Conexao();
    $atletaDao = new AtletaDao($conexao);

    //Teste Listar todos os Atletas
    echo "<h2>Listar Tudo</h2>";

    $atletas = $atletaDao->listarTudo();
    echo "<pre>";
    print_r($atletas);
    echo "</pre>";

    echo "<h2>Busca Aproximada</h2>";

    //Teste pesquisar por nome

    $atleta = $atletaDao->pesquisarNomeAprox("M");
    echo "<pre>";
    print_r($atleta);
    echo "</pre>";

    //Deletar Atleta
    echo "<h2>Deletar Atleta</h2>";
    $at = $atletaDao->pesquisarNomeAprox('Pedro');
    // $atletaDao->deletar($at);

    $atletas2 = $atletaDao->listarTudo();
    echo "<pre>";
    print_r($atletas2);
    echo "</pre>";

    //Cadastrar Atleta
    echo "<h2>Cadastrar Atleta</h2>";

    $a = new Atleta('Carlos', 22, 1.70, 78.050);
   
    $atletaDao->cadastrar($a);
    
    $atletas3 = $atletaDao->listarTudo();
    echo "<pre>";
    print_r($atletas3);
    echo "</pre>";
    

?>