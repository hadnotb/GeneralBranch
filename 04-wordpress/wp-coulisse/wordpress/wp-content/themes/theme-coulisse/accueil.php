<?php 
/*
Template Name: Notre page d'accueil
*/
get_header();?>
<main>

    <?php 
    // the query
    $the_event_query = new WP_Query( array(

        'post_type' => 'event',
        'meta_query' => array(
            array(
                'key' => 'start-date',
                'compare' => '>=',
                'value' => date('Ymd')
            )
            ),

        'post_key' => 'start_date',
        'order_by' => 'meta_value_num',
        'post_key' => 'ASC',
    ) 
    ); ?>

    <h1><?php bloginfo('description');?></h1>
    <?php if( have_posts() ) : ?>
    
    <?php while( have_posts() ) : the_post(); ?>

    <?php $post_format =  get_post_format(); ?>

    <?php get_template_part('template-part/content',$post_format);?>
    
    <?php endwhile ?>


    <?php while( $the_event_query -> have_post()) : $the_event_query -> the_post(); ?>
    <?php get_template_part('template-parts/content','event') ?>

    <?php endwhile ?>

    <?php else : ?>

    <p><?php _e('Il n\'y a pas de résultat','themeCoulisse') ?></p>

     <?php endif; ?>
     <?php get_sidebar();?>
</main>
<?php get_footer();?>