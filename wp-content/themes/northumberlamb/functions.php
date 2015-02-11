<?php
// ------ PRE FUNCTION FOR DEBUGGING ------
function pre($a) { echo '<pre>'; print_r($a); echo '</pre>'; }
// ------ GLOBAL SMARTY FUNCTION ------
function wp_smarty(){

     global $wp_smarty;
    if(!$wp_smarty){

        $wp_smarty = smarty_get_instance();

        $options = get_fields('options');
        $wp_smarty->assign('options', $options);

        global $post;
        if ($post) {

            setup_postdata($post);

            // main-menu
            $header_menu = wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'echo' => false,
                'menu_id' => 'header-menu'
            ));

            $wp_smarty->assign('menu', $header_menu );

            $wp_smarty->assign('title', $post->post_title);
            $wp_smarty->assign('content', apply_filters('the_content', get_the_content() ));
            //$wp_smarty->assign('here', here());
        }
    }

    return $wp_smarty;
}
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

// ------ FETCH FUNCTIONS ------
function fetch_page($page) {

    $q = new WP_Query(array( 'post_type' => 'page', 'name' => $page ));
    $posts = $q->posts;
    return fetch($posts[0]);
     
}
function fetch($post) {
    
    setup_postdata($post);

    $fields = array_merge( (array)$post, (array)get_fields($post->ID) );
  
    return $fields;
}