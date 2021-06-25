<?php

/**
 * @package Agenda TDWM
 * 
 * Création d'un custom post type event
 * https://developer.wordpress.org/reference/functions/register_post_type/
*/
add_action('init','register_event_custom_post');
function register_event_custom_post(){

    register_post_type(
        // Nom du post type
        'event',
        array(
            'label'=>__('Agenda','agenda'),
            'labels' => array(
                'name'=>__('Agenda','agenda'),
                'singular_name'     => __('Evénement', 'agenda'),
                'all_items'         => __('Tous les événements', 'agenda'),
                'add_new_item'      => __('Ajouter un événement'),
                'edit_item'         => __('Éditer l\'événement','agenda'),
                'new_item'          => __('Nouvel événement','agenda'),
                'view_item'         => __('Voir l\'événement','agenda'),
                'search_items'      => __('Rechercher parmi les événements','agenda'),
                'not_found'         => __('Pas d\'événement trouvé','agenda'),
                'not_found_in_trash'=> __('Pas d\'événement dans la corbeille','agenda')
            ),
            'public'          => true,
            'capability_type' => 'post',
            'supports'        => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
            ),   
        ) 
    );

}