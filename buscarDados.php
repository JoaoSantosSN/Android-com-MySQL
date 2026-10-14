<?php
    // Conecta com o banco
    $conn = new PDO("mysql:host=localhost;dbname=wine", "root", "");
    // Ativa a depuracao de erros:
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cria uma query(Comando SQL)
    $query = $conn->query("SELECT * FROM avaliacao ORDER BY nome");

    // Cria um array
    $stringJSON = array();

    // Gera um JSON apartir do resultado da query
    while($i = $query->fetch()){
        $stringJSON[]=$i;
    }

    // Gera um JSON apartir do resultado da query
    $arrayJSON = json_encode($stringJSON, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    // Imprime o array
    echo $arrayJSON;
?>