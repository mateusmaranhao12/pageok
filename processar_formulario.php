<?php
require 'conexao.php'; // Importa a conexão com o banco

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? '';
    $whatsapp = $_POST['whatsapp'] ?? '';
    $email = $_POST['email'] ?? '';
    $confirmacao = isset($_POST['confirmacao']) ? 1 : 0; // Verifica se foi marcado

    if (!preg_match('/^\d{10,11}$/', $whatsapp)) {
        header('Location: index.php?mensagem=erro_whatsapp#formulario');
        exit();
    }

    if (!empty($nome) && !empty($whatsapp) && !empty($email)) {
        try {
            $stmt = $pdo->prepare('INSERT INTO cadastro_clientes (nome, whatsapp, email, confirmacao) VALUES (:nome, :whatsapp, :email, :confirmacao)');
            $stmt->execute([
                ':nome' => $nome,
                ':whatsapp' => $whatsapp,
                ':email' => $email,
                ':confirmacao' => $confirmacao
            ]);

            // Redireciona com mensagem de sucesso
            header('Location: index.php?mensagem=sucesso');
            exit();
        } catch (PDOException $e) {
            die('Erro ao cadastrar: ' . $e->getMessage());
        }
    } else {
        header('Location: index.php?mensagem=erro');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
