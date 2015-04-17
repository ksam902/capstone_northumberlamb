<?php
/*
Template Name: 404 Page
*/

$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
    'page' => fetch_page('Home'),
);

$smarty->assign('content', $content);

get_header();
$smarty->display('404.tpl');
get_footer();