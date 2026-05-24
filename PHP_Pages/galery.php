<?php
$pagina_atual = 'galery';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/galery.css'];
require '../Modules/header.php';
?>

<!-- banner com video de fundo -->
<section class="galeria-banner video-banner">
  <video autoplay muted loop playsinline class="video-fundo">
    <source src="videos/galeria-bg.mp4" type="video/mp4">
    <source src="https://assets.mixkit.co/videos/preview/mixkit-tech-computer-tools-32844-large.mp4" type="video/mp4">
  </video>
  <div class="galeria-banner-interior">
    <span class="etiqueta-secao">Os Nossos Trabalhos</span>
    <h1>Galeria</h1>
    <p>Aqui podes ver alguns dos trabalhos que já fizemos e fotos da nossa equipa.</p>
  </div>
</section>

<!-- barra de filtros -->
<section class="galeria-filtros-secao">
  <div class="galeria-filtros-interior">
    <div class="filtros-wrapper">
      <button class="filtro-btn activo" data-filtro="todos">Todos</button>
      <button class="filtro-btn" data-filtro="concerto">Reparações</button>
      <button class="filtro-btn" data-filtro="workshop">Personalizações</button>
      <button class="filtro-btn" data-filtro="evento">Limpezas</button>
      <button class="filtro-btn" data-filtro="vendas">vendas</button>
    </div>

    <div class="pesquisa-wrapper">
      <div class="pesquisa-campo">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2">
          <circle cx="11" cy="11" r="8"/>
          <path d="m21 21-4.35-4.35"/>
        </svg>
        <input type="text" id="campoPesquisa" placeholder="Procurar...">
      </div>
      <button class="botao-principal" onclick="filtrarGaleria()">Procurar</button>
    </div>
  </div>
</section>

<!-- grid com os trabalhos -->
<main class="galeria-main">
  <div class="galeria-grid" id="galeriaGrid">

    <div class="evento-card aparecer" data-categoria="concerto">
      <div class="evento-card-img">
        <img src="images/placaps4.png" alt="Reparação de PS4">
        <span class="evento-card-tag">Reparação</span>
      </div>
      <div class="evento-card-corpo">
        <h3>Reparação de PS4</h3>
        <p>Conserto de consolas PS4, des de troca de componentes internos até conserto mais aprofundados de alguns componentes</p>
        <div class="evento-card-meta">
          <span>15 de Março, 2026</span>
          <span>Mindelo, São Vicente</span>
        </div>
      </div>
    </div>

  
    <div class="evento-card aparecer" data-categoria="concerto">
      <div class="evento-card-img">
        <img src="images/montagem.png" alt="Montagem">
        <span class="evento-card-tag">Montagem Desktop</span>
      </div>
      <div class="evento-card-corpo">
        <h3>Montagem de computadores</h3>
        <p>O cliente fornece todas as peças necessárias para ser feita a montagem do seu equipamento</p>
        <div class="evento-card-meta">
          <span>15 de Março, 2026</span>
          <span>Mindelo, São Vicente</span>
        </div>
      </div>
    </div>


    <div class="evento-card aparecer" data-categoria="concerto">
      <div class="evento-card-img">
        <img src="images/concertopc.png" alt="Reparação de Notebooks">
        <span class="evento-card-tag">Reparação</span>
      </div>
      <div class="evento-card-corpo">
        <h3>Reparação de nootbooks</h3>
        <p>Diagnóstico completo do nootbook para saber se tem alguma falha e posteriormente arranja-la</p>
        <div class="evento-card-meta">
          <span>15 de Março, 2026</span>
          <span>Mindelo, São Vicente</span>
        </div>
      </div>
    </div>


    <div class="evento-card aparecer atraso-1" data-categoria="workshop">
      <div class="evento-card-img">
        <img src="images/xbox.png" alt="Personalização XBOX">
        <span class="evento-card-tag">Personalização</span>
      </div>
      <div class="evento-card-corpo">
        <h3>Personalização de XBOX</h3>
        <p>Fazemos skins personalizadas de acordo com a escolha do cliente, que não só dão um novo estilo ao equipamento mas também aumentam a sua durabilidade contra riscos.</p>
        <div class="evento-card-meta">
          <span>2 de Fevereiro, 2026</span>
          <span>Mindelo</span>
        </div>
      </div>
    </div>


    <div class="evento-card aparecer atraso-1" data-categoria="workshop">
      <div class="evento-card-img">
        <img src="images/Ps4_rony.jpg" alt="Personalização Play Station">
        <span class="evento-card-tag">Personalização</span>
      </div>
      <div class="evento-card-corpo">
        <h3>Play Station 3 e 4 personalizada</h3>
        <p>Consiste na criação de uma capa personalizada para dar um novo visual ao playstation e também aumentar a durabilidade do produto.</p>
        <div class="evento-card-meta">
          <span>2 de Fevereiro, 2026</span>
          <span>Mindelo</span>
        </div>
      </div>
    </div>



    <div class="evento-card aparecer atraso-2" data-categoria="evento">
      <div class="evento-card-img">
        <img src="images/portatil.png"Limpeza de notebook">
        <span class="evento-card-tag">Limpeza</span>
      </div>
      <div class="evento-card-corpo">
        <h3>Limpeza de Notebook</h3>
        <p>Removemos toda a poeira interna, ou tambem limpeza de software e troca da pasta térmica.</p>
        <div class="evento-card-meta">
          <span>20 de Janeiro, 2026</span>
          <span>Mindelo</span>
        </div>
      </div>
    </div>

  </div>
  <div class="sem-resultados" id="semResultados" style="display:none;">
    <p>Nenhum resultado encontrado.</p>
  </div>
