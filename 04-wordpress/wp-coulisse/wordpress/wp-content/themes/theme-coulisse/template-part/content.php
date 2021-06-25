<article id ="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if(is_singular()) : ?>  
                <h1><?php the_title();?></a></h1>
                <?php the_post_thumbnail('large') ; ?>
        <?php else : ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
                <?php the_post_thumbnail('thumbnail') ; ?>
        <?php endif ?>

        <?php the_content();?>
        <?php
    
        $ids_events = get_field('link_event');
        if(  $ids_events ): ?>
        <ul>
        <?php foreach(  $ids_events as  $id_event): 
                $permalink = get_permalink(  $id_event);
                $title = get_the_title( $id_event );
                $start_date = get_field( 'start_date', $id_event );
                ?>
                <li>
                <a href="<?php echo esc_html( $permalink ); ?>"><?php echo $title; ?> : le <?php echo $start_date ?></a>
                </li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        
</article>