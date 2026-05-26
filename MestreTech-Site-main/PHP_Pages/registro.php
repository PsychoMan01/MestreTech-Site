
<?php
session_start();
 
require '../config/conexao.php';
 
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    // Pega nos dados que o utilizador escreveu no formulário
    $nome     = trim($_POST['nome']);
    $email    = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $morada   = trim($_POST['morada']);
    $password = $_POST['password'];
    $confirmar = $_POST['confirmar_password'];
 
    if ($password !== $confirmar) {
        $erro = 'As passwords não coincidem.';
 
    } else {
        $verificar = $conn->query("SELECT id FROM utilizadores WHERE email = '$email'");
 
        if ($verificar->num_rows > 0) {
            $erro = 'Este email já está registado.';
 
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
            $sql = "INSERT INTO utilizadores (nome, email, telefone, morada, password)
                    VALUES ('$nome', '$email', '$telefone', '$morada', '$password_hash')";
 
            if ($conn->query($sql)) {
                header('Location: login.php?registado=1');
                exit;
            } else {
                $erro = 'Erro ao criar conta. Tenta novamente.';
            }
        }
    }
}
 
// Configurações da página
$titulo_pagina  = 'Criar Conta — MestreTech';
$css_extra      = ['../CSS/login.css'];
$pagina_publica = true;
require '../Modules/header.php';
?>
 
<section class="secao-login">

  <div class="login-esquerda">
    <div class="logo-grande">Mestre<span>Tech</span></div>
    <p class="login-frase">Cria a tua conta e fica em contacto connosco.</p>
  </div>
 
  <div class="login-direita">
    <div class="caixa-login">
      <h2>Criar conta</h2>
 
      <?php if ($erro): ?>
        <p class="erro"><?php echo htmlspecialchars($erro); ?></p>
      <?php endif; ?>
 
      <form method="POST">
 
        <label>Nome completo</label>
        <input type="text" name="nome" placeholder="O teu nome" required>
 
        <label>Email</label>
        <input type="email" name="email" placeholder="o.teu@email.com" required>
 
        <label>Telefone</label>
        <input type="tel" name="telefone" placeholder="+238 000 0000">
 
        <label>Morada</label>
        <input type="text" name="morada" placeholder="Ex: Mindelo, Cabo Verde">
 
        <label>Password</label>
        <input type="password" name="password" placeholder="Escolhe uma password" required>
 
        <label>Confirmar password</label>
        <input type="password" name="confirmar_password" placeholder="Repete a password" required>
 
        <button type="submit" class="botao-principal">Registar</button>
 
      </form>
 
      <p style="margin-top: 16px; font-size: 14px; text-align: center; color: #555;">
        Já tens conta? <a href="login.php" style="color: #0044cc; font-weight: 600;">Entra aqui</a>
      </p>
 
    </div>
  </div>
 
</section>
 
<?php require '../Modules/footer.php'; ?>
