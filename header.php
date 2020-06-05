<!doctype html>
<html <?php language_attributes() ;?> class="no-js">
<head>

  <!-- Required meta tags -->
  <meta charset="<?php bloginfo("charset") ;?>">
  <meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <meta name="format-detection" content="telephone=no">

  <title>Biomob</title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" >

  <?php wp_head(); ?>
</head>
<body <?php body_class() ;?>>

  <header>
    <nav class="navbar navbar-expand-md bg-primary">
      <div class="container py-3">
        <a class="navbar-brand" href="#">
          <img src="<?= get_template_directory_uri() ?>/assets/images/logo_biomob.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="#sobre">Quem Somos <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#aplicativo">O Aplicativo</a>
            <a class="nav-item nav-link" href="#eventos">Eventos</a>
            <a class="nav-item nav-link" href="#campanhas">Campanhas</a>
            <a class="nav-item nav-link" href="#contato-parceiros">Contato</a>
            <a class="nav-item nav-link" href="#contato-parceiros">Parceiros</a>
          </div>
          <div class="midias-sociais">
            <div class="icones">
              <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_facebook.svg" alt=""></a>
              <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_instagram.svg" alt=""></a>
              <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_linkedin.svg" alt=""></a>
              <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_youtube.svg" alt=""></a>
              <a href=""><img src="<?= get_template_directory_uri() ?>/assets/icons/icon_twitter.svg" alt=""></a>
            </div>
          </div>
        </div>

      </div>
    </nav>
  </header>

  <div class="acessibilidade">
    <div class="fontsize-up">Aa +</div>
    <div class="fontsize-down">Aa -</div>
    <div class="handtalk">
      <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_handtalk.svg" alt="">
    </div>
  </div>
