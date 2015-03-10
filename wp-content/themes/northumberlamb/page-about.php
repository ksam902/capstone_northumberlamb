<?php
/*
Template Name: About Page
*/
$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
    'page' => fetch_page('about'),
);

$smarty->assign('content', $content);

get_header();
$smarty->display('about/content.tpl');
get_footer();