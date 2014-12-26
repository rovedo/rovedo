<?php get_header(); ?>

    <?php query_posts('post_type=portfolio'); ?>
    <?php while(have_posts()) : the_post(); ?>
    <?php $background = get_field('background'); ?>
    <div class="topo-internas inteiro" style="background: url('<?php echo $background['url']; ?>') center center no-repeat;">
      <div class="main">
        <h2 class="animate-home"><?php the_title(); ?></h2>
        <h4><?php the_excerpt(); ?></h4>
      </div>
    </div><!-- FIM .inteiro (banner) -->
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
    <hr>
    
    <div id="main-home">
      <div class="grid">
        <h2 class="mtop40">Conheça o nosso showroom</h2>
        <ul id="showroom-estilo-rustico"> 
          <?php while(have_posts()) : the_post(); ?>
            <li>
              <?php $imagem_showroom = get_field('thumbnail'); ?>
              <div class="hover"><a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/imagens/hover-showroom.png" alt=""></a></div>
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $imagem_showroom['url']; ?>" alt="<?php echo $imagem_showroom['alt']; ?>"/></a>
              <div class="desc-showroom">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              </div>
            </li>
          <?php endwhile; ?>
        </ul><!-- FIM Showroom -->
      </div><!-- FIM .grid -->
    </div><!-- FIM #main-home -->

<?php get_footer(); ?>