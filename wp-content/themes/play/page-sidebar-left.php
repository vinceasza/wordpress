<?php
/*
  Template Name: Sidebar Left
*/

get_header();?>


<p>page.-sidebar.php</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title();?></h1>
  <h3>By: <?php the_author(); ?></h3>
  <p><?php the_content(); ?></p>
  <?php next_post_link();?>
  <p>Category: <?php the_category();?></p>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no pages matched your criteria.' ); ?></p>
<?php endif; ?>



<?php get_footer();?>
