<?php

session_start();
require '../config/conexao.php';

$erro    = '';
$sucesso = false;

$cliente_id = $_SESSION['utilizador']['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome        = trim($_POST['nome_cliente']);
    $telefone    = trim($_POST['telefone_cliente']);
    $servico     = $_POST['tipo_servico'];
    $dispositivo = $_POST['dispositivo'];
    $descricao   = trim($_POST['descricao']);

    if (!$nome || !$telefone || !$servico || !$dispositivo || !$descricao) {
        $erro = 'Por favor, preenche todos os campos.';
    } else {
        $stmt = $conn->prepare("INSERT INTO pedidos (cliente_id, nome_cliente, telefone_cliente, tipo_servico, dispositivo, descricao) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $cliente_id, $nome, $telefone, $servico, $dispositivo, $descricao);
        if ($stmt->execute()) {
            $sucesso = true;
        } else {
            $erro = 'Erro ao enviar o pedido. Tenta novamente.';
        }
    }
}

// Vai buscar todos os pedidos feitos por este cliente, do mais recente para o mais antigo
$meus_pedidos = [];
$stmt = $conn->prepare("SELECT * FROM pedidos WHERE cliente_id = ? ORDER BY criado_em DESC");
$stmt->bind_param("i", $cliente_id);
$stmt->execute();
$resultado = $stmt->get_result();
while ($linha = $resultado->fetch_assoc()) {
    $meus_pedidos[] = $linha;
}
?>

<?php
$pagina_atual = 'pedido';
$titulo_pagina = 'MestreTech — Pedir Reparação';
$css_extra = ['../CSS/request_client.css'];
require '../Modules/header.php';
?>

<div class="pagina">

    <?php if ($sucesso): ?>
        <p class="msg-sucesso" style="background:#e6f4ea;color:#2d6a2d;padding:10px 14px;border-radius:8px;margin-bottom:16px;">
            Pedido enviado com sucesso! Podes acompanhar o estado abaixo.
        </p>
    <?php endif; ?>

    <?php if (!empty($meus_pedidos)): ?>

        <div class="meus-pedidos aparecer">
            <h2>Os teus pedidos</h2>

            <?php foreach ($meus_pedidos as $p): ?>

                <?php
                if ($p['estado'] === 'pendente') {
                    $classe = 'pendente';
                    $texto  = 'O teu pedido foi enviado! Estamos a aguardar que um funcionário o aceite.';
                } elseif ($p['estado'] === 'aceite') {
                    $classe = 'aceite';
                    $texto  = 'Pedido aceite! Um funcionário já está a tratar da tua reparação.';
                } else {
                    $classe = 'concluido';
                    $texto  = 'Reparação concluída! Podes vir buscar o teu equipamento.';
                }
                ?>

                <div class="estado-pedido <?php echo $classe; ?> aparecer">
                    <h3>Pedido nº <?php echo $p['id']; ?></h3>
                    <p><?php echo $texto; ?></p>
                    <p class="info-pedido">
                        <?php echo htmlspecialchars($p['dispositivo']); ?> --
                        <?php echo htmlspecialchars($p['tipo_servico']); ?>
                        &nbsp;|&nbsp; <?php echo date('d/m/Y H:i', strtotime($p['criado_em'])); ?>
                    </p>
                </div>

            <?php endforeach; ?>
        </div>

    <?php endif; ?>

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

</div>

<?php require '../Modules/footer.php'; ?>
