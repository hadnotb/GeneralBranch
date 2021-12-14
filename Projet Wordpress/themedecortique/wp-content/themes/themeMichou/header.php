<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
<title>


<?php bloginfo()?>
<?php if(is_home() || is_front_page()) : ?>
	&mdash;<?php bloginfo('description')?>
	<?php else : ?>
	&mdash; <?php wp_title("",true); ?>
<?php endif; ?>
</title>
<!--Importer :l'url de la feuile de style -->
<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css" media="screen" /> -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="Generator" content="<?php bloginfo('version'); ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer"/>

<!--Importer : Les tags de wordpress à insérer dans l'entête-->
<?php wp_head()?>

</head>
<!--Importer :l'insertion de la classe personnalisée du body en fonction du contenu-->
<body>
    <header class="SiteHeader">
        <h1 class="SiteHeader-title">Le site WordPress qui met la pression garçon !</h1>
        <div class="SiteHeader-bar">
            <i id ="burgerIcon" class="fas fa-bars"></i>
            <!-- <nav class="SiteHeader-bar-navBar"> -->
            <?php wp_nav_menu(array(
                'sort_column'=>'menu_order',
                'theme_location'=>'principal',
                'container_class'=>'SiteHeader-bar-navBar'
                )); ?>
                <ul>
                    
                </ul>
            <!-- </nav> -->
            <div class="SiteHeader-bar-user">
                <i class="fas fa-user"></i>

            </div>
        </div>
    </header>
    <main class="SiteMain">