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

// ------ END FETCH FUNCTIONS ------
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
    //$next_id = $_POST['next_id'];
    $next_id = 63;
    $count = $_POST['count'];
    $next = false;
    //$p = fetch($next_id);
    $posts = array();
    $next_post = false;

    pre($id . " : " . $count );

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

//------------------------------------------------------------------- Submit Shipper Form
if (isset($_POST['shipperFormSubmit'])) {

    $txtNameSF = htmlentities($_POST['txtNameSF']);
    $txtFarmNameSF = htmlentities($_POST['txtFarmNameSF']);
    $txtAddressSF = htmlentities($_POST['txtAddressSF']);
    $txtPostalCodeSF = htmlentities($_POST['txtPostalCodeSF']);
    $txtHomePhoneSF = htmlentities($_POST['txtHomePhoneSF']);
    $txtCellPhoneSF = htmlentities($_POST['txtCellPhoneSF']);
    $txtFlockSizeSF = htmlentities($_POST['txtFlockSizeSF']);
    $rdoLambingPracticeSF = htmlentities($_POST['rdoLambingPracticeSF']);
    $rdoReadyToShipSF = htmlentities($_POST['rdoReadyToShipSF']);
    $txtNumOfLambsSF = htmlentities($_POST['txtNumOfLambsSF']);
    $drpMoreLambsSF = htmlentities($_POST['drpMoreLambsSF']);
    $txtCommentsSF = htmlentities($_POST['txtCommentsSF']);
    $txtReferenceNameSF = htmlentities($_POST['txtReferenceNameSF']);
    $txtReferencePhoneNumberSF = htmlentities($_POST['txtReferencePhoneNumberSF']);

//    $txtNameSF = "";
//    $txtFarmNameSF = "";
//    $txtAddressSF = "";
//    $txtPostalCodeSF = "";
//    $txtHomePhoneSF = "";
//    $txtCellPhoneSF = "";
//    $txtFlockSizeSF = "";
//    $rdoLambingPracticeSF = "";
//    $rdoReadyToShipSF = "";
//    $txtNumOfLambsSF = "";
//    $drpMoreLambsSF = "";
//    $txtCommentsSF = "";
//    $txtReferenceNameSF = "";
//    $txtReferencePhoneNumberSF = "";
//
//    $errorMsg = "";
//    $validate = true;
//
//// check for input
//// first name
//    if ($_POST['txtNameSF'] !== "") {
//        $txtNameSF = $_POST['txtNameSF'];
//        // check for correct name format
//        if (!preg_match("/^[a-zA-Z\\- ]{1,30}$/", $txtNameSF)) {
//            $errorMsg .= "First Name: Only letters, hyphens, and white space allowed. Max 30 characters.<br>";
//            $validate = false;
//        }
//    } else {
//        $errorMsg .= "First Name: You must enter a first name.<br>";
//        $validate = false;
//    }
//// farm name
//    if ($_POST['txtFarmNameSF'] !== "") {
//        $txtFarmNameSF = $_POST['txtFarmNameSF'];
//        // check for correct name format
//        if (!preg_match("/^[a-zA-Z\\- ]{1,50}$/", $txtFarmNameSF)) {
//            $errorMsg .= "First Name: Only letters, hyphens, and white space allowed. Max 50 characters.<br>";
//            $validate = false;
//        }
//    }
//// address
//    if ($_POST['txtAddressSF'] !== "") {
//        $txtAddressSF = $_POST['txtAddressSF'];
//        // check for correct name format
//        if (!preg_match("/^[a-zA-Z0-9.\\-# ]{1,50}$/", $txtAddressSF)) {
//            $errorMsg .= "Address is not in a valid format.<br>";
//            $validate = false;
//        }
//    } else {
//        $errorMsg .= "You must enter an address.<br>";
//        $validate = false;
//    }
//// postal code
//    if ($_POST['txtPostalCodeSF'] !== "") {
//        $txtPostalCodeSF = $_POST['txtPostalCodeSF'];
//        // check for correct name format
//        if (!preg_match("/[a-zA-Z][0-9][a-zA-Z](-| |)[0-9][a-zA-Z][0-9]/", $txtPostalCodeSF)) {
//            $errorMsg .= "Postal code is not in a valid format.<br>";
//            $validate = false;
//        }
//    } else {
//        $errorMsg .= "You must enter a postal code.<br>";
//        $validate = false;
//    }
//// home phone
//    if ($_POST['txtHomePhoneSF'] !== "") {
//        $txtHomePhoneSF = $_POST['txtHomePhoneSF'];
//        // check for correct name format
//        if (!preg_match("/([2-9]([02-9]\\d|1[02-9])\\)|[2-9]([02-9]\\d|1[02-9]))-?[2-9]([02-9]\\d|1[02-9])-?\\d{4}$/", $txtHomePhoneSF)) {
//            $errorMsg .= "Home phone number is not in a valid format.<br>";
//            $validate = false;
//        }
//    }
//// cell phone
//    if ($_POST['txtCellPhoneSF'] !== "") {
//        $txtCellPhoneSF = $_POST['txtCellPhoneSF'];
//        // check for correct name format
//        if (!preg_match("/([2-9]([02-9]\\d|1[02-9])\\)|[2-9]([02-9]\\d|1[02-9]))-?[2-9]([02-9]\\d|1[02-9])-?\\d{4}$/", $txtCellPhoneSF)) {
//            $errorMsg .= "Cell phone number is not in a valid format.<br>";
//            $validate = false;
//        }
//    }
//// flock size
//    if ($_POST['txtFlockSizeSF'] !== "") {
//        $txtFlockSizeSF = $_POST['txtFlockSizeSF'];
//        // check for correct name format
//        if (!preg_match("/[0-9]{0,10}/", $txtFlockSizeSF)) {
//            $errorMsg .= "Flock size is not in a valid format.<br>";
//            $validate = false;
//        }
//    } else {
//        $errorMsg .= "You must enter a flock size.<br>";
//        $validate = false;
//    }
//// lambing practice
//    if (isset($_POST['rdoLambingPracticeSF'])) {
//        $rdoLambingPracticeSF = $_POST['rdoLambingPracticeSF'];
//    } else {
//        $errorMsg .= "You must choose a lambing practice.<br>";
//        $validate = false;
//    }
//// lambs ready to ship
//    if (isset($_POST['rdoReadyToShipSF'])) {
//        $rdoReadyToShipSF = $_POST['rdoReadyToShipSF'];
//    } else {
//        $errorMsg .= "You must select whether you have lambs to ship.<br>";
//        $validate = false;
//    }
//// number of lambs ready to ship
//    if ($_POST['txtNumOfLambsSF'] !== "") {
//        $txtNumOfLambsSF = $_POST['txtNumOfLambsSF'];
//        // check for correct name format
//        if (!preg_match("/[0-9]{0,10}/", $txtNumOfLambsSF)) {
//            $errorMsg .= "Number of lambs is not in a valid format.<br>";
//            $validate = false;
//        }
//    }
//// expecting lambs
//    if (isset($_POST['drpMoreLambsSF'])) {
//        $drpMoreLambsSF = $_POST['drpMoreLambsSF'];
//    } else {
//        $errorMsg .= "Please select a drop down item<br>";
//        $validate = false;
//    }
//// additional comments
//    if ($_POST['txtCommentsSF'] !== "") {
//        $txtCommentsSF = $_POST['txtCommentsSF'];
//        // check for correct name format
//        if (!preg_match("/.*/", $txtCommentsSF)) {
//            $errorMsg .= "Comment is not in a valid format.<br>";
//            $validate = false;
//        }
//    }
//// reference name
//    if ($_POST['txtReferenceNameSF'] !== "") {
//        $txtReferenceNameSF = $_POST['txtReferenceNameSF'];
//        // check for correct name format
//        if (!preg_match("/^[a-zA-Z\\- ]{1,30}$/", $txtReferenceNameSF)) {
//            $errorMsg .= "Reference Name: Only letters, hyphens, and white space allowed. Max 25 characters.<br>";
//            $validate = false;
//        }
//    }
//// reference phone
//    if ($_POST['txtReferencePhoneNumberSF'] !== "") {
//        $txtReferencePhoneNumberSF = $_POST['txtReferencePhoneNumberSF'];
//        // check for correct name format
//        if (!preg_match("/([2-9]([02-9]\\d|1[02-9])\\)|[2-9]([02-9]\\d|1[02-9]))-?[2-9]([02-9]\\d|1[02-9])-?\\d{4}$/", $txtReferencePhoneNumberSF)) {
//            $errorMsg .= "Home phone number is not in a valid format.<br>";
//            $validate = false;
//        }
//    }

    //if ($validate) {

    $msg = "<table border='1'>
  <tr>
    <th colspan=\"2\">NorthumberLamb Shipper Application<br></th>
  </tr>
  <tr>
    <td>Name<br></td>
    <td>$txtNameSF</td>
  </tr>
  <tr>
    <td>Farm Name<br></td>
    <td>$txtFarmNameSF</td>
  </tr>
  <tr>
    <td>Address</td>
    <td>$txtAddressSF</td>
  </tr>
  <tr>
    <td>Postal Code<br></td>
    <td>$txtPostalCodeSF</td>
  </tr>
  <tr>
    <td>Home Phone<br></td>
    <td>$txtHomePhoneSF</td>
  </tr>
  <tr>
    <td>Cell Phone<br></td>
    <td>$txtCellPhoneSF</td>
  </tr>
  <tr>
    <td>Flock Size<br></td>
    <td>$txtFlockSizeSF</td>
  </tr>
  <tr>
    <td>Lambing Practice<br></td>
    <td>$rdoLambingPracticeSF</td>
  </tr>
  <tr>
    <td>Do you currently have<br>lambs ready to ship?<br></td>
    <td>$rdoReadyToShipSF</td>
  </tr>
  <tr>
    <td>How Many?<br></td>
    <td>$txtNumOfLambsSF</td>
  </tr>
  <tr>
    <td>Are you expecting to have <br>more lambs ready in the next:<br></td>
    <td>$drpMoreLambsSF</td>
  </tr>
  <tr>
    <td>Comments<br></td>
    <td>$txtCommentsSF</td>
  </tr>
  <tr>
    <td>Reference Name<br></td>
    <td>$txtReferenceNameSF</td>
  </tr>
  <tr>
    <td>Reference Contact Number<br></td>
    <td>$txtReferencePhoneNumberSF</td>
  </tr>
</table>";

    $to = "cborden+northumberlamb@gmail.com";
    $subject = "subject";
    $mailheaders = "From:cborden+northumberlamb@gmail.com
			          <cborden+northumberlamb@gmail.com>\n";
    $mailheaders .= "Reply-To: cborden+northumberlamb@gmail.com\n";
    //send the mail
    mail($to, $subject, $msg, $mailheaders);
    header("Location: shippers");
    exit();
//    } else {
//        echo $errorMsg;
//    }


}

