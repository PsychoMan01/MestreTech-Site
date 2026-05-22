<!-- pagina de servicos-->
<?php
$pagina_atual = 'servicos';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/index.css'];
require '../Modules/header.php';
?>

<!-- banner com video -->
<section class="cabecalho-pagina video-header">
  <video autoplay muted loop playsinline class="video-fundo">
    <source src="videos/servicos-bg.mp4" type="video/mp4">
    <source src="https://assets.mixkit.co/videos/preview/mixkit-fixing-a-computer-motherboard-32845-large.mp4" type="video/mp4">
  </video>
  <div class="cabecalho-pagina-interior">
    <span class="etiqueta-secao" style="color: #00aaee;">O que fazemos</span>
    <h1 class="aparecer">Os Nossos Serviços</h1>
    <p class="aparecer atraso-1">
      Aqui podes ver tudo o que a MestreTech consegue fazer por ti, desde reparações até personalizacoes.
    </p>
  </div>
</section>

<!-- lista de todos os servicos -->
<section class="secao">
  <div class="secao-interior">
    <span class="etiqueta-secao">Serviços disponíveis</span>
    <h2 class="titulo-secao">Tudo o que precisas</h2>
    <p class="subtitulo-secao">
      Oferecemos um conjunto completo de serviços técnicos para manter
      os seus equipamentos sempre a funcionar.
    </p>

    <div class="lista-servicos">
      <div class="linha-servico aparecer">
        <div class="conteudo-linha-servico">
          <h3>Reparação de Computadores</h3>
          <p>
            Diagnóstico e reparação completa de portáteis e computadores de secretária.
            Substituição de componentes, resolução de avarias de hardware e software.
          </p>
        </div>
        <div class="seta-servico">→</div>
      </div>

      <div class="linha-servico aparecer atraso-1">
        <div class="conteudo-linha-servico">
          <h3>Reparação de Telemóveis</h3>
          <p>
            Substituição de ecrãs partidos, baterias gastas, câmaras e outros componentes.
            Compatível com Android e iOS.
          </p>
        </div>
        <div class="seta-servico">→</div>
      </div>

      <div class="linha-servico aparecer atraso-2">
        <div class="conteudo-linha-servico">
          <h3>Instalação de Software</h3>
          <p>
            Instalação e configuração de sistemas operativos (Windows, Linux),
            drivers, antivírus e aplicações essenciais para o seu dia a dia.
          </p>
        </div>
        <div class="seta-servico">→</div>
      </div>

      <div class="linha-servico aparecer atraso-3">
        <div class="conteudo-linha-servico">
          <h3>Limpeza e Manutenção</h3>
          <p>
            Limpeza interna de pó, substituição de pasta térmica e manutenção preventiva
            para prolongar a vida útil dos seus equipamentos.
          </p>
        </div>
        <div class="seta-servico">→</div>
      </div>

      <div class="linha-servico aparecer atraso-4">
        <div class="conteudo-linha-servico">
          <h3>Diagnóstico de Problemas</h3>
          <p>
            Análise completa do equipamento para identificar falhas de hardware ou software,
            com relatório detalhado e orçamento transparente.
          </p>
        </div>
        <div class="seta-servico">→</div>
      </div>
    </div>
  </div>
</section>

<!-- caixa azul la d box -->
<section class="secao" style="background: white; padding-top: 0; padding-bottom: 100px;">
  <div class="secao-interior">
    <div class="caixa-cta">
      <h2>Tem alguma questão?</h2>
      <p>
        Entre em contacto connosco para saber mais sobre os nossos serviços
        ou para pedir um orçamento.
      </p>
      <a href="contacto.php" class="botao-principal">Entrar em Contacto →</a>
    </div>
  </div>
</section>

<?php require '../Modules/footer.php'; ?>