</main>

<script>
  // script de filtros da galeria
  var botoes = document.querySelectorAll('.filtro-btn');
  var cards = document.querySelectorAll('.evento-card');
  var pesquisaInput = document.getElementById('campoPesquisa');
  var semResultados = document.getElementById('semResultados');

  var filtroAtivo = 'todos';

  function atualizarFiltro() {
    var textoPesquisa = pesquisaInput.value.toLowerCase();
    var visiveis = 0;

    // percorrer todos os cards e ver quais devem aparecer
    for (var i = 0; i < cards.length; i++) {
      var card = cards[i];
      var categoria = card.getAttribute('data-categoria');
      var titulo = card.querySelector('h3').innerText.toLowerCase();
      var descricao = card.querySelector('p').innerText.toLowerCase();

      var matchFiltro = (filtroAtivo === 'todos' || categoria === filtroAtivo);
      var matchPesquisa = (textoPesquisa === '' || titulo.indexOf(textoPesquisa) !== -1 || descricao.indexOf(textoPesquisa) !== -1);

      if (matchFiltro && matchPesquisa) {
        card.style.display = '';
        visiveis++;
      } else {
        card.style.display = 'none';
      }
    }

    // mostrar mensagem se nao houver resultados
    if (visiveis === 0) {
      semResultados.style.display = 'block';
    } else {
      semResultados.style.display = 'none';
    }
  }

  // adicionar evento de clique a cada botao de filtro
  for (var i = 0; i < botoes.length; i++) {
    botoes[i].addEventListener('click', function() {
      // remover activo de todos e por no clicado
      for (var j = 0; j < botoes.length; j++) {
        botoes[j].classList.remove('activo');
      }
      this.classList.add('activo');
      filtroAtivo = this.getAttribute('data-filtro');
      atualizarFiltro();
    });
  }

  // pesquisa em tempo real enquanto digita
  pesquisaInput.addEventListener('keyup', function() {
    atualizarFiltro();
  });

  function filtrarGaleria() {
    atualizarFiltro();
  }

  atualizarFiltro();
</script>

<?php require '../Modules/footer.php'; ?>