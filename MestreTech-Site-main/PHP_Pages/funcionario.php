<?php

session_start();
require '../config/conexao.php';

$erro = '';

if (isset($_POST['acao']) && $_POST['acao'] === 'login') {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    $resultado = $conn->query("SELECT * FROM utilizadores WHERE email = '$email' AND cargo = 'funcionario'");
    $user = $resultado->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        // Guarda na sessão
        $_SESSION['funcionario'] = $user;
    } else {
        $erro = 'Email ou password incorretos. Ou não tens acesso de funcionário.';
    }
}

if (isset($_GET['sair'])) {
    session_destroy();
    header('Location: funcionario.php');
    exit;
}

if (isset($_POST['acao']) && $_POST['acao'] === 'aceitar' && isset($_SESSION['funcionario'])) {
    $pedido_id = (int)$_POST['pedido_id'];
    $func_id   = (int)$_SESSION['funcionario']['id'];

    // Só aceita se o pedido ainda estiver pendente
    $conn->query("UPDATE pedidos SET estado='aceite', funcionario_id=$func_id WHERE id=$pedido_id AND estado='pendente'");

    // Marca o funcionário como ocupado
    $conn->query("UPDATE utilizadores SET disponivel=0 WHERE id=$func_id");

    header('Location: funcionario.php');
    exit;
}

if (isset($_POST['acao']) && $_POST['acao'] === 'concluir' && isset($_SESSION['funcionario'])) {
    $pedido_id = (int)$_POST['pedido_id'];
    $func_id   = (int)$_SESSION['funcionario']['id'];

    // Só o funcionário que aceitou pode marcar como concluído
    $conn->query("UPDATE pedidos SET estado='concluido' WHERE id=$pedido_id AND funcionario_id=$func_id");

    // Funcionário fica disponível outra vez
    $conn->query("UPDATE utilizadores SET disponivel=1 WHERE id=$func_id");

    header('Location: funcionario.php');
    exit;
}

$pedidos = [];
if (isset($_SESSION['funcionario'])) {
    // Mostra todos os pedidos, do mais recente para o mais antigo
    $resultado = $conn->query("SELECT * FROM pedidos ORDER BY criado_em DESC");
    while ($linha = $resultado->fetch_assoc()) {
        $pedidos[] = $linha;
    }
}
?>
<?php require '../Modules/header.php'; 
$css_extra = ['../CSS/employes.css'];
?>

<div class="pagina">

    <?php if (!isset($_SESSION['funcionario'])): ?>

        <!-- Formulário de login -->
        <div class="caixa-login aparecer">
            <h2>Área dos Funcionários</h2>
            <p>Entra com a tua conta de funcionário.</p>

            <?php if ($erro): ?>
                <p class="erro"><?php echo htmlspecialchars($erro); ?></p>
            <?php endif; ?>

            <form method="POST">
                <input type="hidden" name="acao" value="login">
                <label>Email</label>
                <input type="email" name="email" required>
                <label>Password</label>
                <input type="password" name="password" required>
                <button type="submit" class="botao-entrar">Entrar</button>
            </form>
        </div>

    <?php else: ?>

        <div class="barra-topo">
            <span>Olá, <strong><?php echo htmlspecialchars($_SESSION['funcionario']['nome']); ?></strong></span>
            <a href="?sair=1">Sair</a>
        </div>

        <div class="titulo-pagina">
            <h1>Pedidos de Reparação</h1>
            <p>Aqui estão todos os pedidos dos clientes. Aceita um pedido pendente ou marca como concluído quando acabares.</p>
        </div>

        <div class="lista">
            <?php if (empty($pedidos)): ?>
                <div class="sem-pedidos">
                    <p style="font-size: 2rem;">📭</p>
                    <p>Ainda não há pedidos de reparação.</p>
                </div>

            <?php else: ?>
                <?php foreach ($pedidos as $p): ?>
                    <div class="cartao <?php echo $p['estado']; ?> aparecer">

                        <div class="cartao-topo">
                            <div>
                                <h3>
                                    <?php echo htmlspecialchars($p['dispositivo']); ?> —
                                    <?php echo htmlspecialchars($p['tipo_servico']); ?>
                                </h3>
                                <p>
                                    Cliente: <strong><?php echo htmlspecialchars($p['nome_cliente']); ?></strong>
                                    &nbsp;|&nbsp; Tel: <?php echo htmlspecialchars($p['telefone_cliente']); ?>
                                    &nbsp;|&nbsp; <?php echo date('d/m/Y H:i', strtotime($p['criado_em'])); ?>
                                </p>
                            </div>

                            <?php
                            if ($p['estado'] === 'pendente')       $etiqueta = 'Pendente';
                            elseif ($p['estado'] === 'aceite')     $etiqueta = 'Aceite';
                            else                                    $etiqueta = 'Concluído';
                            ?>
                            <span class="etiqueta <?php echo $p['estado']; ?>">
                                <?php echo $etiqueta; ?>
                            </span>
                        </div>

                        <div class="descricao">
                            "<?php echo htmlspecialchars($p['descricao']); ?>"
                        </div>

                        <?php $meu_id = (int)$_SESSION['funcionario']['id']; ?>

                        <?php if ($p['estado'] === 'pendente'): ?>
                            <form method="POST">
                                <input type="hidden" name="acao" value="aceitar">
                                <input type="hidden" name="pedido_id" value="<?php echo $p['id']; ?>">
                                <button type="submit" class="botao-aceitar">Aceitar pedido</button>
                            </form>

                        <?php elseif ($p['estado'] === 'aceite' && $p['funcionario_id'] == $meu_id): ?>
                            <form method="POST">
                                <input type="hidden" name="acao" value="concluir">
                                <input type="hidden" name="pedido_id" value="<?php echo $p['id']; ?>">
                                <button type="submit" class="botao-concluir">Marcar como Concluído</button>
                            </form>

                        <?php elseif ($p['estado'] === 'aceite'): ?>
                            <p class="texto-outro-func">Aceite por outro funcionário.</p>

                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    <?php endif; ?>
</div>

<?php require '../Modules/footer.php'; ?>
