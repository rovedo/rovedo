<?php include 'header.php'; ?>
    
    <div class="inteiro mTop-70 banner-home">
      <ul class="rslides banner" id="slider2" >
        <?php query_posts('post_type=home&posts_per_page=-1'); ?>
        <?php while(have_posts()) : the_post(); ?>
        <?php $background = get_field('background'); ?>
        <li style="background: url('<?php echo $background['url']; ?>') center no-repeat;">
          <div class="main box-txt">
            <h1 class="animate-home"><?php the_title(); ?></h1>
            <h4> <?php the_excerpt(); ?> </h4>
            <a href="<?php the_field('link'); ?>">saiba mais</a>
          </div>
        </li>
        <?php endwhile; ?>
      </ul>
    </div><!-- FIM .inteiro (banner) -->

</body>
</html>