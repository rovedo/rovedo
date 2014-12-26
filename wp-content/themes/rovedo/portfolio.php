<?php get_header(); 
  /*
    Template Name: Portfolio
  */
?>

<?php // include 'header.php'; ?>
    
    <?php $my_query = new WP_Query('showposts=1&post_type=page&page_id=16'); ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <?php $background = get_field('background'); ?>
    <div class="topo-internas inteiro" style="background: url('<?php echo $background['url']; ?>') center center no-repeat;">
      <div class="main">
        <h2 class="animate-home"><?php the_title(); ?></h2>
        <!-- <h4><?php the_content(); ?></h4> -->
      </div>
    </div><!-- FIM .inteiro (banner) -->
    
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

    <hr>

    <div class="inteiro">
      <div class="content main">
        <ul class="portfolio-lista">
          <?php query_posts('post_type=post'); ?>
          <?php while(have_posts()) : the_post(); ?>
          <?php $thumb = get_field('thumb'); ?>

          <li class="<?php the_field(); ?>">
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

    <?php include 'footer.php'; ?>

</body>
</html>