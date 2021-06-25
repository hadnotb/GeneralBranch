<?php
add_filter('the_content_more_link','theme_modify_read_more_link');
add_filter('exerpt-more','theme_modify_read_more_link');

function theme_modify_read_more_link(){

    if(is_admin()){

        return$link;
    }
    $link =sprintf(
        '<p class ="link-more"><a href="%1$s" class ="more-link">%2$s</a></p>',
        esc_url( get_permalink( get_the_ID())),
        __('Lire la suite', 'tdwm')
        
    );
    return $link;
}
