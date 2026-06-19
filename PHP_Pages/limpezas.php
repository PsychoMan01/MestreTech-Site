<?php
$pagina_atual = 'limpezas';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/limpezas.css'];
require '../Modules/header.php';
?>

<!-- Começa o cabeçalho da página -->
<section class="cabecalho-trabalhos">

  <!-- Caixa do cabeçalho -->
  <div class="cabecalho-caixa">

    <!-- Texto pequeno acima do título -->
    <span>Galeria</span>

    <!-- Título principal da página -->
    <h1>Trabalhos de Limpeza</h1>

    <!-- Texto explicativo da página -->
    <p>
      Aqui mostramos alguns serviços de limpeza e manutenção feitos pela MestreTech.
    </p>

  <!-- Fecha a caixa do cabeçalho -->
  </div>

<!-- Fecha o cabeçalho da página -->
</section>

<!-- Começa a parte principal da página -->
<main class="pagina-limpezas">

  <!-- Texto pequeno da secção -->
  <span>Limpezas feitas</span>

  <!-- Título da secção -->
  <h2>Os nossos trabalhos</h2>

  <!-- Descrição da secção -->
  <p>
    Nesta página colocamos exemplos de equipamentos que passaram por limpeza ou manutenção.
  </p>

  <!-- Grelha onde ficam os cartões -->
  <div class="grelha-limpezas">

    <!-- Primeiro cartão -->
    <div class="cartao-limpeza">

      <!-- Parte da imagem -->
      <div class="imagem-limpeza">

        <!-- Imagem do trabalho -->
        <img src="../images/portatil.png" alt="Limpeza de notebook">

        <!-- Etiqueta do cartão -->
        <span>Limpeza</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-limpeza">

        <!-- Título do trabalho -->
        <h3>Limpeza de notebook</h3>

        <!-- Descrição do trabalho -->
        <p>
          Limpeza interna do notebook, remoção de poeira e verificação do estado geral do equipamento.
        </p>

        <!-- Data e local -->
        <div class="info-limpeza">
          <span>20 de Janeiro, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o primeiro cartão -->
    </div>

    <!-- Segundo cartão -->
    <div class="cartao-limpeza">

      <!-- Parte da imagem -->
      <div class="imagem-limpeza">

        <!-- Imagem do trabalho -->
        <img src="../images/concertopc.png" alt="Limpeza de computador">

        <!-- Etiqueta do cartão -->
        <span>Manutenção</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-limpeza">

        <!-- Título do trabalho -->
        <h3>Limpeza de computador</h3>

        <!-- Descrição do trabalho -->
        <p>
          Limpeza de componentes internos para ajudar a reduzir aquecimento e melhorar o funcionamento.
        </p>

        <!-- Data e local -->
        <div class="info-limpeza">
          <span>20 de Janeiro, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o segundo cartão -->
    </div>

    <!-- Terceiro cartão -->
    <div class="cartao-limpeza">

      <!-- Parte da imagem -->
      <div class="imagem-limpeza">

        <!-- Imagem do trabalho -->
        <img src="../images/placaps4.png" alt="Limpeza de PS4">

        <!-- Etiqueta do cartão -->
        <span>Limpeza</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-limpeza">

        <!-- Título do trabalho -->
        <h3>Limpeza de PS4</h3>

        <!-- Descrição do trabalho -->
        <p>
          Limpeza da consola para ajudar a diminuir aquecimento, barulho e melhorar o desempenho.
        </p>

        <!-- Data e local -->
        <div class="info-limpeza">
          <span>20 de Janeiro, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o terceiro cartão -->
    </div>

  <!-- Fecha a grelha dos cartões -->
  </div>

  <!-- Botão para voltar à galeria -->
  <a href="galery.php">Voltar para a Galeria</a>

<!-- Fecha a parte principal -->
</main>

<?php
// Chama o rodapé do site
require '../Modules/footer.php';
?>