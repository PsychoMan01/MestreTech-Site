<?php
$pagina_atual = 'reparos';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/repairs.css'];
require '../Modules/header.php';
?>

<!-- Cabeçalho da página -->
<section>

  <!-- Caixa que centraliza o conteúdo do cabeçalho -->
  <div>

    <!-- Texto pequeno acima do título -->
    <span>Galeria</span>

    <!-- Título principal da página -->
    <h1>Trabalhos de Reparação</h1>

    <!-- Descrição da página -->
    <p>
      Aqui mostramos alguns serviços de reparação já feitos pela nossa equipa.
    </p>

  <!-- Fim da caixa do cabeçalho -->
  </div>

<!-- Fim do cabeçalho da página -->
</section>

<!-- Parte principal da página -->
<main class="galeria-main">

  <!-- Texto pequeno da secção -->
  <span>Reparações feitas</span>

  <!-- Título da secção -->
  <h2>Os nossos trabalhos</h2>

  <!-- Descrição da secção -->
  <p>
    Esta página serve para apresentar alguns serviços de reparação, manutenção e montagem já realizados pela MestreTech.
  </p>

  <!-- Grelha onde ficam os cartões -->
  <div>

    <!-- Primeiro cartão -->
    <div>

      <!-- Caixa da imagem -->
      <div>

        <!-- Imagem da reparação da PS4 -->
        <img src="../images/placaps4.png">

        <!-- Etiqueta do cartão -->
        <span>Reparação</span>

      <!-- Fim da caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Reparação de PS4</h3>

        <!-- Descrição do trabalho -->
        <p>
          Serviço de diagnóstico e reparação de consola PS4, incluindo verificação de componentes internos.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>15 de Março, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fim das informações extras -->
        </div>

      <!-- Fim do corpo do cartão -->
      </div>

    <!-- Fim do primeiro cartão -->
    </div>

    <!-- Segundo cartão -->
    <div>

      <!-- Caixa da imagem -->
      <div>

        <!-- Imagem da reparação do computador -->
        <img src="../images/concertopc.png">

        <!-- Etiqueta do cartão -->
        <span>Reparação</span>

      <!-- Fim da caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Reparação de computador</h3>

        <!-- Descrição do trabalho -->
        <p>
          Diagnóstico de problemas em computador, limpeza e resolução de falhas de hardware ou software.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>15 de Março, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fim das informações extras -->
        </div>

      <!-- Fim do corpo do cartão -->
      </div>

    <!-- Fim do segundo cartão -->
    </div>

    <!-- Terceiro cartão -->
    <div>

      <!-- Caixa da imagem -->
      <div>

        <!-- Imagem da montagem do computador -->
        <img src="../images/montagem.png" >

        <!-- Etiqueta do cartão -->
        <span>Montagem</span>

      <!-- Fim da caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Montagem de computador</h3>

        <!-- Descrição do trabalho -->
        <p>
          Montagem de computador com peças fornecidas pelo cliente, deixando o equipamento pronto para uso.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>15 de Março, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fim das informações extras -->
        </div>

      <!-- Fim do corpo do cartão -->
      </div>

    <!-- Fim do terceiro cartão -->
    </div>

    <!-- Quarto cartão -->
    <div>

      <!-- Caixa da imagem -->
      <div>

        <!-- Imagem da manutenção do notebook -->
        <img src="../images/portatil.png">

        <!-- Etiqueta do cartão -->
        <span>Manutenção</span>

      <!-- Fim da caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Manutenção de notebook</h3>

        <!-- Descrição do trabalho -->
        <p>
          Verificação do estado do notebook, limpeza básica e análise de possíveis problemas no equipamento.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>20 de Janeiro, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fim das informações extras -->
        </div>

      <!-- Fim do corpo do cartão -->
      </div>

    <!-- Fim do quarto cartão -->
    </div>

  <!-- Fim da grelha dos cartões -->
  </div>

  <!-- Botão para voltar à galeria -->
  <a href="galery.php">Voltar para a Galeria</a>
 
<!-- Fim da parte principal -->
</main>

<?php
// Chama o rodapé do site
require '../Modules/footer.php';
?>