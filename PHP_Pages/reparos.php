<?php
$pagina_atual = 'reparos';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/repairs.css'];
require '../Modules/header.php';
?>
<!-- Começa o cabeçalho da página -->
<section class="cabecalho-pagina">

  <!-- Caixa que centraliza o conteúdo do cabeçalho -->
  <div class="cabecalho-pagina-interior">

    <!-- Pequeno texto acima do título -->
    <span class="etiqueta-secao">Galeria</span>

    <!-- Título principal da página -->
    <h1 class="aparecer">Trabalhos de Reparação</h1>

    <!-- Texto explicativo da página -->
    <p class="aparecer atraso-1">
      Aqui mostramos alguns serviços de reparação já feitos pela nossa equipa.
    </p>

  <!-- Fecha a caixa do cabeçalho -->
  </div>

<!-- Fecha o cabeçalho da página -->
</section>

<!-- Começa a parte principal da página -->
<main class="galeria-main">

  <!-- Texto pequeno da secção -->
  <span class="etiqueta-secao">Reparações feitas</span>

  <!-- Título da secção -->
  <h2 class="titulo-secao">Os nossos trabalhos</h2>

  <!-- Descrição da secção -->
  <p class="subtitulo-secao">
    Esta página serve para apresentar alguns serviços de reparação e montagem já realizados pela MestreTech.
  </p>

  <!-- Começa a grelha onde ficam os cartões -->
  <div class="galeria-grid" style="margin-top: 40px;">

    <!-- Começa o primeiro cartão -->
    <div class="evento-card aparecer">

      <!-- Caixa da imagem do primeiro cartão -->
      <div class="evento-card-img">

        <!-- Imagem da reparação da PS4 -->
        <img src="../images/placaps4.png" alt="Reparação de PS4">

        <!-- Etiqueta que aparece em cima da imagem -->
        <span class="evento-card-tag">Reparação</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Começa o corpo do cartão -->
      <div class="evento-card-corpo">

        <!-- Título do primeiro trabalho -->
        <h3>Reparação de PS4</h3>

        <!-- Descrição do primeiro trabalho -->
        <p>
          Serviço de diagnóstico e reparação de consola PS4, incluindo verificação de componentes internos.
        </p>

        <!-- Informação extra do trabalho -->
        <div class="evento-card-meta">

          <!-- Data do trabalho -->
          <span>15 de Março, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fecha a informação extra -->
        </div>

      <!-- Fecha o corpo do cartão -->
      </div>

    <!-- Fecha o primeiro cartão -->
    </div>

    <!-- Começa o segundo cartão -->
    <div class="evento-card aparecer atraso-1">

      <!-- Caixa da imagem do segundo cartão -->
      <div class="evento-card-img">

        <!-- Imagem da reparação do computador -->
        <img src="../images/concertopc.png" alt="Reparação de computador">

        <!-- Etiqueta que aparece em cima da imagem -->
        <span class="evento-card-tag">Reparação</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Começa o corpo do cartão -->
      <div class="evento-card-corpo">

        <!-- Título do segundo trabalho -->
        <h3>Reparação de computador</h3>

        <!-- Descrição do segundo trabalho -->
        <p>
          Diagnóstico de problemas em computador, limpeza e resolução de falhas de hardware ou software.
        </p>

        <!-- Informação extra do trabalho -->
        <div class="evento-card-meta">

          <!-- Data do trabalho -->
          <span>15 de Março, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fecha a informação extra -->
        </div>

      <!-- Fecha o corpo do cartão -->
      </div>

    <!-- Fecha o segundo cartão -->
    </div>

    <!-- Começa o terceiro cartão -->
    <div class="evento-card aparecer atraso-2">

      <!-- Caixa da imagem do terceiro cartão -->
      <div class="evento-card-img">

        <!-- Imagem da montagem do computador -->
        <img src="../images/montagem.png" alt="Montagem de computador">

        <!-- Etiqueta que aparece em cima da imagem -->
        <span class="evento-card-tag">Montagem</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Começa o corpo do cartão -->
      <div class="evento-card-corpo">

        <!-- Título do terceiro trabalho -->
        <h3>Montagem de computador</h3>

        <!-- Descrição do terceiro trabalho -->
        <p>
          Montagem de computador com peças fornecidas pelo cliente, deixando o equipamento pronto para uso.
        </p>

        <!-- Informação extra do trabalho -->
        <div class="evento-card-meta">

          <!-- Data do trabalho -->
          <span>15 de Março, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fecha a informação extra -->
        </div>

      <!-- Fecha o corpo do cartão -->
      </div>

    <!-- Fecha o terceiro cartão -->
    </div>

    <!-- Começa o quarto cartão -->
    <div class="evento-card aparecer atraso-3">

      <!-- Caixa da imagem do quarto cartão -->
      <div class="evento-card-img">

        <!-- Imagem de notebook, usada como exemplo de manutenção/reparação -->
        <img src="../images/portatil.png" alt="Manutenção de notebook">

        <!-- Etiqueta que aparece em cima da imagem -->
        <span class="evento-card-tag">Manutenção</span>

      <!-- Fecha a caixa da imagem -->
      </div>

      <!-- Começa o corpo do cartão -->
      <div class="evento-card-corpo">

        <!-- Título do quarto trabalho -->
        <h3>Manutenção de notebook</h3>

        <!-- Descrição do quarto trabalho -->
        <p>
          Verificação do estado do notebook, limpeza básica e análise de possíveis problemas no equipamento.
        </p>

        <!-- Informação extra do trabalho -->
        <div class="evento-card-meta">

          <!-- Data do trabalho -->
          <span>20 de Janeiro, 2026</span>

          <!-- Local do trabalho -->
          <span>Mindelo</span>

        <!-- Fecha a informação extra -->
        </div>

      <!-- Fecha o corpo do cartão -->
      </div>

    <!-- Fecha o quarto cartão -->
    </div>

  <!-- Fecha a grelha dos cartões -->
  </div>

  <!-- Link para voltar para a página da galeria -->
  <a href="galery.php" class="botao-principal">Voltar para a Galeria</a>

