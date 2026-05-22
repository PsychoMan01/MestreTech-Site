<?php
/**
 * header.php — Cabeçalho reutilizável do MestreTech
 *
 * Como usar em cada página:
 *   <?php $pagina_atual = 'inicio'; require 'header.php'; ?>
 *
 * Valores válidos para $pagina_atual:
 *   'inicio' | 'sobre' | 'servicos' | 'galeria' | 'contacto'
 *
 * As variáveis $titulo_pagina e $css_extra são opcionais:
 *   $titulo_pagina — texto no <title> (padrão: "MestreTech")
 *   $css_extra     — array com caminhos CSS adicionais da página
 */

// Valor padrão caso a página não defina $pagina_atual
if (!isset($pagina_atual)) $pagina_atual = '';
if (!isset($titulo_pagina)) $titulo_pagina = 'MestreTech';
if (!isset($css_extra)) $css_extra = [];

// Função auxiliar: retorna 'activo' se a página corresponder
function nav_activo($pagina, $atual) {
    return $pagina === $atual ? ' class="activo"' : '';
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($titulo_pagina); ?></title>
  <link rel="stylesheet" href="../CSS/base.css">
  <?php foreach ($css_extra as $css): ?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($css); ?>">
  <?php endforeach; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Orbitron:wght@700&display=swap">
</head>
<body>

<!-- cabecalho com navegacao -->
<header>
  <div class="cabecalho-interior">
    <a href="index.php" class="logo">Mestre<span>Tech</span></a>
    <nav>
      <a href="index.php"<?php echo nav_activo('inicio', $pagina_atual); ?>>Início</a>
      <a href="sobre.php"<?php echo nav_activo('sobre', $pagina_atual); ?>>Sobre</a>
      <a href="servicos.php"<?php echo nav_activo('servicos', $pagina_atual); ?>>Serviços</a>
      <a href="galery.php"<?php echo nav_activo('galeria', $pagina_atual); ?>>Galeria</a>
      <a href="contacto.php"<?php echo nav_activo('contacto', $pagina_atual); ?>>Contacto</a>
    </nav>
  </div>
</header>
