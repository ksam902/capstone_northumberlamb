<?php
/*
Template Name: Consumers Page
*/
$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
	'page' => fetch_page('consumers'),
);

$smarty->assign('content', $content);

get_header();
$smarty->display('consumers/content.tpl');
get_footer();