<?php
/*$host = '127.0.0.1';
$dbname = 'pageok';
$usuario = 'root';
$senha = '';*/

$host = 'sql200.infinityfree.com'; // O host do MySQL que o InfinityFree forneceu
$dbname = 'if0_38211464_pageok_db'; // O nome do banco de dados (geralmente é prefixado pelo usuário)
$usuario = 'if0_38211464'; // O nome de usuário do MySQL fornecido pelo InfinityFree
$senha = 'CjOWtScApw2N'; // A senha do MySQL (verifique no painel do InfinityFree)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
}
?>
