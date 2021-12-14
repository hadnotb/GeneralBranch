<?php
function mk_menus_theme() {
	register_nav_menus(
		array(
			'principal' => 'Menu principal',
			'secondaire' => 'Menu Secondaire'
			)
		);
}
add_action( 'after_setup_theme' , 'mk_menus_theme' );