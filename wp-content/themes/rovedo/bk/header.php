<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <!--[if IE]><![endif]-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rovedo Comunicação</title>
  <meta name="author" content="Rovedo Comunicação" />
  <meta name="description" content="Agência de comunicação especializada em produção web, marketing digital e design gráfico." />
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/imagens/favicon.png" /> 
  <!-- Facebook -->
  <meta property="og:title" content="Rovedo Comunicação"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="http://www.rovedo.com.br"/>
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/imagens/logo-rovedo-comunicacao.svg"/>
  <meta property="og:site_name" content="Rovedo Comunicação"/>
  <meta property="og:description" content="Agência de comunicação especializada em produção web, marketing digital e design gráfico."/>
  <!-- HTML5 FOR IE -->
  <!--[if lt IE 9]><script src="js/lib/html5.js"></script><![endif]-->

  <!-- SCRIPTS INTERNOS -->

  <script src="<?php bloginfo('template_url'); ?>/assets/js/lib/jquery.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>

  <!-- STYLESHEETS -->

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/lib/responsiveslides.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/lib/demo.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/lib/jquery.fancybox.css" media="screen" />

  <!-- SCRIPTS EXTERNOS -->

  <script src="<?php bloginfo('template_url'); ?>/assets/js/lib/responsiveslides.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/lib/jquery.fancybox.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/lib/jquery.fancybox-media.js"></script>

</head>
<body>

<div id="all">
    <header id="header-menu">
      <div class="main">
        <a href="http://www.rovedo.com.br/task"><img src="<?php bloginfo('template_url'); ?>/assets/imagens/logo-rovedo-comunicacao-white.svg" class="logo"></a>
        <ul class="menu">
          <li><a href="<?php echo get_permalink('5'); ?>">Rovedo</a></li>
          <li><a href="#">Serviços</a>
            <ul class="dropdown">
              <li><a href="<?php echo get_permalink('7'); ?>">Web</a></li>
              <li><a href="<?php echo get_permalink('9'); ?>">Branding</a></li>
              <li><a href="<?php echo get_permalink('11'); ?>">Impressos</a></li>
              <li><a href="<?php echo get_permalink('13'); ?>">Marketing</a></li>
              <li><a href=""></a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_permalink('16'); ?>">Portfolio</a></li>
          <li><a href="<?php echo get_permalink('18'); ?>">Contato</a></li>
          <li><a href="https://www.facebook.com/rovedo.comunicacao" target="_blank"></a></li>
        </ul>

        <ul class="menu-mobile">
          <li><a href="#inline1" class="fancybox"></a></li>
        
          <div id="inline1" style="display: none;">
            <div>
              <ul class="menu-mobile-aberto">
                <li><a href="index.php">Home</a></li>
                <li><a href="<?php echo get_permalink('5'); ?>">Rovedo</a></li>
                <li><a href="<?php echo get_permalink('7'); ?>">Web</a></li>
                <li><a href="<?php echo get_permalink('9'); ?>">Branding</a></li>
                <li><a href="<?php echo get_permalink('11'); ?>">Impressos</a></li>
                <li><a href="<?php echo get_permalink('13'); ?>">Marketing</a></li>
                <li><a href="<?php echo get_permalink('16'); ?>">Portfolio</a></li>
                <li><a href="<?php echo get_permalink('18'); ?>">Contato</a></li>
              </ul>
            </div>
          </div>

        </ul>

      </div><!-- FIM .wrap -->
    </header><!-- FIM #header-menu (menu) -->

    <hr>
