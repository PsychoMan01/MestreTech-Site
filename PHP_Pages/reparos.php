<?php
$pagina_atual = 'reparos';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/reparos.css'];
require '../Modules/header.php';
?>

<!-- Começa o cabeçalho da página -->
<section class="cabecalho-trabalhos">

  <!-- Caixa do cabeçalho -->
  <div class="cabecalho-caixa">

    <!-- Texto pequeno acima do título -->
    <span>Galeria</span>

    <!-- Título principal da página -->
    <h1>Trabalhos de Reparação</h1>

    <!-- Texto explicativo da página -->
    <p>
      Aqui mostramos alguns serviços de reparação já feitos pela nossa equipa.
    </p>

  <!-- Fecha a caixa do cabeçalho -->
  </div>

<!-- Fecha o cabeçalho da página -->
</section>

<!-- Começa a parte principal da página -->
<main class="pagina-reparos">

  <!-- Texto pequeno da secção -->
  <span>Reparações feitas</span>

  <!-- Título da secção -->
  <h2>Os nossos trabalhos</h2>

  <!-- Descrição da secção -->
  <p>
    Esta página serve para apresentar alguns serviços de reparação, manutenção e montagem já realizados pela MestreTech.
  </p>

  <!-- Grelha onde ficam os cartões -->
  <div class="grelha-reparos">

    <!-- Primeiro cartão -->
    <div class="cartao-reparo">

      <!-- Parte da imagem -->
      <div class="imagem-reparo">

        <!-- Imagem do trabalho -->
        <img src="../images/placaps4.png" alt="Reparação de PS4">

        <!-- Etiqueta do cartão -->
        <span>Reparação</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-reparo">

        <!-- Título do trabalho -->
        <h3>Reparação de PS4</h3>

        <!-- Descrição do trabalho -->
        <p>
          Serviço de diagnóstico e reparação de consola PS4, incluindo verificação de componentes internos.
        </p>

        <!-- Data e local -->
        <div class="info-reparo">
          <span>15 de Março, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o primeiro cartão -->
    </div>

    <!-- Segundo cartão -->
    <div class="cartao-reparo">

      <!-- Parte da imagem -->
      <div class="imagem-reparo">

        <!-- Imagem do trabalho -->
        <img src="../images/concertopc.png" alt="Reparação de computador">

        <!-- Etiqueta do cartão -->
        <span>Reparação</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-reparo">

        <!-- Título do trabalho -->
        <h3>Reparação de computador</h3>

        <!-- Descrição do trabalho -->
        <p>
          Diagnóstico de problemas em computador, limpeza e resolução de falhas de hardware ou software.
        </p>

        <!-- Data e local -->
        <div class="info-reparo">
          <span>15 de Março, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o segundo cartão -->
    </div>

    <!-- Terceiro cartão -->
    <div class="cartao-reparo">

      <!-- Parte da imagem -->
      <div class="imagem-reparo">

        <!-- Imagem do trabalho -->
        <img src="../images/montagem.png" alt="Montagem de computador">

        <!-- Etiqueta do cartão -->
        <span>Montagem</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-reparo">

        <!-- Título do trabalho -->
        <h3>Montagem de computador</h3>

        <!-- Descrição do trabalho -->
        <p>
          Montagem de computador com peças fornecidas pelo cliente, deixando o equipamento pronto para uso.
        </p>

        <!-- Data e local -->
        <div class="info-reparo">
          <span>15 de Março, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o terceiro cartão -->
    </div>

    <!-- Quarto cartão -->
    <div class="cartao-reparo">

      <!-- Parte da imagem -->
      <div class="imagem-reparo">

        <!-- Imagem do trabalho -->
        <img src="../images/portatil.png" alt="Manutenção de notebook">

        <!-- Etiqueta do cartão -->
        <span>Manutenção</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-reparo">

        <!-- Título do trabalho -->
        <h3>Manutenção de notebook</h3>

        <!-- Descrição do trabalho -->
        <p>
          Verificação do estado do notebook, limpeza básica e análise de possíveis problemas no equipamento.
        </p>

        <!-- Data e local -->
        <div class="info-reparo">
          <span>20 de Janeiro, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o quarto cartão -->
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