<!-- Fonctions utiles -->
<?php get_template_directory_uri() ?>

<?php //#################################################
############### HEADER #################################### ?>

<?php //informations du blog  ?>
<?php bloginfo('name'); ?>
<?php bloginfo('description'); ?>
<?php bloginfo('url'); ?>
<?php bloginfo('stylesheet_url'); ?>

<?php //a mettre dans le head juste avant la fermeture  ?>
<?php wp_head(); ?>

<?php //a mettre comme un attribut de la balise body   ?>
<?php body_class(); ?>

<?php //l'appel du menu à renseigner en rapport au fichier functions.php  ?>
 
 <?php wp_nav_menu(array('sort_column'=>'menu_order','theme_location'=>'principal')); ?>


<?php //#################################################
############### FUNCTIONS.PHP #################################### ?>

<?php 
/* ###### Gestion des menus */
function mk_menus_theme() {
	register_nav_menus(
		array(
			'principal' => 'Menu principal',
			'pied' => 'Pied de page'
			)
		);
}
add_action( 'after_setup_theme' , 'mk_menus_theme' );
// Pour afficher les menus dans le template, cf: ligne 20


/*  ##### Gestion des widgets ex avec 2 zones(1 fonction par zone de widget)*/
function mk_zones_widgets() {
	register_sidebar(
		array(
			'id' => 'premier',
			'name' => 'Premier emplacement',
			'description' => 'Premier emplacement des widgets',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'deuxieme',
			'name' => 'Deuxième emplacement',
			'description' => 'Deuxième emplacement des widgets',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
	);
}
add_action( 'widgets_init', 'mk_zones_widgets');
// Pour afficher les widgets dans le template, cf: ligne 170


/* #### Gestion des images à la une */
add_theme_support('post-thumbnails');
// Pour afficher dans le template l'image a la une, cf ligne:113


/* #### Modification du nombre de mot pour l'extrait d'article*/
function mk_nbMotsExtrait($length) {
	return 20;
}

add_filter('excerpt_length', 'mk_nbMotsExtrait');

?>

<?php //#################################################
############### FOOTER.PHP #################################### ?>
<?php the_author(); ?>
<?php bloginfo('name'); ?>
<?php wp_footer(); ?>


<?php //#################################################
############### INDEX.PHP #################################### ?>
 
<?php //Appel structurel des templates  ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
 
 
 <?php /*DEBUT de la boucle Wordpress */ ?>
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  
  	
	<?php the_permalink(); ?>
	<?php the_title(); ?>
	<?php the_content(); ?>
	<?php comments_number('Aucun commentaire','Un seul commentaire','% commentaires'); ?>
<?php /*FIN de la boucle Wordpress */ ?>
<?php endwhile; ?>
<?php endif; ?>


<?php 
// POUR LES IMAGES A LA UNE
// Penser a activer la gestion des images a la une dans functions.php cf ligne 65
// Marqueur a utiliser : 
the_post_thumbnail('taille_choisie')
//  3 arguments possibles :
	// 	thumbnail
	//  medium
	//  large
	// 	full (Taille originale)

?>


<?php //#################################################
############### FRONT-PAGE.PHP / MODELE-PERSO.PHP #################################### ?>
 
 
 <?php // si modèle perso: les commentaires suivants + sélection du modèle pour une page dans l'admin ?>
 <?php
// Template Name: Accueil personnalisé
// Page sans sidebar, avec une mise en forme spécifique ?>

<?php 
// the query
$args = array('posts_per_page' => 5, 'offset' => 3, 'category_name' => 'home'  );
// Pour les arguments voir la doc pour une liste exhaustive avec des exemples de code
// https://developer.wordpress.org/reference/classes/wp_query/
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
		<!-- Toutes les balises HTML de votre choix  -->
		<!-- Tous les marqueurs de templates de votre choix  -->
		<!-- la function post_thumbnail ecrit la balise img complètement -->
				<?php the_post_thumbnail(medium); ?>
                <?php the_excerpt(); ?>
                <?php the_permalink();  ?> 
		
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 <!-- ATTENTION : Ne pas oublier l'instruction ci dessus qui libère les résultats de la requête -->
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
       
<?php ##########################################################
###################"" Sidebar.php ########################

/*appel de la zone de widget */ ?>
<?php dynamic_sidebar( 'id_du_widget' ); ?>

<?php		
/*
##########################################################
#################### CREATION THEME ENFANT ###################
##########################################################

##########################################################
###################"" style.css ########################*/
/*
Theme Name: Toto Enfant
Description: Thème enfant du thème Toto
Author: Créateur du thème Toto
Author URI: http://monsite.com
Template: toto
Text Domain: toto-enfant
*/


##########################################################
###################"" functions.php ########################*/
?>

<?php
function mk_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
};
add_action( 'wp_enqueue_scripts', 'mk_enqueue_styles' );

/*pas besoin de fermer le marqueur de fin de php pour le fichier functions.php*/
?>

<!-- Si la feuille de style du thème enfant n'est pas prise en compte, on peut contourner les verrous du thémeur avec le code ci dessous  -->
<!-- Code a insérer après le wp_head() et avant la fermeture du head-->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri() ?>">