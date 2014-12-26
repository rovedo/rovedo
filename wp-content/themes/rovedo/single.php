<?php get_header(); ?>
    
    <?php while(have_posts()) : the_post(); ?>
    <?php $background = get_field('background'); ?>

    <div class="topo-internas inteiro single" style="background: url('<?php echo $background['url']; ?>') center center no-repeat;">
      <div class="main">
        <h2 class="animate-home"><?php the_title(); ?></h2>
        <!-- <h4><?php the_content(); ?></h4> -->
      </div>
    </div><!-- FIM .inteiro (banner) -->
    
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

    <hr>

    <div class="inteiro">

      <div class="main">
        <div class="content">

          <?php while(have_posts()) : the_post(); ?>

          <div class="txt">
            <?php the_content(); ?>
          </div>


          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </div>
      </div>
          
      <hr>
      
      <div class="main">
        <ul class="portfolio-lista hide">

          <?php query_posts('post_type=post&posts_per_page=3'); ?>
          <?php while(have_posts()) : the_post(); ?>
          <?php $thumb = get_field('thumb'); ?>
          
          <li class="img-menor">
            <span class="descricao-portfolio"><?php the_title(); ?></span>
            <img src="<?php echo $thumb['url']; ?>">
            <div class="hover"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>  
          </li>

          <?php endwhile; ?>
        </ul>

      <div><!-- FIM .content -->
    </div><!-- FIM .inteiro (serviços) -->
    
    </div>

    <hr>

    
<?php get_footer(); ?>

</body>
</html>
