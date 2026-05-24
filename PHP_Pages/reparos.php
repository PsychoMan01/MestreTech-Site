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
    
<?php require '../Modules/footer.php'; ?>