<?php

require_once("conexao.php");

// 👇 Recebe a conexão do arquivo conexao.php

$instrucaoSQL = "SELECT * FROM actor LIMIT 5";
;

try {

    $resultSet = $dsn->query($instrucaoSQL);

    $resultados = $resultSet->fetchAll(PDO::FETCH_ASSOC);

    echo "Resultados:\n";
    print_r($resultados);
    //code...
} catch (PDOException $e) {
    echo "❌ Erro na consulta: " . $e->getMessage() . "\n";
    //throw $th;
}