<?php
    // Conecta com o banco
    $conn = new PDO("mysql:host=localhost;dbname=wine", "root", "");
    // Ativa a depuracao de erros:
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recebe os GETs 
    $nome   = $_GET['nome'];
    $origem = $_GET['origem'];
    $tipo   = $_GET['tipo'];
    $nota   = $_GET['nota'];

    // Cria uma query(Comando SQL)
    $query = $conn->prepare("INSERT INTO avaliacao (nome, origem, tipo, nota) 
    VALUES ('". $nome ."', '". $origem ."', '". $tipo ."', ". $nota .")" );

    // Executa comando
    $query->execute();
?>