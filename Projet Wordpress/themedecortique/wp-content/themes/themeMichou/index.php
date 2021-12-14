<?php get_header();?>
<div class="SiteMain-content">
<!--la boucle wordpress commence -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="SiteMain-content-part">
    	<!--Importer : importer un l'url de l'article dans l'attribut href et le titre de l'article dans la zone de lien -->
		<h2><a href="<?php get_permalink()?>"><?php the_title() ?></a></h2>
        <!--Importer : importer lle contenu de l'article -->
		
		<!--Importer : importer le nombre de commentaires associés à l'article -->
		<p><?php the_content()?></p>
	</div>
<?php endwhile; ?>
<?php endif; ?>

</div>
<?php get_sidebar();?>

<?php get_footer();?>
