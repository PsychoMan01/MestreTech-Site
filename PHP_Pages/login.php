<?php
session_start();
require '../config/conexao.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    $resultado = mysqli_query($conn, "SELECT * FROM utilizadores WHERE email = '$email'");
    $user      = mysqli_fetch_assoc($resultado);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['utilizador'] = $user;
        header('Location: index.php');
        exit;
    }

    $erro = 'Email ou password incorretos.';
}

$titulo_pagina = 'Login — MestreTech';
$css_extra     = ['../CSS/login.css'];
$pagina_publica = true;
require '../Modules/header.php';
?>

<section class="secao-login">
  <div class="login-esquerda">
    <div class="logo-grande">Mestre<span>Tech</span></div>
    <p class="login-frase">A tecnologia ao serviço de todos em Cabo Verde.</p>
  </div>
  <div class="login-direita">
    <div class="caixa-login">
      <h2>Entrar na conta</h2>
      <?php if ($erro): ?>
        <p class="erro"><?php echo htmlspecialchars($erro); ?></p>
      <?php endif; ?>
      <form method="POST">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <button type="submit" class="botao-principal">Entrar</button>
      </form>
    </div>
  </div>
</section>