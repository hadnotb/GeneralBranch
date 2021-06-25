<?php

/**
 * TDWM : Requêtes personalisées
 * https://developer.wordpress.org/reference/classes/wp_query/
 *
 *
 * @package WordPress
 * @subpackage TDWM
 * @since TDWM 1.0.0
 */

/**
 *  Modifier la requête par défaut : 
 *    -> de la page d'accueil
 *    -> de la taxonomie type


 *  https://developer.wordpress.org/reference/hooks/pre_get_posts/
 * 
 *  Lister les événements à venir par ordre de date de début ascendante 
 *  (le prochain en premier )
 * 
 *  Traduction de la requête : 
 * 
 *  SELECT * FROM wp_posts 
 *  WHERE 
 *    post_type = 'event'
 *    AND start_date >= (date du jour) 
 *  ORDER BY start_date ASC 
 *   
 */
add_action( 'pre_get_posts', 'tdmw_query_events' );
function tdmw_query_events( $query ){


    if( is_home() && !is_front_page()){
      return;
    }
    if (  
        $query->is_main_query()
        && ( $query->is_home() || $query->is_tax('type-event') )
    ) {

      // La boucle affiche les custom event et non plus les posts
      $query->set( 'post_type', 'event' );

      // Critère de sélection sur les meta-keys 
      $query->set( 'meta_query', array(
        array(
          'key'        => 'start_date',
          'compare'    => '>=',
          // Nota : ACF stocke les dates au format Ymd (YYYYMMDD) dans la base
          'value'    => date('Ymd'),
        ),
      ));

      // Order 
      $query->set( 'meta_key', 'start_date' );
      $query->set( 'orderby', 'meta_value_num' );
      $query->set( 'order', 'ASC' );

    }
}