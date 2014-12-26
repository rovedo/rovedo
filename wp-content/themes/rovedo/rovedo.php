  <?php get_header(); 
    /*
      Template Name: Rovedo
    */
  ?>

    <?php $my_query = new WP_Query('showposts=1&post_type=page&page_id=5'); ?>
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

    <?php query_posts('post_type=rovedo'); ?>
    <?php while(have_posts()) : the_post(); ?>
    <?php $background = get_field('background'); ?>

    <div class="inteiro">
      <div class="main conteudo-rovedo">
        <!-- <h3><?php the_title(); ?></h3> -->
        <?php the_content(); ?>
      <div><!-- FIM .content -->
    </div><!-- FIM .inteiro (serviços) -->

    <?php endwhile; ?>

    </div>

    <hr>
    
    <?php include 'footer.php'; ?>

</body>
</html>