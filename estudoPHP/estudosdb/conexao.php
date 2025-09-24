<?php
// Teste de conexão PDO

define('HOST', 'localhost');
define('PORT', '3306'); // só especifica a porta se for necessario.
define('DBNAME', 'sakila');
define('USER', 'root');
define('PASSWORD', '1234');

// try {
//     $pdo = new PDO('sqlite::memory:');
//     echo "✅ PDO SQLite funcionando!\n";
// } catch (PDOException $e) {
//     echo "❌ Erro PDO SQLite: " . $e->getMessage() . "\n";
// }

// Teste específico para MySQL
try {
    $dsn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USER, PASSWORD);
    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "❌ Erro: " . $e->getMessage() . "\n";
    return null;
}

// Teste específico para PostgreSQL
// try {
//     $dsn = new PDO("pgsql:host=" . HOST . ";dbname=" . DBNAME, USER, PASSWORD/*, array(PDO::ATTR_PERSISTENT => true)*/); //caso queira manter uma conexao persistente
//     echo "✅ PDO PostgreSQL funcionando!\n";
//     return $dsn;
// } catch (PDOException $e) {
//     echo "ℹ️  PDO PostgreSQL não configurado: " . $e->getMessage() . "\n";
//     return null;
// }

// Mostra drivers disponíveis
//echo "Drivers disponíveis: " . implode(", ", PDO::getAvailableDrivers()) . "\n";
//encerra a conexao
//$dsn = null;
?>