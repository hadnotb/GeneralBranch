<?php

add_action('wp_enqueue_scripts', 'theme_coulisse_register_styles');

function theme_coulisse_register_styles(){
    //Déclarer le chargement de normalize.css
    wp_register_style(
        //Nom donné à la déclaration
        'normalize',
        //Chemin de la feuille de style
        get_template_directory_uri() . '/css/normalize.css',
        //Dépendance éventuelle (1 ligne par déclaration)
        array(),
        //Numéro de version
        '8.0.1'
    );

    //Faire passer la déclaration à wp_head()
    wp_enqueue_style('normalize');
}