<!-- Fecha a parte principal da página -->
</main>

<?php // Abre PHP novamente para chamar o rodapé

require '../Modules/footer.php'; // Chama o rodapé do site

?> 

    <section class="cabecalho-pagina"> <!-- Parte do topo da página, que tem o título principal -->

         <div class="cabecalho-pagina-interior">  <!-- Uma caixa interna do cabeçalho da página -->

             <h1>Trabalhos de Reparação</h1>  <!-- Título da página -->

                <p>Aqui mostramos alguns dos nossos serviços de reparação que já estão realizados e devidamente entregue aos clientes.</p> <!-- Uma descrição da página -->

        </div>

    </section>

    <section class="parte"> <!-- Parte onde os trabalhos são colocados -->

        <div class="parte-1"> <!-- Uma outra caixa interna usada para deixar o conteudo centralizado -->

            <h3 class="titulo">Os nossos trabalhos</h3> <!-- Título da secção -->

                    <p class="subtitulo-secao">
                        Esta página serve para mostrar os serviços de reparação já feitos pela nossa equipa.  <!-- Descrição sobre o que se trata -->
                    </p>
<div> <!-- Caixa do primeiro trabalho -->
  
  <img src="images/placaps4.png"> <!-- Imagem do de uma reparação de uma PS4 -->

  <h3>Reparação de PS4</h3> <!-- Título do trabalho -->

  <!-- Descrição do serviço realizado -->
  <p>
    Serviço de diagnóstico e reparação de consola PS4, incluindo verificação de componentes internos.
  </p>

</div> <!-- Fim da primeiro caixa -->

<div> <!-- Caixa do segundo trabalho -->
  <!-- Imagem do trabalho de reparação do computador -->
  <img src="images/concertopc.png">

  <h3>Reparação de computador</h3> <!-- Título do trabalho -->

  <!-- Descrição do serviço realizado -->
  <p>
    Diagnóstico de problemas em computador, limpeza e resolução de falhas de hardware ou software.
  </p>

</div> <!-- Fim da segunda caixa -->

<div> <!-- Caixa do terceiro trabalho -->
  
  <img src="images/montagem.png"> <!-- Imagem do trabalho de montagem do computador -->

  <h3>Montagem de computador</h3> <!-- Título do trabalho -->

  <!-- Descrição do serviço realizado -->
  <p>
    Montagem de computadores com peças fornecidas pelo cliente.
  </p>

<!-- Fim da terceira caixa -->
</div>

</div> <!-- Fim da lista onde fica os cartões dos trabalhos -->

<a href="galery.html" class="botao-principal">Voltar para a Galeria</a> <!-- Botão com link para voltar à página da galeria -->

</div> <!-- Fim da caixa da parte principal -->

</section> <!-- Fim da parte dos trabalhos -->

<footer> <!-- Início do rodapé da página -->

    <div class="rodape-interior"> <!-- Caixa interna do rodapé -->

    <div class="rodape-logo">Mestre<span>Tech</span></div> <!-- Logo da MestreTech no rodapé -->

    <div class="rodape-links"> <!-- Área dos links do rodapé -->

      <a href="index.php">Início</a> <!-- Link para a página inicial -->

      <a href="sobre.php">Sobre</a> <!-- Link para a página Sobre -->

      <a href="servicos.php">Serviços</a> <!-- Link para a página Serviços -->

      <a href="galery.php">Galeria</a> <!-- Link para a página Galeria -->

      <a href="contacto.php">Contacto</a> <!-- Link para a página Contacto -->

    </div> <!-- Fim da área dos links do rodapé -->

    <div class="rodape-direitos">© 2026 MestreTech. Todos os direitos reservados.</div>

  </div> <!-- Fim da caixa interna do rodapé -->

</footer> <!-- Fim do rodapé -->

<?php require '../Modules/footer.php'; ?>
