<?php
$pagina_atual = 'personalizacoes';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/personalizacoes.css'];
require '../Modules/header.php';
?>
<!-- Começa o cabeçalho da página -->
<section class="cabecalho-trabalhos">

  <!-- Caixa do cabeçalho -->
  <div class="cabecalho-caixa">

    <!-- Texto pequeno acima do título -->
    <span>Galeria</span>

    <!-- Título principal da página -->
    <h1>Trabalhos de Personalização</h1>

    <!-- Texto explicativo da página -->
    <p>
      Aqui mostramos alguns trabalhos de personalização feitos pela MestreTech.
    </p>

  <!-- Fecha a caixa do cabeçalho -->
  </div>

<!-- Fecha o cabeçalho da página -->
</section>

<!-- Começa a parte principal da página -->
<main class="pagina-personalizacoes">

  <!-- Texto pequeno da secção -->
  <span>Personalizações feitas</span>

  <!-- Título da secção -->
  <h2>Os nossos trabalhos</h2>

  <!-- Descrição da secção -->
  <p>
    Nesta página colocamos exemplos de consolas e equipamentos personalizados para clientes.
  </p>

  <!-- Grelha onde ficam os cartões -->
  <div class="grelha-personalizacoes">

    <!-- Primeiro cartão -->
    <div class="cartao-personalizacao">

      <!-- Parte da imagem -->
      <div class="imagem-personalizacao">

        <!-- Imagem do trabalho -->
        <img src="../images/xbox.png" alt="Personalização de XBOX">

        <!-- Etiqueta do cartão -->
        <span>Personalização</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-personalizacao">

        <!-- Título do trabalho -->
        <h3>Personalização de XBOX</h3>

        <!-- Descrição do trabalho -->
        <p>
          Aplicação de skin personalizada para dar um novo visual à consola e proteger contra riscos.
        </p>

        <!-- Data e local -->
        <div class="info-personalizacao">
          <span>2 de Fevereiro, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o primeiro cartão -->
    </div>

    <!-- Segundo cartão -->
    <div class="cartao-personalizacao">

      <!-- Parte da imagem -->
      <div class="imagem-personalizacao">

        <!-- Imagem do trabalho -->
        <img src="../images/Ps4_rony.jpg" alt="PlayStation personalizada">

        <!-- Etiqueta do cartão -->
        <span>Personalização</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-personalizacao">

        <!-- Título do trabalho -->
        <h3>PlayStation personalizada</h3>

        <!-- Descrição do trabalho -->
        <p>
          Personalização de PlayStation com adesivo escolhido pelo cliente, deixando a consola com um estilo único.
        </p>

        <!-- Data e local -->
        <div class="info-personalizacao">
          <span>2 de Fevereiro, 2026</span>
          <span>Mindelo</span>
        </div>

      <!-- Fecha a parte do texto -->
      </div>

    <!-- Fecha o segundo cartão -->
    </div>

    <!-- Terceiro cartão -->
    <div class="cartao-personalizacao">

      <!-- Parte da imagem -->
      <div class="imagem-personalizacao">

        <!-- Imagem do trabalho -->
        <img src="../images/ps4_rony2.jpg" alt="Skin personalizada">

        <!-- Etiqueta do cartão -->
        <span>Skin</span>

      <!-- Fecha a parte da imagem -->
      </div>

      <!-- Parte do texto -->
      <div class="texto-personalizacao">

        <!-- Título do trabalho -->
        <h3>Skin personalizada</h3>

        <!-- Descrição do trabalho -->
        <p>
          Criação e aplicação de adesivo personalizado, de acordo com o tema escolhido pelo cliente.
        </p>

        <!-- Data e local -->
        <div class="info-personalizacao">
          <span>2 de Fevereiro, 2026</span>
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