<?php


/**
 * Add custom taxonomy for angebote
 */


function add_angebote_taxonomy() {
  // Add new "Angebote" taxonomy to Posts
  register_taxonomy('domi_angebotstyp_tax', 'domi_angebot_cpt', array(
    'hierarchical' => true,
    'labels' => array(
      'name' => _x( 'Angebotstyp', 'taxonomy general name' ),
      'singular_name' => _x( 'Angebotstyp', 'taxonomy singular name' ),
      'search_items' =>  __( 'Suche Angebotstyp' ),
      'all_items' => __( 'Alle Angebotstypen' ),
      'parent_item' => __( 'Eltern Angebotstyp' ),
      'parent_item_colon' => __( 'Eltern Angebotstyp:' ),
      'edit_item' => __( 'Bearbeite Angebotstyp' ),
      'update_item' => __( 'Aktualisiere Angebotstyp' ),
      'add_new_item' => __( 'Neuen Angebotstyp hinzufügen' ),
      'new_item_name' => __( 'Neuer Name für Angebotstyp ' ),
      'menu_name' => __( 'Angebotstyp' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'angebote', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_angebote_taxonomy', 0 );
?>

