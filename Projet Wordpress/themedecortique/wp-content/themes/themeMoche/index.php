<!--Importer : importer l'entete -->
<?php get_header();?>
<div id="articles">
<!--la boucle wordpress commence -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="unArticle">
    	<!--Importer : importer un l'url de l'article dans l'attribut href et le titre de l'article dans la zone de lien -->
		<h2><a href=""></a></h2>
        <!--Importer : importer le contenu de l'article -->
		
		<!--Importer : importer le nombre de commentaires associés à l'article -->
		<p></p>
	</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!--Importer : importer la sidebar -->
<?php get_sidebar();?>

<!--Importer : importer le footer -->
<?php get_footer();?>

