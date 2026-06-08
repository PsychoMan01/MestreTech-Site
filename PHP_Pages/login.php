<?php
session_start();
require '../config/conexao.php';
 
$erro = '';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
 
    $stmt = $conn->prepare("SELECT * FROM utilizadores WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();
 
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['utilizador'] = $user;
        header('Location: index.php');
        exit;
    }
 
    $erro = 'Email ou password incorretos.';
}
 
$titulo_pagina = 'Login — MestreTech';
$css_extra     = ['../CSS/login.css', '../CSS/base.css'];
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
 
      <?php if (isset($_GET['registado'])): ?>
        <p style="background:#e6f4ea;color:#2d6a2d;padding:10px 14px;border-radius:8px;margin-bottom:16px;font-size:14px;">
          Conta criada com sucesso! Podes entrar agora.
        </p>
      <?php endif; ?>
 
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

      <p style="margin-top: 16px; font-size: 14px; text-align: center; color: #555;">
        Não tens conta? <a href="registro.php" style="color: #0044cc; font-weight: 600;">Cria uma aqui</a>
      </p>
 
    </div>
  </div>
</section>
