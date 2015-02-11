<?php
/*
Template Name: Recipes Page
*/
$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
	'page' => fetch_page('recipes'),
);

$smarty->assign('content', $content);

get_header();
$smarty->display('recipes/content.tpl');
get_footer();