<?php get_header(); 
  /*
    Template Name: Contato
  */
?>

<?php // include 'header.php'; ?>
    
    <?php $my_query = new WP_Query('showposts=1&post_type=page&page_id=18'); ?>
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

    <div class="inteiro bg-contato">
      <div class="content main">
        <ul class="contato">
          <li>
            <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-telefone.png" alt="Telefone Rovedo Comunicação +55 31 3333-3333">
            <span>+55 31 3040-6878</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-mail.png" alt="Telefone Rovedo Comunicação +55 31 3333-3333">
            <span>contato@rovedo.com.br</span>
          </li>
          <li>
            <img src="<?php bloginfo('template_url'); ?>/assets/imagens/icon-map.png" alt="Telefone Rovedo Comunicação +55 31 3333-3333">
            <span class="end">Av. Dr. Guilhermino de Oliveira, 794 <br>Novo Eldorado - Contagem - MG</span>
          </li>
        </ul>

        <div class="orcamento">
          <div class="main">
            <h3>Entre em contato</h3>
            <h5>Preencha estas 3 informações abaixo que ligamos para você. <br>Se preferir ligar o nosso telefone è 31 3040-6878</h5>
            
            <?php query_posts('posts_per_page=1') ?>
              <?php while(have_posts()) : the_post(); ?>
              <?php echo do_shortcode('[contact-form-7 id="91" title="Form Contato"]'); ?>
            <?php endwhile; ?>

            <!-- <ul id="orcamento">
                <li><input type="text" placeholder="nome / empresa" id="nome"></li>
                <li><input type="text" placeholder="email" id=""></li>
                <li><input type="text" placeholder="telefone" id=""></li>
                <li><input type="submit" class="submit" value="enviar"></li>
            </ul> -->

          </div>
        </div>

      <div><!-- FIM .content -->
    </div><!-- FIM .inteiro (serviços) -->

    <hr>

    <?php include 'footer.php'; ?>

</body>
</html>