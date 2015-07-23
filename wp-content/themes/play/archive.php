<?php get_header();?>


<p>archive.php</p>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><?php wp_title('');?> Blog Posts</h1>

  <h1><?php the_title();?></h1>
  <h3><?php the_author_posts_link();?></h3>
  <p><?php the_content(); ?></p>

  <a href="<?php the_permalink(); ?>">This Page</a>
  <?php next_post_link();?>
  <?php the_time('F j, Y');?>
  <p>Category: <?php the_category(' ,');?></p>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



<?php get_footer();?>
