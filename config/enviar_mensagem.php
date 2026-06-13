<?php
header('Content-Type: application/json');

include 'conexao.php';

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome     = $conn->real_escape_string($_POST['nome']    ?? '');
    $email    = $conn->real_escape_string($_POST['email']   ?? '');
    $assunto  = $conn->real_escape_string($_POST['assunto'] ?? '');
    $mensagem = $conn->real_escape_string($_POST['mensagem'] ?? '');

    $sql = "INSERT INTO mensagens (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['sucesso' => true]);
    } else {
        echo json_encode(['sucesso' => false, 'mensagem' => $conn->error]);
    }

    $conn->close();
} else {
    echo json_encode(['sucesso' => false, 'mensagem' => 'Método inválido.']);
}
?>