//------------------------------------------------------------------- Submit Member Form
if (isset($_POST['memberFormSubmit'])) {
    $txtFirstNameMF = htmlentities($_POST['txtFirstNameMF']);
    $txtLastNameMF = htmlentities($_POST['txtLastNameMF']);
    $txtAddressSFMF = htmlentities($_POST['txtAddressSFMF']);
    $txtPostalCodeSFMF = htmlentities($_POST['txtPostalCodeSFMF']);
    $txtPhoneMF = htmlentities($_POST['txtPhoneMF']);

    $msg = "<table border='1'>
  <tr>
    <th colspan=\"2\">NorthumberLamb Shipper Application<br></th>
  </tr>
  <tr>
    <td>First Name<br></td>
    <td>$txtFirstNameMF</td>
  </tr>
  <tr>
    <td>Last Name<br></td>
    <td>$txtLastNameMF</td>
  </tr>
  <tr>
    <td>Address</td>
    <td>$txtAddressSFMF</td>
  </tr>
  <tr>
    <td>Postal Code<br></td>
    <td>$txtPostalCodeSFMF</td>
  </tr>
  <tr>
    <td>Phone<br></td>
    <td>$txtPhoneMF</td>
  </tr>
</table>";
    $to = "cborden+northumberlamb@gmail.com";
    $subject = "NorthumberLamb Membership Application";
    $mailheaders = "From:cborden+northumberlamb@gmail.com
			          <cborden+northumberlamb@gmail.com>\n";
    $mailheaders .= "Reply-To: cborden+northumberlamb@gmail.com\n";
    //send the mail
    mail($to, $subject, $msg, $mailheaders);
    header("Location: shippers");
    exit();

}

