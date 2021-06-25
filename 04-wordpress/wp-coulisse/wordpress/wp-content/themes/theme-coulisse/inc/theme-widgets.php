<?php

add_action('widgets_init','theme_widgets_init');
function theme_widgets_init(){

    register_sidebar( array(

        'name' => __('Barre de widget de theme','theme-coulisse-lang' ),
        'id' =>'sidebar',
        'before_widget' =>'<div class="widget %2$s">',
        'before_widget' =>'</div>',
    ));
}