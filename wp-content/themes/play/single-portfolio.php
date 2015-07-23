<?php get_header();?>

<?php //sometimes need to update permalinks for this to work;?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <p>single-portfolio.php</p>
  <h1><?php the_title();?></h1>
  <?php the_category();?>
  <img src="<?php the_field('project_image');?>"></a>

<?php endwhile;  endif; ?>

<?php get_footer();?>
