<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Fronter Engenharia de Obras</title>
    <meta name="viewport" content="width=device-width, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    	
 
  </head>
  <body>
  <?php include "assets/includes/header.php" ?>
  <section class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide w-100 carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/image/fundo1.webp" class="d-block w-100" alt="...">
          <div class="title">
            <p class="h1"><strong>Saneamento é nossa obra de vida</strong></p>
            <p class="h5">Obras de saneamento vão muito além do básico, mas, aqui na Fronter fazemos qualquer processo complexo parecer simples.</p>
            <a href="obras.php?q=saneamento" class="btn btn-green">Veja tudo o que já construímos</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/image/fundo2.webp" class="d-block w-100" alt="...">
          <div class="title mid">
            <p class="h1"><strong>Gere e distribua sua própria energia</strong></p>
            <p class="h5">Com a Fronter, você pode construir centrais hidrelétricas em sua propriedade. Não espere essa oportunidade se apagar.</p>
            <a href="obras.php?q=energia" class="btn btn-green">Veja tudo o que já construímos</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/image/fundo3.webp" class="d-block w-100" alt="...">
          <div class="title">
            <p class="h1"><strong>Recuperação de Obras Especiais</strong></p>
            <p class="h5"> Quem cuida, tem! Conserve seus investimentos e os mantenha ativos com o trabalho dos especialistas em recuperação estrutural aqui da Fronter.</p>
            <a href="obras.php?q=obras especiais" class="btn btn-green">Veja tudo o que já construímos</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <section class="section0">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="obras.php?q=saneamento">
            <div class="card">
              <div class="img">
                <img src="assets/image/send_icones_01.webp" />
              </div>
              <div class="txt">
                <p class="h3">Saneamento</p>
                <p>Toda construção relacionada ao abastecimento de água pótavel, coleta e tratamento de esgoto.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="obras.php?q=energia">
            <div class="card">
              <div class="img">
                <img src="assets/image/send_icones_02.webp" />
              </div>
              <div class="txt">
                <p class="h3">Energia</p>
                <p>São estruturas robustas de geração e distribuição de energia. Construímos PCHs e subestações.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="obras.php?q=obras especiais">
            <div class="card">
              <div class="img">
                <img src="assets/image/send_icones_03.webp" />
              </div>
              <div class="txt">
                <p class="h3">Obras Especiais</p>
                <p>São obras de recuperação estrutural que envolvem engenharia complexa e requerem especialistas.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="video">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="relativ">
            <p class="h6">Porque nós?</p>
            <p class="h2">Obras complexas de médio porte</p>
          </div>
          <p class="tres">Nos estabelecemos com firmeza no mercado de obras complexas. Por que? Hoje nossa equipe atua com altíssima perfomance dentro das demandas desse nível. Nos conectamos com os maiores experts do país para resolver os seus desafios, pois, nossa proposta é construir o melhor.</p>
          <a class="btn btn-green" href="">Ver portfólio</a>
        </div>
        <div class="col-sm-6 col-md-6">
          <div>
            <video controls poster="assets/image/poster.webp">
              <source type="video/mp4" src="assets/video/fronter.mp4" />
              <source type="video/ogg" src="assets/video/fronter.ogg" />
            </video>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="empresas">
    <div class="container">
      <div class="row">
        <p class="h4">Players Atendidos:</p>
        <img id="partners" src="assets/image/parceiros.webp" alt="empresas parceiras" />

       
      </div>
    </div>
  </section>
  <section class="obras">
    <div class="container-fluid">
      <div class="col-sm-12 col-md-4 col-lg-4">
        <a href="https://fronter.eng.br/obras.php?q=saneamento">
          <p class="first">Saneamento</p>
          <img src="assets/image/pilar1.webp" alt="obra de Saneamento">
          <hr class="first">
        </a>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <a href="https://fronter.eng.br/obras.php?q=saneamento">
          <p class="two">Energia</p>
          <img src="assets/image/pilar2.webp" alt="obra de Saneamento">
          <hr class="two">
        </a>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4">
        <a href="https://fronter.eng.br/obras.php?q=saneamento">
          <p class="three">Obras Especiais</p>
          <img src="assets/image/pilar3.webp" alt="obra de Saneamento">
          <hr class="three">
        </a>
      </div>
    </div>
  </section>
  <section class="mapa">
    <div class="relativ">
      <p class="h2">Fronter no Brasil</p>
    </div>
    <div class="container-fluid">
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7824575.839729886!2d-54.125288!3d-16.747114!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sus!4v1621967028690!5m2!1spt-BR!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>
  <!--<section class="blog">
    <div class="container">
      <div class="row">
        <div class="relativ w-100">
          <p class="h6">Conteúdos</p>
          <p class="h2">Conheça nosso Blog Fronter</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="card">
            <div class="img">
              <img src="assets/image/blog.webp" />
            </div>
            <div class="conteudo d-flex flex-column">
              <div class="info d-flex justify-content-around">
                <p class="date">12/02/2021</p>
                <p>5 min de leitura</p>
              </div>
              <div class="txt">
                <p class="h4">Você sabia que Obras de Saneamento são de nossas especialidades?</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="card">
            <div class="img">
              <img src="assets/image/blog2.webp" />
            </div>
            <div class="conteudo d-flex flex-column">
              <div class="info d-flex justify-content-around">
                <p class="date">06/02/2020</p>
                <p>5 min de leitura</p>
              </div>
              <div class="txt">
                <p class="h4">O que é uma PCH?</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button d-flex justify-content-center">
        <a href="" class="btn btn-green">Leia mais conteúdos em nosso Blog</a>
      </div>
    </div>
  </section>-->
  <div class="container-fluid">
  <!-- BLOG -->
  <?php  include ('structs/blog.php'); ?>
  <!-- BLOG -->
  </div>
  <?php include "assets/includes/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
  </body>
</html>