<!--Importer : importer l'entete -->


<!--la boucle wordpress commence -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="articleSeul">
		<div class="precSuiv">
        <!--Importer : lien du post précédent -->
			<div class="articlePrec"></div>
           <!--Importer : lien du post suivant -->   
			<div class="articleSuiv"></div>    
		</div>
        
          <!--Importer : le titre de l'article -->
		<h2></h2>
        
          <!--Importer : le contenu de l'article -->
		
        
          <!--Importer : lien vers l'auteur du post -->
		<p>Les articles et le profil de </p>
          <!--Importer : date de publication -->
		<p>Publié le : </p>
          <!--Importer : catégorie de l'article -->
		<p>Catégorie(s) : </p>
          <!--Importer : mots clés de l'article -->
		<p class="motsCles"></p>
        
<div id="commentaires">
			<h3>Les commentaires de l'article</h3>
              <!--Importer : le template des commentaires -->
                <!--Attention, pour les commentaires, la page comments doit exister -->
			
		</div>
	</div>  
      <!--la fin de la boucle -->
<?php endwhile; ?>
<?php endif; ?>

<!--Importer : importer la side bar -->

<!--Importer : importer le footer -->
