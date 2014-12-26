<?php get_header(); 
  /*
    Template Name: Marketing
  */
?>

<?php // include 'header.php'; ?>
    
    <?php $my_query = new WP_Query('showposts=1&post_type=page&page_id=13'); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php $background = get_field('background'); ?>
    <div class="topo-internas inteiro" style="background: url('<?php echo $background['url']; ?>') center center no-repeat;">
      <div class="main">
        <h2 class="animate-home"><?php the_title(); ?></h2>
        <h4><?php the_content(); ?></h4>
      </div>
    </div><!-- FIM .inteiro (banner) -->
    
    <?php endwhile; ?>

      <hr>

      <div class="calculos">
        <div class="main">

        </div><!-- FIM .main -->

        <ul class="lista-servicos">
          <?php query_posts('post_type=marketing'); ?>
          <?php while(have_posts()) : the_post(); ?>
          <?php $imagem = get_field('imagem'); ?>

          <li>
            <div id="max-width">
              <div class="texto">
                <h3><?php the_title(); ?></h3>
                <h4><?php the_content(); ?></h4>
              </div>
              <div class="imagem">
                <img src="<?php echo $imagem['url']; ?>">
              </div>
            </div>
          </li>

          <?php endwhile; ?>
        </ul>

      </div><!-- FIM .calculos -->

      <div class="orcamento left">
        <div class="main">
            <h3>Entre em contato</h3>
            <h5>Preencha as informações abaixo que ligamos para você. <br>Se preferir ligar o nosso telefone è 31 3040-6878.</h5>
            
            <?php query_posts('posts_per_page=1') ?>
              <?php while(have_posts()) : the_post(); ?>
              <?php echo do_shortcode('[contact-form-7 id="95" title="Marketing"]'); ?>
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