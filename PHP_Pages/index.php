<!-- pagina inicial do site da mestretech -->
<!-- emoss um esforça ne faze ess muv pereit pa bsot podia intendel, até cal identação um esforça, ta tud comentod -->

<?php
// Define a página ativa (aparece em negrito/sublinhado no menu)
$pagina_atual = 'inicio';

// Título da aba do browser
$titulo_pagina = 'MestreTech';

// CSS específico desta página (além do base.css que já está no header)
$css_extra = ['../CSS/index.css'];

// Inclui o cabeçalho
require '../Modules/header.php';
?>

<!-- secao principal com fundo escuro e imagem -->
<section class="secao-principal">
  <div class="secao-principal-interior">
    <div class="texto-principal">
      <div class="etiqueta-destaque aparecer">Tecnologia para toda a gente</div>
      <h1 class="aparecer atraso-1">
        Bem-vindo à<br>
        <span class="destaque">MestreTech</span>
      </h1>
      <p class="aparecer atraso-2">
        Somos um grupo de alunos de Mindelo que gosta de tecnologia
        e quer ajudar as pessoas com os seus equipamentos.
      </p>
      <div class="botoes-principal aparecer atraso-3">
        <a href="servicos.php" class="botao-principal">Ver Serviços →</a>
        <a href="sobre.php" class="botao-secundario">Quem somos</a>
      </div>
    </div>

    <!-- cartao com lista de servicos e estatisticas -->
    <div class="coluna-cartao aparecer atraso-4">
      <div class="cartao-servicos">
        <div class="cartao-servicos-titulo">O que fazemos</div>
        <ul class="lista-servicos-mini">
          <li>Reparação de computadores</li>
          <li>Reparação de telemóveis</li>
          <li>Instalação de programas</li>
          <li>Limpeza de equipamentos</li>
          <li>Personalização de t-shirts</li>
        </ul>
        <div class="estatisticas">
          <div class="estatistica">
            <div class="estatistica-numero">100%</div>
            <div class="estatistica-legenda">Dedicação</div>
          </div>
          <div class="estatistica">
            <div class="estatistica-numero">5</div>
            <div class="estatistica-legenda">Elementos</div>
          </div>
          <div class="estatistica">
            <div class="estatistica-numero">6+</div>
            <div class="estatistica-legenda">Serviços</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- secao de servicos -->
<section class="secao">
  <div class="secao-interior">
    <span class="etiqueta-secao">O que fazemos</span>
    <h2 class="titulo-secao">Os Nossos Serviços</h2>
    <p class="subtitulo-secao">
      Tentamos ajudar em tudo o que tem a ver com tecnologia,
      desde reparações a personalizações.
    </p>

    <div class="grelha-servicos">

      <div class="cartao-servico aparecer">
        <h3>Reparação de Computadores</h3>
        <p>Se o teu computador está partido ou lento, nós tentamos arranjar. Trabalhamos com portáteis e computadores de mesa.</p>
      </div>

      <div class="cartao-servico aparecer atraso-1">
        <h3>Reparação de Telemóveis</h3>
        <p>Ecrã partido, bateria fraca ou câmara avariada? Podemos tentar resolver isso por ti.</p>
      </div>

      <div class="cartao-servico aparecer atraso-2">
        <h3>Instalação de Programas</h3>
        <p>Instalamos o Windows, drivers, antivírus e outros programas que precisares.</p>
      </div>

      <div class="cartao-servico aparecer atraso-3">
        <h3>Limpeza de Equipamentos</h3>
        <p>Limpamos o interior dos computadores para não aquecerem tanto e durarem mais tempo.</p>
      </div>

      <div class="cartao-servico aparecer atraso-4">
        <h3>Personalização de Consolas</h3>
        <p>Personalizamos PlayStation, XBOX e outros equipamentos do jeito que quiseres.</p>
      </div>

      <div class="cartao-servico aparecer atraso-4">
        <h3>T-Shirts Personalizadas</h3>
        <p>Fazemos t-shirts e camisolas com o design que o cliente quiser.</p>
      </div>

    </div>
  </div>
</section>

<!-- secao sobre nos -->
<section class="secao" style="background: white; padding-top: 80px; padding-bottom: 80px;">
  <div class="secao-interior">
    <div class="grelha-sobre">
      <div class="coluna-sobre-visual">
        <div class="cartao-sobre-principal aparecer">
          <h3>Quem somos</h3>
          <p>
            Somos o Arténio, o Massimiliano, o Pedro, o William e o Daniel.
            Somos alunos e criámos a MestreTech como um projeto da escola
            para aprender a trabalhar em equipa e em situações reais.
          </p>
          <div class="etiquetas-equipa">
            <span class="etiqueta-membro">Arténio</span>
            <span class="etiqueta-membro">Massimiliano</span>
            <span class="etiqueta-membro">Daniel</span>
            <span class="etiqueta-membro">Pedro</span>
            <span class="etiqueta-membro">William</span>
          </div>
        </div>

        <div class="cartao-sobre-pequeno aparecer atraso-2">
          <div class="conteudo-sobre">
            <h4>O nosso objetivo</h4>
            <p>Ajudar as pessoas com tecnologia a preços acessíveis.</p>
          </div>
        </div>
      </div>

      <div class="aparecer atraso-1">
        <span class="etiqueta-secao">Sobre nós</span>
        <h2 class="titulo-secao">Um projeto feito com esforço</h2>
        <p class="subtitulo-secao">
          Somos um grupo pequeno mas estamos a dar o nosso melhor
          para oferecer um bom serviço a quem precisar.
        </p>

        <ul class="lista-caracteristicas">
          <li><span class="icone-visto">✓</span> Estamos a aprender mas tratamos os equipamentos com cuidado</li>
          <li><span class="icone-visto">✓</span> Os preços são acessíveis porque somos estudantes</li>
          <li><span class="icone-visto">✓</span> Somos honestos sobre o que conseguimos e o que não conseguimos fazer</li>
          <li><span class="icone-visto">✓</span> Tentamos resolver o problema o mais rápido possível</li>
        </ul>

        <a href="sobre.php" class="botao-principal" style="margin-top: 36px; display: inline-flex;">
          Conhecer a equipa →
        </a>
      </div>
    </div>
  </div>
</section>
</body>

<?php require '../Modules/footer.php'; ?>
