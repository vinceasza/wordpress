<?php get_header();?>


<p>front-page.php</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title();?></h1>
  <h3><?php the_author(); ?></h3>
  <p><?php the_content(); ?></p>
  <p><?php get_calendar();?></p>
  <p><?php echo bloginfo();?></p>
  <a href="<?php the_permalink(); ?>">This Page</a>
  <?php next_post_link();?>
  <p>Category: <?php the_category();?></p>

  <?php get_sidebar();?> //gets sidebar.php
  <?php get_sidebar('page');?> //gets sidebar-page.php


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_template_part('content', 'portfolio');?>

<?php get_footer();?>
