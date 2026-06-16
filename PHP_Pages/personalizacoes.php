<?php
$pagina_atual = 'reparos';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/repairs.css'];
require '../Modules/header.php';
?>

<!-- Começa o cabeçalho da página -->
<section class="cabecalho-pagina">

  <!-- Caixa interna do cabeçalho -->
  <div>

    <!-- Texto pequeno acima do título -->
    <span>Galeria</span>

    <!-- Título principal da página -->
    <h1>Trabalhos de Personalização</h1>

    <!-- Pequena explicação da página -->
    <p>
      Aqui mostramos alguns trabalhos de personalização feitos pela MestreTech.
    </p>

  <!-- Fecha a caixa interna do cabeçalho -->
  </div>

<!-- Fecha o cabeçalho da página -->
</section>

<!-- Começa a parte principal da página -->
<main>

  <!-- Texto pequeno da secção -->
  <span>Personalizações feitas</span>

  <!-- Título da secção -->
  <h2>Os nossos trabalhos</h2>

  <!-- Descrição simples da secção -->
  <p>
    Nesta página colocamos exemplos de consolas e equipamentos personalizados para clientes.
  </p>

  <!-- Grelha onde ficam os cartões -->
  <div>

    <!-- Primeiro cartão -->
    <div>

      <!-- Caixa da imagem -->
      <div>

        <!-- Imagem da personalização de Xbox -->
        <img src="../images/xbox.png">

        <!-- Etiqueta do cartão -->
        <span>Personalização</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Personalização de XBOX</h3>

        <!-- Descrição do trabalho -->
        <p>
          Aplicação de skin personalizada para dar um novo visual à consola e proteger contra riscos.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>2 de Fevereiro, 2026</span>

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

        <!-- Imagem da PlayStation personalizada -->
        <img src="../images/Ps4_rony.jpg">

        <!-- Etiqueta do cartão -->
        <span>Personalização</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>PlayStation personalizada</h3>

        <!-- Descrição do trabalho -->
        <p>
          Personalização de PlayStation com adesivo escolhido pelo cliente, deixando a consola com um estilo único.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>2 de Fevereiro, 2026</span>

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

        <!-- Outra imagem de personalização -->
        <img src="../images/ps4_rony2.jpg">

        <!-- Etiqueta do cartão -->
        <span>Skin</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Corpo do cartão -->
      <div>

        <!-- Título do trabalho -->
        <h3>Skin personalizada</h3>

        <!-- Descrição do trabalho -->
        <p>
          Criação e aplicação de adesivo personalizado, de acordo com o tema escolhido pelo cliente.
        </p>

        <!-- Informações extras -->
        <div>

          <!-- Data do trabalho -->
          <span>2 de Fevereiro, 2026</span>

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