<?php
/*
  Template Name: Portfolio
*/
get_header();?>


<p>page-portfolio.php</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title();?></h1>

<?php endwhile;  endif; ?>


<?php get_template_part('content', 'portfolio');?>


<?php get_footer();?>
