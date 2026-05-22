<!-- pagina sobre nos-->
<?php
$pagina_atual = 'sobre';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/index.css'];
require '../Modules/header.php';
?>

<!-- banner com video de fundo -->
<section class="cabecalho-pagina video-header">
  <video autoplay muted loop playsinline class="video-fundo">
    <source src="videos/tech-bg.mp4" type="video/mp4">
    <!-- se ess de riba ca da ess de box pode da-->
    <source src="https://assets.mixkit.co/videos/preview/mixkit-close-up-of-hands-typing-on-a-laptop-34626-large.mp4" type="video/mp4">
  </video>
  <div class="cabecalho-pagina-interior">
    <span class="etiqueta-secao" style="color: #00aaee;">Quem somos</span>
    <h1 class="aparecer">Sobre a MestreTech</h1>
    <p class="aparecer atraso-1">Somos um grupo de alunos de Mindelo que criou este projeto para aprender e ajudar.</p>
  </div>
</section>

<!-- informacoes sobre o projeto -->
<section class="secao">
  <div class="secao-interior">
    <div class="grelha-sobre">
      <div class="aparecer">
        <span class="etiqueta-secao">O nosso projeto</span>
        <h2 class="titulo-secao">Criados com propósito</h2>
        <p class="subtitulo-secao">
          A MestreTech nasceu de um projeto conjunto com o objetivo de simular
          um ambiente real de trabalho, desenvolvendo competências técnicas
          e de equipa entre os seus membros.
        </p>

        <ul class="lista-caracteristicas" style="margin-top: 28px;">
          <li>
            <span class="icone-visto">✓</span>
            Experiência prática em ambiente real de trabalho
          </li>
          <li>
            <span class="icone-visto">✓</span>
            Desenvolvimento contínuo de competências técnicas
          </li>
          <li>
            <span class="icone-visto">✓</span>
            Trabalho colaborativo e em equipa
          </li>
          <li>
            <span class="icone-visto">✓</span>
            Foco na satisfação e acessibilidade para os clientes
          </li>
        </ul>
      </div>

      <div class="aparecer atraso-1">
        <div class="cartao-sobre-principal">
          <h3>O nosso compromisso</h3>
          <p>
            Oferecemos serviços acessíveis e de qualidade em reparação tecnológica.
            Cada equipamento que recebemos é tratado com cuidado e profissionalismo,
            garantindo o melhor resultado para o cliente.
          </p>
          <div class="etiquetas-equipa" style="margin-top: 28px;">
            <span class="etiqueta-membro">Qualidade</span>
            <span class="etiqueta-membro">Confiança</span>
            <span class="etiqueta-membro">Rapidez</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- secao dos membros da equipa -->
<section class="secao" style="background: white; padding-top: 80px; padding-bottom: 80px;">
  <div class="secao-interior">
    <span class="etiqueta-secao">A equipa</span>
    <h2 class="titulo-secao">As pessoas por trás da MestreTech</h2>
    <p class="subtitulo-secao">
      Três pessoas com um objetivo comum: oferecer o melhor serviço tecnológico possível.
    </p>

    <div class="grelha-equipa">
      <div class="cartao-membro aparecer">
        <h3>Arténio e Pedro</h3>
        <p>Técnicos de hardware, reparação de equipamentos e programador</p>
      </div>

      <div class="cartao-membro aparecer atraso-1">
        <h3>Massimiliano</h3>
        <p>Criador do site</p>
      </div>

      <div class="cartao-membro aparecer atraso-2">
        <h3>Daniel e William</h3>
        <p>Responsável pelas Redes Sociais e Marketing</p>
      </div>
    </div>

    <!-- bloco de missao la dbox -->
    <div class="bloco-missao aparecer atraso-3">
      <h2>A Nossa Missão</h2>
      <p>
        Oferecer serviços acessíveis e de qualidade em reparação tecnológica,
        ajudando os clientes a manterem os seus equipamentos em perfeito estado
        de funcionamento, com transparência e profissionalismo.
      </p>
    </div>
  </div>
</section>

<?php require '../Modules/footer.php'; ?>
