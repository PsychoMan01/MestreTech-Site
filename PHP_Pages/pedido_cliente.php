<?php

session_start();
require '../config/conexao.php';

$erro    = '';
$sucesso = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome        = trim($_POST['nome_cliente']);
    $telefone    = trim($_POST['telefone_cliente']);
    $servico     = $_POST['tipo_servico'];
    $dispositivo = $_POST['dispositivo'];
    $descricao   = trim($_POST['descricao']);

    if (!$nome || !$telefone || !$servico || !$dispositivo || !$descricao) {
        $erro = 'Por favor, preenche todos os campos.';
    } else {
        $stmt = $conn->prepare("INSERT INTO pedidos (nome_cliente, telefone_cliente, tipo_servico, dispositivo, descricao) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nome, $telefone, $servico, $dispositivo, $descricao);
        if ($stmt->execute()) {
            $_SESSION['pedido_id'] = $conn->insert_id;
            $sucesso = true;
        } else {
            $erro = 'Erro ao enviar o pedido. Tenta novamente.';
        }
    }
}

$meu_pedido = null;
if (isset($_SESSION['pedido_id'])) {
    $id = (int)$_SESSION['pedido_id'];
    $stmt = $conn->prepare("SELECT * FROM pedidos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $meu_pedido = $stmt->get_result()->fetch_assoc();
}

if (isset($_GET['novo'])) {
    unset($_SESSION['pedido_id']);
    header('Location: pedido_cliente.php');
    exit;
}
?>

<?php
$pagina_atual = 'pedido';
$titulo_pagina = 'MestreTech — Pedir Reparação';
$css_extra = ['../CSS/request_client.css'];
require '../Modules/header.php';
?>

<div class="pagina">

    <?php if ($meu_pedido): ?>

        <?php
        if ($meu_pedido['estado'] === 'pendente') {
            $classe = 'pendente';
            $texto  = 'O teu pedido foi enviado! Estamos a aguardar que um funcionário o aceite.';
        } elseif ($meu_pedido['estado'] === 'aceite') {
            $classe = 'aceite';
            $texto  = 'Pedido aceite! Um funcionário já está a tratar da tua reparação.';
        } else {
            $classe = 'concluido';
            $texto  = 'Reparação concluída! Podes vir buscar o teu equipamento.';
        }
        ?>

        <div class="estado-pedido <?php echo $classe; ?> aparecer">
            <h2>Estado do teu pedido</h2>
            <p><?php echo $texto; ?></p>
            <p class="info-pedido">
                Pedido nº <?php echo $meu_pedido['id']; ?> —
                <?php echo htmlspecialchars($meu_pedido['dispositivo']); ?> —
                <?php echo htmlspecialchars($meu_pedido['tipo_servico']); ?>
            </p>
            <a href="pedido_cliente.php" class="botao-novo" style="background:#555; margin-right:8px;">Atualizar estado</a>
            <a href="?novo=1" class="botao-novo">Novo pedido</a>
        </div>

    <?php else: ?>
        <div class="caixa aparecer">
            <h2>Pedir Reparação</h2>
            <p class="caixa-descricao">Preenche o formulário e nós tratamos do resto.</p>

            <?php if ($erro): ?>
                <p class="erro"><?php echo htmlspecialchars($erro); ?></p>
            <?php endif; ?>

            <form method="POST">

                <div class="dois-campos">
                    <div>
                        <label>O teu nome</label>
                        <input type="text" name="nome_cliente" placeholder="Ex: João Silva" required>
                    </div>
                    <div>
                        <label>Telefone</label>
                        <input type="tel" name="telefone_cliente" placeholder="Ex: 991 23 45" required>
                    </div>
                </div>

                <label>Tipo de serviço</label>
                <select name="tipo_servico" required>
                    <option value="">-- Escolhe o serviço --</option>
                    <option value="Reparação de computador">Reparação de computador</option>
                    <option value="Reparação de telemóvel">Reparação de telemóvel</option>
                    <option value="Reparação de consola">Reparação de consola</option>
                    <option value="Instalação de programas">Instalação de programas</option>
                    <option value="Limpeza de equipamento">Limpeza de equipamento</option>
                    <option value="Personalização de consola">Personalização de consola</option>
                    <option value="Outro">Outro</option>
                </select>

                <label>Dispositivo a reparar</label>
                <select name="dispositivo" required>
                    <option value="">-- Escolhe o dispositivo --</option>
                    <option value="Portátil">Portátil</option>
                    <option value="Computador de mesa">Computador de mesa</option>
                    <option value="Telemóvel Android">Telemóvel Android</option>
                    <option value="iPhone">iPhone</option>
                    <option value="PlayStation 4">PlayStation 4</option>
                    <option value="PlayStation 5">PlayStation 5</option>
                    <option value="Xbox">Xbox</option>
                    <option value="Outro">Outro</option>
                </select>

                <label>Descreve o que aconteceu</label>
                <textarea name="descricao" placeholder="Ex: O ecrã partiu quando caiu ao chão. Já não liga." required></textarea>

                <button type="submit" class="botao-enviar">Enviar Pedido →</button>

            </form>
        </div>

    <?php endif; ?>

</div>

<?php require '../Modules/footer.php'; ?>