//------------------------------------------------------------------- Submit Contact Form
if (isset($_POST['contactSubmit'])) {
    $contactName = htmlentities($_POST['contactName']);
    $contactPhone = htmlentities($_POST['contactPhone']);
    $contactEmail = htmlentities($_POST['contactEmail']);
    $contactMessage = htmlentities($_POST['contactMessage']);

    $msg = "<table border='1'>
  <tr>
    <th colspan=\"2\">NorthumberLamb Contact Form<br></th>
  </tr>
  <tr>
    <td>Name<br></td>
    <td>$contactName</td>
  </tr>
  <tr>
    <td>Phone<br></td>
    <td>$contactPhone</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>$contactEmail</td>
  </tr>
  <tr>
    <td>Message<br></td>
    <td>$contactMessage</td>
  </tr>
</table>";
    $to = "cborden+northumberlamb@gmail.com";
    $subject = "NorthumberLamb Contact Form";
    $mailheaders = "From:cborden+northumberlamb@gmail.com
			          <cborden+northumberlamb@gmail.com>\n";
    $mailheaders .= "Reply-To: cborden+northumberlamb@gmail.com\n";
    //send the mail
    //mail($to, $subject, $msg, $mailheaders);
    wp_mail($to, $subject, $msg, $mailheaders);
    header("Location: contact");
    exit();
}