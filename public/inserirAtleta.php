<?php
    require_once "../model/atleta.php";
    require_once "../model/atletaDao.php";
    require_once "../db/conexao.php";

    $conexao = new Conexao();

    $atletaDao = new AtletaDao($conexao);

    
    $atleta = new Atleta($_POST['nome'], $_POST['idade'], $_POST['altura'], $_POST['peso']);
    $atletaDao->cadastrar($atleta);

    header('Location: listarTudo.php');
?>