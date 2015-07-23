<?php get_header();?>


<p>category.php</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title();?></h1>
  <h3><?php the_author(); ?></h3>
  <p><?php the_content(); ?></p>

  <a href="<?php the_permalink(); ?>">This Page</a>
  <?php next_post_link();?>
  <p>Category: <?php the_category();?></p>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no categories matched your criteria.' ); ?></p>
<?php endif; ?>



<?php get_footer();?>
