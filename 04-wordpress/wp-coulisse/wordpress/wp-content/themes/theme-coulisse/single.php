<?php get_header();?>
<main>
    <?php while( have_posts() ) : the_post(); ?>

    <?php get_template_part('template-part/content');?>

    <?php endwhile ?>
</main>
<?php get_footer();?>
