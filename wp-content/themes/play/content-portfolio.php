<?php

  $num_posts = ( is_front_page() ) ? 4 : -1;
  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );

  $query = new WP_Query( $args );

?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <a href="<?php the_permalink();?>"><h2><?php the_title(); ?></h2></a>
  <img src="<?php the_field('project_image');?>"></a>


<?php endwhile;  endif; wp_reset_postdata(); //resets the args?>
