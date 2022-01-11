<?php
$id = (int)$_GET['q'];

   include 'painel/PHP/conecta.php';

   //jeito seguro de fazer select!
   try {
           $consulta = $conexao->prepare('SELECT * FROM blog WHERE id = :id LIMIT 1');
           $consulta->bindParam(':id', $id, PDO::PARAM_INT);
           $consulta->execute();

           while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
               $titulo = $linha['titulo'];
               $categoria = $linha['categoria'];
               $conteudo = $linha['conteudo'];
               $imagem = $linha['imagem_destaque'];
               $datahora = date('d/m/Y ', strtotime($linha['data_criacao']));
               $autor = $linha['autor'];
               $acessos = $linha['acessos'];
               $keywords = $linha['keywords'];
               $metadescrisao = $linha['metadescrisao'];
               $altimage = $linha['altimage'];

           }
   } catch(PDOException $e) {
      echo $e->getMessage();//Remove or change message in production code
   }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
  <?php include "assets/includes/header.php" ?>
  <section class="article">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8">
          <div class="img">
            <img src="https://fronter.eng.br/painel/galeriaBlog/2028207578.jpg" />
          </div>
          <div class="cont">
            <p class="h5">31/12/1969</p>
            <p class="h1">Oque é uma PCH</p>
            <p class="h6"></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="top">
            <p class="h3">Siga a Fronter</p>
            <img src="https://fronter.eng.br/images/logo_small.png" />
            <p>Nos conectamos com os maiores experts do país para resolver os seus desafios. Nossa proposta é construir o melhor.</p>
            <div class="social d-flex">   
              <a href="https://www.facebook.com/fronterengenharia/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg></a>
              <a href="https://www.instagram.com/fronterengenharia/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
            </div>
          </div>
          <div class="artigos">
            <p class="h3">Últimos artigos</p>
            
            <div class="widget-content">
              <?php
                  include ('painel/PHP/conecta.php');
                  $consulta = $conexao->query("SELECT * FROM blog WHERE rascunho = 'nao' ORDER BY data_liberacao desc LIMIT 5");
                  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <article class="post">
                  <div class="post-inner">
                      <figure class="post-thumb"><a href="ler_artigo.php?q=<?php echo $linha['id']; ?>"><img src="painel/painel/<?php echo $linha['imagem_destaque']; ?>" alt=""></a></figure>
                      <div class="post-info"><?php echo date('d/m/Y', strtotime($linha['data_criacao'])); ?></div>
                      <div class="text"><a href="ler_artigo.php?q=<?php echo $linha['id']; ?>"><?php echo $linha['titulo']; ?></a></div>
                  </div>
              </article>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "assets/includes/footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="assets/js/script.js"></script>
  </body>
</html>