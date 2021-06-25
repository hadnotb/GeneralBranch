<article id ="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if(is_singular()) : ?>  
                <h1><?php the_title();?></a></h1>
                <?php the_post_thumbnail('large') ; ?>
        <?php else : ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
                <?php the_post_thumbnail('thumbnail') ; ?>
        <?php endif ?>

        <?php the_content();?>

        
</article>