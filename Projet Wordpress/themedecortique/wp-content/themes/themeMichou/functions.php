<?php

function mk_css(){  
    echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/style.css">';
    echo '<link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">';
    }

add_action('wp_head', 'mk_css');

function mk_js(){  
    echo '
    <script src="'.get_template_directory_uri().'/assets/js/components.js"></script>';
    
}

add_action('wp_footer', 'mk_js');

function mk_menus_theme() {
	register_nav_menus(
		array(
			'principal' => 'Menu principal',
			'secondaire' => 'Menu Secondaire'
			)
		);
}
add_action( 'after_setup_theme' , 'mk_menus_theme' );