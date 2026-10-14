<?php
    // Conecta com o banco
    $conn = new PDO("mysql:host=localhost;dbname=wine", "root", "");
    // Ativa a depuracao de erros:
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recebe o GET
    $id     = $_GET['id'];
    // Cria uma query(Comando SQL)
    $query = $conn->prepare("DELETE FROM avaliacao WHERE id=". $id);

    // Executa comando
    $query->execute();
?>