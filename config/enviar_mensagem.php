<?php
include 'conexao.php';
//Emos so pa lembra bsot que li no tita verifica se formulario foi enviado usando metodo POST. Es comando te executa so quando alguem submete formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //emos e quel real_escape_string te protege contra SQL injection
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $assunto = $conn->real_escape_string($_POST['assunto'] ?? ''); // Se assunto não existir, usa string vazia
    $mensagem = $conn->real_escape_string($_POST['mensagem']);

    $sql = "INSERT INTO mensagens (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

    if ($conn->query($sql) === TRUE){   //li te executa querry e verifica sel funciona com sucesso
        echo "Sucedidd";
    } else {
        echo "error: ";
    }
}
$conn->close();
?>