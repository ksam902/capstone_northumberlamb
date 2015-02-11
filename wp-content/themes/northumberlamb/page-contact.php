<?php
/*
Template Name: Contact Page
*/
$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
	'page' => fetch_page('contact'),
);

$smarty->assign('content', $content);

get_header();
$smarty->display('contact/content.tpl');
get_footer();