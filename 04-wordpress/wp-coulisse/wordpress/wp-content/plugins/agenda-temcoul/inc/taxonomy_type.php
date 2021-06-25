<?php
add_action('init','register_taxonomy_type_event');
function register_taxonomy_type_event(){

    register_taxonomy(
        'type-event',
        array('event','page'),
        array(
            'description' =>'classer les ressources par type d\'evenement',
            'labels' => array(
                'name'   => __('Type d\'evenement','agenda'),
                'all_items' => __('Tout les types d\'evenement','agenda'),
                'new_item' => __('Ajouter un type d\'evenement','agenda'),
                'edit_item' => __('Modifier type d\'evenement','agenda'),
                'view_item' => __('Voir le type d\'evenement','agenda'),
                'update_item' => __('Mettre a jour le type d\'evenement','agenda'),
                'search_items' => __('Chercher le type d\'evenement','agenda'),
                'choose_from_most_use' => __('Rechercher par type d\'evenement les plus populaires','agenda'),
                'popular_items' => __('Evenement populaire','agenda'),
                'not_found' => __('Aucun evenement trouvé', 'agenda')
            )   
        )
        
    );
}