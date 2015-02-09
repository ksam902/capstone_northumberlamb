<?php
// ------ MENUS ------
add_action( 'init', 'create_menus' );
function create_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
// ------ CUSTOM POST TYPES ------
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'banner',
        array(
            'labels' => array(
                'name' => 'Banner',
                'singular_name' => '',
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
    register_post_type( 'important-links',
        array(
            'labels' => array(
                'name' => 'Important Links',
                'singular_name' => 'Important Link',
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
    register_post_type( 'recipe',
        array(
            'labels' => array(
                'name' => 'Recipes',
                'singular_name' => 'Recipe',
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
     register_post_type( 'recipe-links',
        array(
            'labels' => array(
                'name' => 'Recipe Links',
                'singular_name' => 'Recipe Link',
            ),
        'public' => true,
        'has_archive' => true,
        )
    );
    register_post_type( 'clients',
        array(
            'labels' => array(
                'name' => 'Client',
                'singular_name' => 'Clients',
            ),
        'public' => true,
        'has_archive' => true,
        )
    );    
};