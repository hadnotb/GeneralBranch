<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Gestion du titre par ↓ la function title tag -->
    <!-- <title><?php bloginfo('name'); ?></title> -->
    <link rel="stylesheet" href="<?= get_stylesheet_uri();?>">
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
<header class ="siteHeader">

    

    <?php 
    // the_custom_logo(); 
    $id_logo = get_theme_mod('custom_logo');
    
    $html_logo = wp_get_attachment_image($id_logo);
    ?>
    <?php if(is_front_page()) : ?>  
    
        <span class="custom-logo-link">
                <?php echo $html_logo ?>
                <?php echo get_bloginfo('name'); ?>
        </span>
        
    
    <?php else : ?>
        <span class="custom-logo-link">
            <a href="<?php echo home_url();?>"><?php echo $html_logo ?></a>
            <a href="<?php echo home_url();?>"><?php bloginfo('name');?></a>
        </span>
        
        
        
    <?php endif ?>
    <?php if(has_nav_menu('header-menu')){
        wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'container' => 'header-nav',
            'container-class' => 'banner-menu',
        ));
    }?>

    
   
</header>