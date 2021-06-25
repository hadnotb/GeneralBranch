<?php

add_action('init','theme_menus');
function theme_menus(){
    register_nav_menus( array(
        "header-menu" => __('Menu de la banniere','theme-coulisse'),
        "footer-menu" => __('Menu de pied de page','theme-coulisse')
    ));
}

/**
 * Ajouter un lien de connexion/déconnexion dans le menu principal 
 *  -> LES HOOKS WORDRESS 
 *  http://www.guillaumevoisin.fr/tips-tricks/bien-comprendre-et-utiliser-les-hooks-wordpress
 *
 * https://developer.wordpress.org/reference/hooks/wp_nav_menu_items/
 */

function tdwm_add_login_logout_link($items, $args) {
    if( $args->theme_location == 'footer-menu' ) {
        ob_start();
        wp_loginout('index.php');
        $loginout = ob_get_contents();
        ob_end_clean();
        $items .= '<li>'. $loginout .'</li>';
    }
    return $items;
}