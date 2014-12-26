<?php get_header(); 
  /*
    Template Name: Branding
  */
?>

<?php // include 'header.php'; ?>
    
    <?php $my_query = new WP_Query('showposts=1&post_type=page&page_id=9'); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php $background = get_field('background'); ?>
    <div class="topo-internas inteiro" style="background: url('<?php echo $background['url']; ?>') center center no-repeat;">
      <div class="main">
        <h2 class="animate-home"><?php the_title(); ?></h2>
        <!-- <h4><?php the_content(); ?></h4> -->
      </div>
    </div><!-- FIM .inteiro (banner) -->
    
    <?php endwhile; ?>

      <hr>

      <div class="servicos-item1" style=" background: url('<?php bloginfo('template_url'); ?>/assets/imagens/img.design.png') center no-repeat;">
        <div class="main">
          <div class="box-descricao">
            <h2>Criamos seu site ou loja virtual em 6x S/J</h2>
            <p>É muito importante que sua marca seja bem feita e estruturada desde o início, pois ela vai representar sua empresa </p>
            <a href="#" class="btn">conheça nossa loja</a>
          </div>
        </div><!-- FIM .main -->
      </div><!-- FIM .servicos.web.item1 -->

      <div class="servicos-item2">
        <div class="main">
          <header class="web-2">
            <h2>Alguns serviços</h2>
            <!-- <ul>
              <li><a href="#">Site</a></li>
              <li><a href="#">Loja</a></li>
            </ul> -->
          </header>
          <ul class="descricao-web">
            <li>
              <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-web-painel.png" />
              <div class="box-texto">
                <h4>Painel administrativo</h4>
                <h5>todo conteùdo do seu site de onde estiver sem ficar preso a ninguèm.</h5>
              </div>
            </li>

            <li>
              <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-web-painel.png" />
              <div class="box-texto">
                <h4>Painel administrativo</h4>
                <h5>todo conteùdo do seu site de onde estiver sem ficar preso a ninguèm.</h5>
              </div>
            </li>

            <li>
              <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-web-painel.png" />
              <div class="box-texto">
                <h4>Painel administrativo</h4>
                <h5>todo conteùdo do seu site de onde estiver sem ficar preso a ninguèm.</h5>
              </div>
            </li>

            <li>
              <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-web-painel.png" />
              <div class="box-texto">
                <h4>Painel administrativo</h4>
                <h5>todo conteùdo do seu site de onde estiver sem ficar preso a ninguèm.</h5>
              </div>
            </li>

            <li>
              <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-web-painel.png" />
              <div class="box-texto">
                <h4>Painel administrativo</h4>
                <h5>todo conteùdo do seu site de onde estiver sem ficar preso a ninguèm.</h5>
              </div>
            </li>

            <li>
              <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-web-painel.png" />
              <div class="box-texto">
                <h4>Painel administrativo</h4>
                <h5>todo conteùdo do seu site de onde estiver sem ficar preso a ninguèm.</h5>
              </div>
            </li>
          </ul>
        </div><!-- FIM .main -->
      </div><!-- FIM .servicos-item2 -->

      <div class="servicos-item3">
        <div class="main">
          <a href="#">
            <div class="btn-portfolio">
              <h2>Portfólio</h2>
            </div>
          </a>
          <img src="<?php bloginfo('template_url'); ?>/assets/imagens/img.design.3.png">
        </div><!-- FIM .main -->
      </div><!-- FIM .servicos-item3 -->

      <div class="orcamento left">
        <div class="main">
            <h3>Entre em contato</h3>
            <h5>Preenchendo as informações abaixo, enviando email para contato@rovedo.com.br <br>ou ligando para 31 3040-6878.</h5>            
            
            <?php query_posts('posts_per_page=1') ?>
              <?php while(have_posts()) : the_post(); ?>
              <?php echo do_shortcode('[contact-form-7 id="93" title="Branding"]'); ?>
            <?php endwhile; ?>

            <!-- <ul id="orcamento">
                <li><input type="text" placeholder="nome / empresa" id="nome"></li>
                <li><input type="text" placeholder="email" id=""></li>
                <li><input type="text" placeholder="telefone" id=""></li>
                <li><input type="submit" class="submit" value="enviar"></li>
            </ul> -->

        </div>
      </div>
    </div><!-- FIM .inteiro -->

    <hr>

    <?php include 'footer.php'; ?>

</body>
</html>