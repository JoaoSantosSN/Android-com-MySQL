<?php
    // Conecta com o banco
    $conn = new PDO("mysql:host=localhost;dbname=wine", "root", "");
    // Ativa a depuracao de erros:
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recebe os GETs 
    $id     = $_GET['id'];
    $nome   = $_GET['nome'];
    $origem = $_GET['origem'];
    $tipo   = $_GET['tipo'];
    $nota   = $_GET['nota'];

    // Cria uma query(Comando SQL)
    $query = $conn->prepare("UPDATE avaliacao SET nome='". $nome ."',  origem='". $origem ."', tipo='". $tipo ."', nota=". $nota." WHERE id=".$id);

    // Executa comando
    $query->execute();
?>