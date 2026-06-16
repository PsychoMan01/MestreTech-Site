<?php
$pagina_atual = 'reparos';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/repairs.css'];
require '../Modules/header.php';
?>
<!-- Começa o cabeçalho da página -->
<section>

  <!-- Caixa interna do cabeçalho -->
  <div>

    <!-- Texto pequeno acima do título -->
    <span>Galeria</span>

    <!-- Título principal da página -->
    <h1>Trabalhos de Limpeza</h1>

    <!-- Pequena explicação da página -->
    <p>
      Aqui mostramos alguns serviços de limpeza e manutenção feitos pela MestreTech.
    </p>

  <!-- Fecha a caixa interna do cabeçalho -->
  </div>

<!-- Fecha o cabeçalho da página -->
</section>

<!-- Começa a parte principal da página -->
<main class="galeria-main">

  <!-- Texto pequeno da secção -->
  <span>Limpezas feitas</span>

  <!-- Título da secção -->
  <h2>Os nossos trabalhos</h2>

  <!-- Descrição simples da secção -->
  <p>
    Nesta página colocamos exemplos de equipamentos que passaram por limpeza ou manutenção.
  </p>

  <!-- Grelha onde ficam os cartões -->
  <div>

    <!-- Primeiro cartão -->
    <div>

      <!-- Caixa da imagem -->
      <div>

        <!-- Imagem da limpeza de notebook -->
        <img src="../images/portatil.png">

        <!-- Etiqueta do cartão -->
        <span>Limpeza</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Limpeza de notebook</h3>

        <!-- Descrição do trabalho -->
        <p>
          Limpeza interna do notebook, remoção de poeira e verificação do estado geral do equipamento.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>20 de Janeiro, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fecha as informações extras -->
        </div>

      <!-- Fecha o corpo do cartão -->
      </div>

    <!-- Fecha o primeiro cartão -->
    </div>

    <!-- Segundo cartão -->
    <div>

      <!-- Caixa da imagem -->
      <div>

        <!-- Imagem usada para representar limpeza de computador -->
        <img src="../images/concertopc.png">

        <!-- Etiqueta do cartão -->
        <span>Manutenção</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Limpeza de computador</h3>

        <!-- Descrição do trabalho -->
        <p>
          Limpeza de componentes internos para ajudar a reduzir aquecimento e melhorar o funcionamento.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>20 de Janeiro, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fecha as informações extras -->
        </div>

      <!-- Fecha o corpo do cartão -->
      </div>

    <!-- Fecha o segundo cartão -->
    </div>

    <!-- Terceiro cartão -->
    <div>

      <!-- Caixa da imagem -->
      <div>

        <!-- Imagem usada para representar limpeza de consola -->
        <img src="../images/placaps4.png">

        <!-- Etiqueta do cartão -->
        <span>Limpeza</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Limpeza de PS4</h3>

        <!-- Descrição do trabalho -->
        <p>
          Limpeza da consola para ajudar a diminuir aquecimento, barulho e melhorar o desempenho.
        </p>

        <!-- Informações extras -->
        <div class="evento-card-meta">

          <!-- Data do trabalho -->
          <span>20 de Janeiro, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fecha as informações extras -->
        </div>

      <!-- Fecha o corpo do cartão -->
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