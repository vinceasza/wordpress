<?php get_header();?>


<p>home.php</p>

<?php

$the_query = new WP_Query( 'category_name=featured' );

// The Loop
if ( $the_query->have_posts() ) {

	while ( $the_query->have_posts() ) {
		$the_query->the_post();

    global $post;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    ?>
    <div style="background: url(<?php echo $src[0]; ?> ) !important;">
    <?php the_title();?>
    </div>
  <?php

	echo '<h3>' . get_the_title() . '</h3>';
	}


} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
<?php wp_list_categories(); ?>
<?php wp_tag_cloud();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
