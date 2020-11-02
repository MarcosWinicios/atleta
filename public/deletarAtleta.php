<?php 
    require_once "../db/conexao.php";
    require_once "../model/atletaDao.php";

    $conexao = new Conexao();
    $atletaDao =  new AtletaDao($conexao);

    $atleta = $atletaDao->pesquisarId($_GET['id']);
    $atletaDao->deletar($atleta);

    header("Location: listarTudo.php");
?>