<?php

add_action( 'init', 'create_post_type' );

function create_post_type() {

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
};