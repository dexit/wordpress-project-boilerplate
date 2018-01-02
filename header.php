<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/public/css/style.min.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="container">
        <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <img src="<?php echo $image[0]; ?>" alt="<?php echo bloginfo('name'); ?>" class="logo img-fluid pt-3 pb-3">

       

    </header>
 <nav class="navbar navbar-expand-lg navbar-dark mt-3 mb-0 bg-dark text-white" role="navigation">

            <div class="container">
               <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#header-menu-collapse" aria-controls="header-menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> Menu
            </button>
            <?php wp_nav_menu(array(
                'menu'              => 'header_menu',
                'theme_location'    => 'header_menu',
                'depth'             => 2,
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'header-menu-collapse',
                'menu_class'        => 'navbar-nav mx-auto text-center',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()));
            ?>
            </div>
        </nav>
