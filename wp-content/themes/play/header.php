
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>

      <?php wp_nav_menu (array('theme_location' => 'primary-menu','menu_class' => 'nav'));?>

      <?php wp_nav_menu (array('theme_location' => 'secondary-menu','menu_class' => 'nav'));?>
