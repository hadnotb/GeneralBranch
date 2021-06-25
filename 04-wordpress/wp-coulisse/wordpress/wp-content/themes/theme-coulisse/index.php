<?php get_header();?>
<main>

    <h1><?php bloginfo('description');?></h1>
    <?php if( have_posts() ) : ?>
    
    <?php while( have_posts() ) : the_post(); ?>

    <?php $post_format =  get_post_format(); ?>

    <?php get_template_part('template-part/content',$post_format);?>
    
  

    <?php endwhile ?>

    <?php else : ?>

    <p><?php _e('Il n\'y a pas de résultat','themeCoulisse') ?></p>

     <?php endif; ?>
     <?php get_sidebar();?>
</main>
<?php get_footer();?>