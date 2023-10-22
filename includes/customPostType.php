<?php


function domi_angebot_cpt() {
    register_post_type('domi_angebot_cpt',
        array(
            'labels'      => array(
                'name'               => _x('Angebote', 'General name', 'wptheme.smartfarming'),
                'singular_name'      => _x('Angebot', 'Singular name', 'wptheme.smartfarming'),
                'menu_name'          => _x('Angebote', 'Menu name', 'wptheme.smartfarming'),
                'parent_item_colon'  => _x('Übergeordnetes Angebot', 'Parent item with colon', 'wptheme.smartfarming'),
                'all_items'          => _x('Alle Angebote anzeigen', 'All items', 'wptheme.smartfarming'),
                'view_item'          => _x('Angebot anzeigen', 'View item', 'wptheme.smartfarming'),
                'add_new_item'       => _x('Angebot hinzufügen', 'Add new item', 'wptheme.smartfarming'),
                'add_new'            => _x('Angebot hinzufügen', 'Add new', 'wptheme.smartfarming'),
                'edit_item'          => _x('Angebot bearbeiten', 'Edit item', 'wptheme.smartfarming'),
                'update_item'        => _x('Angebot aktualisieren', 'Update item', 'wptheme.smartfarming'),
                'search_items'       => _x('Teammember suchen', 'Search items', 'wptheme.smartfarming'),
                'not_found'          => _x('Keine Angebote gefunden.', 'Not found', 'wptheme.smartfarming'),
                'not_found_in_trash' => _x('Keine Angebote im Papierkorb gefunden.', 'Not found in trash', 'wptheme.smartfarming'),
            ),
            'description'         => _x('Angebot Informationen', 'Description', 'wptheme.fgchilis'),
            'supports'            => ['title', 'thumbnail', 'editor'],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'rewrite'             => false,
            'menu_icon'           => 'dashicons-heart',
        )
    );
}
add_action('init', 'domi_angebot_cpt');
?>