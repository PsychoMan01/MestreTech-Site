<?php
$pagina_atual = 'reparos';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/repairs.css'];
require '../Modules/header.php';
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