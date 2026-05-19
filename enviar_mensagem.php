<?php
header("Content-Type: application/json; charset=UTF-8");
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome     = $conn->real_escape_string($_POST['nome']     ?? '');
    $email    = $conn->real_escape_string($_POST['email']    ?? '');
    $assunto  = $conn->real_escape_string($_POST['assunto']  ?? '');
    $mensagem = $conn->real_escape_string($_POST['mensagem'] ?? '');

    if ($nome == '' || $email == '' || $mensagem == '') {
        echo json_encode(["sucesso" => false, "mensagem" => "Campos obrigatórios em falta."]);
        exit;
    }

    $sql = "INSERT INTO mensagens (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["sucesso" => true, "mensagem" => "Mensagem guardada."]);
    } else {
        echo json_encode(["sucesso" => false, "mensagem" => "Erro na base de dados."]);
    }
} else {
    echo json_encode(["sucesso" => false, "mensagem" => "Método inválido."]);
}

$conn->close();
?>
