<?php
// Teste de conexão PDO

define('HOST', 'localhost');
define('PORT', '5432'); // só especifica a porta se for necessario.
define('DBNAME', 'test');
define('USER', 'root');
define('PASSWORD', '1234');

try {
    $pdo = new PDO('sqlite::memory:');
    echo "✅ PDO SQLite funcionando!\n";
} catch (PDOException $e) {
    echo "❌ Erro PDO SQLite: " . $e->getMessage() . "\n";
}

// Teste específico para MySQL
try {
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USER, PASSWORD);
    echo "✅ PDO MySQL funcionando!\n";
} catch (PDOException $e) {
    echo "ℹ️  PDO MySQL não configurado: " . $e->getMessage() . "\n";
}

// Teste específico para PostgreSQL
try {
    $pdo = new PDO("pgsql:host=" . HOST . ";dbname=" . DBNAME, USER, PASSWORD/*, array(PDO::ATTR_PERSISTENT => true)*/); //caso queira manter uma conexao persistente
    echo "✅ PDO PostgreSQL funcionando!\n";
} catch (PDOException $e) {
    echo "ℹ️  PDO PostgreSQL não configurado: " . $e->getMessage() . "\n";
}

// Mostra drivers disponíveis
echo "Drivers disponíveis: " . implode(", ", PDO::getAvailableDrivers()) . "\n";
//encerra a conexao
$pdo = null;
?>