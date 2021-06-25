<?php
/**
* Exécuter la fonction coulisse_theme_support à l'activation du theme :
* https://developer.wordpress.org/reference/functions/add_action/
*/
add_action('after_setup_theme','coulisse_theme_support');

function coulisse_theme_support(){
    //Activer les images a la une
    add_theme_support('post-thumbnails');
    //Activer le bouton de style dark
    add_theme_support('dark-editor-style');
    // Activer le titre automatiquement 
    add_theme_support('title-tag');
    // Activer la possibiltié de mettre un logo
    add_theme_support('custom-logo', array(

        'height'      => 10,
        'width'       => 40,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    ));
    add_theme_support('html5',array(

        'search-form',
        'contact-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',

    ));
    //Activer les post-formats
    add_theme_support('post-formats',array(
        'aside',
        'gallery',
        'link',
        'imagequote',
        'status',
        'video',
        'audio',
        'chat'
    ));
}