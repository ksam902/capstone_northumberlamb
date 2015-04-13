<?php
define('JS_CSS_VER', '0.0.1');
define('DESCRIPTION_LENGTH', 40);
function quick_slug($s) { return sanitize_title(str_replace('/','-',$s)); }
// ------ ADDING STYLESHEETS ------
$stylesheets = array(

    'all'=>array(
        'bootstrap-theme.css',
        'bootstrap-theme.css.map',
        'bootstrap-theme.min.css',
        'bootstrap.css',
        'bootstrap.css.map',
        'bootstrap.min.css',
        'northumberlamb.css',
        'font-awesome.min.css',
    ),

    'lt_ie_9'=>array(),

    'gte_ie_9'=>array(),
);
add_action('wp_enqueue_scripts', 'add_stylesheets');
function add_stylesheets() {

    global $wp_styles;
    global $stylesheets;
    $css = array();

    foreach ( $stylesheets as $st ) {
    foreach ( $st as $s ) {

        $slug = quick_slug($s);
        wp_enqueue_style($slug, get_bloginfo('stylesheet_directory').'/css/'.$s, $css, JS_CSS_VER);
        array_push($css, $slug);
    } }

    foreach ($stylesheets['lt_ie_9'] as $s) {

        $wp_styles->add_data( quick_slug($s), 'conditional', 'lt IE 9' );
    }

    foreach ($stylesheets['gte_ie_9'] as $s) {

        $wp_styles->add_data( quick_slug($s), 'conditional', 'gte IE 9' );
    }

}
// ------ ADDING JAVASCRIPTS ------
$javascripts = array(

    'head'=>array(

        'all'=>array(
        ),

        'lt_ie_9'=>array(),

        'gte_ie_9'=>array(),
    ),

    'body'=>array(

        'all'=>array(
            'jquery.js',
            'bootstrap.js',
            'bootstrap.min.js',
            'npm.js',
            'northumberlamb.js',
            'jquery.rwdImageMaps.js',
            'jquery.rwdImageMaps.min.js',
        ),

        'lt_ie_9'=>array(),

        'gte_ie_9'=>array(),
    ),
);
add_action('wp_enqueue_scripts', 'add_javascripts');
function add_javascripts(){

    global $wp_scripts;
    global $javascripts;
    $js = array();

    foreach ($javascripts['head'] as $ja) {
    foreach ($ja as $s) {

        $slug = quick_slug($s);
        wp_enqueue_script($slug, get_bloginfo('stylesheet_directory').'/javascripts/'.$s, $js, JS_CSS_VER);
        array_push($js, $slug);
    } }

    foreach ($javascripts['body'] as $ja) {
    foreach ($ja as $s) {

        $slug = quick_slug($s);
        wp_enqueue_script($slug, get_bloginfo('stylesheet_directory').'/javascripts/'.$s, $js, JS_CSS_VER, true);
        array_push($js, $slug);
    } }

    foreach (array_merge($javascripts['head']['lt_ie_9'],$javascripts['body']['lt_ie_9']) as $s) {

        $wp_scripts->add_data( quick_slug($s), 'conditional', 'lt IE 9' );
    }

    foreach (array_merge($javascripts['head']['gte_ie_9'],$javascripts['body']['gte_ie_9']) as $s) {

        $wp_scripts->add_data( quick_slug($s), 'conditional', 'gte IE 9' );
    }
}
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
    // register_post_type( 'banner',
    //     array(
    //         'labels' => array(
    //             'name' => 'Banner',
    //             'singular_name' => '',
    //         ),
    //     'public' => true,
    //     'has_archive' => true,
    //     )
    // );
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
// ------ IMAGE RESIZING ------
add_image_size( 'banner', 640, 200, true );
add_image_size( 'recipe-modal', 450, 200, true );
add_image_size( 'recipe-list', 175, 125, true );
// ------ /IMAGE RESIZING ------
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
// custom admin login logo
function custom_login_logo() {
    echo '<style type="text/css">
    h1 a {
        background-image: url('.get_bloginfo('template_directory').'/images/black-logo.png) !important;
        width: 100% !important;
        background-size: 200px !important;
    }
    </style>';
}
add_action('login_head', 'custom_login_logo');

//------Recipes
add_action('wp_ajax_get_next_recipe', 'get_next_recipe');
add_action('wp_ajax_nopriv_get_next_recipe', 'get_next_recipe');

function get_next_recipe() {

    $id = $_POST['id'];
    $next_id = $_POST['next_id'];
    $count = $_POST['count'];
    $next = false;
    $p = fetch_by('post','time');
    $posts = array();
    $next_post = false;

    foreach ($p as $post) {
        pre($p);
    }
}

function load_custom_fonts($init) {

    $stylesheet_url = 'custom-fonts/custom-fonts.css';

    if(empty($init['content_css'])) {
        $init['content_css'] = $stylesheet_url;
    } else {
        $init['content_css'] = $init['content_css'].','.$stylesheet_url;
    }

    $font_formats = isset($init['font_formats']) ? $init['font_formats'] : 'Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';

    $custom_fonts = ';'.'Freestyle Script=freestyle script';

    $init['font_formats'] = $font_formats . $custom_fonts;

    return $init;
}
add_filter('tiny_mce_before_init', 'load_custom_fonts');

function load_custom_fonts_frontend() {

    echo '<link type="text/css" rel="stylesheet" href="custom-fonts/custom-fonts.css">';
}
add_action('wp_head', 'load_custom_fonts_frontend');
add_action('admin_head', 'load_custom_fonts_frontend');