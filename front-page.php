<?php get_header(); ?>


  <div class="row">
    <div class="row"><h1><?php the_title(); ?></h1></div>
    <div class="row">
      <?php if(have_posts()): while(have_posts()): ?>
          <h3><?php the_post(); ?> ddjd</h3>
          <?php the_content(); ?>


      <?php endwhile; endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
