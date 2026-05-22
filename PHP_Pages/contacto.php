<!-- pagina de contacto-->
<?php
$pagina_atual = 'contacto';
$titulo_pagina = 'MestreTech';
$css_extra = ['../CSS/index.css'];
require '../Modules/header.php';
?>

<section class="cabecalho-pagina video-header">
  <video autoplay muted loop playsinline class="video-fundo">
    <source src="videos/contacto-bg.mp4" type="video/mp4">
    <source src="https://assets.mixkit.co/videos/preview/mixkit-typing-on-a-laptop-keyboard-2258-large.mp4" type="video/mp4">
  </video>
  <div class="cabecalho-pagina-interior">
    <span class="etiqueta-secao" style="color: #00aaee;">Fala connosco</span>
    <h1 class="aparecer">Contacto</h1>
    <p class="aparecer atraso-1">Se precisares de ajuda ou quiseres saber o preço de algum serviço, entra em contacto.</p>
  </div>
</section>

<section class="secao">
<div class="secao-interior">
  <span class="etiqueta-secao">Contacto</span>
  <h2 class="titulo-secao">Como nos encontrar</h2>
  <p class="subtitulo-secao">
    Podes falar connosco pelo formulário em baixo ou usar um dos contactos diretos.
  </p>

  <div class="grelha-contacto">

    <!-- informacoes de contacto direto -->
    <div class="info-contacto">
      <div class="item-contacto aparecer">
        <div><h4>Onde estamos</h4><p>Mindelo, Cabo Verde</p></div>
      </div>
      <div class="item-contacto aparecer atraso-1">
        <div><h4>Email</h4><p>mestretechcvoficial00@gmail.com</p></div>
      </div>
      <div class="item-contacto aparecer atraso-2">
        <div><h4>Telefone</h4><p>+238 9884938 / +238 9506585 / +238 5898449</p></div>
      </div>
      <div class="item-contacto aparecer atraso-3">
        <div><h4>Horário</h4><p>Segunda a Sexta, das 8h às 18h</p></div>
      </div>
    </div>

    <!-- formulario de contacto -->
    <div class="formulario-contacto aparecer atraso-1">
      <h3>Manda-nos uma mensagem</h3>

      <div class="grupo-campo">
        <label for="nome">O teu nome</label>
        <input type="text" id="nome" placeholder="Escreve o teu nome" required>
      </div>

      <div class="grupo-campo">
        <label for="email">O teu email</label>
        <input type="email" id="email" placeholder="o.teu@email.com" required>
      </div>

      <div class="grupo-campo">
        <label for="assunto">Assunto</label>
        <input type="text" id="assunto" placeholder="Ex: Quero reparar o meu computador">
      </div>

      <div class="grupo-campo">
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" placeholder="Explica o teu problema ou o que precisas..." required></textarea>
      </div>

      <button type="button" id="btnEnviar" class="botao-enviar" onclick="enviarMensagem()">Enviar</button>

      <div id="mensagemSucesso" class="mensagem-sucesso">
        Mensagem enviada! Vamos responder assim que possível.
      </div>
    </div>

  </div>
</div>
</section>

<script>
  async function enviarMensagem() {
    var nome     = document.getElementById('nome').value.trim();
    var email    = document.getElementById('email').value.trim();
    var assunto  = document.getElementById('assunto').value.trim();
    var mensagem = document.getElementById('mensagem').value.trim();

    var btn = document.getElementById('btnEnviar');

    if (nome === '' || email === '' || mensagem === '') {
      alert("Por favor preenche todos os campos obrigatórios.");
      return;
    }

    btn.disabled    = true;
    btn.textContent = 'A enviar...';

    var dados = new FormData();
    dados.append('nome',     nome);
    dados.append('email',    email);
    dados.append('assunto',  assunto);
    dados.append('mensagem', mensagem);

    try {
      var resposta  = await fetch('../config/enviar_mensagem.php', { method: 'POST', body: dados });
      var resultado = await resposta.json();

      if (resultado.sucesso) {
        document.getElementById('nome').value     = '';
        document.getElementById('email').value    = '';
        document.getElementById('assunto').value  = '';
        document.getElementById('mensagem').value = '';
        document.getElementById('mensagemSucesso').style.display = 'block';
        setTimeout(function() {
          document.getElementById('mensagemSucesso').style.display = 'none';
        }, 5000);
      } else {
        alert('Erro: ' + (resultado.mensagem || 'Tenta novamente.'));
      }
    } catch (e) {
      alert('Erro ao enviar. Verifica a ligação.');
    } finally {
      btn.disabled    = false;
      btn.textContent = 'Enviar';
    }
  }
</script>
<?php require '../Modules/footer.php'; ?>