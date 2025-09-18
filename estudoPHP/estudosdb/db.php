<?php
// Teste de conexão PDO
try {
    // Teste com SQLite (funciona sem configuração adicional)
    $pdo = new PDO('sqlite::memory:');
    echo "✅ PDO SQLite funcionando!\n";

} catch (PDOException $e) {
    echo "❌ Erro PDO: " . $e->getMessage() . "\n";
}

// Teste específico para MySQL (se instalado)
try {
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '1234');
    echo "✅ PDO MySQL funcionando!\n";
} catch (PDOException $e) {
    echo "ℹ️  PDO MySQL não configurado (esperado): " . $e->getMessage() . "\n";
}

try {
    $pdo = new PDO('pgsql:host=localhost;dbname=test', 'root', '1234');
    echo "✅ PDO PostgreSQL funcionando!\n";
} catch (PDOException $e) {
    echo "ℹ️  PDO PostgreSQL não configurado (esperado): " . $e->getMessage() . "\n";
}

// Mostra drivers disponíveis
echo "Drivers disponíveis: " . implode(", ", PDO::getAvailableDrivers()) . "\n";
