<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?>>
<head>
<title>

<?php bloginfo()?>
<?php if(is_home() || is_front_page()) : ?>
	&mdash; <?php bloginfo('description')?>
	<?php else : ?>
	&mdash; <?php wp_title("",true); ?>
<?php endif; ?>
</title>
<!--Importer :l'url de la feuile de style -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="Generator" content="<?php bloginfo('version'); ?>" />

<!--Importer : Les tags de wordpress à insérer dans l'entête-->
<?php wp_head()?>
</head>
<!--Importer :l'insertion de la classe personnalisée du body en fonction du contenu-->
<body>
<div id="conteneur">
	<div id="menuPrincipal">
	<?php wp_nav_menu(array(
		'sort_column'=>'menu_order',
		'theme_location'=>'principal'));?>
        <!--Importer :Attention, c'est le moment de créer la fonction des menus dans functions.php-->
		
	</div>
	<div id="titreSlogan">
    <!--Importer : le lien vers le blog pour href / le nom du blog pour attribut tittle / nom du blog affiché -->
		<h1><a href="" title=""></a></h1>
        <!--Importer :Créer un paragraphe contenant la description du blog-->
		<h2></h2>
	</div>
	<div id="menuSecondaire">
    <?php wp_nav_menu(array(
		'sort_column'=>'menu_order',
		'theme_location'=>'secondaire'));?>
		
	</div>
	