<?php

session_start();
require '../config/conexao.php';

$erro    = '';
$sucesso = '';

if (isset($_POST['acao']) && $_POST['acao'] === 'login') {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    $resultado = $conn->query("SELECT * FROM utilizadores WHERE email = '$email' AND cargo = 'admin'");
    $admin = $resultado->fetch_assoc();

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin'] = $admin;
    } else {
        $erro = 'Email ou password incorretos.';
    }
}

if (isset($_GET['sair'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

if (isset($_POST['acao']) && $_POST['acao'] === 'adicionar' && isset($_SESSION['admin'])) {
    $nome     = trim($_POST['nome']);
    $email    = trim($_POST['email']);
    $telefone = trim($_POST['telefone'] ?? '');
    $password = $_POST['password'];

    if (!$nome || !$email || !$password) {
        $erro = 'Preenche o nome, email e password.';
    } else {
        // Verifica se o email já está registado
        $verificar = $conn->query("SELECT id FROM utilizadores WHERE email = '$email'");
        if ($verificar->num_rows > 0) {
            $erro = 'Já existe um utilizador com esse email.';
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            // Insere na tabela utilizadores com cargo='funcionario'
            $sql = "INSERT INTO utilizadores (nome, email, telefone, password, cargo, disponivel)
                    VALUES ('$nome', '$email', '$telefone', '$password_hash', 'funcionario', 1)";

            if ($conn->query($sql)) {
                $sucesso = "Funcionário '$nome' adicionado com sucesso!";
            } else {
                $erro = 'Erro ao adicionar. Tenta novamente.';
            }
        }
    }
}

if (isset($_POST['acao']) && $_POST['acao'] === 'remover' && isset($_SESSION['admin'])) {
    $func_id = (int)$_POST['func_id'];

    $verifica = $conn->query("SELECT cargo FROM utilizadores WHERE id = $func_id");
    $user = $verifica->fetch_assoc();

    if ($user && $user['cargo'] === 'admin') {
        $erro = 'Não podes remover um admin.';
    } else {
        $conn->query("DELETE FROM utilizadores WHERE id = $func_id AND cargo = 'funcionario'");
        $sucesso = 'Funcionário removido com sucesso.';
    }
}

$funcionarios = [];
if (isset($_SESSION['admin'])) {
    $resultado = $conn->query("SELECT * FROM utilizadores WHERE cargo = 'funcionario' ORDER BY nome");
    while ($linha = $resultado->fetch_assoc()) {
        $funcionarios[] = $linha;
    }
}
?>
<?php
$pagina_atual = 'admin';
$titulo_pagina = 'MestreTech — Admin';
$css_extra = ['../CSS/admin.css'];
require '../Modules/header.php';
?>

<div class="pagina">

    <?php if (!isset($_SESSION['admin'])): ?>

        <!-- Formulário de login do admin -->
        <div class="caixa-login aparecer">
            <h2>Área do Admin</h2>
            <p>Apenas o administrador pode entrar aqui.</p>

            <?php if ($erro): ?>
                <p class="erro"><?php echo htmlspecialchars($erro); ?></p>
            <?php endif; ?>

            <form method="POST">
                <input type="hidden" name="acao" value="login">
                <label>Email</label>
                <input type="email" name="email" placeholder="mestretechcvoficial00@gmail.com" required style="margin-bottom:16px;">
                <label>Password</label>
                <input type="password" name="password" required style="margin-bottom:20px;">
                <button type="submit" class="botao-entrar">Entrar como Admin</button>
            </form>
        </div>

    <?php else: ?>

        <!-- Admin está logado -->
        <div class="barra-topo">
            <span>Admin: <strong><?php echo htmlspecialchars($_SESSION['admin']['nome']); ?></strong></span>
            <a href="?sair=1">Sair</a>
        </div>

        <div class="titulo-pagina">
            <h1>Gestão de Funcionários</h1>
            <p>Adiciona ou remove funcionários do sistema. Só o admin pode fazer isso.</p>
        </div>

        <!-- Mensagens de sucesso/erro -->
        <?php if ($sucesso): ?>
            <p class="msg-sucesso"><?php echo htmlspecialchars($sucesso); ?></p>
        <?php endif; ?>
        <?php if ($erro): ?>
            <p class="erro"><?php echo htmlspecialchars($erro); ?></p>
        <?php endif; ?>

        <!-- Formulário para adicionar funcionário -->
        <div class="caixa-adicionar aparecer">
            <h3>Adicionar novo funcionário</h3>
            <form method="POST">
                <input type="hidden" name="acao" value="adicionar">
                <div class="linha-form">
                    <div>
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Ex: Ana Silva" required>
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" placeholder="ana@email.com" required>
                    </div>
                    <div>
                        <label>Telefone</label>
                        <input type="tel" name="telefone" placeholder="991 00 00">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password inicial" required>
                    </div>
                    <div>
                        <button type="submit" class="botao-adicionar">Adicionar</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Lista de funcionários -->
        <div class="caixa-lista aparecer atraso-1">
            <h3>Funcionários (<?php echo count($funcionarios); ?>)</h3>

            <?php if (empty($funcionarios)): ?>
                <div class="sem-funcionarios">
                    <p>Ainda não há funcionários. Adiciona o primeiro acima.</p>
                </div>

            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Estado</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($funcionarios as $func): ?>
                            <tr>
                                <td><strong><?php echo htmlspecialchars($func['nome']); ?></strong></td>
                                <td><?php echo htmlspecialchars($func['email']); ?></td>
                                <td><?php echo htmlspecialchars($func['telefone'] ?: '—'); ?></td>
                                <td>
                                    <?php if ($func['disponivel']): ?>
                                        <span class="disponivel">Disponível</span>
                                    <?php else: ?>
                                        <span class="ocupado">A trabalhar</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <form method="POST" onsubmit="return confirm('Remover <?php echo htmlspecialchars($func['nome']); ?>?')">
                                        <input type="hidden" name="acao" value="remover">
                                        <input type="hidden" name="func_id" value="<?php echo $func['id']; ?>">
                                        <button type="submit" class="botao-remover">Remover</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>

    <?php endif; ?>
</div>

<?php require '../Modules/footer.php'; ?>
